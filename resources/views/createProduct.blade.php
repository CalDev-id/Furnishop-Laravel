<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>Add Product</title>
</head>
<body>
    @include('components/navbar2')
    <div class="container pt-20 h-full">
        
        @error('gambar')
        <div class="alert alert-error shadow-lg mb-3">
            <div>
              <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
              <span>{{ $message }}</span>
            </div>
          </div>
        @enderror

        <h1 class="text-center text-black font-bold text-xl mb-5">Tambah Produk</h1>

        <form action="/dashboard/product" method="POST" class="" enctype="multipart/form-data">
            @csrf
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Nama Produk</label>
                <input
                    class="w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                    type="text" placeholder="Nama Produk" name="nama" required>
            </div>
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Harga</label>
                <input
                    class="w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                    type="text" placeholder="Harga" name="harga" required>
            </div>
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Deskripsi</label>
                <textarea placeholder="Deskripsi Produk" class="w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" name="deskripsi" id=""></textarea>
            </div>
            <img id="pvGambar" class="my-3 w-20 h-20 hidden rounded-lg">
            <div class="space-y-2 mb-5">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Gambar Produk</label>
                <input
                    class="w-full text-base bg-white border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                    type="file" name="gambar" id="inputGambar" onchange="previewImage()" required>
            </div>

            <button class="bg-base-200 text-white px-5 py-2 rounded-full mb-20" type="submit" name="submit">Tambah Produk</button>
        </form>
    </div>

    <script>
        function previewImage(){
            const img = document.querySelector('#inputGambar');
            const pvImage = document.querySelector('#pvGambar');

            pvImage.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(img.files[0]);

            oFReader.onload = function(oFREvent){
                pvImage.src = oFREvent.target.result;
            }
        }
    </script>
</body>
</html>