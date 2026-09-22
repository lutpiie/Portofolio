@extends('layouts.app')

@section('content')
<div class="min-h-[calc(100vh-72px)] py-16">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Judul -->
        <div class="text-center mb-16">
            <p class="text-green-brand font-medium text-sm uppercase tracking-[0.2em] mb-3">Hubungi Kami</p>
            <h2 class="font-display text-4xl md:text-5xl font-bold text-gray-800 mb-4">Contact Us</h2>
            <div class="w-20 h-1 bg-green-brand mx-auto rounded-full"></div>
        </div>

        <div class="flex flex-col lg:flex-row gap-12 lg:gap-16">

            <!-- Info Kontak -->
            <div class="flex-1">
                <h3 class="font-display text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                <div class="space-y-6 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-brand rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 mb-1">Alamat</p>
                            <p class="text-gray-600 text-sm">Jl. Kopi Nusantara No. 123, Jakarta Selatan</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-brand rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-phone-alt text-white"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 mb-1">Telepon</p>
                            <p class="text-gray-600 text-sm">+62 812-3456-7890</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-brand rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-envelope text-white"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 mb-1">Email</p>
                            <p class="text-gray-600 text-sm">hello@nystracoffee.com</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-green-brand rounded-xl flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-clock text-white"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 mb-1">Jam Buka</p>
                            <p class="text-gray-600 text-sm">Senin - Minggu: 08.00 - 22.00 WIB</p>
                        </div>
                    </div>
                </div>

                <!-- Sosial Media -->
                <h4 class="font-semibold text-gray-800 mb-3">Ikuti Kami</h4>
                <div class="flex gap-3">
                    <a href="#" class="w-10 h-10 bg-green-brand hover:bg-green-dark rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-instagram text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-green-brand hover:bg-green-dark rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-facebook-f text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-green-brand hover:bg-green-dark rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-tiktok text-white"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-green-brand hover:bg-green-dark rounded-lg flex items-center justify-center transition-colors duration-300">
                        <i class="fab fa-whatsapp text-white"></i>
                    </a>
                </div>
            </div>

            <!-- Form Kontak -->
            <div class="flex-1">
                <div class="bg-white rounded-2xl shadow-md p-8">
                    <h3 class="font-display text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                    <form method="POST" action="{{ route('contact.send') }}">
                        @csrf
                        <div class="mb-5">
                            <label class="block text-gray-700 font-medium text-sm mb-2">Nama</label>
                            <input type="text" name="name" placeholder="Masukkan nama Anda"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-brand focus:outline-none transition-colors text-sm"
                                   value="{{ old('name') }}" required>
                        </div>
                        <div class="mb-5">
                            <label class="block text-gray-700 font-medium text-sm mb-2">Email</label>
                            <input type="email" name="email" placeholder="Masukkan email Anda"
                                   class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-brand focus:outline-none transition-colors text-sm"
                                   value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-5">
                            <label class="block text-gray-700 font-medium text-sm mb-2">Pesan</label>
                            <textarea name="message" rows="4" placeholder="Tulis pesan Anda..."
                                      class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-green-brand focus:outline-none transition-colors text-sm resize-none"
                                      required>{{ old('message') }}</textarea>
                        </div>
                        <button type="submit"
                                class="w-full bg-green-brand hover:bg-green-dark text-white font-semibold py-3.5 rounded-xl transition-all duration-300 shadow-md hover:shadow-lg">
                            <i class="fas fa-paper-plane mr-2"></i>Kirim Pesan
                        </button>
                    </form>

                    <!-- Flash Message -->
                    @if(session('success'))
                        <div class="mt-4 p-3 bg-green-light bg-opacity-20 text-green-dark text-sm rounded-xl text-center font-medium">
                            <i class="fas fa-check-circle mr-1"></i> {{ session('success') }}
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection