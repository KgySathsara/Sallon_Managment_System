@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Gallery</h2>
    @if(auth()->user()->is_admin == 1) 
    <a href="{{ route('gallery.create') }}" class="btn btn-primary my-2">Add Photo</a>
    @endif
    <div class="row">
        @foreach ($photos as $photo)
        <div class="col-md-3 mb-4">
            <img src="{{ asset('img/' . $photo->image) }}" class="img-fluid" alt="Gallery Photo">
            <form method="POST" action="{{ route('gallery.destroy', $photo->id) }}" class="mt-2">
                @csrf
                @method('DELETE')
                @if(auth()->user()->is_admin == 1) 
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                @endif
            </form>
        </div>
        @endforeach
    </div>
</div>
@endsection
