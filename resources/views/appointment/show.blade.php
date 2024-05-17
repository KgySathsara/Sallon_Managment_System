<!-- resources/views/appointments/show.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Appointment Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Title: {{ $appointment->title }}</h5>
            <p class="card-text">Date: {{ $appointment->date }}</p>
            <p class="card-text">Time: {{ $appointment->time }}</p>
        </div>
    </div>
    <a href="{{ route('appointments.index') }}" class="btn btn-primary mt-3">Back to Appointments</a>
</div>

@endsection
