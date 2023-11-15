<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function tambah($id)
    {
        Favorite::create([

            "product_id" => $id,
            "user_id" => Auth::user()->id,
        ]);
        return redirect()->route('admin.product')->with('Sukses', 'Data berhasll di tambahkan!');
    }

    public function tambahpengguna($id)
    {
        Favorite::create([

            "product_id" => $id,
            "user_id" => Auth::user()->id,
        ]);
        return redirect()->route('pengguna.product')->with('Sukses', 'Data berhasll di tambahkan!');
    }

    public function relasi()
    {
        // $product = Product::with( [
        //     "favorite" =>
        //     function($query) {
        //         $query->with("user")->where("user_id", Auth::user()->id);
        //     }
        // ])->get();
        $product = Favorite::where('user_id', Auth::user()->id)->get();
        // dd($product);
// return $product;
        return view("admin.favorite", [
            "product" => $product
        ]);
    }

    public function relasipengguna()
    {
        // $product = Product::with( [
        //     "favorite" =>
        //     function($query) {
        //         $query->with("user")->where("user_id", Auth::user()->id);
        //     }
        // ])->get();
        $product = Favorite::where('user_id', Auth::user()->id)->get();
        // dd($product);
// return $product;
        return view("pengguna.favorite", [
            "product" => $product
        ]);
    }



}



