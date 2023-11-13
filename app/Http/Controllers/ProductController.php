<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Http;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(){
        $endpoint = env('BASE_ENV').'/api/staff/data/mahasiswa';
        $data = Http::get($endpoint);
        return view('admin.manajemen_data',[
        'manajemen_data'=>$data
        ]);
        }

    public function store(Request $request)
    {


        $nama_product = "";

        if ($request->hasFile("gambar")) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->gambar->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            $nama_product = $randomNum . "." . $ekstensi;
            $request->gambar->move("assets/", $nama_product);
        }

        $validateData = $request->validate([
            "nama" => "required|string|max:30",
            "desc" => "required|string|max:100",
            "size" => "required|integer",
            "warna" => "required|string",
            "berat" => "required|numeric",
            "stok" => "required|integer",
            "harga" => "required|integer",


        ]);

        Product::create([
            "nama" => $validateData["nama"],
            "desc" => $validateData["desc"],
            "size" => $validateData["size"],
            "warna" => $validateData["warna"],
            "berat" => $validateData["berat"],
            "stok" => $validateData["stok"],
            "harga" => $validateData["harga"],
            "gambar" => $nama_product,
            "kategori_id" => $validateData["kategori_id"],
        ]);
        return redirect()->route("")->with("Sukses", "Data berhasil ditambahkan!");
    }

}
