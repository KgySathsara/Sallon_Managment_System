@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card card-custom" style="background-color: blue; color: white; border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="icon">
                        <i class="fas fa-chart-line fa-2x"></i>
                    </div>
                    <div class="data text-right">
                        <span style="display: block; font-size: 1.2em;">LKR.0.00</span>
                        <span style="display: block; font-size: 0.9em;">Booking Revenue For this month</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-custom" style="background-color: blue; color: white; border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="data text-right">
                        <span style="display: block; font-size: 1.2em;">{{$customerCount}}</span>
                        <span style="display: block; font-size: 0.9em;">Customers</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-custom" style="background-color: blue; color: white; border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="icon">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <div class="data text-right">
                        <span style="display: block; font-size: 1.2em;">{{$employeeCount}}</span>
                        <span style="display: block; font-size: 0.9em;">Employees</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-custom" style="background-color: blue; color: white; border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="icon">
                        <i class="fas fa-cogs fa-2x"></i>
                    </div>
                    <div class="data text-right">
                        <span style="display: block; font-size: 1.2em;">{{$serviceCount}}</span>
                        <span style="display: block; font-size: 0.9em;">Services</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-custom" style="background-color: blue; color: white; border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="icon">
                        <i class="far fa-calendar-alt fa-2x"></i>
                    </div>
                    <div class="data text-right">
                        <span style="display: block; font-size: 1.2em;">{{$upcomingAppointmentsCount}}</span>
                        <span style="display: block; font-size: 0.9em;">Upcoming Appointments</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-custom" style="background-color: blue; color: white; border-radius: 15px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div class="icon">
                        <i class="far fa-images fa-2x"></i>
                    </div>
                    <div class="data text-right">
                        <span style="display: block; font-size: 1.2em;">{{$galleryCount}}</span>
                        <span style="display: block; font-size: 0.9em;">Gallery</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <h2>Today's Appointments</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Done</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Iterate through today's appointments -->
                    @foreach($todayAppointments as $appointment)
                    <tr>
                        <td>{{ $appointment->time }}</td>
                        <td>{{ $appointment->title }}</td>
                        <td>yes</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-6 mb-4">
            <h2>Tomorrow's Schedule</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Time</th>
                        <th>Name</th>
                        <th>Done</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Iterate through tomorrow's appointments -->
                    @foreach($tomorrowAppointments as $appointment)
                    <tr>
                        <td>{{ $appointment->time }}</td>
                        <td>{{ $appointment->title }}</td>
                        <td>no</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
