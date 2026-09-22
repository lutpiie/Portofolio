@extends('layouts.app')

@section('content')
<div class="min-h-[calc(100vh-72px)] py-16">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Judul -->
        <div class="text-center mb-16">
            <p class="text-green-brand font-medium text-sm uppercase tracking-[0.2em] mb-3">Cerita Kami</p>
            <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-800 mb-4">Tentang Kami</h2>
            <div class="w-20 h-1 bg-green-brand mx-auto rounded-full"></div>
        </div>

        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

            <!-- Placeholder Foto -->
            <div class="flex-1 w-full max-w-md lg:max-w-lg">
                <div class="img-placeholder aspect-square rounded-2xl">
                    <div class="text-center">
                        <i class="fas fa-image text-5xl mb-3 opacity-60"></i>
                        <p class="text-sm font-medium opacity-70">Foto About Us</p>
                    </div>
                </div>
            </div>

            <!-- Teks -->
            <div class="flex-1">
                <h3 class="font-display text-3xl font-bold text-gray-800 mb-4">Nystra Coffee</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Berdiri sejak 2020, Nystra Coffee hadir sebagai tempat nongkrong yang nyaman
                    dengan sajian kopi terbaik dari biji kopi pilihan Indonesia.
                </p>
                <p class="text-gray-600 leading-relaxed mb-8">
                    Dengan suasana yang hangat dan desain interior yang estetik,
                    Nystra Coffee adalah tempat sempurna untuk bersantai.
                </p>

                <!-- Statistik -->
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                        <p class="font-display text-3xl font-bold text-green-brand mb-1">5+</p>
                        <p class="text-gray-500 text-sm">Tahun Berdiri</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                        <p class="font-display text-3xl font-bold text-green-brand mb-1">50+</p>
                        <p class="text-gray-500 text-sm">Menu Pilihan</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                        <p class="font-display text-3xl font-bold text-green-brand mb-1">10K+</p>
                        <p class="text-gray-500 text-sm">Pelanggan</p>
                    </div>
                    <div class="text-center p-4 bg-white rounded-xl shadow-sm">
                        <p class="font-display text-3xl font-bold text-green-brand mb-1">4.8</p>
                        <p class="text-gray-500 text-sm">Rating ⭐</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection