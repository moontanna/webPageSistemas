<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Catálogo de productos y sistemas de paneles solares SunGo.">
    <title>Tienda solar | SunGo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #172b25;
            --muted: #62716b;
            --green: #28734f;
            --green-dark: #19543a;
            --line: #e0e7e2;
            --surface: #ffffff;
            --page: #f4f7f3;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--page);
            color: var(--ink);
            font-family: 'DM Sans', sans-serif;
        }

        a { color: inherit; text-decoration: none; }

        .store-header {
            position: sticky;
            top: 0;
            z-index: 5;
            border-bottom: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
        }

        .header-inner {
            width: min(1280px, 100% - 40px);
            min-height: 72px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            color: var(--green-dark);
            font-size: 1.25rem;
            font-weight: 800;
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

        .contact-link {
            padding: 10px 16px;
            border-radius: 6px;
            background: var(--green);
            color: #fff !important;
        }

        main {
            width: min(1280px, 100% - 40px);
            margin: 0 auto;
            padding: 54px 0 72px;
        }

        .eyebrow {
            margin: 0 0 10px;
            color: var(--green);
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
            color: var(--muted);
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .catalog-toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            margin: 34px 0 16px;
            padding-bottom: 14px;
            border-bottom: 1px solid var(--line);
            color: var(--muted);
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
            color: var(--muted);
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

        @media (max-width: 600px) {
            .header-inner,
            main { width: min(100% - 28px, 520px); }

            .header-inner { min-height: 64px; }

            .header-nav { gap: 14px; font-size: 0.84rem; }

            .header-nav a:nth-child(2) { display: none; }

            main { padding-top: 38px; }

            .catalog-toolbar { margin-top: 26px; }

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
    <header class="store-header">
        <div class="header-inner">
            <a class="brand" href="/">SunGO</a>
            <nav class="header-nav" aria-label="Navegación principal">
                <a href="/">Inicio</a>
                <a href="/ventas" aria-current="page">Tienda</a>
                <a class="contact-link" href="{{ route('contact') }}">Contactar</a>
            </nav>
        </div>
    </header>

    <main>
        <p class="eyebrow">Catálogo solar</p>
        <h1>Paneles y sistemas solares</h1>
        <p class="intro">Explora sistemas fotovoltaicos para proyectos pequeños y soluciones completas para tu hogar o negocio.</p>

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
                    <h2>ERA sistema fotovoltaico con 1 panel solar de 270 W</h2>
                    <p class="description">Sistema fotovoltaico compacto con un panel solar de 270 W. Revisa en la ficha de tienda los componentes incluidos y requisitos de instalación.</p>
                    <div class="price-label">Precio </div>
                    <p class="price">$13,249.00 <span>MXN</span></p>
                    <button class="product-action" type="button">Comprar</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-image">
                    <img src="https://cdn.homedepot.com.mx/productos/152751/152751-za4.jpg" alt="Sistema fotovoltaico Home Depot SKU 152751" loading="lazy" decoding="async">
                </div>
                <div class="product-details">
                    <h2>ERA sistema fotovoltaico con 2 paneles solares de 270 W</h2>
                    <p class="description">Sistema con dos paneles solares de 270 W para ampliar la generación fotovoltaica en una instalación compatible.</p>
                    <div class="price-label">Precio </div>
                    <p class="price">$22,499.00 <span>MXN</span></p>
                    <button class="product-action" type="button">Comprar</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-image">
                    <img src="https://cdn.homedepot.com.mx/productos/226333/226333-za4.jpg" alt="Panel solar Ring USB-C Home Depot SKU 226333" loading="lazy" decoding="async">
                </div>
                <div class="product-details">
                    <h2>Ring panel solar pequeño USB-C, negro</h2>
                    <p class="description">Panel solar compacto con conexión USB-C, pensado para alimentar dispositivos compatibles en exteriores.</p>
                    <div class="price-label">Precio </div>
                    <p class="price">$1,035.00 <span>MXN</span></p>
                    <button class="product-action" type="button">Comprar</button>
                </div>
            </article>

            <article class="product-card">
                <div class="product-image">
                    <img src="https://cdn.homedepot.com.mx/productos/226563/226563-za1.jpg" alt="Kit fotovoltaico Home Depot SKU 226563" loading="lazy" decoding="async">
                </div>
                <div class="product-details">
                    <h2>Kit fotovoltaico de 4400 W con 8 paneles monocristalinos</h2>
                    <p class="description">Kit fotovoltaico de ocho paneles monocristalinos con potencia indicada de 4400 W. Confirma el alcance del kit y la instalación requerida.</p>
                    <div class="price-label">Precio</div>
                    <p class="price">$79,999.00 <span>MXN</span></p>
                    <button class="product-action" type="button">Comprar</button>
                </div>
            </article>
        </section>

        <p class="price-note">Fotos de producto alojadas en el CDN de The Home Depot México. Confirma existencia, precio vigente y detalles técnicos con el vendedor antes de comprar.</p>
    </main>

    <footer class="store-footer">SunGO · Energía solar para tu hogar y negocio</footer>
</body>
</html>
 