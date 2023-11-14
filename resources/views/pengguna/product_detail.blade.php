@extends('layouts.global')
@section('content')
@include('components.navigation_bar')

<div class="flex justify-between items-center h-screen">
    <div class="flex flex-col justify-center items-center h-4/6 w-2/5 gap-10 ml-36">
            <img src="{{ asset('assets/' .$product->image) }}" alt="" class="w-4/5 rounded-lg shadow-lg">
        <div class="flex gap-10 h-90">
            <div class="">
                <img src="{{ asset('assets/' .$product->image) }}" alt="" class="h-28 rounded-lg shadow-md">
            </div>
            <div class="">
                <img src="{{ asset('assets/' .$product->image) }}" alt="" class="h-28 rounded-lg shadow-md">
            </div>
            <div class="">
                <img src="{{ asset('assets/' .$product->image) }}" alt="" class="h-28 rounded-lg shadow-md">
            </div>
        </div>
    </div>
    <div class="flex text-center items-center bg-gray-50 h-96 w-96 rounded-lg mr-36 shadow-md">
        <p>Nama<p>
        <p>Deskripsi</p>
        <p>Size</p>
        <p>Kategori</p>
        <p>Warna</p>
        <p>Berat</p>
        <p>Stok</p>
        <p>Harga</p>
    </div>
</div>

@endsection
