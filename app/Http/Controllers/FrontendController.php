<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\DoctorAndSpecialist;
use App\Models\Medicine;
use App\Models\MedicineOrder;
use App\Models\MedicineOrderItem;
use App\Models\Specialist;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{

    //Index page
    public function index(){
        $medicines = Medicine::orderBy('id', 'desc')->paginate(12);
        $companies = Medicine::all()->groupBy('company');
        return view('frontend.index', compact('medicines', 'companies'));
    }

    //Add to card
    public function addToCart(Request $request){
        $request->validate([
            'medicine' => 'required|exists:medicines,id'
        ]);

        if (!Session::get('cart')){
            Session::put('cart', []);
        }

        try {
            $request->session()->push('cart', $request->medicine);
            return response()->json([
                'type' => 'success',
                'message' => 'Successfully add to cart',
                'cart' => Session::get('cart'),
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'danger',
                'message' => $exception->getMessage(),
            ]);
        }
    }

    //Details show
    public function medicine($slug){
        $medicine = Medicine::where('slug', $slug)->first();
        return view('frontend.medicine-details', compact('medicine'));
    }

    //Company wise
    public function company($name){
        if ($name == 'All'){
            $medicines = Medicine::orderBy('id', 'desc')->paginate(12);
        }else{
            $medicines = Medicine::where('company', $name)->orderBy('id', 'desc')->paginate(12);
        }
        $companies = Medicine::all()->groupBy('company');
        return view('frontend.index', compact('medicines', 'companies'));
    }

    //Doctor page
    public function doctor(){
        $doctors = User::where('type', 'Doctor')->paginate(12);
        return view('frontend.doctor', compact('doctors'));
    }

    //getMedicine for UI auto complete and search result
    public function getMedicine(Request $request){
        if($request->ajax()){
            $result = Medicine::where('name', 'LIKE', '%'. $request->search_data. '%')->orWhere('company', 'LIKE', '%'. $request->search_data. '%')->orderBy('id', 'desc')->get(); //->take(100)
            return response()->json($result);
        }else{
            $medicines = Medicine::where('name', 'LIKE', '%'. $request->search_data. '%')
                ->orWhere('company', 'LIKE', '%'. $request->search_data. '%')
                ->orderBy('id', 'desc')
                ->paginate(12);
            $companies = Medicine::all()->groupBy('company');
            return view('frontend.index', compact('medicines', 'companies'));
        }
    }

    //getSpecialist for UI auto complete and search result
    public function getSpecialist(Request $request){
        if($request->ajax()){
            $result = Specialist::where('name', 'LIKE', '%'. $request->search_data. '%')->orderBy('id', 'desc')->get(); //->take(100)
            return response()->json($result);
        }else{
            $request->validate([
                'search_data' => 'required|string|exists:specialists,name'
            ]);
            $specialist = Specialist::where('name', $request->search_data)->first();
            $doctors = DB::table('users')
                ->rightJoin('doctor_and_specialists', 'users.id', '=', 'doctor_and_specialists.doctor_id')
                ->where('specialist_id', $specialist->id)
                ->paginate(12);
            return view('frontend.doctor', compact('doctors'));
        }
    }

    //Doctor getAppointment
    public function getAppointment($doctor_id){
        $doctor = User::FindOrFail($doctor_id);
        return view('frontend.appointment', compact('doctor'));
    }

    //Doctor searchAppointment
    public function searchAppointment(Request $request, User $doctor){
        if($request->ajax()){
            $request->validate([
                'appointment_data' => 'required'
            ]);
            $day_of_week =  date('l', strtotime($request->appointment_data));
            $date = date('d-m-Y', strtotime($request->appointment_data));

            $appointments = Appointment::where('date', $date)
                ->whereIn('schedule_id', $doctor->schedules->where('day', $day_of_week)->pluck('id'))
                ->get();

            return response()->json([
                'schedules' => $doctor->schedules->where('day', $day_of_week),
                'appointments' => $appointments,
            ]);
        }else{
            return back()->withErrors('Only ajax request is accepted');
        }
    }

    public function requestAppointment(Request $request, User $doctor){
        if($request->ajax()){
            $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|string|max:14',
                'schedule' => 'required|exists:schedules,id',
                'appointment_data' => 'required'
            ]);

            if (Carbon::createFromFormat('d-m-Y', date('d-m-Y', strtotime($request->appointment_data)))->isPast()){
                return response()->json([
                    'type' => 'error',
                    'message' => 'Do not use today or previous date',
                ]);
            }

            $appointment = new Appointment();
            $appointment->schedule_id   =   $request->schedule;
            $appointment->date  =   date('d-m-Y', strtotime($request->appointment_data));
            $appointment->name  =   $request->name;
            $appointment->email =   $request->email;
            $appointment->phone =   $request->phone;
            try {
                $appointment->save();
                return response()->json([
                    'type' => 'success',
                    'message' => 'Successfully requested for appointment',
                ]);
            }catch (\Exception $exception){
                return response()->json([
                    'type' => 'error',
                    'message' => $exception->getMessage(),
                ]);
            }
        }else{
            return back()->withErrors('Only ajax request is accepted');
        }
    }




    //Card page
    public function cart(){
        if (!Session::get('cart')){
            Session::put('cart', []);
        }
        $carts = Session::get('cart');
        return view('frontend.cart', compact('carts'));
    }

    //Remove item from card
    public function removeCartItem(Request $request){
        $request->validate([
            'medicine' => 'required|exists:medicines,id'
        ]);

        if (!Session::get('cart')){
            Session::put('cart', []);
        }

        try {
            $old_carts = Session::get('cart');
            Session::put('cart', []);
            $execute = false;
            foreach ($old_carts as $medicine_id){
                if ($request->medicine == $medicine_id && $execute == false){
                    $execute = true;
                    continue;
                }
                $request->session()->push('cart', $medicine_id);
            }

            return response()->json([
                'type' => 'success',
                'message' => 'Successfully remove from cart',
                'cart' => Session::get('cart'),
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'danger',
                'message' => $exception->getMessage(),
            ]);
        }
    }
    //Order submit
    public function order(Request $request){
        $medicines = collect(Session::get('cart'));
        if (!$medicines->count() > 0){
            return back()->withErrors('Your cart is empty');
        }

        $request->validate([
           'name'=>'required|string',
           'phone'=>'required|string',
           'email'=>'required|email',
           'address'=>'required|string',
        ]);

        $order = new MedicineOrder();
        $order->name    =   $request->name;
        $order->phone   =   $request->phone;
        $order->email   =   $request->email;
        $order->address =   $request->address;
        $order->save();

        foreach ($medicines as $medicine){
            $order_item = new MedicineOrderItem();
            $order_item->medicine_id = $medicine;
            $order_item->order_id = $order->id;
            $order_item->save();
        }
        Session::put('cart', []);
        return back()->withSuccess('Successfully order completed');

    }
}
