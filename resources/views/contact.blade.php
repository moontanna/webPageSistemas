<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SunGo | Contacto</title>
    <style>
        body {
            background: #f3f3f3;
            font-family: 'Segoe UI', sans-serif;
            color: #0f172a;
        }

        .max-w-4xl {
            max-width: 1000px;
            margin: 40px auto;
            padding: 0 20px;
        }

        h1 {
            color: #0f172a;
            font-weight: 800;
            margin-bottom: 20px;
        }

        h2 {
            color: #0f172a;
            font-weight: 700;
        }

        a {
            color: #0b5d7a;
            text-decoration: none;
            font-weight: 600;
        }

        .alert {
            background: #dff7fb;
            color: #0a3b4a;
            border: 1px solid #bfeaf2;
            border-radius: 12px;
            margin: 24px 0;
        }

        .alert .alert-heading {
            color: #0a3b4a;
            font-weight: 700;
        }

        .row {
            margin-top: 20px;
        }

        .col-sm-3 {
            margin-bottom: 20px;
        }

        .card {
            border: 1px solid #dbeaf0;
            border-radius: 14px;
            background: #ffffff;
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.04);
        }

        .card-title {
            color: #0f172a;
            font-weight: 700;
        }

        .card-body {
            color: #334155;
        }

        .btn {
            background: #1eb8c7;
            border: none;
            color: #fff;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="max-w-4xl mx-auto px-4">    
        <h1>Página de Contacto</h1>
        <h2>{{$nombre}}</h2>
        <h2>{{$Especialidad}}</h2>
        <a href="{{route('vista_inicio')}}">Ir a la vista de inicio</a><br>
        <a href="{{route('contact')}}">Ir a la vista de contacto</a>

        <x-alert type='danger'>
            <x-slot name="title">
                Solicita tu cotización sin compromiso
            </x-slot>
            Te asesoramos para instalar paneles solares en tu hogar o negocio.
        </x-alert>

        <div class="row">
            <div class="col-sm-3">
               <x-card>
                    <x-slot name="title">
                        Instalación residencial
                    </x-slot>
                    <x-slot name="texto_tarjeta">
                        Soluciones de paneles solares para reducir tu recibo de luz y generar ahorro real.
                    </x-slot>
                     <x-slot name="texto_boton">
                        Cotizar
                    </x-slot>
               </x-card>
            </div>

            <div class="col-sm-3">
               <x-card>
                    <x-slot name="title">
                       Paneles comerciales
                    </x-slot>
                    <x-slot name="texto_tarjeta">
                        Sistemas eficientes para negocios que buscan sostenibilidad y optimización de costos.
                    </x-slot>
                    <x-slot name="texto_boton">
                        Saber más
                    </x-slot>
               </x-card>
            </div>

            <div class="col-sm-3">
               <x-card>
                    <x-slot name="title">
                       Mantenimiento
                    </x-slot>
                    <x-slot name="texto_tarjeta">
                        Revisamos y cuidamos tu sistema para que siempre funcione con máxima eficiencia.
                    </x-slot>
                    <x-slot name="texto_boton">
                        Agendar
                    </x-slot>
               </x-card>
            </div>

            <div class="col-sm-3">
               <x-card>
                    <x-slot name="title">
                       Asesoría solar
                    </x-slot>
                    <x-slot name="texto_tarjeta">
                        Te guiamos desde el diseño hasta la instalación para elegir la mejor solución.
                    </x-slot>
                    <x-slot name="texto_boton">
                        Consultar
                    </x-slot>
               </x-card>
            </div>
        </div>
    </div>
</body>
</html>