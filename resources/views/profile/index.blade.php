<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profile</title>
    <link rel="icon" href="{{ asset('img/browser.png') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
    </style>
</head>

<body class="bg-gray-100">
    @extends('layouts.app')
    @section('content')
    
    <div class="container">
    @if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger alert-dismissible fade show position-fixed top-0 end-0" role="alert">
        {{ $error }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endforeach
@endif
<a href="{{ route('auth.home') }}">Go Home</a>

    <div class="row">
        <div class="col text-center">
            @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show position-fixed top-0 end-0" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
        <div class="row">

            <div class="col-md-11">
                <div class="row">

                    <div class="col-md-12">
                        <h1 class="text-center">{{ Auth::user()->name }}'s Profile</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="container">

                        <div class="row">
                            <div class="col-xl-4">

                                <form action="{{ route('updateProfilePicture') }}" method="POST"
                                    enctype="multipart/form-data" onsubmit="return validateFileSize()">
                                    @csrf


                                    <!-- <div class="card mb-4 mb-xl-0">
                                        <div class="card-header">Profile Picture</div>
                                        <div class="card-body text-center">
                                    
                                            @if(Auth::user()->profile_picture)
                                            <img src="{{ 'http://navicare.navicodes.com/storage/app/public/' . Auth::user()->profile_picture }}"
                                                alt="Profile Picture" class="mt-3 rounded-circle" style="max-width: 200px;">
                                            @endif 
                                            <label for="profile_picture" class="form-label">Profile Picture</label>
                                            <input type="file" class="form-control" id="profile_picture"
                                                name="profile_picture" accept=".jpg, .jpeg, .png, .gif">
                                            <small id="fileSizeError" class="text-danger"></small>
                                           
                                            <button type="submit" class="btn btn-primary">Update Profile
                                                Picture</button>
                                        </div>
                                    </div> -->

                                </form>
                            </div>


                            <!-- Account details card-->
                            <div class="col-xl-8">
                                <div class="card mb-4">
                                    <div class="card-header">Account Details</div>
                                    <div class="card-body">
                                        <form action="{{ route('updateUser') }}" method="POST">
                                            @csrf
                                            <!-- Form Group (username)-->
                                            <div class="mb-3">
                                                <label for="name" class="small mb-1">Name</label>
                                                <input type="text" class="form-control" id="name" name="name"
                                                    value="{{ Auth::user()->name }}">
                                            </div>

                                            <!-- Form Row-->
                                            <div class="mb-3">
                                                <label for="email" class="small mb-1">Email</label>
                                                <input type="text" class="form-control" id="email" name="email"
                                                    value="{{ Auth::user()->email }}" readonly>
                                            </div>
                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (organization name)-->
                                                <div class="col-md-6">
                                                    <label for="age" class="small mb-1" for="age">Age</label>
                                                    <input type="text" class="form-control" id="age" name="age" value="{{ Auth::user()->age }}">
                                                </div>
                                                <!-- Form Group (location)-->
                                                <div class="col-md-6">
                                                    <label for="number" class="small mb-1">Mobile Number</label>
                                                    <input type="number" class="form-control" id="number" name="number" value="{{ Auth::user()->number }}">
                                                </div>
                                            </div>
                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (organization name)-->
                                                <div class="col-md-6">
                                                    <label for="nic" class="small mb-1" >NIC number</label>
                                                    <input type="text" class="form-control" id="nic" name="nic" value="{{ Auth::user()->nic }}">                                                
                                                </div>
                                                <!-- Form Group (location)-->
                                                <div class="col-md-6">
                                                    <label for="id" class="small mb-1">Registeration Number</label>
                                                    <input type="text" class="form-control" id="mid" name="mid" value="{{ Auth::user()->mid }}">                                                
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control" id="id" name="id"
                                                value="{{ Auth::user()->id }}">
                                            <button type="submit" class="btn btn-primary">Update Profile
                                                Data</button>

                                        </form>
                                    </div>
                                </div>
                                <script>
                                    function validateFileSize() {
                                        var inputFile = document.getElementById('profile_picture');
                                        var fileSizeError = document.getElementById('fileSizeError');

                                        if (inputFile.files.length > 0) {
                                            var fileSize = inputFile.files[0].size; // in bytes

                                            // Check if the file size exceeds the limit (e.g., 2MB)
                                            var maxSize = 2 * 1024 * 1024; // 2 megabytes
                                            if (fileSize > maxSize) {
                                                fileSizeError.textContent = 'File size exceeds the limit (2MB)';
                                                return false; // Prevent form submission
                                            }
                                        }

                                        // Clear any previous error message
                                        fileSizeError.textContent = '';
                                        return true; // Allow form submission
                                    }

                                    document.addEventListener('DOMContentLoaded', function () {
  var alertElement = document.querySelector('.alert');

  if (alertElement) {
    setTimeout(function () {
      alertElement.style.transition = 'opacity 0.5s ease';
      alertElement.style.opacity = 0;
      setTimeout(function () {
        alertElement.remove();
      }, 500); // Adjust the delay if needed
    }, 3000); // Adjust the delay (in milliseconds) according to your needs
  }
});
                                </script>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

</body>

</html>