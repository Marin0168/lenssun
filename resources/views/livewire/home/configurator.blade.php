<section id="configurator" class="bg-white px-5 py-24">
  <div class="mx-auto max-w-[1200px]">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold tracking-tight">Configureer jouw Lens-Sun</h2>
      <p class="text-secondary text-lg max-w-[720px] mx-auto">
        Stel beide lenzen in op jouw persoonlijke specificaties voor optimaal comfort en prestaties.
      </p>
    </div>

    <!-- Grid: Gallery + Config + Sticky Summary -->
    <div class="grid gap-10 lg:grid-cols-[1.1fr_1.2fr_0.8fr] items-start">

      <!-- 🖼️ Product gallery -->
      <aside class="space-y-5">
        <div class="relative rounded-2xl overflow-hidden shadow-xl bg-gradient-to-br from-[#f8f9fa] to-white p-4">
          <div class="absolute inset-0 pointer-events-none opacity-60 [background:radial-gradient(600px_200px_at_80%_0%,rgba(255,183,77,0.12),transparent_70%)]"></div>
          <img id="main-photo" src="{{ asset('product.jpg') }}" alt="Lens-Sun product" class="relative z-[1] mx-auto max-h-[460px] w-auto rounded-xl object-contain">
        </div>

        <!-- Thumbnails -->
        <div class="grid grid-cols-4 gap-4">
          <button data-photo="{{ asset('product.jpg') }}" class="thumb active rounded-xl overflow-hidden ring-2 ring-primary/10 hover:ring-primary/40 transition">
            <img src="{{ asset('product.jpg') }}" alt="Verpakking vooraanzicht" class="w-full h-24 object-cover">
          </button>
          <button data-photo="{{ asset('product_alt1.jpg') }}" class="thumb rounded-xl overflow-hidden ring-2 ring-transparent hover:ring-primary/40 transition">
            <img src="{{ asset('product_alt1.jpg') }}" alt="Detail lens tint" class="w-full h-24 object-cover">
          </button>
          <button data-photo="{{ asset('product_alt2.jpg') }}" class="thumb rounded-xl overflow-hidden ring-2 ring-transparent hover:ring-primary/40 transition">
            <img src="{{ asset('product_alt2.jpg') }}" alt="Zijaanzicht verpakking" class="w-full h-24 object-cover">
          </button>
          <button data-photo="{{ asset('product_alt3.jpg') }}" class="thumb rounded-xl overflow-hidden ring-2 ring-transparent hover:ring-primary/40 transition">
            <img src="{{ asset('product_alt3.jpg') }}" alt="Lens-Sun lifestyle" class="w-full h-24 object-cover">
          </button>
        </div>

        <!-- Badges / vertrouwen -->
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
          <div class="flex items-center gap-2 rounded-xl border border-gray-200 px-3 py-2">
            <span class="text-xl">🇨🇭</span><span class="text-sm font-semibold">Op maat in Zwitserland</span>
          </div>
          <div class="flex items-center gap-2 rounded-xl border border-gray-200 px-3 py-2">
            <span class="text-xl">☀️</span><span class="text-sm font-semibold">UV-bescherming</span>
          </div>
          <div class="flex items-center gap-2 rounded-xl border border-gray-200 px-3 py-2">
            <span class="text-xl">⏱️</span><span class="text-sm font-semibold">Levertijd 1–2 weken</span>
          </div>
        </div>
      </aside>

      <!-- ⚙️ Configurator fields -->
      <div class="space-y-8">
        <!-- Linker -->
        <div class="rounded-2xl bg-[#f8f9fa] p-8 ring-1 ring-black/5">
          <div class="flex items-center justify-between mb-2">
            <h3 class="text-xl font-semibold text-primary">👁️ Linker lens</h3>
            <span class="text-xs uppercase tracking-wide text-secondary/70">Oog L</span>
          </div>
          <p class="text-sm text-secondary mb-6">Pas de basiscurve, sterkte en tint aan voor je linkeroog.</p>

          <div class="grid gap-5 md:grid-cols-2 mb-5">
            <div class="flex flex-col">
              <label for="left-bcr" class="mb-2 text-sm font-semibold text-secondary">BCR (Basiscurve)</label>
              <select id="left-bcr" class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none">
                <option value="8.6">8,6 mm</option>
                <option value="8.9">8,9 mm</option>
              </select>
            </div>
            <div class="flex flex-col">
              <label for="left-diameter" class="mb-2 text-sm font-semibold text-secondary">Diameter</label>
              <select id="left-diameter" class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none">
                <option value="14.0">14,0 mm</option>
                <option value="14.2">14,2 mm</option>
                <option value="14.5">14,5 mm</option>
              </select>
            </div>
          </div>

          <div class="grid gap-5 md:grid-cols-2">
            <div class="flex flex-col">
              <label for="left-strength" class="mb-2 text-sm font-semibold text-secondary">Sterkte (DPT)</label>
              <input id="left-strength" type="number" min="-12" max="12" step="0.25" value="0" placeholder="0.00"
                     class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"/>
              <span class="mt-2 text-xs text-secondary/70">Tip: voer desnoods <span class="font-semibold">0.00</span> in als je geen sterkte nodig hebt.</span>
            </div>
            <div class="flex flex-col">
              <label for="left-color" class="mb-2 text-sm font-semibold text-secondary">Kleur tint</label>
              <select id="left-color" class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none">
                <option value="grijs">Grijs (neutraal)</option>
                <option value="bruin">Bruin (warm)</option>
                <option value="groen">Groen (contrast)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Rechter -->
        <div class="rounded-2xl bg-[#f8f9fa] p-8 ring-1 ring-black/5">
          <div class="flex items-center justify-between mb-2">
            <h3 class="text-xl font-semibold text-primary">👁️ Rechter lens</h3>
            <span class="text-xs uppercase tracking-wide text-secondary/70">Oog R</span>
          </div>
          <p class="text-sm text-secondary mb-6">Stel de specificaties voor je rechteroog in.</p>

          <div class="grid gap-5 md:grid-cols-2 mb-5">
            <div class="flex flex-col">
              <label for="right-bcr" class="mb-2 text-sm font-semibold text-secondary">BCR (Basiscurve)</label>
              <select id="right-bcr" class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none">
                <option value="8.6">8,6 mm</option>
                <option value="8.9">8,9 mm</option>
              </select>
            </div>
            <div class="flex flex-col">
              <label for="right-diameter" class="mb-2 text-sm font-semibold text-secondary">Diameter</label>
              <select id="right-diameter" class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none">
                <option value="14.0">14,0 mm</option>
                <option value="14.2">14,2 mm</option>
                <option value="14.5">14,5 mm</option>
              </select>
            </div>
          </div>

          <div class="grid gap-5 md:grid-cols-2">
            <div class="flex flex-col">
              <label for="right-strength" class="mb-2 text-sm font-semibold text-secondary">Sterkte (DPT)</label>
              <input id="right-strength" type="number" min="-12" max="12" step="0.25" value="0" placeholder="0.00"
                     class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"/>
            </div>
            <div class="flex flex-col">
              <label for="right-color" class="mb-2 text-sm font-semibold text-secondary">Kleur tint</label>
              <select id="right-color" class="rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none">
                <option value="grijs">Grijs (neutraal)</option>
                <option value="bruin">Bruin (warm)</option>
                <option value="groen">Groen (contrast)</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Feature chips -->
        <div class="flex flex-wrap gap-2">
          <span class="inline-flex items-center gap-2 rounded-full bg-[#f8f9fa] px-3 py-1 text-sm"><span>🕶️</span> Verduisterende tint</span>
          <span class="inline-flex items-center gap-2 rounded-full bg-[#f8f9fa] px-3 py-1 text-sm"><span>🎯</span> Sport-geoptimaliseerd</span>
          <span class="inline-flex items-center gap-2 rounded-full bg-[#f8f9fa] px-3 py-1 text-sm"><span>🧩</span> Per oog instelbaar</span>
        </div>
      </div>

      <!-- 🧾 Sticky summary -->
      <div class="lg:sticky lg:top-8">
        <div class="rounded-2xl bg-white p-8 shadow-xl ring-1 ring-black/5">
          <h3 class="text-xl font-semibold mb-2">Jouw configuratie</h3>
          <p class="text-secondary text-sm">Op maat gemaakte verduisterende sportlenzen</p>

          <div class="my-6">
            <div class="flex items-center justify-between py-2 border-b border-gray-100">
              <span class="text-secondary">Setprijs</span>
              <span class="font-semibold">€65</span>
            </div>
            <div class="flex items-center justify-between py-2">
              <span class="text-secondary">Levertijd</span>
              <span class="font-semibold">1–2 weken</span>
            </div>
          </div>

          <div class="rounded-xl bg-[#f8f9fa] p-4 mb-6 text-sm">
            <div class="font-semibold mb-1">Snelle check</div>
            <ul class="list-disc ms-4 text-secondary space-y-1">
              <li>Beide ogen ingesteld?</li>
              <li>Sterkte juist (DPT)?</li>
              <li>Gewenste tint gekozen?</li>
            </ul>
          </div>

          <div class="flex flex-col gap-3">
            <button
              onclick="document.dispatchEvent(new CustomEvent('cart:add',{ detail:{ id:'lens-sun', name:'Lens-Sun set', priceCents:6500, qty:1, specs: collectSpecs() } }))"
              class="inline-flex items-center justify-center gap-2 rounded-full bg-primary px-6 py-3 text-black font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
              <span>🛒</span> Voeg toe aan winkelwagen
            </button>
            <button
              onclick="document.getElementById('contact')?.scrollIntoView({behavior:'smooth'})"
              class="inline-flex items-center justify-center gap-2 rounded-full bg-black/5 text-black px-6 py-3 font-semibold hover:bg-black/10 transition">
              Of stel een vraag
            </button>
          </div>

          <!-- Live preview van keuze -->
          <div class="mt-6 text-sm">
            <div class="font-semibold mb-2">Jouw keuze</div>
            <div id="choice-preview" class="space-y-1 text-secondary">
              <div>👁️ L: BCR <span data-out="l-bcr">8,6</span> • D <span data-out="l-dia">14,0</span> •
                Sterkte <span data-out="l-str">0.00</span> • Tint <span data-out="l-col">grijs</span></div>
              <div>👁️ R: BCR <span data-out="r-bcr">8,6</span> • D <span data-out="r-dia">14,0</span> •
                Sterkte <span data-out="r-str">0.00</span> • Tint <span data-out="r-col">grijs</span></div>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- /grid -->
  </div>
</section>
<script>
  // Thumbnails → grote foto
  document.querySelectorAll('#configurator .thumb').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('#configurator .thumb').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const src = btn.getAttribute('data-photo');
      const img = document.getElementById('main-photo');
      if (src && img) img.src = src;
    });
  });

  // Helpers om UI keuze live te tonen
  const map = {
    'left-bcr':  '[data-out="l-bcr"]',
    'left-diameter':'[data-out="l-dia"]',
    'left-strength':'[data-out="l-str"]',
    'left-color':'[data-out="l-col"]',
    'right-bcr':'[data-out="r-bcr"]',
    'right-diameter':'[data-out="r-dia"]',
    'right-strength':'[data-out="r-str"]',
    'right-color':'[data-out="r-col"]',
  };

  Object.keys(map).forEach(id => {
    const el = document.getElementById(id);
    const out = document.querySelector(map[id]);
    if (!el || !out) return;
    const update = () => {
      let v = el.value;
      if (id.includes('strength')) v = Number(v).toFixed(2);
      if (id.includes('bcr') || id.includes('diameter')) v = v.replace('.', ',');
      out.textContent = v;
    };
    el.addEventListener('input', update);
    el.addEventListener('change', update);
    update();
  });

  // Export alle specs voor je cart/add event
  window.collectSpecs = function collectSpecs(){
    const get = (id) => document.getElementById(id)?.value || '';
    return {
      leftBcr: get('left-bcr'),
      rightBcr: get('right-bcr'),
      leftDiameter: get('left-diameter'),
      rightDiameter: get('right-diameter'),
      leftStrength: (Number(get('left-strength'))||0).toFixed(2),
      rightStrength: (Number(get('right-strength'))||0).toFixed(2),
      leftColor: get('left-color'),
      rightColor: get('right-color'),
    };
  };
</script>
