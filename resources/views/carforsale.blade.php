@include('layouts.header')
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="mx-24 border-solid border-l-4 border-blue-600 px-4 font-semibold mt-10 text-lg">
    CARS FOR SALE
  </div>


 <div class="grid grid-cols-4 mx-24 mt-6">
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/bmw528i2.jpg') }}">
    <p class="font-bold text-lg">Bmw528I</p>
    <p class="font-bold text-lg text-blue-600">Ksh 5,799,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,000 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
    <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/bmw320i2.jpg') }}">
    <p class="font-bold text-lg">Bmw320I</p>
    <p class="font-bold text-lg text-blue-600">Ksh 6,199,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,800 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/mercedesbenze250.jpg') }}">
    <p class="font-bold text-lg">Mercedes</p>
    <p class="font-bold text-lg text-blue-600">Ksh 9,699,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,600 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/enfield.jpg') }}">
    <p class="font-bold text-lg">Royaleinfield</p>
    <p class="font-bold text-lg text-blue-600">Ksh 5,799,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>1,800 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
 </div>


 <div class="grid grid-cols-4 mx-24 mt-6">
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Bmw528I</p>
    <p class="font-bold text-lg text-blue-600">Ksh 5,799,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,000 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
    <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Bmw320I</p>
    <p class="font-bold text-lg text-blue-600">Ksh 6,199,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,800 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Mercedes</p>
    <p class="font-bold text-lg text-blue-600">Ksh 9,699,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,600 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Royaleinfield</p>
    <p class="font-bold text-lg text-blue-600">Ksh 5,799,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>1,800 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
 </div>


 <div class="grid grid-cols-4 mx-24 mt-6">
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Bmw528I</p>
    <p class="font-bold text-lg text-blue-600">Ksh 5,799,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,000 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
    <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Bmw320I</p>
    <p class="font-bold text-lg text-blue-600">Ksh 6,199,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,800 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Mercedes</p>
    <p class="font-bold text-lg text-blue-600">Ksh 9,699,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>2,600 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
  <div class="px-4">
    <img src="{{ asset('/front/assets/images/landroverrangeroversport.jpg') }}">
    <p class="font-bold text-lg">Royaleinfield</p>
    <p class="font-bold text-lg text-blue-600">Ksh 5,799,999</p>
    <div class="flex gap-x-4 font-semibold mt-2">
      <p>1,800 cc</p>
      <p>Automatic</p>
      <p>Petrol</p>
    </div>
    <div class="mt-6">
      <button class="border-2 border-solid border-blue-600 p-2 rounded-full">Order Now</button>
    </div>
  </div>
 </div>


</body>
</html>
@include('layouts.footer')