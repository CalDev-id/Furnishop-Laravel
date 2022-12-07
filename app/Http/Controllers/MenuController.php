<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    //Tampil Data
    public function index(){
        // dd(request('search'));

        $menu = Menu::paginate(8);

        if(request('search')){
            // dd(request('search'));
            $menu = Menu::where('nama', 'like', '%' . request('search') .'%' )->paginate(8);
            // dd($menu);
            
        }
        
        // return view('home', compact(['menu']));
        return view('home', ["menu" => $menu]);
        // return view('home', compact('menu'));
    }

    public function login(){
        return view('login');
    }

    
    public function signup(){
        return view('signup');
    }

    public function show(Menu $product){
        return view('product',[
            "product" => $product, 'allProduct' => Menu::paginate(8)
        ]);
    }

    public function dashboard(){
        return view('dashboard', [
            'product'=> Menu::where('user_id', auth()->user()->id)->paginate(4)
        ]);
    }
    public function dbPembelian(){
        return view('dashboardPembelian', [
            'Product'=> Pembelian::where('user_id', auth()->user()->id)->paginate(4)
        ]);
    }

    public function create(){
        return view('createProduct');
    }

    public function store(Request $request){

        // return $request->file('gambar')->store('product-images');

        $validatedData = $request -> validate([
            'nama' => 'required',
            'harga' => 'required',
            'gambar' => 'required|image|file|max:1024',
            'deskripsi' => 'required'
        ]);

        $validatedData['gambar'] = $request->file('gambar')->store('product-images');

        $validatedData['user_id'] = auth()->user()->id;

        Menu::create($validatedData);

        return redirect('/dashboard')->with('success', 'Produk Berhasil Ditambahkan');
    }

    public function pDelete(Menu $product){

        Storage::delete($product->gambar);
        Menu::destroy($product->id);

        return redirect('/dashboard')->with('success', 'Produk Berhasil DiHapus');
    }

    public function edit(Menu $product){
        return view('editProduct',['product'=>$product]);
    }

    public function update(Menu $product, Request $request){

        // return view('createProduct');
        $rules = [
            'nama' => 'required',
            'harga' => 'required',
            'gambar' => 'image|file|max:1024',
            'deskripsi' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('gambar')){
            Storage::delete($request->oldIMG);

            $validatedData['gambar'] = $request->file('gambar')->store('product-images');
        }
        
        $validatedData['user_id'] = auth()->user()->id;

        Menu::where('id', $product->id)
                    ->update($validatedData);

        return redirect('/dashboard')->with('success', 'Produk Berhasil Diubah');
    }

    public function beli(Request $request){

        $validatedData = $request -> validate([
            'jumlah' => 'required',
            'menu_id' => 'required',
        ]);
        $validatedData['hTotal'] = $request['jumlah'] * $request['harga'];
        $validatedData['user_id'] = auth()->user()->id;

        Pembelian::create($validatedData);
        return redirect('/dashboard/pembelian')->with('success', 'Pembayaran Berhasil');
    }
}
