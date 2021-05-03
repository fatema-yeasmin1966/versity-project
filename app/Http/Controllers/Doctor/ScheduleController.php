<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Auth::user()->schedules;
        return view('backend.doctor.schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.doctor.schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->day){
            return back()->withErrors('Select day of week');
        }

        $request->validate([
           'day' => 'required',
           'duration' => 'required|string',
           'quantity' => 'required|numeric',
           'place' => 'required|string',
           'description' => 'required|string|min:10',
        ]);
        foreach ($request->day as $day){
            $schedule = new Schedule();
            $schedule->doctor_id    = \auth()->user()->id;
            $schedule->duration     = $request->duration;
            $schedule->quantity     = $request->quantity;
            $schedule->day          = $day;
            $schedule->place        = $request->place;
            $schedule->description  = $request->description;
            $schedule->save();
        }
        return redirect()->route('doctor.schedule.index')->withSuccess('Successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedule $schedule)
    {
        return view('backend.doctor.schedule.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedule $schedule)
    {
        if ($schedule->doctor_id != auth()->user()->id){
            return back()->withErrors('You are not permitted');
        }
        if (!$request->day){
            return back()->withErrors('Select day of week');
        }

        $request->validate([
            'day' => 'required',
            'duration' => 'required|string',
            'quantity' => 'required|numeric',
            'place' => 'required|string',
            'description' => 'required|string|min:10',
        ]);
        $schedule->doctor_id    = \auth()->user()->id;
        $schedule->duration     = $request->duration;
        $schedule->quantity     = $request->quantity;
        $schedule->day          = $request->day;
        $schedule->place        = $request->place;
        $schedule->description  = $request->description;
        $schedule->save();
        return redirect()->back()->withSuccess('Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        if ($schedule->doctor_id != auth()->user()->id){
            return response()->json([
                'type' => 'error',
                'message' => 'You are not admitted'
            ]);
        }
        try {
            $schedule->delete();
            return response()->json([
                'type' => 'success',
                'message' => ''
            ]);
        }catch (\Exception $exception){
            return response()->json([
                'type' => 'error',
                'message' => $exception->getMessage()
            ]);
        }
    }
}
