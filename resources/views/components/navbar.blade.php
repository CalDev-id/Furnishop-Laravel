<div class="container">
    <div id="header" class="container bg-transparent hidden md:block text-white">
        <div class="container navbar bg-transparent absolute z-10 -translate-x-10">
            <div class="flex-1">
                <a href="/" class="btn btn-ghost normal-case text-xl">Furnishop</a>
            </div>
            <div class="flex-none">
                <ul class="menu menu-horizontal p-0">
                    <li><a>Home</a></li>
                    <li><a>About</a></li>
                    <li tabindex="0">
                        <a>
                            Features
                            <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24">
                                <path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z" />
                            </svg>
                        </a>
                        <ul class="p-2 bg-base-100">
                            <li><a href="/dashboard">Tambah Menu</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </li>
                    @auth
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li><a href="/login">Login</a></li>
                    @endauth

                </ul>
            </div>
        </div>
    </div>
</div>



<div class="md:hidden w-full overflow-x-hidden">
    <div id="header2" class="navbar absolute z-50 w-full">
        <div class="navbar-start">
            <div class="dropdown">
                <label tabindex="0" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </label>
                <ul tabindex="0" class="menu menu-compact dropdown-content shadow bg-base-100 min-h-[90vh] mx-0">
                    <li class="py-10 px-10"><a>Home</a></li>
                    <li class="py-10 px-10"><a>About</a></li>
                    <li class="py-10 px-10"><a>Features</a></li>
                    @auth
                        <li class="py-10 px-10">
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit">
                                    Logout
                                </button>
                            </form>
                        </li>
                    @else
                        <li class="py-10 px-10"><a href="/login">Login</a></li>
                    @endauth
                </ul>
            </div>
        </div>
        <div class="navbar-center">
            <a href="/" class="btn btn-ghost normal-case text-xl">Furnishop</a>
        </div>
        <div class="navbar-end">
            <button class="btn btn-ghost btn-circle" onclick="location.href='/#menu';">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <button class="btn btn-ghost btn-circle" onclick="document.location.href='/dashboard'">
                <div class="indicator">
                    <img class="w-7 rounded-full shadow-lg" src="/img/blank.jpg" alt="">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" /></svg> --}}
                    <span class="badge badge-xs badge-primary indicator-item"></span>
                </div>
            </button>
        </div>
    </div>
</div>

<script src="js/home.js"></script>
