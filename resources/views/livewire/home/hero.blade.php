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

    <!-- Beeld -->
    <div class="relative flex justify-center md:justify-end">
      <div
        class="relative rounded-full bg-[radial-gradient(circle,rgba(248,127,12,0.15)_0%,rgba(248,127,12,0.05)_60%,transparent_90%)] w-[320px] h-[320px] sm:w-[400px] sm:h-[400px] flex items-center justify-center shadow-[0_0_60px_-10px_rgba(248,127,12,0.25)]">
        <img src="/lens.png" alt="Lens-Sun Sportlenzen"
             class="relative w-[240px] sm:w-[300px] drop-shadow-[0_10px_25px_rgba(0,0,0,0.15)] transition-transform duration-500 hover:scale-105">
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
