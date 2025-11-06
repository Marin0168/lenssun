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

    <div class="flex items-center gap-3">
      <!-- CTA knop -->
      {{-- <a href="#configurator"
         class="hidden md:inline-block rounded-full bg-primary text-white px-6 py-2 font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
        Bestel nu
      </a> --}}

      <!-- Winkelwagen knop -->
      <button id="cartBtn" class="relative inline-flex items-center justify-center rounded-full border border-gray-200 bg-white px-3 py-2 hover:shadow-sm focus:outline-none focus:ring-2 focus:ring-primary/40">
        <!-- Cart icon -->
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <circle cx="9" cy="21" r="1"></circle>
          <circle cx="20" cy="21" r="1"></circle>
          <path d="M1 1h3l2.6 12.59a2 2 0 0 0 2 1.41h8.72a2 2 0 0 0 2-1.58L22 6H6"></path>
        </svg>
        <!-- Badge -->
        <span id="cartCount" class="absolute -top-1 -right-1 min-w-[18px] h-[18px] px-1 rounded-full bg-primary text-white text-[11px] leading-[18px] text-center font-semibold">0</span>
        <span class="sr-only">Open winkelwagen</span>
      </button>

      <!-- Mobile menu knop -->
      <button id="mobileMenuBtn" class="md:hidden text-primary text-2xl focus:outline-none" aria-label="Open menu">
        ☰
      </button>
    </div>
  </div>

  <!-- Mobiel menu -->
  <div id="mobileMenu" class="hidden flex flex-col items-center bg-white border-t border-gray-200 md:hidden">
    <a href="#product" class="w-full text-center py-3 text-secondary hover:bg-gray-100">Product</a>
    <a href="#configurator" class="w-full text-center py-3 text-secondary hover:bg-gray-100">Configurator</a>
    <a href="#contact" class="w-full text-center py-3 text-secondary hover:bg-gray-100">Contact</a>
    <button class="w-full text-center py-3 text-primary font-semibold hover:bg-gray-50" onclick="openCart()">Winkelwagen</button>
    <a href="#configurator" class="w-full text-center py-3 text-primary font-semibold hover:bg-gray-50">Bestel nu</a>
  </div>

  <!-- Mini-cart overlay -->
  <div id="cartOverlay" class="fixed inset-0 z-[60] hidden">
    <!-- Backdrop -->
    <div id="cartBackdrop" class="absolute inset-0 bg-black/30 opacity-0 transition-opacity"></div>

    <!-- Drawer -->
    <aside id="cartDrawer" class="absolute right-0 top-0 h-full w-full max-w-[420px] translate-x-full bg-white shadow-xl transition-transform">
      <header class="flex items-center justify-between px-6 py-4 border-b">
        <h3 class="text-lg font-semibold">Je winkelwagen</h3>
        <button id="cartClose" class="p-2 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary/40" aria-label="Sluit winkelwagen">
          ✕
        </button>
      </header>

      <!-- Cart items -->
      <div id="cartItems" class="px-6 py-4 space-y-4 max-h-[60vh] overflow-auto">
        <!-- Voorbeelditem (wordt dynamisch vervangen) -->
        <p class="text-secondary">Je winkelwagen is leeg.</p>
      </div>

      <!-- Subtotal + acties -->
      <div class="mt-auto border-t px-6 py-4">
        <div class="flex items-center justify-between mb-3">
          <span class="text-secondary">Subtotaal</span>
          <span id="cartSubtotal" class="font-semibold">€0,00</span>
        </div>
        <div class="flex gap-3">
          <a href="#configurator" class="flex-1 inline-flex items-center justify-center rounded-lg border border-gray-200 px-4 py-3 font-medium hover:bg-gray-50">Verder winkelen</a>
          <a href="#contact" class="flex-1 inline-flex items-center justify-center rounded-lg bg-primary text-white px-4 py-3 font-semibold hover:opacity-95">Afrekenen</a>
        </div>
      </div>
    </aside>
  </div>

  <script>
    // --- Mobile menu ---
    document.getElementById('mobileMenuBtn').addEventListener('click', () => {
      document.getElementById('mobileMenu').classList.toggle('hidden');
    });

    // --- Mini-cart logic ---
    const cartState = {
      items: [], // { id, name, qty, priceCents }
      get count() { return this.items.reduce((s,i)=>s+i.qty,0); },
      get subtotalCents() { return this.items.reduce((s,i)=>s+i.priceCents*i.qty,0); }
    };

    const cartOverlay = document.getElementById('cartOverlay');
    const cartDrawer  = document.getElementById('cartDrawer');
    const cartBackdrop= document.getElementById('cartBackdrop');
    const cartClose   = document.getElementById('cartClose');
    const cartBtn     = document.getElementById('cartBtn');
    const cartCountEl = document.getElementById('cartCount');
    const cartItemsEl = document.getElementById('cartItems');
    const cartSubtotalEl = document.getElementById('cartSubtotal');

    function formatEuro(cents){
      return new Intl.NumberFormat('nl-NL', { style:'currency', currency:'EUR' }).format(cents/100);
    }

    function openCart(){
      cartOverlay.classList.remove('hidden');
      requestAnimationFrame(() => {
        cartBackdrop.classList.remove('opacity-0');
        cartDrawer.classList.remove('translate-x-full');
      });
    }
    function closeCart(){
      cartBackdrop.classList.add('opacity-0');
      cartDrawer.classList.add('translate-x-full');
      setTimeout(()=>cartOverlay.classList.add('hidden'), 200);
    }

    window.openCart = openCart; // voor mobiele knop

    cartBtn.addEventListener('click', openCart);
    cartClose.addEventListener('click', closeCart);
    cartBackdrop.addEventListener('click', closeCart);
    document.addEventListener('keydown', (e)=>{ if(e.key === 'Escape') closeCart(); });

    function renderCart(){
      // badge
      cartCountEl.textContent = cartState.count;

      // items
      if(cartState.items.length === 0){
        cartItemsEl.innerHTML = '<p class="text-secondary">Je winkelwagen is leeg.</p>';
      } else {
        cartItemsEl.innerHTML = cartState.items.map((item, idx)=>`
          <div class="flex items-start gap-3 border rounded-lg p-3">
            <div class="h-12 w-12 rounded bg-surface flex items-center justify-center text-secondary/70">🕶️</div>
            <div class="flex-1">
              <div class="flex items-center justify-between">
                <h4 class="font-medium">${item.name}</h4>
                <button data-index="${idx}" class="cart-remove text-secondary/70 hover:text-primary text-sm">Verwijder</button>
              </div>
              <div class="mt-1 text-sm text-secondary">
                Aantal:
                <button class="qty-dec px-2" data-index="${idx}" aria-label="Minder">−</button>
                <span class="inline-block min-w-[1.5rem] text-center">${item.qty}</span>
                <button class="qty-inc px-2" data-index="${idx}" aria-label="Meer">＋</button>
              </div>
              <div class="mt-1 font-semibold">${formatEuro(item.priceCents*item.qty)}</div>
            </div>
          </div>
        `).join('');
      }

      // subtotal
      cartSubtotalEl.textContent = formatEuro(cartState.subtotalCents);

      // bind acties
      cartItemsEl.querySelectorAll('.cart-remove').forEach(btn=>{
        btn.addEventListener('click', (e)=>{
          const i = Number(e.currentTarget.dataset.index);
          cartState.items.splice(i,1);
          renderCart();
        });
      });
      cartItemsEl.querySelectorAll('.qty-inc').forEach(btn=>{
        btn.addEventListener('click', (e)=>{
          const i = Number(e.currentTarget.dataset.index);
          cartState.items[i].qty += 1;
          renderCart();
        });
      });
      cartItemsEl.querySelectorAll('.qty-dec').forEach(btn=>{
        btn.addEventListener('click', (e)=>{
          const i = Number(e.currentTarget.dataset.index);
          cartState.items[i].qty = Math.max(1, cartState.items[i].qty - 1);
          renderCart();
        });
      });
    }

    // Public API: dispatch een event om items toe te voegen vanuit andere knoppen
    // Voorbeeld: document.dispatchEvent(new CustomEvent('cart:add', { detail:{ id:'lens-sun', name:'Lens-Sun set', priceCents:6500, qty:1 } }));
    document.addEventListener('cart:add', (e)=>{
      const { id, name, priceCents, qty=1 } = e.detail || {};
      if(!id || !name || !priceCents) return;
      const existing = cartState.items.find(i=>i.id===id);
      if(existing) existing.qty += qty; else cartState.items.push({ id, name, priceCents, qty });
      renderCart();
      openCart();
    });

    // Init met een demo-item? Laat uit. render alleen GUI.
    renderCart();
  </script>
</section>
