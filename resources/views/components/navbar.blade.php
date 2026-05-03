<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Online - PerpusApp</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-down { animation: fadeInDown 0.3s ease-out forwards; }
    </style>
</head>

<body class="bg-slate-50 min-h-screen flex flex-col text-slate-900">

    <!-- NAVBAR -->
    <nav class="bg-blue-700 shadow-xl sticky top-0 z-50 border-b border-blue-600/50 backdrop-blur-md bg-opacity-95">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- LOGO SECTION -->
                <div class="flex items-center gap-3 shrink-0">
                    <div class="bg-white text-blue-700 w-10 h-10 rounded-xl flex items-center justify-center font-black text-xl shadow-lg transform rotate-3">
                        P
                    </div>
                    <div class="flex flex-col">
                        <span class="text-white text-lg font-bold tracking-tight leading-none">PerpusApp</span>
                        <span class="text-blue-200 text-[10px] uppercase tracking-widest font-semibold mt-1">Digital Library</span>
                    </div>
                </div>

                <!-- MENU DESKTOP -->
                <div class="hidden md:flex items-center gap-1 bg-blue-800/30 px-2 py-1.5 rounded-2xl border border-white/10 mx-4 overflow-x-auto no-scrollbar">
                    <a href="/" class="text-white px-4 py-2 rounded-xl text-sm font-bold hover:bg-blue-600 transition-all duration-300">Home</a>
                    <a href="#" class="text-blue-100 px-4 py-2 rounded-xl text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all whitespace-nowrap">Daftar Buku</a>
                    <a href="#" class="text-blue-100 px-4 py-2 rounded-xl text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all whitespace-nowrap">Kategori Koleksi</a>
                    
                    <!-- Menu khusus Login (Desktop) -->
                    <div id="auth-menu-desktop" class="hidden flex gap-1">
                        <a href="#" class="text-blue-100 px-4 py-2 rounded-xl text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all whitespace-nowrap">Status Peminjaman</a>
                        <a href="#" class="text-blue-100 px-4 py-2 rounded-xl text-sm font-semibold hover:bg-blue-600 hover:text-white transition-all whitespace-nowrap">Manajemen User</a>
                    </div>
                </div>

                <!-- RIGHT ACTION -->
                <div class="flex items-center gap-3 shrink-0">
                    <div class="hidden sm:block" id="login-container">
                        <button onclick="simulateLogin()" class="bg-white text-blue-700 px-6 py-2.5 rounded-xl font-bold text-sm shadow-md hover:shadow-blue-500/20 hover:-translate-y-0.5 transition-all active:scale-95">
                            Masuk
                        </button>
                    </div>
                    
                    <!-- Profile Mockup (Tampil setelah login) -->
                    <div id="user-profile" class="hidden flex items-center gap-3 bg-blue-800/50 p-1.5 pr-4 rounded-2xl border border-white/10">
                        <div class="w-8 h-8 bg-blue-400 rounded-lg flex items-center justify-center font-bold text-white text-xs">AD</div>
                        <span class="text-white text-xs font-bold hidden lg:block uppercase tracking-wider">Admin</span>
                        <button onclick="simulateLogout()" class="text-blue-200 hover:text-white text-[10px] font-bold ml-2 underline uppercase">Keluar</button>
                    </div>

                    <!-- MOBILE TOGGLE BUTTON -->
                    <button id="menu-button" class="md:hidden text-white p-2 rounded-xl hover:bg-blue-600 transition-colors focus:outline-none border border-white/20">
                        <svg id="menu-icon" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- MOBILE MENU DRAWER -->
        <div id="mobile-menu" class="hidden md:hidden bg-blue-800 border-t border-blue-600 animate-fade-in-down">
            <div class="px-4 py-6 space-y-2">
                <a href="/" class="flex items-center text-white bg-blue-700 px-4 py-3 rounded-xl font-bold">
                    <span class="w-2 h-2 bg-blue-300 rounded-full mr-3"></span> Home
                </a>
                <a href="#" class="block text-blue-100 hover:bg-blue-700 hover:text-white px-4 py-3 rounded-xl transition font-medium">Daftar Buku</a>
                <a href="#" class="block text-blue-100 hover:bg-blue-700 hover:text-white px-4 py-3 rounded-xl transition font-medium">Kategori Koleksi</a>
                
                <!-- Menu khusus Login (Mobile) -->
                <div id="auth-menu-mobile" class="hidden space-y-2 border-t border-blue-700/50 pt-2">
                    <a href="#" class="block text-blue-100 hover:bg-blue-700 hover:text-white px-4 py-3 rounded-xl transition font-medium italic">Status Peminjaman</a>
                    <a href="#" class="block text-blue-100 hover:bg-blue-700 hover:text-white px-4 py-3 rounded-xl transition font-medium italic">Manajemen User</a>
                </div>

                <div class="pt-4 mt-4 border-t border-blue-700/50" id="mobile-login-btn">
                    <button onclick="simulateLogin()" class="w-full bg-white text-blue-700 py-4 rounded-xl font-bold shadow-xl active:scale-95 transition-transform">
                        Login Ke Sistem
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="flex-grow">
        <!-- HERO SECTION -->
        <header class="bg-blue-700 relative py-16 lg:py-24 overflow-hidden">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <svg class="h-full w-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
                </svg>
            </div>
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center md:text-left">
                <div class="flex flex-col md:flex-row items-center justify-between gap-12">
                    <div class="max-w-2xl">
                        <h1 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                            Akses Ribuan Buku dalam Satu Genggaman.
                        </h1>
                        <p class="text-blue-100 text-lg mb-8 opacity-90 leading-relaxed">
                            Tingkatkan wawasan Anda dengan koleksi literatur terlengkap, mulai dari teknologi, sastra, hingga sains.
                        </p>
                        <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                            <button class="bg-white text-blue-700 px-8 py-4 rounded-2xl font-bold shadow-2xl hover:bg-blue-50 transition-all">Jelajahi Buku</button>
                        </div>
                    </div>
                    <div class="hidden lg:block relative">
                        <div class="bg-white/10 backdrop-blur-2xl p-8 rounded-[3rem] border border-white/20 shadow-2xl">
                            <div class="w-64 h-80 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-2xl shadow-inner flex items-center justify-center text-6xl">📖</div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- QUICK STATS -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-10 relative z-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-[2rem] shadow-xl border border-slate-100 flex items-center gap-5">
                    <div class="w-14 h-14 bg-blue-100 text-blue-700 rounded-2xl flex items-center justify-center text-2xl font-bold">1.2k</div>
                    <div>
                        <p class="text-slate-500 text-sm font-medium">Total Koleksi</p>
                        <h3 class="font-bold text-lg leading-none text-slate-800">Buku Digital</h3>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-[2rem] shadow-xl border border-slate-100 flex items-center gap-5">
                    <div class="w-14 h-14 bg-emerald-100 text-emerald-700 rounded-2xl flex items-center justify-center text-2xl font-bold">24</div>
                    <div>
                        <p class="text-slate-500 text-sm font-medium">Kategori</p>
                        <h3 class="font-bold text-lg leading-none text-slate-800">Topik Pilihan</h3>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-[2rem] shadow-xl border border-slate-100 flex items-center gap-5">
                    <div class="w-14 h-14 bg-amber-100 text-amber-700 rounded-2xl flex items-center justify-center text-2xl font-bold">15</div>
                    <div>
                        <p class="text-slate-500 text-sm font-medium">Peminjaman</p>
                        <h3 class="font-bold text-lg leading-none text-slate-800">Aktif Hari Ini</h3>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer class="bg-white border-t border-slate-200 py-8 mt-12">
        <div class="text-center text-slate-400 text-sm">
            &copy; 2026 PerpusApp Digital Library.
        </div>
    </footer>

    <script>
        // Logika Toggle Menu Mobile
        const menuButton = document.getElementById('menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuButton.addEventListener('click', () => {
            const isHidden = mobileMenu.classList.contains('hidden');
            if (isHidden) {
                mobileMenu.classList.remove('hidden');
                menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />`;
            } else {
                mobileMenu.classList.add('hidden');
                menuIcon.innerHTML = `<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />`;
            }
        });

        // SIMULASI LOGIN (Hanya untuk demo tampilan)
        // Jika pakai Laravel, bagian ini nanti diganti dengan @auth ... @endauth
        function simulateLogin() {
            // Tampilkan menu rahasia
            document.getElementById('auth-menu-desktop').classList.remove('hidden');
            document.getElementById('auth-menu-mobile').classList.remove('hidden');
            
            // Tukar tombol login dengan profile
            document.getElementById('login-container').classList.add('hidden');
            document.getElementById('mobile-login-btn').classList.add('hidden');
            document.getElementById('user-profile').classList.remove('hidden');
            
            alert("Berhasil Login! Menu Manajemen & Peminjaman kini aktif.");
        }

        function simulateLogout() {
            // Sembunyikan menu rahasia
            document.getElementById('auth-menu-desktop').classList.add('hidden');
            document.getElementById('auth-menu-mobile').classList.add('hidden');
            
            // Tukar profile dengan tombol login
            document.getElementById('login-container').classList.remove('hidden');
            document.getElementById('mobile-login-btn').classList.remove('hidden');
            document.getElementById('user-profile').classList.add('hidden');
            
            // Redirect ke Home
            window.location.href = "/";
        }
    </script>
</body>
</html>