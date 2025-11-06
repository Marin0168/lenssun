<div>
    <!-- HERO -->
    <section class="hero page-offset">
        <div class="container hero-inner">
            <h1 class="title">Zie meer. Reageer sneller. Presteer beter.</h1>
            <p class="muted">Lens-Sun helpt je om scherp te blijven, ook bij fel zonlicht. De verduisterende sportlens
                blokkeert schittering en beschermt je ogen, zodat jij ongehinderd kunt focussen op wat echt telt:
                winnen.</p>
            <a href="#product" class="btn"
                onclick="document.getElementById('product').scrollIntoView({behavior:'smooth'});return false;">Ontdek de
                Zonnelens</a>
        </div>
    </section>
    <style>
        .hero {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--surface) 0%, #e9ecef 100%);
            position: relative;
            overflow: hidden
        }

        .hero::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -20%;
            width: 800px;
            height: 800px;
            background: radial-gradient(circle, rgba(255, 183, 77, .1) 0%, transparent 70%);
            border-radius: 50%
        }

        .hero-inner {
            text-align: center;
            position: relative;
            z-index: 1
        }

        .hero .title {
            font-size: 3rem;
            margin: 0 0 16px
        }

        .hero .muted {
            font-size: 1.2rem;
            max-width: 720px;
            margin: 0 auto 24px
        }

        @media (max-width:768px) {
            .hero .title {
                font-size: 2.4rem
            }

            .hero .muted {
                font-size: 1.05rem
            }
        }
    </style>

</div>
