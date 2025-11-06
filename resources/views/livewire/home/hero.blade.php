<section id="hero"
  class="relative flex items-center justify-center min-h-[100vh] overflow-hidden bg-gradient-to-br from-[#fff8f2] via-[#fefefe] to-[#f9fafb] px-6 md:px-12">
  
  <!-- Oranje gradient aura -->
  <div aria-hidden="true"
       class="absolute inset-0 bg-[radial-gradient(circle_at_80%_20%,rgba(248,127,12,0.25)_0%,transparent_70%)]"></div>

  <!-- Dynamische shine animatie -->
  <div aria-hidden="true"
       class="absolute -top-1/2 left-1/2 w-[1200px] h-[1200px] bg-[conic-gradient(from_120deg,rgba(248,127,12,0.08)_0%,transparent_60%,rgba(248,127,12,0.05)_100%)] animate-[spin_30s_linear_infinite] opacity-70"></div>

  <div class="relative z-10 grid max-w-[1300px] w-full gap-12 md:grid-cols-2 items-center">
    <!-- Tekst -->
    <div class="text-center md:text-left space-y-8">
      <h1 id="hero-title"
          class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-extrabold leading-snug sm:leading-tight tracking-tight mt-16 sm:mt-0">
        Zie meer.<br class="sm:hidden"/> 
        <span class="text-[#f87f0c]">Reageer sneller.</span><br class="sm:hidden"/>
        Presteer beter.
      </h1>

      <p id="hero-subtitle"
         class="max-w-[560px] mx-auto md:mx-0 text-lg md:text-xl text-[#495057] leading-relaxed">
        Lens-Sun helpt je om scherp te blijven, ook bij fel zonlicht. De verduisterende sportlens blokkeert schittering
        en beschermt je ogen, zodat jij ongehinderd kunt focussen op wat echt telt: <strong>winnen.</strong>
      </p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
        <a href="#product" id="hero-cta"
           class="inline-block rounded-full bg-[#f87f0c] px-10 py-4 text-white font-semibold text-lg shadow-[0_8px_20px_rgba(248,127,12,0.3)] transition-all hover:shadow-[0_8px_30px_rgba(248,127,12,0.5)] hover:-translate-y-0.5">
          Ontdek de Zonnelens
        </a>
        <a href="#configurator"
           class="inline-block rounded-full border-2 border-[#f87f0c]/60 text-[#f87f0c] px-10 py-4 font-semibold text-lg hover:bg-[#f87f0c]/10 transition-all">
          Configureer direct
        </a>
      </div>

      <!-- Trust badges -->
      <div class="flex flex-wrap justify-center md:justify-start gap-4 pt-6 text-sm text-[#6c757d]">
        <div class="flex items-center gap-2">
          <span class="text-[#f87f0c] text-lg">☀️</span> UV-bescherming
        </div>
        <div class="flex items-center gap-2">
          <span class="text-[#f87f0c] text-lg">🎯</span> Sport-geoptimaliseerd
        </div>
        <div class="flex items-center gap-2">
          <span class="text-[#f87f0c] text-lg">🇨🇭</span> Zwitsers maatwerk
        </div>
      </div>
    </div>

    <!-- Beeld (carousel) -->
    <div class="relative flex justify-center md:justify-end">
      <!-- achtergrondglow -->
      <div class="absolute inset-0 -z-10 pointer-events-none">
        <div class="absolute right-0 top-1/2 -translate-y-1/2 w-[420px] h-[420px] rounded-full
                    bg-[radial-gradient(circle,rgba(248,127,12,0.18)_0%,rgba(248,127,12,0.06)_60%,transparent_95%)]
                    shadow-[0_0_60px_-10px_rgba(248,127,12,0.25)]"></div>
      </div>

      <!-- Carousel container -->
      <div id="hero-carousel" class="relative w-[320px] h-[320px] sm:w-[420px] sm:h-[420px] overflow-hidden rounded-3xl bg-white/40 backdrop-blur supports-[backdrop-filter]:bg-white/30 ring-1 ring-white/40">
        <!-- Slides -->
        <img src="/1.jpg" alt="Lens-Sun visual 1" class="absolute inset-0 w-full h-full object-contain p-6 opacity-100 transition-opacity duration-500 ease-out">
        <img src="/2.jpg" alt="Lens-Sun visual 2" class="absolute inset-0 w-full h-full object-contain p-6 opacity-0 transition-opacity duration-500 ease-out">
        <img src="/3.jpg" alt="Lens-Sun visual 3" class="absolute inset-0 w-full h-full object-contain p-6 opacity-0 transition-opacity duration-500 ease-out">

        <!-- Controls -->
        <button type="button" aria-label="Vorige" class="group absolute left-3 top-1/2 -translate-y-1/2 grid place-items-center h-9 w-9 rounded-full bg-white/80 hover:bg-white shadow hover:shadow-md transition">
          <svg class="h-4 w-4 text-[#f87f0c] group-hover:scale-110 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M15 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <button type="button" aria-label="Volgende" class="group absolute right-3 top-1/2 -translate-y-1/2 grid place-items-center h-9 w-9 rounded-full bg-white/80 hover:bg-white shadow hover:shadow-md transition">
          <svg class="h-4 w-4 text-[#f87f0c] group-hover:scale-110 transition" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 6l6 6-6 6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>

        <!-- Dots -->
        <div class="absolute bottom-3 left-1/2 -translate-x-1/2 flex items-center gap-2">
          <button aria-label="Slide 1" class="h-2.5 w-2.5 rounded-full bg-[#f87f0c]"></button>
          <button aria-label="Slide 2" class="h-2.5 w-2.5 rounded-full bg-white/70 ring-1 ring-[#f87f0c]/40"></button>
          <button aria-label="Slide 3" class="h-2.5 w-2.5 rounded-full bg-white/70 ring-1 ring-[#f87f0c]/40"></button>
        </div>
      </div>

      <!-- zwevende highlight -->
      <div aria-hidden="true"
           class="absolute -bottom-6 right-6 w-[160px] h-[160px] bg-[#f87f0c]/20 rounded-full blur-3xl animate-pulse opacity-60"></div>
    </div>
  </div>

  <!-- Scroll cue -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 text-[#f87f0c]/80 animate-bounce">
    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
         stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
    </svg>
  </div>
</section>

<!-- Klein, simpel carousel-script -->
<script>
  (function() {
    const root   = document.getElementById('hero-carousel');
    if (!root) return;
    const slides = Array.from(root.querySelectorAll('img'));
    const [prevBtn, nextBtn] = root.querySelectorAll('button[aria-label]');
    const dots   = Array.from(root.querySelectorAll('[aria-label^="Slide"]'));
    let i = 0, timer;

    function show(n){
      i = (n + slides.length) % slides.length;
      slides.forEach((img, idx) => img.style.opacity = idx === i ? '1' : '0');
      dots.forEach((d, idx) => {
        d.classList.toggle('bg-[#f87f0c]', idx === i);
        d.classList.toggle('bg-white/70', idx !== i);
      });
      resetTimer();
    }

    function next(){ show(i + 1); }
    function prev(){ show(i - 1); }

    function resetTimer(){
      clearInterval(timer);
      timer = setInterval(next, 4500);
    }

    // Bindings
    nextBtn.addEventListener('click', next);
    prevBtn.addEventListener('click', prev);
    dots.forEach((d, idx) => d.addEventListener('click', () => show(idx)));

    // Swipe (basic)
    let sx = 0;
    root.addEventListener('touchstart', e => sx = e.touches[0].clientX, {passive:true});
    root.addEventListener('touchend',   e => {
      const dx = e.changedTouches[0].clientX - sx;
      if (dx > 40) prev();
      else if (dx < -40) next();
    }, {passive:true});

    // Start
    show(0);
  })();
</script>
