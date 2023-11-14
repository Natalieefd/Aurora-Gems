<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    public function tambah()
    {

        Favorite::create([]);
    }
}
