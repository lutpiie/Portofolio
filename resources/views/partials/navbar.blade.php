<!-- NAVBAR HIJAU -->
<nav class="bg-green-brand sticky top-0 z-50 shadow-lg">
    <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">

        <!-- KIRI: Logo / Brand -->
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <i class="fas fa-mug-hot text-cream text-2xl"></i>
            <span class="font-display text-cream text-2xl font-bold tracking-wide">
                Nystra Coffee
            </span>
        </a>

        <!-- KANAN: Menu Navigasi (Desktop) -->
        <div class="hidden md:flex items-center gap-8">
            <a href="{{ route('home') }}"
               class="nav-link text-cream font-medium text-sm uppercase tracking-wider {{ request()->routeIs('home') ? 'active' : '' }}">
                Home
            </a>
            <a href="{{ route('menu') }}"
               class="nav-link text-cream font-medium text-sm uppercase tracking-wider {{ request()->routeIs('menu.*') ? 'active' : '' }}">
                Menu
            </a>
            <a href="{{ route('about') }}"
               class="nav-link text-cream font-medium text-sm uppercase tracking-wider {{ request()->routeIs('about') ? 'active' : '' }}">
                About Us
            </a>
            <a href="{{ route('contact') }}"
               class="nav-link text-cream font-medium text-sm uppercase tracking-wider {{ request()->routeIs('contact') ? 'active' : '' }}">
                Contact Us
            </a>
        </div>

        <!-- Tombol Hamburger (Mobile) -->
        <button onclick="toggleMobileMenu()" class="md:hidden text-cream text-2xl focus:outline-none">
            <i class="fas fa-bars" id="mobile-menu-icon"></i>
        </button>
    </div>

    <!-- Menu Mobile (muncul saat hamburger diklik) -->
    <div id="mobile-menu" class="hidden md:hidden bg-green-dark border-t border-green-light">
        <div class="px-6 py-4 flex flex-col gap-4">
            <a href="{{ route('home') }}" class="text-cream font-medium text-sm uppercase tracking-wider">Home</a>
            <a href="{{ route('menu') }}" class="text-cream font-medium text-sm uppercase tracking-wider">Menu</a>
            <a href="{{ route('about') }}" class="text-cream font-medium text-sm uppercase tracking-wider">About Us</a>
            <a href="{{ route('contact') }}" class="text-cream font-medium text-sm uppercase tracking-wider">Contact Us</a>
        </div>
    </div>
</nav>

<!-- Script toggle menu mobile -->
<script>
    function toggleMobileMenu() {
        var menu = document.getElementById('mobile-menu');
        var icon = document.getElementById('mobile-menu-icon');
        menu.classList.toggle('hidden');
        if (menu.classList.contains('hidden')) {
            icon.className = 'fas fa-bars';
        } else {
            icon.className = 'fas fa-times';
        }
    }
</script>