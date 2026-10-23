<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SunGo | Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #f4f7f3;
            --panel: #ffffff;
            --text: #172b25;
            --muted: #62716b;
            --line: #e0e7e2;
            --green: #28734f;
            --green-dark: #19543a;
        }

        * { box-sizing: border-box; }

        html, body {
            margin: 0;
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;
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
            max-width: 1220px;
            margin: 0 auto;
            padding: 18px 26px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-size: 1.1rem;
            font-weight: 800;
            letter-spacing: -0.05em;
            color: var(--green-dark);
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
            max-width: 1220px;
            margin: 0 auto;
            padding: 104px 20px 60px;
        }

        .contact-wrap {
            display: grid;
            grid-template-columns: 1.08fr 0.92fr;
            gap: 56px;
            align-items: start;
        }

        .contact-left {
            padding-top: 8px;
        }

        .contact-title {
            font-size: clamp(2.3rem, 3vw, 3.6rem);
            line-height: 1.1;
            letter-spacing: -0.06em;
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
            color: var(--text);
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field input,
        .field select,
        .field textarea {
            width: 100%;
            background: rgba(255,255,255,0.65);
            border: 1px solid var(--line);
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
            min-height: 520px;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 18px 36px rgba(15, 23, 42, 0.1);
            background: #dfeaf8;
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
                padding: 16px 18px;
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
    background: #ffffff;
    border: 1px solid #dfe3e8;
    border-radius: 12px;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
}

    </style>
</head>
<body>
    <header class="topbar">
        <div class="topbar-inner">
            <div class="brand">SunGO</div>
            <nav class="nav" aria-label="Navegación principal">
                <a href="{{ route('vista_inicio') }}">Inicio</a>
                <a href="{{ route('vista_inicio') }}#services">Servicios</a>
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
</body>
</html>
