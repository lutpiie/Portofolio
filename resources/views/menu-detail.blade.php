@extends('layouts.app')

@section('content')
<div class="min-h-[calc(100vh-72px)] py-16">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Tombol Kembali -->
        <a href="{{ route('menu') }}" class="btn-kembali inline-flex items-center gap-2 text-green-brand font-semibold mb-8 hover:text-green-dark transition-all duration-300">
            <i class="fas fa-arrow-left"></i>
            <span>Kembali</span>
        </a>

        <!-- Judul Kategori -->
        <div class="text-center mb-12">
            <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-800 mb-4">{{ $title }}</h2>
            <div class="w-20 h-1 bg-green-brand mx-auto rounded-full"></div>
        </div>

        <!-- Grid Item Menu -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($items as $item)
                <div class="item-card bg-white rounded-2xl overflow-hidden shadow-sm">
                    <!-- Placeholder Foto -->
                    <div class="img-placeholder aspect-square" style="border-radius:12px 12px 0 0; border-top:none; border-left:none; border-right:none;">
                        <div class="text-center">
                            <i class="fas fa-times text-3xl mb-2 opacity-40"></i>
                            <p class="text-xs font-medium opacity-50">Foto {{ $item['name'] }}</p>
                        </div>
                    </div>
                    <!-- Info Item -->
                    <div class="p-4">
                        <h4 class="font-semibold text-gray-800 text-sm mb-1">{{ $item['name'] }}</h4>
                        <p class="text-gray-400 text-xs mb-2">{{ $item['desc'] }}</p>
                        <p class="text-green-brand font-bold text-sm">{{ $item['price'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection