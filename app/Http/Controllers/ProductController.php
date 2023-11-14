<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
// use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function tambah()
    {
        return view('admin.crud.add', [
            'kategoris' => Kategori::all(),
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
        return redirect()->route('admin.manajemen_product')->with('Sukses', 'Data berhasll di tambahkan!');
    }



    public function edit($id)
    {
        return view('admin.crud.edit', [
            'products' => Product::all()
                ->where('id', $id)
                ->first(),
            'kategoris' => Kategori::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            "nama" => "required|string|max:30",
            "desc" => "required|string|max:100",
            "size" => "required|integer",
            "warna" => "required|string",
            "berat" => "required|numeric",
            "stok" => "required|integer",
            "harga" => "required|integer",
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            // 'merk' => $request->merk,
        ]);
        return redirect()->route('admin.manajemen_product')->with('success', 'Data Produk Berhasil Diubah');
    }


    public function delete($id){
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.manajemen_product')->with('success','Data product Berhasil Dihapus');
        }
}
