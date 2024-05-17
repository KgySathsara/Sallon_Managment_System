@extends('layouts.app')

@section('content')

<div class="container">
        <h2>Appointments</h2>
        <a href="{{ route('appointments.create') }}" class="btn btn-primary">Create New Appointment</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->title }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                        <td>
                            <a href="{{ route('appointments.edit', $appointment->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('appointments.destroy', $appointment->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                @if(auth()->user()->is_admin == 1) 
                                <button type="submit" class="btn btn-danger">Delete</button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


