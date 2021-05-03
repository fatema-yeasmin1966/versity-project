<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $appointments = Appointment::whereIn('schedule_id', Auth::user()->schedules->pluck('id'))->get();
        return view('backend.doctor.dashboard.index', compact('appointments'));
    }
}
