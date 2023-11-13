@extends('layouts.global')

@section('content')
{{-- @include('components.navbar_admin') --}}
    <div class="bg-gradient-to-br from-pink to-deeppink p-8 rounded-lg shadow-md">
        <p class="text-4xl font-bold mb-4 text-white">Data Product~</p>
        <hr><br>
        <div class="w-full h-auto flex justify-end">
            <div class="w-full h-auto flex justify-end">
                <a href=""><button
                        class="px-4 py-2 bg-green-600 rounded-md text text-white">Create</button></a>
            </div>
        </div><br>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 rounded-lg">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No.
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Desc
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Size
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Warna
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Berat
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Stok
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php $i=1 @endphp
                    @foreach ($product as $prd)
                        <tr class="bg-white border-b rounded-lg">
                            <td class="px-6 py-4">{{ $i }}</td>
                            <td class="px-6 py-4">{{ $prd['nama'] }}</td>
                            <td class="px-6 py-4">{{ $prd['kategori']['jenis'] }}</td>
                            <td class="px-6 py-4">{{ $prd['desc'] }}</td>
                            <td class="px-6 py-4">{{ $prd['size'] }}</td>
                            <td class="px-6 py-4">{{ $prd['warna'] }}</td>
                            <td class="px-6 py-4">{{ $prd['berat'] }}</td>
                            <td class="px-6 py-4">{{ $prd['stok'] }}</td>
                            <td class="px-6 py-4">{{ $prd['harga'] }}</td>
                        </td>
                        <td class="p2">
                            <div class="flex flex-col items-center">
                                <img src="{{ asset("assets/$prd->gambar") }}" alt="" class="h-[128px]">
                            </div>
                        </td>

                            <td class="px-6 py-4">
                                <div class="flex space-x-2">
                                    <a href=""  onclick="return confirm('Are you sure want to update?')"><button
                                        class="px-4 py-2 bg-yellow-300 rounded-md
            text">Edit</button></a>

                                    <form action=""method="post">
                                        @csrf
                                        <button class="px-4 py-2 bg-red-600 rounded-md text

text-white"
                                            onclick="return confirm('Are you sure want to delete?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @php $i++ @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- @include('components.footer') --}}
