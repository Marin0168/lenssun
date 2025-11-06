<div>
    <!-- CONFIGURATOR -->
    <section class="config">
        <div class="container" style="max-width:900px">
            <h2 class="title" style="text-align:center;font-size:2rem;margin:0 0 8px;">Configureer jouw Lens-Sun</h2>
            <p class="muted" style="text-align:center;margin:0 0 32px;">Stel beide lenzen in op jouw specificaties.</p>

            <!-- Lenses: left + right side-by-side -->
            <div class="cfg-lenses">
                <div class="lenses-row">
                    <div class="card cfg-block lens-col">
                        <h3>👁️ Linker Lens</h3>
                        <div class="cfg-grid">
                            <label> BCR
                                <select id="left-bcr">
                                    <option>8,6 mm</option>
                                    <option>8,9 mm</option>
                                </select>
                            </label>
                            <label> Sterkte (DPT)
                                <input type="number" id="left-strength" min="-12" max="12" step="0.25"
                                    value="0">
                            </label>
                            <label> Diameter
                                <select id="left-diameter">
                                    <option>14,0 mm</option>
                                    <option>14,2 mm</option>
                                    <option>14,5 mm</option>
                                </select>
                            </label>
                            <label> Kleur tint
                                <select id="left-color">
                                    <option>Grijs (neutraal)</option>
                                    <option>Bruin (warm)</option>
                                    <option>Groen (contrast)</option>
                                </select>
                            </label>
                        </div>
                    </div>

                    <div class="card cfg-block lens-col">
                        <h3>👁️ Rechter Lens</h3>
                        <div class="cfg-grid">
                            <label> BCR
                                <select id="right-bcr">
                                    <option>8,6 mm</option>
                                    <option>8,9 mm</option>
                                </select>
                            </label>
                            <label> Sterkte (DPT)
                                <input type="number" id="right-strength" min="-12" max="12" step="0.25"
                                    value="0">
                            </label>
                            <label> Diameter
                                <select id="right-diameter">
                                    <option>14,0 mm</option>
                                    <option>14,2 mm</option>
                                    <option>14,5 mm</option>
                                </select>
                            </label>
                            <label> Kleur tint
                                <select id="right-color">
                                    <option>Grijs (neutraal)</option>
                                    <option>Bruin (warm)</option>
                                    <option>Groen (contrast)</option>
                                </select>
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card cfg-summary">
                <h3>Jouw configuratie</h3>
                <p class="muted">Op maat gemaakte verduisterende sportlenzen</p>
                <div id="cfg-price" style="font-size:2.2rem;font-weight:800;color:var(--primary)">€65</div>
                <p class="muted" style="margin:8px 0 16px">Levertijd: 1–2 weken</p>
                <button class="btn" onclick="addConfiguredToCart()">Bestel nu</button>
    <style>
        .config {
            padding: 90px 0;
            background: #fff
        }

        .cfg-block {
            padding: 24px;
            margin-bottom: 20px
        }

        .cfg-block h3 {
            margin: 0 0 12px
        }

        .cfg-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px
        }

        .cfg-grid label {
            display: flex;
            flex-direction: column;
            font-weight: 600;
            color: var(--text-sec)
        }

        .cfg-grid select,
        .cfg-grid input {
            padding: 12px 14px;
            border: 2px solid #dee2e6;
            border-radius: 10px;
            background: #fff;
            font: inherit
        }

        .cfg-grid select:focus,
        .cfg-grid input:focus {
            outline: none;
            border-color: var(--primary)
        }

        .cfg-summary {
            padding: 24px;
            text-align: center
        }

        /* New: keep left and right lens cards side-by-side */
        .cfg-lenses .lenses-row {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .cfg-lenses .lens-col {
            flex: 1;
            min-width: 260px;
            box-sizing: border-box;
        }
    </style>
    <script>
        // Configurator -> winkelwagen
        function addConfiguredToCart() {
            const v = id => document.getElementById(id)?.value;
            const specs = {
                leftBcr: v('left-bcr'),
                rightBcr: v('right-bcr'),
                leftStrength: v('left-strength'),
                rightStrength: v('right-strength'),
                leftDiameter: v('left-diameter'),
                rightDiameter: v('right-diameter'),
                leftColor: v('left-color'),
                rightColor: v('right-color')
            };
            addToCart('configured', 'Lens-Sun Configuratie', 65, specs);
        }
    </script>
</div>
