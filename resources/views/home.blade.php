@extends('layouts.app')

@section('content')
<div class="min-h-[calc(100vh-72px)] flex items-center">
    <div class="max-w-6xl mx-auto px-6 w-full py-12">
        <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">

            <!-- KIRI: Teks -->
            <div class="flex-1 text-center lg:text-left">
                <p class="text-green-brand font-medium text-sm uppercase tracking-[0.2em] mb-4">
                    ☕ Selamat Datang di
                </p>
                <h1 class="font-display text-5xl md:text-7xl font-bold text-gray-800 leading-tight mb-6">
                    Nystra<br>
                    <span class="text-green-brand">Coffee</span>
                </h1>
                <p class="text-gray-600 text-lg leading-relaxed max-w-lg mx-auto lg:mx-0 mb-8">
                    Nikmati secangkir kopi terbaik dengan suasana yang nyaman dan hangat.
                    Tempat sempurna untuk bersantai, bekerja, atau berkumpul bersama teman.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-4 justify-center lg:justify-start mb-8">
                    <a href="{{ route('menu') }}"
                       class="bg-green-brand hover:bg-green-dark text-white font-semibold px-8 py-3.5 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl">
                        Lihat Menu
                    </a>
                    <div class="flex items-center gap-2 text-gray-600">
                        <i class="fas fa-phone-alt text-green-brand"></i>
                        <span class="font-medium">+62 812-3456-7890</span>
                    </div>
                </div>
                <div class="flex items-center gap-6 justify-center lg:justify-start text-sm text-gray-500">
                    <div class="flex items-center gap-2">
                        <i class="fas fa-wifi text-green-brand"></i><span>Free WiFi</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-car text-green-brand"></i><span>Parkir Luas</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <i class="fas fa-snowflake text-green-brand"></i><span>AC & Outdoor</span>
                    </div>
                </div>
            </div>

            <!-- KANAN: Placeholder Foto (bingkai kosong) -->
            <div class="flex-1 w-full max-w-md lg:max-w-lg">
                <div class="img-placeholder aspect-[4/5] rounded-2xl">
                    <div class="text-center">
                        <i class="fas fa-image text-5xl mb-3 opacity-60"></i>
                        <p class="text-sm font-medium opacity-70">Foto Coffee Shop</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection