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

    public function relasi()
    {
        // $product = Product::with( [
        //     "favorite" =>
        //     function($query) {
        //         $query->with("user")->where("user_id", Auth::user()->id);
        //     }
        // ])->get();
        $product = Favorite::with('product')->where('user_id', Auth::user()->id)->get();
// return $product;
        return view("admin.favorite", [
            "product" => $product
        ]);
    }



}



