<section id="lens-sun">
    <!-- Hero Section -->
    <livewire:home.hero />

    <!-- USP Section -->
    <livewire:home.u-s-p />

    <!-- Product Section -->
    <section id="product" class="bg-gradient-to-b from-[#f8f9fa] to-white px-5 py-24">
        <div class="mx-auto grid max-w-[1200px] items-center gap-14 md:grid-cols-2">
            <!-- Visual -->
            <div class="flex items-center justify-center p-10" aria-hidden="true">
                <div
                    class="relative h-[300px] w-[300px] rounded-full shadow-xl flex items-center justify-center
                    bg-[radial-gradient(circle,rgba(100,149,237,0.15)_0%,rgba(100,149,237,0.05)_50%,transparent_70%)]">
                    <div
                        class="h-[250px] w-[250px] rounded-full border-4 border-[rgba(100,149,237,0.3)]
                      bg-[linear-gradient(135deg,rgba(100,149,237,0.2)_0%,rgba(100,149,237,0.1)_100%)]">
                        <img src="/lens.png" alt="lens">
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
                    class="inline-block rounded-full bg-primary px-8 py-3 text-black font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
                    Configureer jouw lenzen
                </a>
            </div>
        </div>
    </section>

    <!-- Configurator Section -->
    <livewire:home.configurator />

    <!-- Lifestyle Section -->
    <section
        class="relative overflow-hidden bg-gradient-to-br from-primary to-[#34495e] px-5 py-24 text-black text-center">
        <div class="pointer-events-none absolute inset-0 flex items-center justify-center opacity-5 text-[20rem] leading-none select-none"
            aria-hidden="true">
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
                Heeft u een vraag over onze verduisterende sportlenzen, wilt u advies of heeft u andere vragen? Wij
                nemen zo snel mogelijk contact met u op.
            </p>

            <form id="contactForm" class="rounded-2xl bg-[#f8f9fa] p-8">
                <div class="mb-6">
                    <label for="name" class="mb-2 block font-semibold text-secondary">Naam *</label>
                    <input id="name" name="name" type="text" required
                        class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none" />
                </div>

                <div class="mb-6">
                    <label for="email" class="mb-2 block font-semibold text-secondary">E-mailadres *</label>
                    <input id="email" name="email" type="email" required
                        class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none" />
                </div>

                <div class="mb-6">
                    <label for="phone" class="mb-2 block font-semibold text-secondary">Telefoon <small
                            class="font-normal text-secondary/80">(optioneel)</small></label>
                    <input id="phone" name="phone" type="tel"
                        class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none" />
                </div>

                <div class="mb-6">
                    <label for="sport" class="mb-2 block font-semibold text-secondary">Sport <small
                            class="font-normal text-secondary/80">(optioneel)</small></label>
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
                    <label for="strength" class="mb-2 block font-semibold text-secondary">Sterkte <small
                            class="font-normal text-secondary/80">(optioneel)</small></label>
                    <input id="strength" name="strength" type="text" placeholder="Bijv. -2.50 / -3.00"
                        class="w-full rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none" />
                </div>

                <div class="mb-6">
                    <label for="message" class="mb-2 block font-semibold text-secondary">Vraag *</label>
                    <textarea id="message" name="message" required
                        class="w-full min-h-[120px] resize-y rounded-lg border-2 border-gray-200 bg-white px-4 py-3 focus:border-primary focus:outline-none"></textarea>
                </div>

                <button type="submit"
                    class="w-full rounded-lg bg-primary px-6 py-4 text-black text-lg font-semibold shadow-md transition-transform duration-300 hover:-translate-y-0.5 hover:shadow-lg">
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
</section>

@push('scripts')
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

        async function onConfigChange(config) {
            const heroTitle = config.hero_title || defaultConfig.hero_title;
            const heroSubtitle = config.hero_subtitle || defaultConfig.hero_subtitle;
            const heroCta = config.hero_cta || defaultConfig.hero_cta;
            const productPrice = config.product_price || defaultConfig.product_price;
            const productDelivery = config.product_delivery || defaultConfig.product_delivery;
            const contactTitle = config.contact_title || defaultConfig.contact_title;
            const contactIntro = config.contact_intro || defaultConfig.contact_intro;

            document.getElementById('hero-title').textContent = heroTitle;
            document.getElementById('hero-subtitle').textContent = heroSubtitle;
            document.getElementById('hero-cta').textContent = heroCta;
            document.getElementById('product-price').textContent = productPrice;
            document.getElementById('product-delivery').textContent = productDelivery;
            document.getElementById('contact-title').textContent = contactTitle;
            document.getElementById('contact-intro').textContent = contactIntro;

            const root = document.documentElement;
            root.style.setProperty('--bg', config.background_color || defaultConfig.background_color);
            root.style.setProperty('--surface', config.surface_color || defaultConfig.surface_color);
            root.style.setProperty('--text', config.text_color || defaultConfig.text_color);
            root.style.setProperty('--primary', config.primary_action_color || defaultConfig.primary_action_color);
            root.style.setProperty('--secondary', config.secondary_text_color || defaultConfig.secondary_text_color);

            const customFont = config.font_family || defaultConfig.font_family;
            document.body.style.fontFamily = customFont;
            const baseSize = config.font_size || defaultConfig.font_size;
            document.body.style.fontSize = baseSize + 'px';
        }

        function scrollToContact() {
            const el = document.getElementById('contact');
            if (el) el.scrollIntoView({
                behavior: 'smooth'
            });
        }

        // Simple form feedback
        const contactForm = document.getElementById('contactForm');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const box = document.getElementById('formMessage');
                box.classList.remove('hidden');
                box.classList.add('bg-green-100', 'text-green-700');
                box.textContent = 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.';
                this.reset();
                setTimeout(() => {
                    box.classList.add('hidden');
                    box.classList.remove('bg-green-100', 'text-green-700');
                    box.textContent = '';
                }, 5000);
            });
        }

        // Integratie met elementSdk (runtime theming / content)
        if (window.elementSdk) {
            window.elementSdk.init({
                defaultConfig,
                onConfigChange,
                mapToCapabilities: (config) => ({
                    recolorables: [{
                            get: () => config.background_color || defaultConfig.background_color,
                            set: (v) => {
                                config.background_color = v;
                                window.elementSdk.setConfig({
                                    background_color: v
                                });
                            }
                        },
                        {
                            get: () => config.surface_color || defaultConfig.surface_color,
                            set: (v) => {
                                config.surface_color = v;
                                window.elementSdk.setConfig({
                                    surface_color: v
                                });
                            }
                        },
                        {
                            get: () => config.text_color || defaultConfig.text_color,
                            set: (v) => {
                                config.text_color = v;
                                window.elementSdk.setConfig({
                                    text_color: v
                                });
                            }
                        },
                        {
                            get: () => config.primary_action_color || defaultConfig
                                .primary_action_color,
                            set: (v) => {
                                config.primary_action_color = v;
                                window.elementSdk.setConfig({
                                    primary_action_color: v
                                });
                            }
                        },
                        {
                            get: () => config.secondary_text_color || defaultConfig
                                .secondary_text_color,
                            set: (v) => {
                                config.secondary_text_color = v;
                                window.elementSdk.setConfig({
                                    secondary_text_color: v
                                });
                            }
                        }
                    ],
                    borderables: [],
                    fontEditable: {
                        get: () => config.font_family || defaultConfig.font_family,
                        set: (v) => {
                            config.font_family = v;
                            window.elementSdk.setConfig({
                                font_family: v
                            });
                        }
                    },
                    fontSizeable: {
                        get: () => config.font_size || defaultConfig.font_size,
                        set: (v) => {
                            config.font_size = v;
                            window.elementSdk.setConfig({
                                font_size: v
                            });
                        }
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
@endpush
