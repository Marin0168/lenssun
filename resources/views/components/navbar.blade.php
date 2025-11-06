<!-- Navbar -->
<section class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur-sm shadow-sm">
  <div class="max-w-[1200px] mx-auto flex items-center justify-between px-6 py-4">
    <!-- Logo -->
    <a href="#hero" class="flex items-center gap-3">
      <img src="/logo.png" alt="Lens-Sun Logo" class="h-10 w-auto">
    </a>

    <!-- Navigatie -->
    <nav class="hidden md:flex items-center gap-8 text-secondary font-medium">
      <a href="#product" class="hover:text-primary transition-colors">Product</a>
      <a href="#configurator" class="hover:text-primary transition-colors">Configurator</a>
      <a href="#contact" class="hover:text-primary transition-colors">Contact</a>
    </nav>

    <!-- CTA knop -->
    <a href="#configurator"
       class="hidden md:inline-block rounded-full bg-primary text-white px-6 py-2 font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
      Bestel nu
    </a>

    <!-- Mobile menu knop -->
    <button id="mobileMenuBtn" class="md:hidden text-primary text-2xl focus:outline-none">
      ☰
    </button>
  </div>

  <!-- Mobiel menu -->
  <div id="mobileMenu" class="hidden flex flex-col items-center bg-white border-t border-gray-200 md:hidden">
    <a href="#product" class="w-full text-center py-3 text-secondary hover:bg-gray-100">Product</a>
    <a href="#configurator" class="w-full text-center py-3 text-secondary hover:bg-gray-100">Configurator</a>
    <a href="#contact" class="w-full text-center py-3 text-secondary hover:bg-gray-100">Contact</a>
    <a href="#configurator" class="w-full text-center py-3 text-primary font-semibold hover:bg-gray-50">Bestel nu</a>
  </div>

  <script>
    // Toggle mobiel menu
    document.getElementById('mobileMenuBtn').addEventListener('click', () => {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('hidden');
    });
  </script>
</section>
