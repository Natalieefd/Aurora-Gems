@extends('layouts.global')

@section('content')
    @include('components.navigation_bar_admin')
    <div class="relative">
        <div class="bg-white p-8">
            <div class="bg-white p-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                @foreach ($product as $prd)
                    <div class="bg-pink p-4 shadow-md  rounded-3xl ">
                        <img src="{{ asset("assets/$prd->gambar") }}" alt=""
                            class="w-80 h-48 mt-0 object-fill rounded-lg">
                        <div class="flex justify-between items-end">
                            <div>
                                <h3 class="text-lg font-semibold mb-2 mt-2"> {{ $prd->nama }}</h3>
                                <p class="text-lg font-semibold mb-2">Rp {{ $prd->harga }}</p>
                            </div>
                            <a href="{{ route('admin.product_detail', ['id' => $prd->id]) }}">
                                <div class="h-fit w-fit bg-peach rounded-2xl">
                                    <p class="capitalize font-medium text-xs text-center p-2">produk detail</p>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        @include('components.footer')
    </div>
