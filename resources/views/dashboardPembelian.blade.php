<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
</head>

<body>
    @include('components/navbar2')

    <div class="container pt-16 md:pt-28 mb-20">

        @if (session()->has('success'))
            <div class="alert alert-success shadow-lg mb-5">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-4 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
            </div>
        @endif

        <div class="md:flex justify-between">
            <div id="profile" class="md:w-1/3 md:p-5 md:border md:h-fit md:rounded-2xl">
                <div class="mb-4 flex">
                    <img class="rounded-full w-20 mr-3" src="/img/ical.jpg" alt="">
                    <div class="self-center">
                        <h1 class="text-slate-800 font-semibold">{{ auth()->user()->name }}</h1>
                        <div class="flex">
                            Premium
                            <img class="w-4 ml-1 h-4 self-center" src="/img/verified.png" alt="">
                        </div>

                    </div>
                </div>

                <div class="mb-2">
                    <div class="flex">
                        <span class="mr-3"><i class='bx bxs-phone'></i></span>
                        <p>0812 8450 9377</p>
                    </div>
                    <div class="flex">
                        <span class="mr-3"><i class='bx bx-envelope'></i></span>
                        <p>{{ auth()->user()->email }}</p>
                    </div>
                </div>

                <div class="stats stats-horizontal lg:stats-horizontal shadow w-full bg-transparent mb-5">
                    <div class="stat self-center">
                        <div class="stat-title text-slate-600">Wallet</div>
                        <div class="font-bold text-xl text-slate-700">Rp. 970.000</div>
                        <div class="stat-desc text-slate-500">↘︎ 90 (14%)</div>
                    </div>

                    <div class="stat">
                        <div class="stat-title text-slate-600">Total Penjualan</div>
                        <div class="font-bold text-2xl text-slate-700">1,200</div>
                        <div class="stat-desc text-slate-500">↘︎ 90 (14%)</div>
                    </div>

                </div>
            </div>

            <div id="product" class="md:w-2/3 md:p-5 md:border md:rounded-2xl md:ml-10">
                <div class="text-center text-black mb-2">
                    <h1 class="font-semibold text-xl md:mt-5">Eksplore Your Product</h1>
                </div>

                <div class="flex justify-between mx-20 mb-5">
                    <a href="/dashboard">Penjualan</a>
                    <a href="/dashboard/pembelian" class="text-green-600">Pembelian</a>
                </div>

                <div class="mb-5">
                    @foreach ($Product as $pro)
                        <section class="w-full mb-5">
                            <div class="flex w-full">
                                <div class="kiri max-w-[30%] mr-5">
                                    <img class="p-2 border sm:w-40 sm:h-40 w-28 h-28 rounded-xl"
                                    src="{{ asset('storage/'. $pro->menu->gambar)}}" alt=""
                                        onclick="window.location.href='/products/{{ $pro->menu->id }}'">
                                </div>
                                <div class="kanan w-[70%]">
                                    <div class="flex justify-between">
                                        <h1 class="text-black font-semibold"
                                        onclick="window.location.href='/products/{{ $pro->menu->id }}'">
                                        {{ $pro->menu->nama }}
                                    </h1>
                                        <button><span class="flex self-center"><i
                                            class='bx bx-dots-vertical-rounded'></i></span></button>
                                    </div>

                                    <p class="text-slate-500 text-xs">DKI Jakarta</p>
                                    <div class="flex text-black mb-2">
                                        <p class="text-base mr-3">Rp. {{ $pro->hTotal }}</p>
                                        <p class="text-sm text-slate-400  self-center">x
                                            {{ $pro->jumlah }}</p>
                                    </div>
                                    <div class="flex text-black justify-between mr-5">
                                        <div>
                                            <p class="text-xs">Tanggal Beli</p>
                                            <p class="text-xs text-slate-400 self-center">{{ $pro->created_at }}</p>
                                        </div>
                                        <button onclick="window.location.href='/product{{ $pro->menu->id }}'"
                                            class="text-green-700 font-semibold text-sm bg-green-200 rounded-full py-1 px-3">Beli Lagi</button>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endforeach
                </div>
                <div class="md:mx-0">
                    {{ $Product->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('components/footer')
</body>

</html>
