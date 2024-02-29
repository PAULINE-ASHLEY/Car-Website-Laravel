<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
 <div class="bg-black p-4 grid grid-cols-2">
  <div><h1 class="text-blue-600 text-2xl font-bold px-20">ASH CAR</h1></div>
  <div>
    <ul class="text-white flex gap-x-6">
      <li><a href="{{ url('/') }}">Home</a></li>
      <li><a href="{{ url('/car-for-sale') }}">Car for Sale</a></li>
      <li><a href="{{ url('/contact-us') }}">Contact Us</a></li>
      <li><a href="{{ route('register') }}">Sign Up</a></li>
      <li><a href="{{ route('login') }}">Sign In</a></li>
    </ul>
  </div>
 </div>
</body>
</html>