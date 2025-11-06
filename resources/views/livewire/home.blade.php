<!doctype html>
<html lang="nl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Lens-Sun - Verduisterende Sportlenzen</title>
    <meta name="description" content="Verduisterende sportlenzen voor buitensporters. Blokkeer fel zonlicht, zie scherper en presteer beter. UV-bescherming en op maat vervaardigd.">
    <link rel="canonical" href="https://www.lens-sun.com/"/>

    <!-- (optioneel) Eigen SDK's -->
    <script src="/_sdk/element_sdk.js"></script>
    <script src="/_sdk/data_sdk.js" type="text/javascript"></script>

    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      /* Tailwind aware van onze CSS-variabelen. */
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              bg: 'var(--bg)',
              surface: 'var(--surface)',
              text: 'var(--text)',
              primary: 'var(--primary)',
              secondary: 'var(--secondary)'
            }
          }
        }
      }
    </script>

    <style>
      :root {
        --bg: #ffffff;
        --surface: #f8f9fa;
        --text: #1a1a1a;
        --primary: #2c3e50;
        --secondary: #495057;
      }
    </style>
  </head>

  <body class="min-h-screen bg-bg text-text antialiased overflow-x-hidden font-sans">
    <!-- ROOT WRAPPER (voorkomt Livewire MultipleRootElements) -->
    <div id="app">
      <!-- Hero Section -->
      <section class="relative flex items-center justify-center min-h-[90vh] bg-gradient-to-br from-surface to-[#e9ecef] px-5 py-20 overflow-hidden">
        <!-- zachte radial glow rechtsboven -->
        <div class="pointer-events-none absolute -top-1/2 -right-1/5 h-[800px] w-[800px] rounded-full bg-[radial-gradient(circle,rgba(255,183,77,0.1)_0%,transparent_70%)]"></div>

        <div class="relative z-[1] max-w-[1200px] text-center">
          <h1 id="hero-title" class="text-4xl md:text-6xl font-bold leading-tight tracking-tight mb-6">
            Zie meer. Reageer sneller. Presteer beter.
          </h1>
          <p id="hero-subtitle" class="mx-auto max-w-[700px] text-lg md:text-xl text-secondary leading-8 mb-10">
            Lens-Sun helpt je om scherp te blijven, ook bij fel zonlicht. De verduisterende sportlens blokkeert schittering en beschermt je ogen, zodat jij ongehinderd kunt focussen op wat echt telt: winnen.
          </p>
          <a href="#product" id="hero-cta"
            class="inline-block rounded-full bg-primary px-12 py-4 text-white font-semibold text-lg shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
            Ontdek de Zonnelens
          </a>
        </div>
      </section>

      <!-- USP Section -->
      <section class="bg-white px-5 py-24">
        <div class="mx-auto grid max-w-[1200px] gap-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
          <div class="text-center p-6 transition-transform duration-300 hover:-translate-y-1">
            <span class="block text-5xl mb-4" aria-hidden="true">👁️</span>
            <h3 class="text-lg font-semibold mb-2">Altijd scherp zicht</h3>
            <p class="text-secondary text-base">Geen hinder van zon of kunstlicht tijdens je sport</p>
          </div>
          <div class="text-center p-6 transition-transform duration-300 hover:-translate-y-1">
            <span class="block text-5xl mb-4" aria-hidden="true">🏃</span>
            <h3 class="text-lg font-semibold mb-2">Volledige bewegingsvrijheid</h3>
            <p class="text-secondary text-base">Geen bril die zakt of beweegt tijdens intensieve actie</p>
          </div>
          <div class="text-center p-6 transition-transform duration-300 hover:-translate-y-1">
            <span class="block text-5xl mb-4" aria-hidden="true">☀️</span>
            <h3 class="text-lg font-semibold mb-2">UV-bescherming</h3>
            <p class="text-secondary text-base">Voorkomt oogschade door schadelijke zonnestralen</p>
          </div>
          <div class="text-center p-6 transition-transform duration-300 hover:-translate-y-1">
            <span class="block text-5xl mb-4" aria-hidden="true">✨</span>
            <h3 class="text-lg font-semibold mb-2">Comfortabel &amp; op maat</h3>
            <p class="text-secondary text-base">Geschikt voor iedereen, perfect aangepast aan jouw ogen</p>
          </div>
          <div class="text-center p-6 transition-transform duration-300 hover:-translate-y-1">
            <span class="block text-5xl mb-4" aria-hidden="true">🚀</span>
            <h3 class="text-lg font-semibold mb-2">Innovatief &amp; uniek</h3>
            <p class="text-secondary text-base">De eerste verduisterende sportlens op de markt</p>
          </div>
        </div>
      </section>

      <!-- Product Section -->
      <section id="product" class="bg-gradient-to-b from-[#f8f9fa] to-white px-5 py-24">
        <div class="mx-auto grid max-w-[1200px] items-center gap-14 md:grid-cols-2">
          <!-- Visual -->
          <div class="flex items-center justify-center p-10" aria-hidden="true">
            <div class="relative h-[300px] w-[300px] rounded-full shadow-xl flex items-center justify-center
                        bg-[radial-gradient(circle,rgba(100,149,237,0.15)_0%,rgba(100,149,237,0.05)_50%,transparent_70%)]">
              <div class="h-[250px] w-[250px] rounded-full border-4 border-[rgba(100,149,237,0.3)]
                          bg-[linear-gradient(135deg,rgba(100,149,237,0.2)_0%,rgba(100,149,237,0.1)_100%)]">
              </div>
            </div>
          </div>

          <!-- Info -->
          <div class="space-y-6">
            <h2 class="text-3xl md:text-4xl font-bold">De Lens-Sun Zonnelens</h2>
            <p class="text-secondary text-lg">
              Ervaar het verschil van professionele verduisterende sportlenzen. Speciaal ontwikkeld voor
              buitensporters die het beste uit zichzelf willen halen.
            </p>

            <div class="rounded-xl bg-white p-6 shadow">
              <h3 class="text-lg font-semibold mb-4">Productdetails</h3>
              <div class="divide-y divide-gray-200">
                <div class="flex items-center justify-between py-3">
                  <span class="font-semibold text-secondary">Prijs</span>
                  <span id="product-price" class="text-gray-600">€65 per set</span>
                </div>
                <div class="flex items-center justify-between py-3">
                  <span class="font-semibold text-secondary">Levertijd</span>
                  <span id="product-delivery" class="text-gray-600">1-2 weken</span>
                </div>
                <div class="flex items-center justify-between py-3">
                  <span class="font-semibold text-secondary">BCR</span>
                  <span class="text-gray-600">8,6 / 8,9 mm</span>
                </div>
                <div class="flex items-center justify-between py-3">
                  <span class="font-semibold text-secondary">Sterkte</span>
                  <span class="text-gray-600">-12 tot +12 DPT</span>
                </div>
                <div class="flex items-center justify-between py-3">
                  <span class="font-semibold text-secondary">Op maat</span>
                  <span class="text-gray-600">Volledig aangepast</span>
                </div>
              </div>
            </div>

            <a href="#configurator"
              class="inline-block rounded-full bg-primary px-8 py-3 text-white font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
              Configureer jouw lenzen
            </a>
          </div>
        </div>
      </section>

      <!-- Configurator Section -->
      <section id="configurator" class="bg-white px-5 py-24">
        <div class="mx-auto max-w-[900px]">
          <h2 class="text-center text-3xl md:text-4xl font-bold mb-4">Configureer jouw Lens-Sun</h2>
          <p class="text-center text-secondary text-lg mb-12">
            Stel beide lenzen in op jouw persoonlijke specificaties voor optimaal comfort en prestaties.
          </p>

          <!-- Linker Lens -->
          <div class="mb-8 rounded-2xl bg-[#f8f9fa] p-8">
            <h3 class="text-xl font-semibold text-primary mb-6">👁️ Linker Lens</h3>

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

          <!-- Rechter Lens -->
          <div class="mb-8 rounded-2xl bg-[#f8f9fa] p-8">
            <h3 class="text-xl font-semibold text-primary mb-6">👁️ Rechter Lens</h3>

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

          <!-- Summary -->
          <div class="rounded-xl bg-white p-8 text-center shadow">
            <h3 class="text-xl font-semibold mb-3">Jouw configuratie</h3>
            <p class="text-secondary">Op maat gemaakte verduisterende sportlenzen</p>
            <div id="summary-price" class="my-6 text-5xl font-extrabold text-primary">
              €65
            </div>
            <p class="text-secondary mb-6">Levertijd: 1-2 weken</p>
            <button onclick="scrollToContact()"
                    class="inline-block rounded-full bg-primary px-8 py-3 text-white font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
              Bestel nu
            </button>
          </div>
        </div>
      </section>

      <!-- Lifestyle Section -->
      <section class="relative overflow-hidden bg-gradient-to-br from-primary to-[#34495e] px-5 py-24 text-white text-center">
        <div class="pointer-events-none absolute inset-0 flex items-center justify-center opacity-5 text-[20rem] leading-none select-none" aria-hidden="true">
          🏃‍♂️
        </div>
        <div class="relative z-[1] mx-auto max-w-[800px]">
          <h2 class="text-3xl md:text-5xl font-bold mb-6">Geen bril. Geen pet. Alleen focus.</h2>
          <p class="text-lg md:text-xl opacity-90 mb-10">
            Presteer op je best, ongeacht de weersomstandigheden. Lens-Sun is jouw wapen tegen verblinding.
          </p>
          <a href="#contact"
            class="inline-block rounded-full bg-white px-8 py-3 font-semibold text-primary shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
            Ervaar het verschil
          </a>
        </div>
      </section>

      <!-- Contact Section -->
      <section id="contact" class="bg-white px-5 py-24">
        <div class="mx-auto max-w-[700px]">
          <h2 id="contact-title" class="text-center text-3xl md:text-4xl font-bold mb-4">
            Heb je vragen? Neem contact op.
          </h2>
          <p id="contact-intro" class="text-center text-secondary text-lg mb-12">
            Heeft u een vraag over onze verduisterende sportlenzen, wilt u advies of heeft u andere vragen? Wij nemen zo snel mogelijk contact met u op.
          </p>

          <form id="contactForm" class="rounded-2xl bg-[#f8f9fa] p-8">
            <div class="mb-6">
              <label for="name" class="mb-2 block font-semibold text-secondary">Naam *</label>
              <input id="name" name="name" type="text" required
                    class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"/>
            </div>

            <div class="mb-6">
              <label for="email" class="mb-2 block font-semibold text-secondary">E-mailadres *</label>
              <input id="email" name="email" type="email" required
                    class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"/>
            </div>

            <div class="mb-6">
              <label for="phone" class="mb-2 block font-semibold text-secondary">Telefoon <small class="font-normal text-secondary/80">(optioneel)</small></label>
              <input id="phone" name="phone" type="tel"
                    class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"/>
            </div>

            <div class="mb-6">
              <label for="sport" class="mb-2 block font-semibold text-secondary">Sport <small class="font-normal text-secondary/80">(optioneel)</small></label>
              <select id="sport" name="sport"
                      class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none">
                <option value="">Selecteer je sport</option>
                <option value="hardlopen">Hardlopen</option>
                <option value="wielrennen">Wielrennen</option>
                <option value="tennis">Tennis</option>
                <option value="voetbal">Voetbal</option>
                <option value="golf">Golf</option>
                <option value="anders">Anders</option>
              </select>
            </div>

            <div class="mb-6">
              <label for="strength" class="mb-2 block font-semibold text-secondary">Sterkte <small class="font-normal text-secondary/80">(optioneel)</small></label>
              <input id="strength" name="strength" type="text" placeholder="Bijv. -2.50 / -3.00"
                    class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"/>
            </div>

            <div class="mb-6">
              <label for="message" class="mb-2 block font-semibold text-secondary">Vraag *</label>
              <textarea id="message" name="message" required
                        class="w-full min-h-[120px] resize-y rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"></textarea>
            </div>

            <button type="submit"
                    class="w-full rounded-lg bg-primary px-6 py-4 text-white text-lg font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
              Verstuur bericht
            </button>

            <div id="formMessage" class="mt-5 hidden rounded-lg px-4 py-3 text-center font-semibold"></div>
          </form>
        </div>
      </section>

      <!-- Footer -->
      <footer class="bg-primary text-white text-center px-5 py-10">
        <p class="opacity-80 m-0">© 2025 Lens-Sun. Verduisterende sportlenzen voor topprestaties.</p>
      </footer>
    </div><!-- /#app -->

    <!-- Interactie & theming -->
    <script>
      const defaultConfig = {
        hero_title: "Zie meer. Reageer sneller. Presteer beter.",
        hero_subtitle: "Lens-Sun helpt je om scherp te blijven, ook bij fel zonlicht. De verduisterende sportlens blokkeert schittering en beschermt je ogen, zodat jij ongehinderd kunt focussen op wat echt telt: winnen.",
        hero_cta: "Ontdek de Zonnelens",
        product_price: "€65 per set",
        product_delivery: "1-2 weken",
        contact_title: "Heb je vragen? Neem contact op.",
        contact_intro: "Heeft u een vraag over onze verduisterende sportlenzen, wilt u advies of heeft u andere vragen? Wij nemen zo snel mogelijk contact met u op.",
        background_color: "#ffffff",
        surface_color: "#f8f9fa",
        text_color: "#1a1a1a",
        primary_action_color: "#2c3e50",
        secondary_text_color: "#495057",
        font_family: "-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif",
        font_size: 16
      };

      // Update UI op basis van config
      async function onConfigChange(config) {
        const heroTitle = config.hero_title || defaultConfig.hero_title;
        const heroSubtitle = config.hero_subtitle || defaultConfig.hero_subtitle;
        const heroCta = config.hero_cta || defaultConfig.hero_cta;
        const productPrice = config.product_price || defaultConfig.product_price;
        const productDelivery = config.product_delivery || defaultConfig.product_delivery;
        const contactTitle = config.contact_title || defaultConfig.contact_title;
        const contactIntro = config.contact_intro || defaultConfig.contact_intro;

        // Teksten
        document.getElementById('hero-title').textContent = heroTitle;
        document.getElementById('hero-subtitle').textContent = heroSubtitle;
        document.getElementById('hero-cta').textContent = heroCta;
        document.getElementById('product-price').textContent = productPrice;
        document.getElementById('product-delivery').textContent = productDelivery;
        document.getElementById('contact-title').textContent = contactTitle;
        document.getElementById('contact-intro').textContent = contactIntro;

        // CSS-variabelen (kleuren)
        const root = document.documentElement;
        root.style.setProperty('--bg', config.background_color || defaultConfig.background_color);
        root.style.setProperty('--surface', config.surface_color || defaultConfig.surface_color);
        root.style.setProperty('--text', config.text_color || defaultConfig.text_color);
        root.style.setProperty('--primary', config.primary_action_color || defaultConfig.primary_action_color);
        root.style.setProperty('--secondary', config.secondary_text_color || defaultConfig.secondary_text_color);

        // Font & base size
        const customFont = config.font_family || defaultConfig.font_family;
        document.body.style.fontFamily = customFont;
        const baseSize = config.font_size || defaultConfig.font_size;
        document.body.style.fontSize = baseSize + 'px';
      }

      function scrollToContact() {
        document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
      }

      // Simple form feedback
      document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const box = document.getElementById('formMessage');
        box.classList.remove('hidden');
        box.classList.add('bg-green-100','text-green-700');
        box.textContent = 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.';
        this.reset();
        setTimeout(() => {
          box.classList.add('hidden');
          box.classList.remove('bg-green-100','text-green-700');
          box.textContent = '';
        }, 5000);
      });

      // Integratie met elementSdk (runtime theming / content)
      if (window.elementSdk) {
        window.elementSdk.init({
          defaultConfig,
          onConfigChange,
          mapToCapabilities: (config) => ({
            recolorables: [
              {
                get: () => config.background_color || defaultConfig.background_color,
                set: (value) => { config.background_color = value; window.elementSdk.setConfig({ background_color: value }); }
              },
              {
                get: () => config.surface_color || defaultConfig.surface_color,
                set: (value) => { config.surface_color = value; window.elementSdk.setConfig({ surface_color: value }); }
              },
              {
                get: () => config.text_color || defaultConfig.text_color,
                set: (value) => { config.text_color = value; window.elementSdk.setConfig({ text_color: value }); }
              },
              {
                get: () => config.primary_action_color || defaultConfig.primary_action_color,
                set: (value) => { config.primary_action_color = value; window.elementSdk.setConfig({ primary_action_color: value }); }
              },
              {
                get: () => config.secondary_text_color || defaultConfig.secondary_text_color,
                set: (value) => { config.secondary_text_color = value; window.elementSdk.setConfig({ secondary_text_color: value }); }
              }
            ],
            borderables: [],
            fontEditable: {
              get: () => config.font_family || defaultConfig.font_family,
              set: (value) => { config.font_family = value; window.elementSdk.setConfig({ font_family: value }); }
            },
            fontSizeable: {
              get: () => config.font_size || defaultConfig.font_size,
              set: (value) => { config.font_size = value; window.elementSdk.setConfig({ font_size: value }); }
            }
          }),
          mapToEditPanelValues: (config) => new Map([
            ["hero_title", config.hero_title || defaultConfig.hero_title],
            ["hero_subtitle", config.hero_subtitle || defaultConfig.hero_subtitle],
            ["hero_cta", config.hero_cta || defaultConfig.hero_cta],
            ["product_price", config.product_price || defaultConfig.product_price],
            ["product_delivery", config.product_delivery || defaultConfig.product_delivery],
            ["contact_title", config.contact_title || defaultConfig.contact_title],
            ["contact_intro", config.contact_intro || defaultConfig.contact_intro]
          ])
        });
      }
    </script>
  </body>
</html>
