<div>
    <!-- CONTACT -->
    <section class="contact" id="contactSection">
        <div class="container" style="max-width:700px">
            <h2 class="title" style="text-align:center;margin-bottom:6px;">Heb je vragen? Neem contact op.</h2>
            <p class="muted" style="text-align:center;margin:0 0 28px;">Heeft u een vraag over onze verduisterende
                sportlenzen, wilt u advies of heeft u andere vragen? Wij nemen zo snel mogelijk contact met u op.</p>
            <form class="card contact-form" id="contactForm" novalidate>
                <div class="form-row">
                    <label>Naam *<input required type="text" name="name"></label>
                </div>
                <div class="form-row">
                    <label>E-mail *<input required type="email" name="email" inputmode="email"></label>
                </div>
                <div class="form-row">
                    <label>Telefoon <small>(optioneel)</small><input type="tel" name="phone"
                            inputmode="tel"></label>
                </div>
                <div class="form-row">
                    <label>Sport <small>(optioneel)</small>
                        <select name="sport">
                            <option value="">Selecteer je sport</option>
                            <option>Hardlopen</option>
                            <option>Wielrennen</option>
                            <option>Tennis</option>
                            <option>Voetbal</option>
                            <option>Golf</option>
                            <option>Anders</option>
                        </select>
                    </label>
                </div>
                <div class="form-row">
                    <label>Sterkte <small>(optioneel)</small><input type="text" name="strength"
                            placeholder="Bijv. -2.50 / -3.00"></label>
                </div>
                <div class="form-row">
                    <label>Vraag *
                        <textarea required name="message" rows="5"></textarea>
                    </label>
                </div>
                <button class="btn" type="submit">Verstuur bericht</button>
                <div class="form-msg" id="formMsg" role="status" aria-live="polite"></div>
            </form>
        </div>
    </section>
    <style>
        .contact {
            padding: 90px 0;
            background: #fff
        }

        .contact-form {
            padding: 24px;
            border-radius: 16px;
            background: var(--surface)
        }

        .form-row {
            margin-bottom: 18px
        }

        .form-row label {
            display: block;
            font-weight: 600;
            color: var(--text-sec);
            margin-bottom: 6px
        }

        .form-row input,
        .form-row select,
        .form-row textarea {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid #dee2e6;
            border-radius: 10px;
            background: #fff;
            font: inherit
        }

        .form-row input:focus,
        .form-row select:focus,
        .form-row textarea:focus {
            outline: none;
            border-color: var(--primary)
        }

        .form-msg {
            margin-top: 14px;
            padding: 12px;
            border-radius: 8px;
            display: none;
            background: #d4edda;
            color: #155724;
            font-weight: 700
        }
    </style>
    <script>
        // Contact form
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('contactForm');
            const msg = document.getElementById('formMsg');
            if (!form) return;
            form.addEventListener('submit', e => {
                e.preventDefault();
                msg.style.display = 'block';
                msg.textContent = 'Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.';
                form.reset();
                setTimeout(() => {
                    msg.style.display = 'none'
                }, 5000);
            });
        });
    </script>

</div>
