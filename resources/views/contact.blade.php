<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunGo | Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f7f3;
            --panel: #ffffff;
            --text: #172b25;
            --muted: #62716b;
            --line: #e0e7e2;
            --green: #28734f;
            --green-dark: #19543a;
            --content-width: 1220px;
            --panel-background: rgba(10, 20, 28, 0.42);
        }

        * { box-sizing: border-box; }

        html, body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: 'Poppins', sans-serif;
        }

        a { text-decoration: none; }

        body {
            min-height: 100vh;
        }

        .topbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(6px);
            border-bottom: 1px solid rgba(0,0,0,0.02);
            z-index: 10;
        }

        .topbar-inner {
            width: 100%;
            margin: 0 auto;
            padding: 8px 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
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

        .nav {
            display: flex;
            align-items: center;
            gap: 32px;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .nav a {
            color: #3e5148;
        }

        .nav-button {
            padding: 0.9rem 1.4rem;
            border-radius: 10px;
            background: var(--green);
            color: #fff !important;
            font-weight: 600;
            box-shadow: 0 10px 20px rgba(40, 115, 79, 0.18);
        }

        .page {
            width: min(calc(100% - 40px), var(--content-width));
            margin: 0 auto;
            padding: 104px 0 60px;
        }

        .contact-wrap {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
            align-items: start;
        }

        .contact-left {
            padding: 32px;
            border: 1px solid rgba(255, 255, 255, 0.28);
            border-radius: 14px;
            background: var(--panel-background);
            color: #fff;
            box-shadow: 0 16px 36px rgba(5, 14, 20, 0.14);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
        }

        .contact-title {
            font-size: clamp(2.3rem, 3vw, 3.6rem);
            line-height: 1.1;
            letter-spacing: -0.02em;
            margin: 0 0 28px;
            font-weight: 800;
        }

        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 18px 22px;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 8px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #fff;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            padding: 0.9rem 0.95rem;
            font-size: 1rem;
            color: var(--text);
            outline: none;
            box-shadow: inset 0 0 0 0 rgba(0,0,0,0);
        }

        .field textarea {
            min-height: 120px;
            resize: vertical;
        }

        .field input::placeholder,
        .field textarea::placeholder {
            color: var(--muted);
        }

        .btn-submit {
            width: 100%;
            margin-top: 18px;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: 10px;
            background: linear-gradient(180deg, var(--green) 0%, var(--green-dark) 100%);
            color: white;
            font-weight: 700;
            font-size: 1.1rem;
            cursor: pointer;
            box-shadow: 0 12px 20px rgba(60, 134, 79, 0.25);
        }

        .image-panel {
            width: 100%;
            height: 100%;
            min-height: 100%;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 36px rgba(15, 23, 42, 0.1);
            background: var(--panel-background);
            border: 1px solid rgba(255, 255, 255, 0.28);
        }

        .image-panel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        @media (max-width: 900px) {
            .contact-wrap {
                grid-template-columns: 1fr;
            }

            .image-panel {
                min-height: 360px;
            }
        }

        @media (max-width: 640px) {
            .nav {
                display: none;
            }

            .topbar-inner {
                padding: 8px 18px;
            }

            .form-grid {
                grid-template-columns: 1fr;
            }

            .page {
                padding-top: 90px;
            }
        }
        .contact-left .contact-info {
    display: block;
    width: 100%;
    max-width: 350px;
    margin: 0 0 20px;
    padding: 14px 18px;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.28);
    border-radius: 12px;
    box-shadow: none;
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

        @media (max-width: 900px) {
            .footer-inner {
                flex-direction: column;
                text-align: center;
            }

            .footer-contact {
                text-align: center;
            }
        }

    </style>
</head>
<body>
    <header class="topbar">
        <div class="topbar-inner">
            <a class="brand" href="{{ route('vista_inicio') }}" aria-label="SunGo, inicio">
                <img src="{{ asset('Imagenes/logo-sungo.png') }}" alt="SunGo Energía Solar">
            </a>
            <nav class="nav" aria-label="Navegación principal">
                <a href="{{ route('vista_inicio') }}">Inicio</a>
                <a href="{{ route('tienda') }}">Tienda</a>
                <a href="{{ route('calculadora') }}">Calculadora</a>
                <a href="{{ route('vista_inicio') }}#about">Nosotros</a>
                <a href="{{ route('contact') }}" class="nav-button">Contáctanos</a>
            </nav>
        </div>
    </header>

    <main class="page">
        <section class="contact-wrap">
            <div class="contact-left">
                <h1 class="contact-title">Solicita tu cotización</h1>
                
                <form>
                    <div class="form-grid">
                        <label class="field">
                            <span>Nombre(s)</span>
                            <input type="text" placeholder="Ej. Ana">
                        </label>

                        <label class="field">
                            <span>Apellidos</span>
                            <input type="text" placeholder="Ej. Herrera Morales">
                        </label>

                        <label class="field full">
                            <span>Correo electrónico</span>
                            <input type="email" placeholder="Ej. correoelectrónico@dominio.com">
                        </label>

                        <label class="field full">
                            <span>Teléfono</span>
                            <input type="tel" placeholder="Ej. 9993334645">
                        </label>

                        <label class="field full">
                            <span>Tipo de inmueble</span>
                            <select>
                                <option selected>Tipo de inmueble</option>
                                <option>Casa</option>
                                <option>Departamento</option>
                                <option>Negocio</option>
                                <option>Industrial</option>
                            </select>
                        </label>

                        <label class="field full">
                            <span>Cuéntanos qué necesitas</span>
                            <textarea placeholder="Escribe tu mensaje aquí..."></textarea>
                        </label>
                    </div>

                    <button type="submit" class="btn-submit">Enviar</button>
                </form>
            </div>

            <div class="image-panel" aria-label="Trabajador instalando paneles solares">
                <img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1200&q=80" alt="Trabajador instalando paneles solares">
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
</body>
</html>
