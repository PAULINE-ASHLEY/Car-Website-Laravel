<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="grid grid-cols-4 py-10 bg-black mt-10">
    <div class="px-4">
      <h1 class="text-lg font-semibold text-blue-600 mb-4">
        About Us
      </h1>
      <p class="text-white">It is an online system through which customers can view available cars and book cars.</p>
      <p class="text-white mt-4">© 2024 All Rights Reserved. Developed & Designed by PAULINE ONDIEK.</p>
    </div>
    <div class="px-4">
      <h1 class="text-lg font-semibold text-blue-600 mb-4">
        Navigation Bar
      </h1>
      <ul class="text-white">
        <li><a href="{{ route('login') }}">Home</a></li>
        <li><a href="{{ route('login') }}">Carlisting</a></li>
        <li><a href="{{ route('login') }}">Contact Us</a></li>
        <li><a href="{{ route('register') }}">Sign Up</a></li>
        <li><a href="{{ route('login') }}">Sign In</a></li>
      </ul>
    </div>
    <div class="px-4">
      <h1 class="text-lg font-semibold text-blue-600 mb-4">
        Brands on Ash Car
      </h1>
      <div class="grid grid-cols-2">
        <div>      
          <ul class="text-white">
          <li>Bmw528I</li>
          <li>Bmw320I</li>
          <li>Mercedes</li>
          <li>Royaleinfield</li>
          <li>Nissan</li>
          </ul>
        </div>
        <div>
          <ul class="text-white">
            <li>Range Rover</li>
            <li>Subaru</li>
            <li>Suzuki</li>
            <li>Tiguan</li>
            <li>Toyota</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-4">
      <h1 class="text-lg font-semibold text-blue-600 mb-4">
        Social Media
      </h1>
      <ul class="text-white">
        <li>Facebook-Ash Car Rental</li>
        <li>Snapchat-ASH-CAR-RENTAL</li>
        <li>Instagram-ASH_CAR_RENTAL</li>
        <li>Twitter-@AshCarRental001</li>
        <li>Youtube-Ash Car Rental</li>
      </ul>
    </div>
  </div>
</body>
</html>