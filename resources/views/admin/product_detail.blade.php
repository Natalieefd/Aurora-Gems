@extends('layouts.global')
@section('content')
    @include('components.navigation_bar')

    <div class="flex flex-col h-screen">
        <a href="{{ route('admin.product') }}" class="w-full  pt-10 pl-10">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.4" stroke="currentColor" class="w-7 h-7 text-pink">
                <path fill-rule="evenodd"
                    d="M7.72 12.53a.75.75 0 010-1.06l7.5-7.5a.75.75 0 111.06 1.06L9.31 12l6.97 6.97a.75.75 0 11-1.06 1.06l-7.5-7.5z"
                    clip-rule="evenodd" />
            </svg>
        </a>
        <div class="flex justify-center items-center">
            <div class="h-4/6 w-2/5">
                <img src="{{ asset("assets/$product->gambar") }}" alt="" class="w-4/5 rounded-lg shadow-lg">
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
                    <p>{{ $kategori->jenis }}</p>
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
                    {{-- <a href="">
                        <div
                            class="flex items-center mr-10 bg-deeppink text-white py-3 px-4 gap-2 rounded-full hover:bg-pink shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path
                                    d="M11.645 20.91l-.007-.003-.022-.012a15.247 15.247 0 01-.383-.218 25.18 25.18 0 01-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0112 5.052 5.5 5.5 0 0116.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 01-4.244 3.17 15.247 15.247 0 01-.383.219l-.022.012-.007.004-.003.001a.752.752 0 01-.704 0l-.003-.001z" />
                            </svg>
                            <p class="capitalize">add to favorite</p>
                        </div>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
    @include('components.footer')
@endsection
