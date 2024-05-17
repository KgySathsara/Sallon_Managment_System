<!-- resources/views/report/index.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Reports</h2>
    <a href="{{ route('reports.index') }}" class="btn btn-primary">Add New Reviews</a>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($report as $reports)
            <tr>
                <td>{{ $reports->name }}</td>
                <td>{{ $reports->email }}</td>
                <td>{{ $reports->subject }}</td>
                <td>{{ $reports->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
