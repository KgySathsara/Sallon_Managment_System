@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Photo</h2>
    <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Choose Photo:</label>
            <input type="file" class="form-control-file" id="image" name="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
