<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Carbon\Carbon;
use App\Models\Service;
use App\Models\User;
use App\Models\Photo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {      

        $todayAppointments = Appointment::whereDate('date', today())->get();
        $tomorrowAppointments = Appointment::whereDate('date', today()->addDay())->get();
        $customerCount = User::where('is_admin', 0)->count();
        $employeeCount = User::where('is_admin', 1)->count();
        $serviceCount = Service::count();
        $galleryCount = Photo::count();
        $upcomingAppointmentsCount = Appointment::whereDate('date', '>', today())
        ->orWhere(function ($query) {
            $query->whereDate('date', today())
                  ->whereTime('time', '>', now()->format('H:i:s'));
        })
        ->count();
    
        return view('auth.home', compact('todayAppointments', 'tomorrowAppointments','customerCount','employeeCount','serviceCount','galleryCount','upcomingAppointmentsCount'));
    }
    
    
}
