<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>Sign up</title>
</head>

<body>

    @include('components/navbar')

    <!-- component -->
    <div class="bg-no-repeat bg-cover bg-center relative"
        style="background-image: url('img/background.jpg');">
        <div class="absolute bg-gradient-to-b from-base-300 to-slate-900 opacity-75 inset-0 z-0"></div>
        <div class="min-h-screen flex flex-row mx-auto justify-center">
            <div class=" hidden flex-col lg:flex self-center p-10 sm:max-w-5xl xl:max-w-2xl  z-10">
                <div class="self-start lg:flex flex-col  text-white">
                    <img src="" class="mb-3">
                    <h1 class="mb-3 font-bold text-5xl">Hi ? Welcome Back</h1>
                    <p class="pr-3">Lorem ipsum is placeholder text commonly used in the graphic, print,
                        and publishing industries for previewing layouts and visual mockups</p>
                </div>
            </div>
            <div class="flex justify-center self-center  z-10 mt-16  md:mt-0">
                <div class="md:p-12 md:px-16 p-4 bg-white mx-auto rounded-2xl w-[95%] sm:w-full">
                    <div class="mb-4">
                        <h3 class="font-semibold text-2xl text-gray-800">Sign Up </h3>
                        <p class="text-gray-500">Sudah Punya Akun? <a href="/login" class="text-green-400">Login</a></p>
                    </div>
                    <form method="POST" action="/signup" class="space-y-5">
                        @csrf
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-700 tracking-wide">Nama Lengkap</label>
                            <input
                                class=" w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                                type="" placeholder="Yourname" name="name" required>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                            <input
                                class=" w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                                type="email" placeholder="mail@gmail.com" name="email" required>
                        </div>
                        <div class="space-y-2">
                            <label class="mb-5 text-sm font-medium text-gray-700 tracking-wide">
                                Password
                            </label>
                            <input
                                class="w-full content-center text-base px-4 py-2 border bg-white border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                                type="password" placeholder="Enter your password" name="password" required>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <input id="remember_me" name="remember_me" type="checkbox"
                                    class="h-4 w-4 bg-blue-500 focus:ring-blue-400 border-gray-300 rounded checked:bg-white">
                                <label for="remember_me" class="ml-2 block text-sm text-gray-800">
                                    Remember me
                                </label>
                            </div>
                            <div class="text-sm">
                                <a href="#" class="text-green-400 hover:text-green-500">
                                    Forgot your password?
                                </a>
                            </div>
                        </div>
                        <div>
                            <button type="submit" name="signup"
                                class="w-full flex justify-center bg-green-400  hover:bg-green-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-500">
                                Sign up
                            </button>
                        </div>
                    </form>
                    <div class="pt-5 text-center text-gray-400 text-xs">
                        <span>
                            Copyright © 2021-2022
                            <a href="https://codepen.io/uidesignhub" rel="" target="_blank" title="Ajimon"
                                class="text-green hover:text-green-500 ">Ical</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
