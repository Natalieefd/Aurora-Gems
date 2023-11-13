<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getProduct()
    {
    $product = Product::with('kategori')->get();
    $response = [
    'status' => 'success',
    'message' => 'Data Berhasil Diambil',
    'data' => $product
    ];
    return response()->json($response);
    }
}
