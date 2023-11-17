<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
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

    public function index(){
        $endpoint = env('BASE_ENV').'/api/staff/data/mahasiswa';
        $data = Http::get($endpoint);
        return view('admin.manajemen_data',[
        'manajemen_data'=>$data
        ]);
        }

    public function filter($kategori)
    {
        $product = Product::where('kategori_id', '1');
        dd($product);
        return view('admin.product', [
            'product' => $product
        ]);
    }

    public function store(Request $request)
    {
        $nama_product = "";

        if ($request->gambar) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->gambar->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            $nama_product = $randomNum . "." . $ekstensi;
            $request->gambar->move("assets/", $nama_product);
        }

        $validateData = $request->validate([
            "nama" => "required|string|max:30",
            "desc" => "required|string|max:200",
            "size" => "required|integer",
            "warna" => "required|string",
            "berat" => "required|numeric",
            "stok" => "required|integer",
            "harga" => "required|integer",
            "kategori_id" => "required",
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
        return redirect()->route('admin.manajemen_product')->with('Success', 'Data berhasil di tambahkan!');
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
        $product = Product::find($id);

        if ($request->gambar) {
            if ($product->gambar != ''  && $product->gambar != null) {
                $gambar_old = public_path('assets/' . $product->gambar);
                unlink($gambar_old);
            }

            $path = public_path() . '/assets/';
            $file = $request->gambar;
            $filename = $file->getClientOriginalName();
            $request->gambar->move($path, $filename);
        }

        $request->validate([
            "nama" => "required|string|max:30",
            "desc" => "required|string|max:200",
            "size" => "required|integer",
            "warna" => "required|string",
            "berat" => "required|numeric",
            "stok" => "required|integer",
            "harga" => "required|integer",
            "kategori_id" => "required",
        ]);

        $product = Product::findOrFail($id);
        $product->update([
            "nama" => $request->nama,
            "desc" => $request->desc,
            "size" => $request->size,
            "warna" => $request->warna,
            "berat" => $request->berat,
            "stok" => $request->stok,
            "harga" => $request->harga,
            "gambar" => $filename,
            "kategori_id" => $request->kategori_id,
        ]);
        return redirect()->route('admin.manajemen_product')->with('success', 'Data Produk Berhasil Diubah');
    }


    public function delete($id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.manajemen_product')->with('success', 'Data product Berhasil Dihapus');
    }

    public function showProductAdmin($id)
    {
        $product = Product::findOrFail($id);
        $kategori = Kategori::all();
        return view('admin.product_detail', ['product' => $product, 'kategori' => $kategori]);
    }

    public function showProductPengguna($id)
    {
        $product = Product::findOrFail($id);
        $kategori = Kategori::all();
        return view('pengguna.product_detail', ['product' => $product, 'kategori' => $kategori]);
    }
}
