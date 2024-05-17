<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <style>
        :root {
  --background-color: black;
  --text-color: hsl(0, 0%, 100%);
}
.wrapper {
  display: grid;
  place-content:start center;
  background-color: var(--background-color);
  min-height: 100vh;
  font-family: "Oswald", sans-serif;
  font-size: clamp(1.5rem, 1rem + 18vw, 15rem);
  font-weight: 700;
  text-transform: uppercase;
  color: var(--text-color);
}

.wrapper > div {
  grid-area: 1/1/-1/-1;
}
.top {
  clip-path: polygon(0% 0%, 100% 0%, 100% 48%, 0% 58%);
}
.bottom {
  clip-path: polygon(0% 60%, 100% 50%, 100% 100%, 0% 100%);
  color: transparent;
  background: -webkit-linear-gradient(177deg, black 53%, var(--text-color) 65%);
  background: linear-gradient(177deg, black 53%, var(--text-color) 65%);
  background-clip: text;
  -webkit-background-clip: text;
  transform: translateX(-0.02em);
}

        body {
  background: #000;
}

.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.rim {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 300px;
  height: 300px;
  border: 20px solid #000;
  border-radius: 50%;
  animation: shift-rim 8s infinite;
  z-index: 10;
}

.outer {
  width: 300px;
  height: 300px;
  background: linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(8,8,71,1) 100%);
  border: 10px solid #1A23F2;
  border-radius: 50%;
  box-sizing: border-box;
  filter: blur(2px);
  animation: shift 8s infinite;
  &::before {
    display: block;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 104%;
    height: 104%; 
    border: 1px solid #fff;
    box-sizing: border-box;
    border-radius: 50%;
    opacity: 1;
    filter: blur(2px);
  }
}

.inner {
  position: absolute;
  top: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 200px;
  height: 200px;
    background: linear-gradient(to bottom, rgba(8,8,71,1) 0%, rgba(0,0,0,1) 100%);
  border: 8px solid #1A23F2;
  border-radius: 50%;
  box-sizing: border-box;
  box-shadow: 0 10px 20px 10px #000;
  filter: blur(1px);
  animation: shift-inner 8s infinite;
    &::before {
    display: block;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    height: 100%; 
    border: 8px solid #000;
    box-sizing: border-box;
    border-radius: 50%;
    opacity: 1;
    filter: blur(5px);
  }
   &::after {
    display: block;
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 105%;
    height: 105%; 
    border: 1px solid #6AAEE9;
    box-sizing: border-box;
    border-radius: 50%;
    opacity: 1;
    filter: blur(3px);
  }
}

#clock {
  position: absolute;
  top: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 100%;
  height: 50px;
  color: #fff;
  font-family: 'Baloo Tammudu', cursive;
  font-size: 40px;
  text-align: center;
  text-shadow: 0 0 30px #8DCAED;
  animation: shift-clock 8s infinite;
}
.user {
    display: flex;
    justify-content: center;
    align-items: flex-end; /* Align items to the bottom */
    height: 100%;
  }
@keyframes shift {
  0% {
    height: 100px;
  }
  50% {
    height: 280px;
  }
  100% {
    height: 100px;
  }
}

@keyframes shift-rim {
  0% {
    top: 40%;
    height: 100px;
  }
  50% {
    top: 50%;
    height: 280px;
  }
  100% {
    top: 40%;
    height: 100px;
  }
}

@keyframes shift-inner {
  0% {
    top: -10px;
    height: 50px;
  }
  50% {
    top: 40px;
    height: 190px;
  }
  100% {
    top: -10px;
    height: 50px;
  }
}

@keyframes shift-clock {
  0% {
    top: -10px;
    transform: translateX(-50%) scaleY(.2);
  }
  50% {
    top: 100px;
    transform: translateX(-50%) scaleY(1);
  }
  100% {
    top: -10px;
    transform: translateX(-50%) scaleY(.2);
  }
}
    </style>
</head>
<body>
<section class="wrapper">
  <div class="top">Welcome</div>
  <div class="bottom" aria-hidden="true">Welcome</div>
</section>

<div class="container">
  <div class="rim"></div>
  <div class="outer"></div>
  <div class="inner">
  </div>
  <div id="clock"></div>
</div>
<div class="container user">
    <div class="row text-center">
        <div class="col-12">
            <h3 style="color: white; margin-bottom:150px;">Next Patient</h3>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
        @if(isset($firstAppointment))
            <h1 style="color: white; margin-bottom:100px;"><b>{{ $firstAppointment->name }}</b></h1>
            @else
            <h1 style="color: white; margin-bottom:100px;"><b>No appointments available.</b></h1>
@endif
        </div>
    </div>
</div>

<a class="dropdown-item" style="color: white;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
<script>
    (function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    m = checkTime(m);
    document.getElementById('clock').innerHTML =
    h + ":" + m;
    var t = setTimeout(startTime, 500);
})();

function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}
</script>
</body>
</html>