<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>Furnishop</title>
</head>
<body>
    @include('components/navbar')
    @include('components/hero')
    <div id="hero2" class="container">
        <div class="hero min-h-[70vh] mt-10">
            <div class="hero-content flex-col lg:flex-row">
              <img src="img/banner2.webp" class="w-1/2 rounded-lg shadow-2xl hidden md:block" />
              <div class="md:ml-20 md:mr-5">
                <h1 class="text-3xl md:mr-40 font-bold text-black">We Create Your Home More Aesthetic</h1>
                <p class="py-3 text-black">Furniture power is a software as service for multiperpose business management system.</p>
                <div class="flex text-black py-2">
                    <span class="text-xl">
                        <i class='bx bxs-check-circle' ></i>
                    </span>
                    <div class="ml-3">
                        <h1 class="font-bold mb-2">Valuation services</h1>
                        <p class="text-sm">Sometimes features require a short description, This can be detailed description</p>
                    </div>
                </div>
                <div class="flex text-black">
                    <span class="text-xl">
                        <i class='bx bxs-check-circle' ></i>
                    </span>
                    <div class="ml-3">
                        <h1 class="font-bold mb-2">Development of Furniture Models</h1>
                        <p class="text-sm">Sometimes features require a short description, This can be detailed description</p>
                    </div>
                </div>
              </div>
              <img src="img/banner2.webp" class="w-full rounded-lg shadow-2xl md:hidden" />
            </div>
          </div>
    </div>
    
    @include('components/menu')
    
    <div class="">
        <div class="hero h-96" style="background-image: url('img/lamp.jpg');">
            <div class="container hero" style="background-image: url('img/lamp.jpg');"></div>
            <div class="hero-overlay bg-opacity-30"></div>
            <div class="hero-content text-center text-neutral-content w-full">
                <div class="w-1/2 hidden xl:block"></div>
              <div class="xl:w-1/2 text-white xl:mx-60">
                <h1 class="mb-5 text-3xl font-bold">Get More Discount Off Your Order</h1>
                <p class="mb-5">Join our mailing list</p>
                <div class="flex justify-around">
                    <input type="text" placeholder="Your Email Address" class="input input-bordered xl:w-full w-48 sm:w-60 md:max-w-xs md:mr-5 bg-white text-black" />
                    <button class="btn text-white w">Shop Now</button>
                </div>

              </div>
            </div>
          </div>
    </div>
    @include('components/footer')
    
    <script src="js/home.js"></script>
    
</body>
</html>