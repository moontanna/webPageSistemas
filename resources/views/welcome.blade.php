<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi App')</title>
</head>
<body>

    <header>
        <nav>
            <a href="/">Sun Go</a>
            <a href="/">Productos</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; Aprovecha el sol de Yucatán con SunGo</p>
        <p>Mérida, Yucatán.</p>
        <p>WhatsApp: (999) 123-4567.</p>
        <p>Correo: contacto@sungo.mx.</p>
    </footer>

</body>
</html>   
