<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\DoctorAndSpecialist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class SpecialistController extends Controller
{
    public function specialist(Request $request){
        $request->validate([
            'specialists' => 'required'
        ]);

        if (DoctorAndSpecialist::where('doctor_id', auth()->user()->id)->count() > 0){
            DoctorAndSpecialist::where('doctor_id', auth()->user()->id)->delete();
        }
        try {
            foreach ($request->specialists as $specialist){
                $doctor_and_specialist = new DoctorAndSpecialist();
                $doctor_and_specialist->doctor_id = auth()->user()->id;
                $doctor_and_specialist->specialist_id = $specialist;
                $doctor_and_specialist->save();
            }
            return back()->withSuccess('Successfully updated');
        }catch (\Exception $exception){
            return back()->withErrors($exception->getMessage());
        }

    }
}
