<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Salon SHEE</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: url('https://tse2.mm.bing.net/th?id=OIP.5NK0MQn70cHGwANftUefqAHaD1&pid=Api&P=0&h=220') no-repeat center center fixed; /* Replace with your image URL */
      background-size: cover;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    .container {
      max-width: 400px;
      background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .form-header {
      margin-bottom: 20px;
      text-align: center;
    }
    .form-header h1 {
      margin: 0;
      font-size: 24px;
      font-weight: bold;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group input {
      width: 100%;
      padding: 10px;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    .form-group button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .form-group button:hover {
      background-color: #0056b3;
    }
    .form-group a {
      display: block;
      text-align: center;
      margin-top: 10px;
      color: #007bff;
      text-decoration: none;
    }
    .form-group a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="form-header">
      <h1>Register at Salon SHEE</h1>
    </div>
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <div class="form-group">
        <input id="name" placeholder="Enter Your Name" type="text"
               class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
               required autocomplete="name" autofocus>
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group">
        <input id="email" placeholder="Enter Your Email" type="email"
               class="form-control @error('email') is-invalid @enderror" name="email"
               value="{{ old('email') }}" required autocomplete="email">
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group">
        <input id="password" placeholder="Enter Your Password" type="password"
               class="form-control @error('password') is-invalid @enderror" name="password" required
               autocomplete="new-password">
        @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <div class="form-group">
        <input id="password-confirm" placeholder="Re-type Your Password" type="password"
               class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">
          {{ __('Register') }}
        </button>
      </div>

      <div class="form-group">
        <a href="/login">I already have an account, login now!</a>
      </div>
    </form>
  </div>

  <!-- Bootstrap JS and dependencies (Optional, for Bootstrap features like modals, etc.) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
