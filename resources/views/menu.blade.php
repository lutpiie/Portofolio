@extends('layouts.app')

@section('content')
<div class="min-h-[calc(100vh-72px)] py-16">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Judul -->
        <div class="text-center mb-16">
            <p class="text-green-brand font-medium text-sm uppercase tracking-[0.2em] mb-3">Pilihan Terbaik</p>
            <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-800 mb-4">Menu Kami</h2>
            <div class="w-20 h-1 bg-green-brand mx-auto rounded-full"></div>
        </div>

        <!-- 3 Kartu Kategori -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- MAKANAN -->
            <a href="{{ route('menu.detail', 'makanan') }}" class="menu-card bg-white rounded-2xl overflow-hidden shadow-md block">
                <div class="img-placeholder aspect-[4/3]" style="border-radius:0; border:none; border-bottom: 2px dashed #C4B89A;">
                    <div class="text-center">
                        <i class="fas fa-utensils text-4xl mb-2 opacity-60"></i>
                        <p class="text-sm font-medium opacity-70">Foto Makanan</p>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-2">Makanan</h3>
                    <p class="text-gray-500 text-sm">Berbagai pilihan makanan lezat dan menggugah selera</p>
                    <div class="mt-4 text-green-brand font-medium text-sm flex items-center justify-center gap-2">
                        <span>Lihat Menu</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </div>
                </div>
            </a>

            <!-- MINUMAN -->
            <a href="{{ route('menu.detail', 'minuman') }}" class="menu-card bg-white rounded-2xl overflow-hidden shadow-md block">
                <div class="img-placeholder aspect-[4/3]" style="border-radius:0; border:none; border-bottom: 2px dashed #C4B89A;">
                    <div class="text-center">
                        <i class="fas fa-coffee text-4xl mb-2 opacity-60"></i>
                        <p class="text-sm font-medium opacity-70">Foto Minuman</p>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-2">Minuman</h3>
                    <p class="text-gray-500 text-sm">Kopi, teh, dan berbagai minuman segar lainnya</p>
                    <div class="mt-4 text-green-brand font-medium text-sm flex items-center justify-center gap-2">
                        <span>Lihat Menu</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </div>
                </div>
            </a>

            <!-- COZY SIPS -->
            <a href="{{ route('menu.detail', 'cozy') }}" class="menu-card bg-white rounded-2xl overflow-hidden shadow-md block">
                <div class="img-placeholder aspect-[4/3]" style="border-radius:0; border:none; border-bottom: 2px dashed #C4B89A;">
                    <div class="text-center">
                        <i class="fas fa-glass-cheers text-4xl mb-2 opacity-60"></i>
                        <p class="text-sm font-medium opacity-70">Foto Cozy Sips</p>
                    </div>
                </div>
                <div class="p-6 text-center">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-2">Cozy Sips</h3>
                    <p class="text-gray-500 text-sm">Nikmati minuman signature kami yang spesial</p>
                    <div class="mt-4 text-green-brand font-medium text-sm flex items-center justify-center gap-2">
                        <span>Lihat Menu</span>
                        <i class="fas fa-arrow-right text-xs"></i>
                    </div>
                </div>
            </a>

        </div>
    </div>
</div>
@endsection