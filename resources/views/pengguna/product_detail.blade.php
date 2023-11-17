@extends('layouts.global')
@section('content')
    @include('components.navigation_bar')

    <div class="flex flex-col h-screen">
        <a href="{{ route('pengguna.product') }}" class="w-full  pt-10 pl-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor" class="w-7 h-7 text-pink">
                <path fill-rule="evenodd"
                    d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"
                    clip-rule="evenodd" />
            </svg>
        </a>
        <div class="flex justify-center items-center">
            <div class="h-4/6 w-2/5">
                <img src="{{ asset("assets/".$product->gambar) }}" alt="" class="w-4/5 h-4/5 object-fill rounded-lg shadow-lg">
            </div>
            <div class="flex flex-col mt-24 p-10 gap-4 bg-gray-50 h-fit w-2/5 rounded-lg shadow-md">
                <p class="font-semibold text-3xl">{{ $product->nama }}
                <p>
                <div>
                    <p class="capitalize font-medium text-sm mb-1">deskripsi</p>
                    <p>{{ $product->desc }}</p>
                </div>
                <div class="flex justify-between">
                    <div class="w-40">
                        <p class="capitalize font-medium text-sm mb-1">size</p>
                        <p>{{ $product->size }}</p>
                    </div>

                    <div class="w-40">
                        <p class="capitalize font-medium text-sm mb-1">Weight</p>
                        <p>{{ $product->berat }}</p>
                    </div>
                    <div class="w-40">
                        <p class="capitalize font-medium text-sm mb-1">Color</p>
                        <p>{{ $product->warna }}</p>
                    </div>
                </div>
                <div>
                    <p class="capitalize font-medium text-sm mb-1">Category</p>
                    <p>{{ $product->kategori->jenis }}</p>
                </div>
                <div>
                    <p class="capitalize font-medium text-sm mb-1">Stock</p>
                    <p>{{ $product->stok }}</p>
                </div>
                <div class="flex justify-between items-center gap-20">
                    <div class="items-center">
                        <p class="capitalize font-medium text-lg mb-1">Price</p>
                        <p class="text-xl">Rp. {{ $product->harga }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
