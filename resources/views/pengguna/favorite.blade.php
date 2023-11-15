@extends('layouts.global')

@section('content')
@include('components.navigation_bar')

<div class="relative max-h-fit">
    <div class="bg-white p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
        @foreach ($product as $prd)
            <div class="bg-pink p-4 shadow-md  rounded-3xl ">
                    <button class="text-red-600 hover:text-red-700 love-icon" data-product-id="1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z"></path>
                        </svg>
                    </button>

                <img src="{{ asset("assets/$prd->gambar") }}" alt=""  class="w-80 h-48 mt-0 object-fill rounded-lg">
                <h3 class="text-lg font-semibold mb-2 mt-2"> {{$prd->Product->nama}}</h3>
                <p class="text-lg font-semibold mb-2">Rp {{$prd->harga}}</p>
            </div>
        @endforeach
        </div>
    </div>

    @include('components.footer')






