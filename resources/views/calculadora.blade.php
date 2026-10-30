
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SunGo | Calculadora solar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
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

header {
    background: #174c35;
    color: white;
    padding: 24px 8%;
}

header h1 { color: #b9ef75; margin: 0; }

main {
    max-width: 760px;
    margin: 35px auto;
    padding: 0 18px;
}

.card {
    background: white;
    padding: 26px;
    border-radius: 15px;
    box-shadow: 0 5px 20px #174c3510;
    margin-bottom: 20px;
}

h2 { color: #216747; }

label {
    display: block;
    font-weight: bold;
    margin: 17px 0 8px;
}

input, select {
    width: 100%;
    padding: 13px;
    border: 1px solid #cbd9ce;
    border-radius: 8px;
    font-size: 16px;
}

button {
    width: 100%;
    margin-top: 22px;
    padding: 14px;
    background: #24764d;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
}

.resultado {
    display: none;
    background: #eff8f0;
    padding: 20px;
    border-radius: 12px;
    margin-top: 22px;
}

.resultado strong {
    color: #216747;
    font-size: 25px;
}

.nota {
    color: #607064;
    font-size: 13px;
    line-height: 1.6;
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
            width: 100%;
            min-height: 72px;
            padding: 0 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            border-bottom: 1px solid #e0e7e2;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
        }

        .logo {
            display: flex;
            flex-shrink: 0;
            align-items: center;
        }

        .logo img {
            display: block;
            width: 58px;
            height: 64px;
            object-fit: contain;
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
        
        /* ===== Sección ¿Quiénes somos? ===== */
        .top-intro {
            margin-top: 34px;
            display: grid;
            grid-template-columns: minmax(260px, 0.75fr) 1.5fr;
            gap: 26px;
            align-items: stretch;
        }

        .about-image {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 28px rgba(10, 18, 22, 0.12);
            min-height: 260px;
            max-height: 520px;
        }

        .about-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .intro-copy {
            font-size: 1.05rem;
            line-height: 1.55;
            padding: 28px 32px;
            color: #fff;
        }

        .intro-copy h2 {
            font-size: clamp(2.1rem, 3vw, 3.1rem);
            margin: 0 0 16px;
            letter-spacing: -0.06em;
            line-height: 1.08;
            font-weight: 800;
        }

        .intro-copy > p { margin: 0 0 22px; }

        .benefit-content {
            padding: 20px 0 0;
            border-top: 1px solid rgba(255, 255, 255, 0.28);
        }

        .benefit-content h3 {
            margin: 0 0 10px;
            font-size: 1.1rem;
            font-weight: 700;
            color: #fff;
        }

        .benefit-content ul {
            margin: 0 0 20px;
            padding-left: 18px;
            color: #fff;
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

        /* ===== Sección Productos ===== */
        .product-lineup {
            margin-top: 72px;
            padding: 28px 24px 32px;
        }

        .top-intro,
        .product-lineup {
            scroll-margin-top: 92px;
        }

        .product-lineup h2 {
            display: block;
            margin: 0 0 24px;
            padding: 0;
            font-size: clamp(2rem, 3vw, 2.8rem);
            letter-spacing: -0.06em;
            font-weight: 800;
            color: #fff;
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

            .about-image {
                min-height: 0;
                height: 260px;
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

            .product-lineup { padding: 20px 14px 24px; }

            .product-grid {
                grid-template-columns: 1fr;
            }

            .product-image {
                height: 250px;
            }

            .topbar {
                padding: 8px 18px;
            }

            .logo img {
                width: 49px;
                height: 54px;
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
            <a class="logo" href="/" aria-label="SunGo, inicio">
                <img src="{{ asset('Imagenes/logo-sungo.png') }}" alt="SunGo Energía Solar">
            </a>
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

    </header>


<main class="page">
    <section class="calculadora-wrap">
        <div class ="calculadora-left">
        <h1 >Calcula tus paneles solares</h1>
        <p>Utiliza los datos de tu recibo de luz de CFE.</p>

         <label for="consumo">Consumo del periodo (kWh)</label>
        <input id="consumo" type="number" min="1" step="any"
               placeholder="Ej. 450" required>

        <label for="dias">Duración del periodo facturado</label>
        <select id="dias">
            <option value="30">30 días</option>
            <option value="31">31 días</option>
            <option value="28">28 días</option>
            <option value="60" selected>60 días</option>
            <option value="61">61 días</option>
            <option value="62">62 días</option>
        </select>

        <label for="horas">Horas solares pico promedio por día</label>
        <input id="horas" type="number" value="5"
               min="1" max="10" step="0.5">

        <label for="panel">Potencia del panel solar (W)</label>
        <select id="panel">
            <option value="450">450 W</option>
            <option value="500">500 W</option>
            <option value="550" selected>550 W</option>
            <option value="600">600 W</option>
        </select>

        <button type="button" onclick="calcular()">
            Calcular mi sistema solar
        </button>

        <div class="resultado" id="resultado" aria-live="polite">
            <h2>Tu recomendación SunGo</h2>
            <p>Consumo promedio diario:</p>
            <strong id="diario"></strong>

            <p>Consumo mensual estimado:</p>
            <strong id="mensual"></strong>

            <p>Potencia solar aproximada:</p>
            <strong id="potencia"></strong>

            <p>Paneles solares estimados:</p>
            <strong id="cantidad"></strong>

            <p id="detalle"></p>
            <p class="nota">
                Estimación preliminar. El resultado no garantiza
                eliminar el recibo de CFE. Deben revisarse la ubicación,
                sombras, orientación, consumo histórico, condiciones de
                instalación y requisitos de interconexión.
            </p>
        </div>
    </section>

    <p class="nota">
        Introduce únicamente el consumo en kWh y la duración del
        periodo. No necesitas escribir tu nombre, dirección,
        número de servicio ni otros datos personales del recibo.
    </p>
</main>

<script>
function calcular() {
    const consumo = Number(document.getElementById("consumo").value);
    const dias = Number(document.getElementById("dias").value);
    const horas = Number(document.getElementById("horas").value);
    const wattsPanel = Number(document.getElementById("panel").value);

    if (!Number.isFinite(consumo) || consumo <= 0) {
        alert("Ingresa el consumo en kWh que aparece en tu recibo.");
        return;
    }

    if (!Number.isFinite(dias) || dias <= 0 ||
        !Number.isFinite(horas) || horas <= 0 || horas > 10) {
        alert("Revisa los días del periodo y las horas solares.");
        return;
    }

    const consumoDiario = consumo / dias;
    const consumoMensual = consumoDiario * 30;

    // Rendimiento global estimado del sistema: 80 %
    const rendimiento = 0.80;

    // Potencia necesaria en kW
    const potenciaKW = consumoDiario / (horas * rendimiento);

    // Redondear siempre hacia arriba
    const paneles = Math.ceil(potenciaKW * 1000 / wattsPanel);
    const potenciaInstalada = paneles * wattsPanel / 1000;

    document.getElementById("diario").textContent =
        consumoDiario.toFixed(2) + " kWh/día";

    document.getElementById("mensual").textContent =
        consumoMensual.toFixed(1) + " kWh/mes";

    document.getElementById("potencia").textContent =
        potenciaKW.toFixed(2) + " kW";

    document.getElementById("cantidad").textContent =
        paneles + (paneles === 1 ? " panel" : " paneles");

    document.getElementById("detalle").textContent =
        "Con " + paneles + " paneles de " + wattsPanel +
        " W, la potencia instalada sería de " +
        potenciaInstalada.toFixed(2) +
        " kWp. La producción real dependerá de las condiciones del sitio.";

    document.getElementById("resultado").style.display = "block";
    document.getElementById("resultado").scrollIntoView({
        behavior: "smooth",
        block: "nearest"
    });
}
</script>
</main>
</body>
</html>
