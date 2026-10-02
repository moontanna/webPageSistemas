<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunGo | Energía solar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f2f2f2;
            --page-text: #132532;
            --text: #111111;
            --muted: #5f5f5f;
            --green: #4d9c5e;
            --green-dark: #2f7a47;
            --green-soft: #dfeee2;
            --footer: #0e0e0e;
            --card-bg: #ffffff;
            --border: #dfe3e8;
        }

        * { box-sizing: border-box; }

        html { scroll-behavior: smooth; }

        body {
            position: relative;
            isolation: isolate;
            margin: 0;
            background: linear-gradient(180deg,
                rgba(117, 198, 255, 0.96) 0%,
                rgba(244, 195, 92, 0.9) 28%,
                rgba(168, 126, 255, 0.72) 55%,
                rgba(19, 32, 89, 0.96) 78%,
                rgba(5, 15, 36, 1) 100%);
            color: var(--page-text);
            font-family: 'Poppins', sans-serif;
            transition: background 0.8s ease;
        }

        .sky-effects {
            position: fixed;
            inset: 0;
            z-index: -1;
            overflow: hidden;
            pointer-events: none;
        }

        .sky-clouds,
        .sky-stars {
            position: absolute;
            inset: 0;
        }

        .sky-clouds {
            background: url('https://images.unsplash.com/photo-1499346030926-9a72daac6c63?auto=format&fit=crop&w=1920&q=85') center 45% / cover no-repeat;
            opacity: var(--cloud-opacity, 0.36);
            mix-blend-mode: soft-light;
            transition: opacity 0.8s ease;
        }

        .sky-stars {
            background-image:
                radial-gradient(2px 2px at 8% 18%, #fff 48%, transparent 58%),
                radial-gradient(1.5px 1.5px at 18% 42%, #fff 48%, transparent 58%),
                radial-gradient(2px 2px at 27% 12%, #fff 48%, transparent 58%),
                radial-gradient(1.5px 1.5px at 39% 30%, #fff 48%, transparent 58%),
                radial-gradient(2px 2px at 51% 14%, #fff 48%, transparent 58%),
                radial-gradient(1.5px 1.5px at 63% 37%, #fff 48%, transparent 58%),
                radial-gradient(2px 2px at 73% 19%, #fff 48%, transparent 58%),
                radial-gradient(1.5px 1.5px at 85% 43%, #fff 48%, transparent 58%),
                radial-gradient(2px 2px at 94% 12%, #fff 48%, transparent 58%),
                radial-gradient(1.5px 1.5px at 14% 72%, #fff 48%, transparent 58%),
                radial-gradient(2px 2px at 33% 84%, #fff 48%, transparent 58%),
                radial-gradient(1.5px 1.5px at 58% 69%, #fff 48%, transparent 58%),
                radial-gradient(2px 2px at 79% 82%, #fff 48%, transparent 58%);
            opacity: var(--stars-opacity, 0);
            transition: opacity 1s ease;
        }

        .sky-celestial {
            position: absolute;
            top: 13vh;
            right: 16vw;
            width: clamp(66px, 8vw, 100px);
            aspect-ratio: 1;
            overflow: hidden;
            border-radius: 50%;
            background: var(--orb-color, #ffd15c);
            box-shadow: 0 0 42px var(--orb-glow, rgba(255, 190, 72, 0.72));
            transform: translateY(var(--orb-y, 0px));
            transition: background 0.8s ease, box-shadow 0.8s ease, transform 0.8s ease;
        }

        .sky-celestial::before {
            position: absolute;
            top: -3%;
            left: 0;
            width: 96%;
            height: 96%;
            border-radius: 50%;
            background: #08162d;
            content: "";
            opacity: var(--moon-shadow-opacity, 0);
            transform: translateX(var(--moon-shadow-x, 140%));
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .page-shell {
            max-width: 1220px;
            margin: 0 auto;
            padding: 0 18px 60px;
        }

        .topbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            max-width: 1280px;
            min-height: 72px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            border-bottom: 1px solid #e0e7e2;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
        }

        .logo {
            font-weight: 800;
            font-size: 1.25rem;
            color: #19543a;
        }

        .nav {
            display: flex;
            align-items: center;
            gap: 26px;
            font-size: 0.94rem;
            font-weight: 600;
        }

        .nav-toggle {
            display: none;
            width: 44px;
            height: 44px;
            border: 1px solid #a9cbb8;
            border-radius: 6px;
            background: transparent;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            padding: 0;
        }

        .nav-toggle span,
        .nav-toggle span::before,
        .nav-toggle span::after {
            display: block;
            position: relative;
            width: 22px;
            height: 2px;
            border-radius: 2px;
            background: #19543a;
            content: "";
        }

        .nav-toggle span::before {
            position: absolute;
            top: -7px;
        }

        .nav-toggle span::after {
            position: absolute;
            top: 7px;
        }

        .nav a {
            color: #3e5148;
        }

        .nav a:hover {
            color: #28734f;
        }

        .nav-button {
            border: 1px solid #28734f;
            border-radius: 6px;
            background: #28734f;
            color: #fff;
            padding: 10px 16px;
            font-weight: 600;
        }

        .nav a.nav-button,
        .nav a.nav-button:hover {
            color: #fff;
        }

        .hero-copy {
            max-width: 1220px;
            margin: 0 auto;
            min-height: 470px;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
            padding: 130px 20px 40px;
        }

        .glass-panel {
            border: 1px solid rgba(255, 255, 255, 0.28);
            border-radius: 14px;
            background: rgba(10, 20, 28, 0.42);
            color: #fff;
            box-shadow: 0 16px 36px rgba(5, 14, 20, 0.14);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        .hero-glass {
            width: min(850px, 100%);
            padding: 32px 36px;
        }

        .hero-copy h1 {
            margin: 0;
            font-size: clamp(2.5rem, 5vw, 5rem);
            line-height: 0.98;
            letter-spacing: -0.06em;
            font-weight: 800;
        }

        .hero-copy p {
            margin: 16px 0 0;
            font-size: clamp(1.05rem, 2vw, 1.7rem);
            font-weight: 400;
            opacity: 0.96;
        }

        .hero-copy .cta {
            margin-top: 28px;
            display: inline-block;
            background: rgba(46, 178, 92, 0.9);
            color: #fff;
            border-radius: 10px;
            padding: 0.9rem 1.8rem;
            font-weight: 700;
            box-shadow: 0 12px 22px rgba(13, 120, 74, 0.35);
        }

        .top-intro {
            margin-top: 34px;
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 26px;
            align-items: center;
        }

        .intro-copy {
            font-size: 1.15rem;
            line-height: 1.55;
            color: var(--page-text);
            padding: 24px;
        }

        .intro-copy.glass-panel { color: #fff; }

        .intro-copy h2 {
            font-size: clamp(2.1rem, 3vw, 3.1rem);
            margin: 0 0 16px;
            letter-spacing: -0.06em;
            line-height: 1.08;
            font-weight: 800;
        }

        .benefit-card {
            background: #fff;
            color: #111;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 28px rgba(10, 18, 22, 0.06);
        }

        .benefit-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
        }

        .benefit-content {
            padding: 22px 24px 26px;
        }

        .benefit-content h3 {
            margin: 0 0 12px;
            font-size: 1.1rem;
            font-weight: 700;
        }

        .benefit-content ul {
            margin: 0 0 18px;
            padding-left: 18px;
            color: inherit;
            line-height: 1.8;
            font-size: 0.95rem;
        }

        .btn-primary {
            display: inline-block;
            background: var(--green);
            color: #fff;
            border-radius: 10px;
            padding: 0.8rem 1.5rem;
            font-weight: 700;
            min-width: 150px;
            text-align: center;
            border: none;
            cursor: pointer;
        }

        .product-lineup {
            margin-top: 72px;
        }

        .product-lineup h2 {
            display: inline-block;
            margin: 0 0 24px;
            font-size: clamp(2rem, 3vw, 2.8rem);
            letter-spacing: -0.06em;
            font-weight: 800;
            padding: 10px 16px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 12px;
        }

        .product-shop-link {
            margin-top: 28px;
            text-align: center;
        }

        .product-card {
            display: flex;
            min-width: 0;
            flex-direction: column;
            padding: 12px 12px 20px;
            border: 1px solid #dedede;
            border-radius: 4px;
            background: #fff;
            color: #202020;
            box-shadow: 0 2px 9px rgba(15, 23, 42, 0.08);
            transition: transform 180ms ease, box-shadow 180ms ease;
        }

        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.14);
        }

        .product-image {
            height: 270px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            margin-bottom: 16px;
            border-radius: 10px;
            background: #fff;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-card h3 {
            min-height: 3.6em;
            margin: 0 0 12px;
            font-size: 0.92rem;
            font-weight: 500;
            line-height: 1.2;
            text-transform: uppercase;
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
            color: #68727a;
            font-size: 0.88rem;
        }

        .rating-stars {
            color: #f26516;
            font-size: 1.18rem;
            letter-spacing: 0.04em;
            white-space: nowrap;
        }

        .rating-stars .empty {
            color: #d8d8d8;
        }

        .product-sku {
            color: #78818a;
            font-size: 0.8rem;
        }

        .product-price {
            display: flex;
            align-items: flex-start;
            gap: 2px;
            margin-top: auto;
            padding-top: 28px;
            color: #202020;
            font-size: 1.55rem;
            line-height: 1;
        }

        .product-price strong {
            font-weight: 700;
        }

        .product-price sup {
            margin-top: 2px;
            font-size: 0.62rem;
            font-weight: 700;
        }

        footer {
            margin-top: 80px;
            background: #0e0e0e;
            color: #f2f2f2;
            padding: 34px 0 26px;
        }

        .footer-inner {
            max-width: 1220px;
            margin: 0 auto;
            padding: 0 18px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
        }

        .footer-brand {
            display: grid;
            gap: 14px;
        }

        .footer-brand p {
            margin: 0;
            font-size: 1.2rem;
            font-weight: 400;
            color: #ebebeb;
        }

        .socials {
            display: flex;
            gap: 10px;
            font-size: 1.1rem;
            color: #fff;
        }

        .socials span {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
        }

        .footer-contact {
            text-align: right;
            font-size: 0.95rem;
            line-height: 1.8;
            color: #d7d7d7;
        }

        @media (max-width: 980px) {
            .topbar {
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .nav {
                flex-wrap: wrap;
                justify-content: center;
                gap: 12px 18px;
            }

            .top-intro {
                grid-template-columns: 1fr;
            }

            .product-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .footer-inner {
                flex-direction: column;
                text-align: center;
            }

            .footer-contact {
                text-align: center;
            }
        }

        @media (max-width: 640px) {
            .hero-copy {
                min-height: 440px;
                padding: 104px 16px 50px;
            }

            .sky-celestial {
                top: 14vh;
                right: 9vw;
                width: 66px;
            }

            .hero-glass { padding: 24px 18px; }

            .intro-copy { padding: 20px; }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 250px;
            }

            .topbar {
                padding: 12px 18px;
            }

            .nav-toggle {
                display: inline-flex;
            }

            .nav {
                display: none;
                position: absolute;
                top: calc(100% + 10px);
                right: 18px;
                left: 18px;
                flex-direction: column;
                align-items: flex-start;
                gap: 14px;
                padding: 18px 16px;
                border-radius: 6px;
                background: #fff;
                border: 1px solid #e0e7e2;
                box-shadow: 0 10px 24px rgba(23, 43, 37, 0.12);
            }

            .nav.open {
                display: flex;
            }

            .nav.open a {
                color: #3e5148;
            }

            .nav.open a.nav-button,
            .nav.open a.nav-button:hover {
                color: #fff;
            }

            .nav-button {
                width: 100%;
                text-align: center;
            }

        }
    </style>
</head>
<body>
    <div class="sky-effects" aria-hidden="true">
        <div class="sky-clouds"></div>
        <div class="sky-stars"></div>
        <div class="sky-celestial"></div>
    </div>

    <header>
        <div class="topbar">
            <div class="logo">SunGO</div>
            <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false">
                <span></span>
            </button>
            <nav class="nav" id="mainNav" aria-label="Menú principal">
                <a href="#">Inicio</a>
                <a href="#products">Productos</a>
                <a href="{{ route('ventas') }}">Tienda</a>
                <a href="#about">Nosotros</a>
                <a href="/contact" class="nav-button">Contáctanos</a>
            </nav>
        </div>

        <div class="hero-copy">
            <div class="hero-glass glass-panel">
                <h1>Empieza tu vida sostenible</h1>
                <p>Aprovecha el sol de Yucatán con SunGo.</p>
                <a href="/contact" class="cta">Conócenos</a>
            </div>
        </div>
    </header>

    <main class="page-shell" id="about">
        <section class="top-intro">
            <div class="intro-copy glass-panel">
                <h2>¿Quiénes Somos?</h2>
                <p>En SunGo ofrecemos soluciones de energía solar para hogares y negocios que buscan reducir su factura eléctrica, mejorar su independencia energética y generar un mayor valor para su propiedad.</p>
            </div>

            <div class="benefit-card">
                <img src="https://images.unsplash.com/photo-1497440001374-f26997328c1b?auto=format&fit=crop&w=900&q=80" alt="Beneficios de solar">
                <div class="benefit-content">
                    <h3>Beneficios</h3>
                    <ul>
                        <li>Ahorras en tu recibo de CFE.</li>
                        <li>Energía limpia y renovable.</li>
                        <li>Mayor valor en tu propiedad.</li>
                    </ul>
                    <a href="{{ route('ventas') }}" class="btn-primary">Ver productos</a>
                </div>
            </div>
        </section>

        <section class="product-lineup" id="products">
            <h2 class="glass-panel">Productos</h2>
            <div class="product-grid">
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1497440001374-f26997328c1b?auto=format&fit=crop&w=700&q=85" alt="Panel solar fotovoltaico">
                    </div>
                    <h3>ERA sistema fotovoltaico 1 panel solar 270 W</h3>
                    <div class="product-rating">
                        <span class="rating-stars" role="img" aria-label="Calificación: 2.8 de 5 estrellas">★★★<span class="empty">★★</span></span>
                        <span>2.8 (12)</span>
                    </div>
                    <div class="product-sku">SKU 140576</div>
                    <div class="product-price"><span>$</span><strong>13,249</strong><sup>00</sup></div>
                </article>
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=700&q=85" alt="Dos paneles solares fotovoltaicos">
                    </div>
                    <h3>ERA sistema fotovoltaico 2 paneles solares 270 W</h3>
                    <div class="product-rating">
                        <span class="rating-stars" role="img" aria-label="Calificación: 3.8 de 5 estrellas">★★★★<span class="empty">★</span></span>
                        <span>3.8 (10)</span>
                    </div>
                    <div class="product-sku">SKU 152751</div>
                    <div class="product-price"><span>$</span><strong>22,499</strong><sup>00</sup></div>
                </article>
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1518770660439-4636190af475?auto=format&fit=crop&w=700&q=85" alt="Panel solar portátil pequeño">
                    </div>
                    <h3>Ring panel solar pequeño USB-C - negro</h3>
                    <div class="product-rating">
                        <span class="rating-stars" role="img" aria-label="Calificación: 4.1 de 5 estrellas">★★★★<span class="empty">★</span></span>
                        <span>4.1 (39)</span>
                    </div>
                    <div class="product-sku">SKU 226333</div>
                    <div class="product-price"><span>$</span><strong>1,035</strong><sup>00</sup></div>
                </article>
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://images.unsplash.com/photo-1497435334941-8c899ee9e8e9?auto=format&fit=crop&w=700&q=85" alt="Kit de paneles solares fotovoltaicos">
                    </div>
                    <h3>Kit fotovoltaico de 4400 W con 8 paneles solares monocristalinos</h3>
                    <div class="product-rating">
                        <span class="rating-stars" role="img" aria-label="Sin calificaciones"> <span class="empty">★★★★★</span></span>
                        <span>0 (0)</span>
                    </div>
                    <div class="product-sku">SKU 226563</div>
                    <div class="product-price"><span>$</span><strong>79,999</strong><sup>00</sup></div>
                </article>
            </div>
            <div class="product-shop-link">
                <a href="{{ route('ventas') }}" class="btn-primary">Ir a la tienda</a>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-inner">
            <div class="footer-brand">
                <p>La energía del sol impulsa tu futuro</p>
                <div class="socials" aria-label="Redes sociales">
                    <span>f</span>
                    <span>in</span>
                    <span>◎</span>
                    <span>◌</span>
                </div>
            </div>

            <div class="footer-contact">
                Mérida, Yucatán.<br>
                WhatsApp: (999) 123-4567<br>
                Correo: atencion@sun.go.mx
            </div>
        </div>
    </footer>

    <script>
        const toggle = document.querySelector('.nav-toggle');
        const nav = document.getElementById('mainNav');

        function cambiarCielo() {
            const scrollY = window.scrollY;
            const maxScroll = Math.max(window.innerHeight * 1.8, 700);
            const progreso = Math.min(scrollY / maxScroll, 1);
            const curva = 1 - Math.pow(1 - progreso, 3);
            const anochecer = Math.max(0, Math.min((curva - 0.28) / 0.72, 1));
            const rojoTexto = Math.round(19 + curva * 236);
            const verdeTexto = Math.round(37 + curva * 218);
            const azulTexto = Math.round(50 + curva * 205);

            document.body.style.setProperty('--page-text', `rgb(${rojoTexto}, ${verdeTexto}, ${azulTexto})`);

            const rojoAstro = Math.round(255 - anochecer * 18);
            const verdeAstro = Math.round(207 + anochecer * 37);
            const azulAstro = Math.round(88 + anochecer * 167);
            const rojoResplandor = Math.round(255 - anochecer * 67);
            const verdeResplandor = Math.round(184 + anochecer * 35);
            const azulResplandor = Math.round(67 + anochecer * 188);

            document.body.style.setProperty('--orb-color', `rgb(${rojoAstro}, ${verdeAstro}, ${azulAstro})`);
            document.body.style.setProperty('--orb-glow', `rgba(${rojoResplandor}, ${verdeResplandor}, ${azulResplandor}, 0.72)`);
            document.body.style.setProperty('--moon-shadow-opacity', String(anochecer));
            document.body.style.setProperty('--moon-shadow-x', `${Math.round(140 - anochecer * 102)}%`);
            document.body.style.setProperty('--stars-opacity', String(Math.max(0, (anochecer - 0.24) / 0.76)));
            document.body.style.setProperty('--cloud-opacity', String(0.38 * (1 - anochecer)));
            document.body.style.setProperty('--orb-y', `${Math.round(curva * window.innerHeight * 0.16)}px`);

            const fondo = `linear-gradient(180deg,
                rgba(${Math.round(117 + curva * 25)}, ${Math.round(198 - curva * 40)}, ${Math.round(255 - curva * 110)}, 0.98) 0%,
                rgba(${Math.round(244 - curva * 30)}, ${Math.round(195 - curva * 40)}, ${Math.round(92 - curva * 15)}, 0.92) 26%,
                rgba(${Math.round(168 - curva * 15)}, ${Math.round(126 + curva * 20)}, ${Math.round(255 - curva * 40)}, 0.75) 55%,
                rgba(${Math.round(20 + curva * 40)}, ${Math.round(32 + curva * 34)}, ${Math.round(90 + curva * 36)}, 0.96) 78%,
                rgba(${Math.round(4 + curva * 10)}, ${Math.round(10 + curva * 18)}, ${Math.round(24 + curva * 40)}, 1) 100%)`;

            document.body.style.background = fondo;
        }

        window.addEventListener('scroll', cambiarCielo, { passive: true });
        cambiarCielo();

        if (toggle && nav) {
            toggle.addEventListener('click', function () {
                const isOpen = nav.classList.toggle('open');
                toggle.setAttribute('aria-expanded', String(isOpen));
            });
        }
    </script>
</body>
</html>
