<!-- resources/views/services/index.blade.php -->

@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Services</h2>
    @if(auth()->user()->is_admin == 1) 
    <a href="{{ route('services.create') }}" class="btn btn-primary">Create New Service</a>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>Topic</th>
                <th>Image</th>
                <th>Description</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $service->topic }}</td>
                <td><img src="{{ asset('images/' . $service->image) }}" alt="Service Image" style="max-width: 100px;"></td>
                <td>{{ $service->description }}</td>
                <td>{{ $service->price }}</td>
                <td>
                @if(auth()->user()->is_admin == 1) 
                <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary">Edit</a>
@endif
                    <form method="POST" action="{{ route('services.destroy', $service->id) }}" style="display: inline;">
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
