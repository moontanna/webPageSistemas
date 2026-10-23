<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Catálogo de productos y sistemas de paneles solares SunGo.">
    <title>Tienda solar | SunGo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #172b25;
            --muted: #62716b;
            --green: #28734f;
            --green-dark: #19543a;
            --line: #e0e7e2;
            --surface: #ffffff;
            --page: #f4f7f3;
            --page-text: #132532;
        }

        * { box-sizing: border-box; }

        /* ===== FONDO CIELO (copiado de welcome) ===== */
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
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
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

        .glass-panel {
            border: 1px solid rgba(255, 255, 255, 0.28);
            border-radius: 14px;
            background: rgba(10, 20, 28, 0.42);
            color: #fff;
            box-shadow: 0 16px 36px rgba(5, 14, 20, 0.14);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }
        /* ===== FIN FONDO CIELO ===== */

        a { color: inherit; text-decoration: none; }

        .store-header {
            font-family: 'Poppins', sans-serif;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 50;
            border-bottom: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
        }

        .header-inner {
            width: 100%;
            min-height: 72px;
            margin: 0 auto;
            padding: 0 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            display: flex;
            flex-shrink: 0;
            align-items: center;
        }

        .brand img {
            display: block;
            width: 58px;
            height: 64px;
            object-fit: contain;
        }

        .header-nav {
            display: flex;
            align-items: center;
            gap: 26px;
            color: #3e5148;
            font-size: 0.94rem;
            font-weight: 600;
        }

        .header-nav a:hover { color: var(--green); }

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
            background: var(--green-dark);
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

        .contact-link {
            padding: 10px 16px;
            border-radius: 6px;
            background: var(--green);
            color: #fff !important;
        }

        main {
            width: min(1280px, 100% - 40px);
            margin: 0 auto;
            padding: 126px 0 72px;
        }

        .hero-glass {
            max-width: 820px;
            padding: 30px 34px;
        }

        .eyebrow {
            margin: 0 0 10px;
            color: #8fe0ae;
            font-size: 0.78rem;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            font-size: clamp(2.1rem, 4vw, 3.2rem);
            line-height: 1.08;
        }

        .intro {
            max-width: 720px;
            margin: 14px 0 0;
            color: rgba(255, 255, 255, 0.92);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        /* Contenedor transparente que envuelve "4 productos" + tarjetas */
        .catalog-panel {
            margin: 34px 0 0;
            padding: 22px 24px 26px;
        }

        .catalog-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin: 0 0 18px;
            padding: 0;
            color: rgba(255, 255, 255, 0.92);
            font-size: 0.9rem;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
        }

        .product-card {
            min-width: 0;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: 6px;
            background: var(--surface);
            color: var(--ink);
            box-shadow: 0 4px 14px rgba(29, 55, 41, 0.05);
            transition: transform 180ms ease, box-shadow 180ms ease;
        }

        .product-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 26px rgba(29, 55, 41, 0.12);
        }

        .product-image {
            display: grid;
            place-items: center;
            height: 232px;
            padding: 14px;
            background: #fff;
        }

        .product-image img {
            display: block;
            width: 100%;
            height: 100%;
            max-height: 220px;
            object-fit: contain;
        }

        .product-details {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 18px;
        }

        .product-card h2 {
            min-height: 3.3em;
            margin: 0;
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.35;
        }

        .description {
            margin: 10px 0 18px;
            color: var(--muted);
            font-size: 0.88rem;
            line-height: 1.55;
        }

        .price-label {
            margin-top: auto;
            color: var(--muted);
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .price {
            margin: 4px 0 16px;
            color: var(--green-dark);
            font-size: 1.65rem;
            font-weight: 800;
            line-height: 1.15;
        }

        .price span {
            margin-left: 4px;
            color: var(--muted);
            font-size: 0.75rem;
            font-weight: 600;
        }

        .product-action {
            display: block;
            width: 100%;
            padding: 11px 14px;
            border: 1px solid var(--green);
            border-radius: 5px;
            background: transparent;
            color: var(--green-dark);
            font-family: inherit;
            font-size: 0.9rem;
            font-weight: 700;
            text-align: center;
            cursor: pointer;
            transition: background 160ms ease, color 160ms ease;
        }

        .product-action:hover {
            background: var(--green);
            color: #fff;
        }

        .price-note {
            margin: 20px 0 0;
            padding: 14px 20px;
            color: rgba(255, 255, 255, 0.92);
            font-size: 0.82rem;
            line-height: 1.5;
        }

        .store-footer {
            padding: 24px 20px;
            background: #173b2c;
            color: #eaf2ed;
            text-align: center;
            font-size: 0.9rem;
        }

        @media (max-width: 980px) {
            .product-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 760px) {
            .nav-toggle { display: inline-flex; }

            .header-nav {
                display: none;
                position: absolute;
                top: calc(100% + 10px);
                right: 14px;
                left: 14px;
                flex-direction: column;
                align-items: flex-start;
                gap: 14px;
                padding: 18px 16px;
                border-radius: 6px;
                background: #fff;
                border: 1px solid var(--line);
                box-shadow: 0 10px 24px rgba(23, 43, 37, 0.12);
            }

            .header-nav.open { display: flex; }

            .contact-link {
                width: 100%;
                text-align: center;
            }
        }

        @media (max-width: 600px) {
            .header-inner {
                min-height: 64px;
                padding: 0 14px;
            }

            .brand img {
                width: 49px;
                height: 54px;
            }

            main {
                width: min(100% - 28px, 520px);
                padding-top: 108px;
            }

            .hero-glass { padding: 24px 18px; }

            .catalog-panel { margin-top: 26px; padding: 18px 14px 20px; }

            .sky-celestial {
                top: 14vh;
                right: 9vw;
                width: 66px;
            }

            .product-grid { grid-template-columns: 1fr; gap: 14px; }

            .product-card {
                display: grid;
                grid-template-columns: 38% minmax(0, 1fr);
            }

            .product-image { height: 100%; min-height: 230px; padding: 8px; }

            .product-details { padding: 15px 13px; }

            .product-card h2 { min-height: 0; font-size: 0.93rem; }

            .description { font-size: 0.82rem; }

            .price { font-size: 1.35rem; }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                transition-duration: 0.01ms !important;
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

    <header class="store-header">
        <div class="header-inner">
            <a class="brand" href="/" aria-label="SunGo, inicio">
                <img src="{{ asset('Imagenes/logo-sungo.png') }}" alt="SunGo Energía Solar">
            </a>
            <button class="nav-toggle" aria-label="Abrir menú" aria-expanded="false">
                <span></span>
            </button>
            <nav class="header-nav" id="mainNav" aria-label="Navegación principal">
                <a href="/">Inicio</a>
                <a href="/#products">Productos</a>
                <a href="/ventas" aria-current="page">Tienda</a>
                <a href="/#about">Nosotros</a>
                <a class="contact-link" href="{{ route('contact') }}">Contactar</a>
            </nav>
        </div>
    </header>

    <main>
        <div class="hero-glass glass-panel">
            <p class="eyebrow">Catálogo solar</p>
            <h1>Paneles y sistemas solares</h1>
            <p class="intro">Explora sistemas fotovoltaicos para proyectos pequeños y soluciones completas para tu hogar o negocio.</p>
        </div>

        <div class="catalog-panel glass-panel">
            <div class="catalog-toolbar">
                <span>4 productos</span>
                <span>Precios en MXN</span>
            </div>

            <section class="product-grid" aria-label="Productos de paneles solares">
                <article class="product-card">
                    <div class="product-image">
                        <img src="https://cdn.homedepot.com.mx/productos/140576/140576-z.jpg" alt="Sistema fotovoltaico Home Depot SKU 140576" loading="lazy" decoding="async">
                    </div>
                    <div class="product-details">
                        <p class="sku">SKU 140576</p>
                        <h2>ERA sistema fotovoltaico con 1 panel solar de 270 W</h2>
                        <p class="description">Sistema fotovoltaico compacto con un panel solar de 270 W. Revisa en la ficha de tienda los componentes incluidos y requisitos de instalación.</p>
                        <div class="price-label">Precio de referencia</div>
                        <p class="price">$13,249.00 <span>MXN</span></p>
                        <a class="product-action" href="{{ route('contact') }}">Consultar producto</a>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <img src="https://cdn.homedepot.com.mx/productos/152751/152751-za4.jpg" alt="Sistema fotovoltaico Home Depot SKU 152751" loading="lazy" decoding="async">
                    </div>
                    <div class="product-details">
                        <p class="sku">SKU 152751</p>
                        <h2>ERA sistema fotovoltaico con 2 paneles solares de 270 W</h2>
                        <p class="description">Sistema con dos paneles solares de 270 W para ampliar la generación fotovoltaica en una instalación compatible.</p>
                        <div class="price-label">Precio de referencia</div>
                        <p class="price">$22,499.00 <span>MXN</span></p>
                        <a class="product-action" href="{{ route('contact') }}">Consultar producto</a>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <img src="https://cdn.homedepot.com.mx/productos/226333/226333-za4.jpg" alt="Panel solar Ring USB-C Home Depot SKU 226333" loading="lazy" decoding="async">
                    </div>
                    <div class="product-details">
                        <p class="sku">SKU 226333</p>
                        <h2>Ring panel solar pequeño USB-C, negro</h2>
                        <p class="description">Panel solar compacto con conexión USB-C, pensado para alimentar dispositivos compatibles en exteriores.</p>
                        <div class="price-label">Precio de referencia</div>
                        <p class="price">$1,035.00 <span>MXN</span></p>
                        <a class="product-action" href="{{ route('contact') }}">Consultar producto</a>
                    </div>
                </article>

                <article class="product-card">
                    <div class="product-image">
                        <img src="https://cdn.homedepot.com.mx/productos/226563/226563-za1.jpg" alt="Kit fotovoltaico Home Depot SKU 226563" loading="lazy" decoding="async">
                    </div>
                    <div class="product-details">
                        <p class="sku">SKU 226563</p>
                        <h2>Kit fotovoltaico de 4400 W con 8 paneles monocristalinos</h2>
                        <p class="description">Kit fotovoltaico de ocho paneles monocristalinos con potencia indicada de 4400 W. Confirma el alcance del kit y la instalación requerida.</p>
                        <div class="price-label">Precio de referencia</div>
                        <p class="price">$79,999.00 <span>MXN</span></p>
                        <a class="product-action" href="{{ route('contact') }}">Consultar producto</a>
                    </div>
                </article>
            </section>
        </div>

        <p class="price-note glass-panel">La energia del sol impulsa tu futuro</p>
    </main>

    <footer class="store-footer">SunGO · Energía solar para tu hogar y negocio</footer>

    <script>
        function cambiarCielo() {
            const scrollY = window.scrollY;
            const maxScroll = Math.max(window.innerHeight * 1.8, 700);
            const progreso = Math.min(scrollY / maxScroll, 1);
            const curva = 1 - Math.pow(1 - progreso, 3);
            const anochecer = Math.max(0, Math.min((curva - 0.28) / 0.72, 1));

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

        const toggle = document.querySelector('.nav-toggle');
        const nav = document.getElementById('mainNav');

        if (toggle && nav) {
            toggle.addEventListener('click', function () {
                const isOpen = nav.classList.toggle('open');
                toggle.setAttribute('aria-expanded', String(isOpen));
            });
        }
    </script>
</body>
</html>