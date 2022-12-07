<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/css/app.css')
    <title>Edit Product</title>
</head>
<body>
    @include('components/navbar')
    <div class="container pt-20 h-[100vh]">

        <h1 class="text-center text-black font-bold text-xl mb-5">Edit Produk</h1>

        <form action="/dashboard/edit/{{ $product->id }}" method="POST" class="" enctype="multipart/form-data">
            @method('put')
            @csrf
            <input type="hidden" name="oldIMG" value="{{ $product->gambar }}">
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Nama Produk</label>
                <input
                    class="w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                    type="text" placeholder="Nama Produk" name="nama" required value="{{ $product->nama }}">
            </div>
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Harga</label>
                <input
                    class="w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                    type="text" placeholder="Harga" name="harga" required value="{{ $product->harga }}">
            </div>
            <div class="space-y-2">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Deskripsi</label>
                <textarea placeholder="Deskripsi Produk" class="w-full text-base px-4 py-2 border bg-white  border-gray-300 rounded-lg focus:outline-none focus:border-green-400" name="deskripsi" id="">{{ $product->deskripsi }}</textarea>
            </div>
            <img src="{{ asset('storage/'. $product->gambar)}}" id="pvGambar" class="my-3 w-20 h-20 rounded-lg">
            <div class="space-y-2 mb-5">
                <label class="text-sm font-medium text-gray-700 tracking-wide">Gambar Produk</label>
                <input
                    class="w-full text-base bg-white border-gray-300 rounded-lg focus:outline-none focus:border-green-400"
                    type="file" name="gambar" id="inputGambar" onchange="previewImage()">
            </div>

            <button class="bg-base-200 text-white px-5 py-2 rounded-full mb-20" type="submit" name="submit">Edit Produk</button>
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