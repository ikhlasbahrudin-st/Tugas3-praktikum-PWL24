@extends('layouts.app')

@section('content')
<div class="space-y-12 animate-fade-in">

    <!-- HERO SECTION (Updated for Visitors) -->
    <div class="relative overflow-hidden bg-gradient-to-br from-blue-700 via-blue-800 to-indigo-900 rounded-[2.5rem] p-8 md:p-16 text-white shadow-2xl">
        <!-- Dekoratif Abstrak -->
        <div class="absolute top-0 right-0 -mt-10 -mr-10 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-48 h-48 bg-blue-400/20 rounded-full blur-2xl"></div>
        
        <div class="relative z-10 flex flex-col md:flex-row md:items-center md:justify-between gap-8">
            <div class="max-w-2xl text-center md:text-left">
                <div class="inline-flex items-center gap-2 bg-white/10 px-4 py-1.5 rounded-full backdrop-blur-md mb-6 border border-white/10">
                    <span class="text-[10px] font-bold uppercase tracking-widest text-blue-200">Selamat Datang di Mahayana Library</span>
                </div>
                
                <h1 class="text-4xl md:text-6xl font-black mb-6 tracking-tight leading-tight">
                    Temukan Dunia dalam <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-200 to-white">Setiap Lembaran.</span>
                </h1>
                <p class="text-blue-100 text-lg md:text-xl leading-relaxed opacity-90 mb-8">
                    Akses ribuan koleksi literatur digital dan fisik dengan sistem peminjaman yang modern, mudah, dan cepat.
                </p>

                <div class="flex flex-wrap justify-center md:justify-start gap-4">
                    <a href="#koleksi" class="bg-white text-blue-700 px-8 py-4 rounded-2xl font-bold shadow-xl hover:bg-blue-50 transition-all active:scale-95">
                        Lihat Koleksi
                    </a>
                    <div class="flex items-center gap-3 px-2 text-sm font-medium text-blue-100">
                        <span class="flex -space-x-3">
                            <div class="w-8 h-8 rounded-full border-2 border-blue-700 bg-blue-400 flex items-center justify-center text-[10px]">AD</div>
                            <div class="w-8 h-8 rounded-full border-2 border-blue-700 bg-indigo-400 flex items-center justify-center text-[10px]">JD</div>
                            <div class="w-8 h-8 rounded-full border-2 border-blue-700 bg-emerald-400 flex items-center justify-center text-[10px]">BS</div>
                        </span>
                        <span>+500 Pembaca Aktif</span>
                    </div>
                </div>
            </div>

            <div class="hidden lg:block relative">
                <div class="text-[12rem] drop-shadow-2xl animate-float select-none">
                    📖
                </div>
            </div>
        </div>
    </div>

    <!-- SEARCH BAR (Focus Utama User) -->
    <div id="koleksi" class="max-w-4xl mx-auto -mt-12 relative z-20 px-4">
        <div class="bg-white rounded-[2.5rem] shadow-2xl border border-slate-100 p-3 md:p-4">
            <form action="#" class="flex flex-col md:flex-row gap-3">
                <div class="relative flex-1">
                    <span class="absolute inset-y-0 left-5 flex items-center text-slate-400 text-xl">🔍</span>
                    <input 
                        type="text"
                        placeholder="Cari judul buku, penulis, atau kategori..."
                        class="w-full bg-slate-50 border-none rounded-[1.8rem] pl-14 pr-6 py-5 focus:ring-2 focus:ring-blue-500 transition-all font-medium text-slate-700"
                    >
                </div>
                <button type="submit" class="bg-blue-700 hover:bg-blue-800 text-white px-10 py-5 rounded-[1.8rem] font-bold shadow-lg shadow-blue-200 transition-all active:scale-95">
                    Cari Sekarang
                </button>
            </form>
        </div>
    </div>

    <!-- DAFTAR BUKU SECTION (Updated: Tombol Tambah Buku Dihapus) -->
    <div class="space-y-8 pt-6">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 px-2">
            <div>
                <div class="flex items-center gap-2 mb-2">
                    <span class="h-1 w-10 bg-blue-600 rounded-full"></span>
                    <span class="text-blue-600 font-bold text-sm uppercase tracking-wider">Koleksi Terpopuler</span>
                </div>
                <h2 class="text-3xl font-black text-slate-800 tracking-tight">Rekomendasi Minggu Ini</h2>
                <p class="text-slate-500 mt-1">Pilih bacaan terbaik yang paling banyak diminati pembaca lain.</p>
            </div>
            
            <div class="flex gap-2">
                <button class="p-3 rounded-xl border border-slate-200 hover:bg-white hover:shadow-md transition-all text-slate-400 hover:text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                </button>
                <button class="p-3 rounded-xl border border-slate-200 hover:bg-white hover:shadow-md transition-all text-slate-400 hover:text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </div>
        </div>

        <!-- GRID BUKU -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @php
                $books = [
                    ['title' => 'Laravel Dasar', 'author' => 'John Doe', 'cat' => 'Tech', 'year' => '2023', 'color' => 'bg-blue-500', 'icon' => '📘', 'status' => 'Tersedia'],
                    ['title' => 'Novel Senja', 'author' => 'Jane Doe', 'cat' => 'Sastra', 'year' => '2022', 'color' => 'bg-rose-500', 'icon' => '📕', 'status' => 'Tersedia'],
                    ['title' => 'Machine Learning', 'author' => 'Budi S.', 'cat' => 'AI', 'year' => '2024', 'color' => 'bg-indigo-500', 'icon' => '📗', 'status' => 'Dipinjam'],
                ];
            @endphp

            @foreach($books as $book)
            <div class="bg-white rounded-[2.5rem] border border-slate-100 overflow-hidden hover:shadow-2xl transition-all duration-500 group flex flex-col h-full">
                <div class="{{ $book['color'] }} h-56 relative flex items-center justify-center overflow-hidden">
                    <div class="text-8xl group-hover:scale-110 transition-transform duration-700 z-10">{{ $book['icon'] }}</div>
                    <!-- Badge Status -->
                    <div class="absolute top-5 right-5 z-20">
                        <span class="{{ $book['status'] == 'Tersedia' ? 'bg-emerald-500' : 'bg-amber-500' }} text-white text-[10px] font-black px-3 py-1.5 rounded-full shadow-lg uppercase tracking-widest">
                            {{ $book['status'] }}
                        </span>
                    </div>
                </div>

                <div class="p-8 flex flex-col flex-grow">
                    <div class="flex justify-between items-start mb-4">
                        <div class="flex-1">
                            <span class="text-blue-600 text-[10px] font-extrabold uppercase tracking-widest mb-1 block">{{ $book['cat'] }}</span>
                            <h3 class="text-2xl font-black text-slate-800 group-hover:text-blue-700 transition-colors leading-tight">
                                {{ $book['title'] }}
                            </h3>
                            <p class="text-slate-400 font-medium mt-1 italic">by {{ $book['author'] }}</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4 py-4 border-t border-slate-50 mt-auto text-xs font-bold text-slate-400 uppercase tracking-tighter">
                        <div class="flex items-center gap-1.5">
                            <span class="text-lg">📅</span> {{ $book['year'] }}
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-lg">📍</span> Rak A-12
                        </div>
                    </div>

                    <div class="mt-6 flex gap-3">
                        <button class="flex-1 bg-slate-100 hover:bg-slate-200 text-slate-700 py-4 rounded-2xl font-bold transition-all active:scale-95">
                            Lihat Detail
                        </button>
                        <button class="flex-1 bg-blue-700 hover:bg-blue-800 text-white py-4 rounded-2xl font-bold shadow-lg shadow-blue-100 transition-all active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed" {{ $book['status'] == 'Dipinjam' ? 'disabled' : '' }}>
                            {{ $book['status'] == 'Tersedia' ? 'Pinjam Buku' : 'Booked' }}
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- VIEW ALL BUTTON -->
        <div class="text-center pt-6">
            <button class="text-blue-700 font-bold hover:underline underline-offset-8 transition-all">
                Tampilkan Semua Koleksi (1200+) &rarr;
            </button>
        </div>
    </div>
</div>

<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        50% { transform: translateY(-20px) rotate(5deg); }
    }
    .animate-float { animation: float 5s ease-in-out infinite; }
    
    .animate-fade-in {
        animation: fadeIn 1s ease-out forwards;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>
@endsection