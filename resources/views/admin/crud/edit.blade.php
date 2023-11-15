@extends('layouts.global')
@section('content')

    <div class="relative flex items-center h-screen bg-peach">
        <img src="{{ asset('assets/bg_add_edit_data.jpg') }}" alt="" class="absolute right-0 h-screen">
        <div class="absolute right-0 w-screen h-full bg-peach bg-opacity-30"></div>
        <h1 class="absolute right-32 uppercase text-8xl font-bold text-deeppink">edit<br>data<br>product</h1>
        <div class="absolute top-0 p-8 shadow-md w-fit h-full px-24 bg-white">
            <form action="{{ route('admin.update', $products->id) }}" method="post" class=""
                enctype="multipart/form-data">
                @csrf
                @if (session('error'))
                    <div class="mb-6">
                        <div class="p-2 rounded-sm bg-red-100 ring-1 ring-red-500">
                            <p class="text-red-500">
                                {{ session('error') }}
                            </p>
                        </div>
                    </div>
                @endif
                @if (session('success'))
                    <div class="mb-6">
                        <div class="p-2 rounded-sm bg-green-100 ring-1 ring-green-500">
                            <p class="text-green-500">
                                {{ session('success') }}
                            </p>
                        </div>
                    </div>
                @endif
                <div class="relative mb-5">
                    <label for="" class="capitalize font-medium text-black px-2">nama produk</label>
                    <input type="text" name="nama" placeholder="Nama" value="{{ $products->nama }}"
                        class="w-full pl-4 pr-4 py-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                </div>
                <div class="relative mb-5">
                    <label for="" class="capitalize font-medium text-black px-2">Deskripsi</label>
                    <input type="textarea" name="desc" placeholder="deskripsi" value="{{ $products->desc }}"
                        class="w-full pl-4 pr-4 py-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                </div>
                <div class="flex gap-5">
                    <div class="relative mb-5">
                        <label for="" class="capitalize font-medium text-black px-2">Size</label>
                        <input type="text" name="size" placeholder="Size" value="{{ $products->size }}"
                            class="w-full pl-4 pr-4 py-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                    </div>
                    <div class="relative mb-5">
                        <label for="" class="capitalize font-medium text-black px-2">Berat</label>
                        <input type="text" name="berat" placeholder="Berat" value="{{ $products->berat }}"
                            class="w-full pl-4 pr-4 py-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                    </div>
                </div>
                <div class="relative mb-5">
                    <label for="" class="capitalize font-medium text-black px-2">Warna</label>
                    <input type="text" name="warna" placeholder="Warna" value="{{ $products->warna }}"
                        class="w-full pl-4 pr-4 py-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                </div>
                <div class="flex gap-5">
                    <div class="relative mb-5">
                        <label for="" class="capitalize font-medium text-black px-2">Stok</label>
                        <input type="text" name="stok" placeholder="Stok" value="{{ $products->stok }}"
                            class="w-full pl-4 pr-4 py-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                    </div>
                    <div class="relative mb-5">
                        <label for="" class="capitalize font-medium text-black px-2">Harga</label>
                        <input type="text" name="harga" placeholder="Harga" value="{{ $products->harga }}"
                            class="w-full pl-4 pr-4 py-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                    </div>
                </div>
                <div class="flex flex-col mb-5">
                    <label for="kategori_id" class="capitalize font-medium text-black px-2">Kategori</label>
                    <select
                        class="form-control p-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach"
                        name="kategori_id" id="category">
                        <option hidden>Pilih Kategori</option>
                        @foreach ($kategoris as $kt)
                            <option value="{{ $kt->id }}" class="">{{ $kt->jenis }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col mb-7">
                    <label class="capitalize font-medium text-black px-2">Upload Gambar</label>
                    <input type="file" name="gambar"
                        class="p-2 mt-2 bg-slate-50 rounded-sm ring-1 ring-slate-300 focus:outline-none focus:ring-peach">
                    @error('image')
                        <div class="bg-red-400 p-2 shadow-sm rounded mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full h-auto py-4 text-white font-medium bg-pink rounded-md flex justify-center items-center hover: bg-deeppink">
                    Submit
                </button>
            </form>
        </div>
    </div>
@endsection
