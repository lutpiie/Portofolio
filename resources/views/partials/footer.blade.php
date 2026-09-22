<footer class="bg-green-dark text-cream mt-8">
    <div class="max-w-6xl mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">

            <!-- Kolom 1: Brand -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <i class="fas fa-mug-hot text-2xl"></i>
                    <span class="font-display text-2xl font-bold">Nystra Coffee</span>
                </div>
                <p class="text-sm opacity-80 leading-relaxed">
                    Nikmati kopi terbaik dengan suasana nyaman. Tempat sempurna untuk bersantai dan berkumpul.
                </p>
            </div>

            <!-- Kolom 2: Link Cepat -->
            <div>
                <h4 class="font-semibold mb-4">Menu Cepat</h4>
                <div class="space-y-2 text-sm opacity-80">
                    <a href="{{ route('home') }}" class="block hover:opacity-100 transition-opacity">Home</a>
                    <a href="{{ route('menu') }}" class="block hover:opacity-100 transition-opacity">Menu</a>
                    <a href="{{ route('about') }}" class="block hover:opacity-100 transition-opacity">About Us</a>
                    <a href="{{ route('contact') }}" class="block hover:opacity-100 transition-opacity">Contact Us</a>
                </div>
            </div>

            <!-- Kolom 3: Kontak -->
            <div>
                <h4 class="font-semibold mb-4">Kontak</h4>
                <div class="space-y-2 text-sm opacity-80">
                    <p><i class="fas fa-map-marker-alt mr-2"></i>Jl. Kopi Nusantara No. 123</p>
                    <p><i class="fas fa-phone-alt mr-2"></i>+62 812-3456-7890</p>
                    <p><i class="fas fa-envelope mr-2"></i>hello@nystracoffee.com</p>
                </div>
            </div>
        </div>

        <!-- Garis + Copyright -->
        <div class="border-t border-green-light border-opacity-30 pt-6 text-center text-sm opacity-70">
            <p>&copy; {{ date('Y') }} Nystra Coffee. All rights reserved.</p>
        </div>
    </div>
</footer>