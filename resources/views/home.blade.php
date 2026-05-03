@extends('layouts.app')

@section('content')
    <div class="bg-white p-8 rounded shadow text-center">
        <h1 class="text-3xl font-bold text-blue-600 mb-4">
            Halaman Home
        </h1>

        <p class="text-gray-600">
            Ini adalah contoh penggunaan 
            <span class="font-semibold">&#64;section</span> dan 
            <span class="font-semibold">&#64;yield</span> di Laravel.
        </p>

        <div class="mt-6">
            <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Tombol Contoh
            </button>
        </div>
    </div>
@endsection