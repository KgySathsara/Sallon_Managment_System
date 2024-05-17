<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('img/browser.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body {
            overflow-x: hidden;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background: #ffffff;
            padding-top: 60px;
            z-index: 1000;
            transition: all 0.3s;
        }

        .sidebar .logo {
            text-align: center;
            margin-bottom: 30px;
        }

        .sidebar .logo img {
            max-width: 150px;
        }

        .sidebar a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 18px;
            color: black;
            display: block;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #575d63;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        .navbar {
            margin-left: 250px;
            transition: all 0.3s;
        }

        #wrapper {
            background: rgba(0, 0, 0, 0.4);
            color: #fff;
            border-radius: 10px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        }

        #button-33, #button-34 {
            /* ... button styles ... */
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
        }

        .input-box input::placeholder {
            color: #fff;
        }

        #btn {
            align: center;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                float: left;
                padding: 15px;
                width: 100%;
                text-align: left;
            }

            .content {
                margin-left: 0;
            }

            .navbar {
                margin-left: 0;
            }
        }

        @media (max-width: 576px) {
            .sidebar a {
                text-align: center;
                float: none;
            }
        }
    </style>
</head>
<body>
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- Additional Nav items if any -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile') }}">
                                        <div class="d-flex align-items-center">
                                            <span>{{ Auth::user()->name }}</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt mr-2 ml-3"></i> Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="sidebar">
            <div class="logo">
                <img src="{{ asset('assets/img/logo-pink.png') }}" alt="Logo"><span>SALOON SHEE</span>
            </div>
            <a href="{{ route('auth.home') }}"><i class="fas fa-home"></i> Home</a>
            <a href="{{ route('appointment.index') }}"><i class="fas fa-calendar-alt"></i> Appointments</a>
            <a href="{{ route('services.index') }}"><i class="fas fa-concierge-bell"></i> Services</a>
            <a href="{{ route('gallery.index') }}"><i class="fas fa-images"></i> Gallery</a>
            <a href="{{ route('reports.get') }}"><i class="fas fa-comment"></i> Reviews</a>
            
            @if(auth()->user()->is_admin == 1)
                <a href="{{ route('payment.index') }}"><i class="fas fa-dollar-sign"></i> Payment</a>
            @endif
        </div>

        <main class="py-4 content">
            @yield('content')
        </main>

        <footer class="footer pt-3">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col">
                        <div class="copyright text-center">
                            © <script>document.write(new Date().getFullYear())</script> Provided by <a href="#" class="font-weight-bold" target="_blank">Salon SEE</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Include the Bootstrap JS and Popper.js at the end of your HTML -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const addToBillButtons = document.querySelectorAll('.add-to-bill');
    const paymentBillBody = document.getElementById('payment-bill-body');
    const totalSpan = document.getElementById('total');
    const submitPaymentButton = document.getElementById('submit-payment');

    addToBillButtons.forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission behavior
            addToBill(button);
        });
    });

    function addToBill(button) {
        const serviceId = button.getAttribute('data-id');
        const title = button.getAttribute('data-title');
        const price = button.getAttribute('data-price');

        // Add service to payment bill
        const row = `
            <tr data-id="${serviceId}">
                <td>${title}</td>
                <td>${price}</td>
                <td>
                    <button class="btn btn-danger remove-from-bill" data-id="${serviceId}">Remove</button>
                </td>
            </tr>
        `;
        paymentBillBody.insertAdjacentHTML('beforeend', row);

        // Update total
        const currentTotal = parseFloat(totalSpan.textContent);
        const newTotal = currentTotal + parseFloat(price);
        totalSpan.textContent = newTotal.toFixed(2);
    }

    // Event delegation to handle removal of services from payment bill
    paymentBillBody.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-from-bill')) {
            const serviceId = event.target.getAttribute('data-id');
            const rowToRemove = document.querySelector(`#payment-bill-body tr[data-id="${serviceId}"]`);
            const priceToRemove = parseFloat(rowToRemove.children[1].textContent);
            rowToRemove.remove();

            // Update total
            const currentTotal = parseFloat(totalSpan.textContent);
            const newTotal = currentTotal - priceToRemove;
            totalSpan.textContent = newTotal.toFixed(2);
        }
    });

    // Prevent form submission on Enter key press
    document.addEventListener('keypress', function(event) {
        if (event.key === 'Enter') {
            event.preventDefault();
            return false;
        }
    });

    // Submit payment button click event
    submitPaymentButton.addEventListener('click', function() {
        // Prompt user for advanced value
        const advancedValue = prompt("Enter Advanced Value (if any):");
        
        // Gather additional details for payment
        const userId = "{{ auth()->id() }}"; // Assuming you're using Laravel's authentication
        const totalAmount = parseFloat(totalSpan.textContent);

        // Prepare data to send to backend
        const paymentData = {
            userId: userId,
            totalAmount: totalAmount,
            advancedValue: advancedValue,
            // You can include more details here if needed
        };

        // Example AJAX submission 
        fetch("{{ route('payment.submit') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-Token": "{{ csrf_token() }}"
            },
            body: JSON.stringify(paymentData)
        })
        .then(response => response.json())
        .then(data => {
            if (confirm(data.message)) { // Confirm submission before proceeding
                // Clear the payment bill table
                paymentBillBody.innerHTML = "";
                totalSpan.textContent = "0.00";
            }
        })
        .catch(error => console.error("Error:", error));
    });
});



</script>
</body>
</html>
