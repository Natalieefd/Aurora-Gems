@extends('layouts.global')

@section('content')
@include('components.navigation_bar')
<div class="relative">
    <div class="bg-white p-8">

        <div class="mb-4">
            <label for="category" class="block text-sm font-medium text-gray-700">Filter by Category:</label>
            <select id="category" name="category" class="mt-1 p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                <option value="all">All Categories</option>
                <option value="gelang">Gelang</option>
                <option value="cincin">Cincin</option>
                <option value="kalung">Kalung</option>
                <option value="anting-anting">Anting-Anting</option>
            </select>
        </div>
        <div class="bg-white p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        @foreach ($product as $prd)
            <div class="bg-pink p-4 shadow-md  rounded-3xl ">
                <a href="{{ route('pengguna.favorite.action', $prd->id) }}">
                    <button class="text-red-600 hover:text-red-700 love-icon" data-product-id="1">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#d20f0f}</style><path d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>
                    </button>
                </a>
                <img src="{{ asset("assets/$prd->gambar") }}" alt=""  class="w-80 h-48 mt-0 object-fill rounded-lg"><div class="flex justify-between items-end">
                    <div>
                        <h3 class="text-lg font-semibold mb-2 mt-2"> {{$prd->nama}}</h3>
                        <p class="text-lg font-semibold mb-2">Rp {{$prd->harga}}</p>
                    </div>
                    <a href="{{ route('pengguna.product_detail', ['id'=>$prd->id]) }}">
                        <div class="h-fit w-fit bg-peach rounded-2xl">
                            <p class="capitalize font-medium text-xs text-center p-2">produk detail</p>
                        </div>
                    </a>
                </div>
            </div>

        @endforeach
        </div>
    </a>
    </div>
    @include('components.footer')
</div>





