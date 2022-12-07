<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>{{ $product->nama }}</title>
</head>

<body>
    @include('components/navbar2')

    <div class="pt-20 container mb-20">
        <div class="md:flex">
            <div class="md:w-1/2">
                <img class="h-96 w-96 mx-auto md:p-5 md:border" src="{{ asset('storage/'. $product->gambar)}}" alt="">
            </div>
            
            <div class="md:w-1/2 md:ml-10 lg:ml-0">
                <h1 class="text-black font-bold text-2xl">{{ $product->nama }}</h1>
                <div class="flex text-black text-xl">
                    <p>Rp. {{ $product->harga }}</p>
                    <p class="text-sm line-through text-slate-400 mx-2 self-center">Rp. {{ $product->harga * 0.9 }}</p>
                </div>
                <div class="flex my-2">
                    <img class="w-6 rounded-full mr-3 shadow-lg" src="/img/blank.jpg" alt="">
                    <p class="text-slate-700 text-sm">{{ $product->user->name }}</p>
                </div>
                <form action="/product/beli" method="POST" class="bg-transparent w-full fixed-bottom md:static bg-white z-50 md:px-0">
                    @csrf
                    <div class="flex py-3 md:mt-5 justify-between mx-auto bg-white px-4 md:bg-transparent md:px-0">
                        <div class="flex justify-center md:px-0">
                            <span
                                class="font-semibold text-xl border-2 border-base-200 text-base-200 rounded-full px-1 self-center"
                                id="minus"><i class='bx bx-minus'></i></span>

                            <input type="hidden" name="menu_id" id="" value="{{ $product->id }}">
                            <input type="hidden" name="harga" id="" value="{{ $product->harga }}">
                            <input id="qty" type="text" value="1" name="jumlah"
                                class="w-10 font-semibold text-xl text-center bg-white text-base-200">
                            <span
                                class="font-semibold rounded-full outline-base-200 border-2 border-base-200 px-1 text-base-200 text-xl self-center"><i
                                    id="plus" class='bx bx-plus'></i></span>
                        </div>
            
                        <button id="beli" type="submit" name="submit"
                            class="bg-base-200 text-white px-20 py-2 font-medium text-center self-center rounded-full"><span><i
                                    class='bx bx-cart'></span></i> Beli</button>
                    </div>
                </form>
            </div>
        </div>
        <p class="mb-10 mt-2">{{ $product->deskripsi }}</p>
    </div>

    <h1 class="container text-black">Produk Lainnya</h1>
    <div data-theme="light" class="container flex overflow-x-scroll mb-10 bg-transparent justify-between">
        @foreach ($allProduct as $m)
            <section class="sm:w-72 mr-5 sm:mx-5 mb-5 w-36" onclick="window.location.href='/products/{{ $m->id }}'">
                <img class="border sm:w-64 sm:h-64 w-36 h-36 rounded-xl" src="/storage/{{ $m->gambar }}"
                    alt="">
                <h1 class="font-bold text-black">{{ $m->nama }}</h1>
                <h1 class="font-bold text-black hidden">{{ $m->user->name }}</h1>
                <p class="text-slate-500 text-xs">DKI Jakarta</p>
                <div class="flex text-black justify-between">
                    <p class="text-sm">Rp. {{ $m->harga }}</p>
                    <p class="text-xs line-through text-slate-400 self-center">Rp. {{ $m->harga * 0.9 }}</p>
                </div>
                <p class="text-slate-500 text-sm hidden">{{ $m->deskripsi }}</p>
            </section>
        @endforeach
    </div>

    @include('components/footer')


    <script>
        const plus = document.querySelector("#plus");
        const minus = document.querySelector("#minus");
        const outputqty = document.querySelector("#qty");
        const hTotal = document.querySelector("#hTotal");
        const price = document.querySelector("#price");
    
        const beli = document.querySelector("#beli");
    
        let numqty = 1;
    
        plus.addEventListener("click", () => {
          numqty++;
          // console.log(qty);
          outputqty.value = numqty;
        });
        minus.addEventListener("click", () => {
          if (outputqty.value <= 0) {
            minus.disabled = true;
          } else {
            numqty--;
          }
    
          // console.log(qty);
          outputqty.value = numqty;
        });

        const plus2 = document.querySelector("#plus2");
        const minus2 = document.querySelector("#minus2");
        const outputqty2 = document.querySelector("#qty2");
        const hTotal2 = document.querySelector("#hTotal");
        const price2 = document.querySelector("#price");
    
        const beli2 = document.querySelector("#beli");
    
        let numqty2 = 1;
    
        plus2.addEventListener("click", () => {
          numqty2++;
          // console.log(qty);
          outputqty2.value = numqty2;
        });
        minus2.addEventListener("click", () => {
          if (outputqty2.value <= 0) {
            minus2.disabled = true;
          } else {
            numqty2--;
          }
    
          // console.log(qty);
          outputqty2.value = numqty2;
        });
      </script>
    <script src="/js/home.js"></script>
</body>

</html>

