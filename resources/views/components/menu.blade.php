<div id="menu" class="container flex justify-center pt-20 mb-20 xl:mb-32">
    <div>
        <h1 class="text-3xl font-bold px-5 flex justify-center mb-5 text-black">Trendy Furnitures</h1>

        <div class="flex mb-5 justify-center text-black">
            <a class="sm:px-5 px-3 text-green-600 underline" href="">All</a>
            <a class="sm:px-5 px-3" href="">Featured</a>
            <a class="sm:px-5 px-3" href="">New</a>
            <a class="sm:px-5 px-3" href="">Onsale</a>
            <a class="sm:px-5 px-3" href="">Deal</a>
        </div>
        <div class="flex justify-center mb-5">
            <div class="form-control">
                <form action="/#menu" class="input-group">
                  <input type="text" name="search" placeholder="Search…" value="{{ request('search') }}" class="input input-bordered bg-white" />
                  <button class="btn btn-square" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                  </button>
                </form>
              </div>
        </div>

        <div class="md:grid xl:grid-cols-4 md:grid-cols-2 mx-auto grid grid-cols-2">
            @foreach ($menu as $m)
                <section class="sm:w-64 mx-2 sm:mx-5 mb-5" onclick="window.location.href='/products/{{ $m->id }}'">
                    <img class="p-2 border sm:w-64 sm:h-64 w-44 h-44 rounded-xl" src="{{ asset('storage/'. $m->gambar)}}" alt="">
                    <h1 class="font-bold text-black">{{ $m->nama }}</h1>
                    <h1 class="font-bold text-black hidden">{{ $m->user->name }}</h1>
                    <p class="text-slate-500 text-xs">DKI Jakarta</p>
                    <div class="flex text-black justify-between">
                        <p>Rp. {{ $m->harga }}</p>
                        <p class="text-sm line-through text-slate-400 self-center">Rp. {{ $m->harga * 1.1 }}</p>
                    </div>
                    <p class="text-slate-500 text-sm hidden">{{ $m->deskripsi }}</p>
                </section>
            @endforeach
        </div>
        <div class="mx-5 md:mx-0">
            {{ $menu->links() }}
        </div>
        
    </div>
</div>
