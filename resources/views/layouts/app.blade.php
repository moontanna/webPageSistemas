<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('titulopagina')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
  body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    background: #f3f3f3;
    color: #111;
  }

  .fakeimg {
    height: 200px;
    background: #aaa;
  }

  .sun-hero {
    position: relative;
    min-height: 72vh;
    background:
      linear-gradient(90deg, rgba(4, 14, 20, 0.82) 0%, rgba(8, 22, 31, 0.62) 25%, rgba(11, 18, 22, 0.28) 48%, rgba(17, 13, 10, 0.2) 100%),
      url('https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1800&q=80') center/cover no-repeat;
    color: #fff;
  }

  .sun-header {
    position: sticky;
    top: 0;
    z-index: 50;
    max-width: 1400px;
    margin: 0 auto;
    padding: 26px 56px 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: rgba(10, 19, 26, 0.18);
    backdrop-filter: blur(6px);
  }

  .brand {
    font-size: 1.1rem;
    font-weight: 700;
    letter-spacing: -0.04em;
    color: #fff;
  }

  .sun-nav {
    display: flex;
    align-items: center;
    gap: 2.6rem;
  }

  .sun-nav a {
    color: rgba(255,255,255,0.96);
    text-decoration: none;
    font-size: 1.05rem;
    font-weight: 600;
    letter-spacing: -0.02em;
  }

  .sun-nav .nav-button {
    padding: 0.8rem 1.4rem;
    border: 1.5px solid rgba(93, 224, 245, 0.95);
    border-radius: 0.75rem;
    background: rgba(6, 30, 36, 0.08);
    color: #dcfbff;
  }

  .hero-content {
    min-height: calc(72vh - 80px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 2rem 1rem 3rem;
  }

  .hero-content h1 {
    font-size: clamp(3rem, 4.8vw, 5.8rem);
    font-weight: 800;
    line-height: 0.98;
    letter-spacing: -0.06em;
    margin: 0;
    text-shadow: 0 5px 18px rgba(0,0,0,0.25);
  }

  .hero-content h4 {
    font-size: clamp(1.35rem, 2vw, 2.2rem);
    font-weight: 400;
    line-height: 1.35;
    margin: 1.2rem auto 0;
    text-shadow: 0 4px 16px rgba(0,0,0,0.22);
  }

  .hero-button {
    margin-top: 2rem;
    display: inline-block;
    background: #1eb8c7;
    color: #ffffff;
    text-decoration: none;
    padding: 1rem 2.2rem;
    border-radius: 0.6rem;
    font-weight: 700;
    font-size: 1.3rem;
    box-shadow: 0 12px 24px rgba(30, 184, 199, 0.28);
  }

  .about-section {
    background: #f5f5f5;
    padding: 4rem 0 2rem;
  }

  .about-inner {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 2rem;
    display: grid;
    grid-template-columns: 1.1fr 1.4fr;
    gap: 2.5rem;
    align-items: center;
  }

  .about-copy h2 {
    font-size: clamp(2.4rem, 3vw, 4rem);
    font-weight: 800;
    letter-spacing: -0.06em;
    margin-bottom: 1rem;
    line-height: 1.08;
  }

  .about-copy p {
    font-size: 1.15rem;
    line-height: 1.7;
    color: #2e2e2e;
    max-width: 700px;
  }

  .about-image img {
    width: 100%;
    height: 420px;
    object-fit: cover;
    border-radius: 1rem;
    box-shadow: 0 12px 38px rgba(0,0,0,0.08);
  }

  .content-shell {
    max-width: 1280px;
    margin: 0 auto;
    padding: 2.5rem 2rem 4rem;
  }

  .legacy-grid {
    display: grid;
    grid-template-columns: 0.9fr 1.7fr;
    gap: 2rem;
    align-items: start;
  }

  .legacy-panel {
    background: #ffffff;
    border-radius: 1rem;
    box-shadow: 0 20px 40px rgba(17, 24, 39, 0.06);
    padding: 2rem;
  }

  .legacy-panel h2,
  .legacy-panel h3,
  .legacy-panel h5 {
    color: #111827;
  }

  .legacy-panel p,
  .legacy-panel li,
  .legacy-panel a {
    color: #374151;
  }

  .legacy-panel .fakeimg {
    border-radius: 0.8rem;
    overflow: hidden;
    margin: 1rem 0;
    background: #dfe7ef;
  }

  .legacy-panel .fakeimg img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
  }

  .legacy-panel .nav-pills .nav-link {
    background: #eaf9fc;
    color: #0f172a;
    margin-bottom: 0.5rem;
    border-radius: 0.5rem;
    border: 1px solid #d9f3f7;
  }

  .legacy-panel .nav-pills .nav-link.active {
    background: #1eb8c7;
    color: #fff;
    border-color: #1eb8c7;
  }

  @media (max-width: 900px) {
    .sun-header {
      padding: 22px 20px 0;
    }

    .sun-nav {
      gap: 1rem;
      flex-wrap: wrap;
      justify-content: flex-end;
    }

    .about-inner {
      grid-template-columns: 1fr;
      padding: 0 1rem;
    }
  }
  </style>
  @stack('css')
</head>
<body>

@hasSection('formato_inicial')
  <div class="p-5 text-white text-center fondo">
    <h1>@yield('titulo')</h1>
    <h4>@yield('subtitulo')</h4>
    <p>Soluciones de energía solar para hogares y empresas</p>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="/">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="#">@yield('link1', 'Servicios')</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Empresa</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact">Contacto</a></li>
      </ul>
    </div>
  </nav>
@else
  <section class="sun-hero">
    <header class="sun-header">
      <div class="brand">SunGO</div>
      <nav class="sun-nav" aria-label="Navegación principal">
        <a href="/">Inicio</a>
        <a href="#">Servicios</a>
        <a href="#">Nosotros</a>
        <a href="/contact" class="nav-button">Contáctanos</a>
      </nav>
    </header>

    <div class="hero-content">
      <h1>@yield('titulo')</h1>
      <h4>@yield('subtitulo')</h4>
      <a href="/contact" class="hero-button">Conócenos</a>
    </div>
  </section>
@endif

@php($empresaFormatoInicial = View::hasSection('formato_inicial'))
<div class="{{ $empresaFormatoInicial ? 'container mt-5' : 'content-shell' }}">
  <div class="{{ $empresaFormatoInicial ? 'row' : 'legacy-grid' }}">
    <div class="{{ $empresaFormatoInicial ? 'col-sm-4' : 'legacy-panel' }}">
      <h2>@yield("titulo1")</h2>
      <h5>Soluciones para tu energía</h5>
      <div class="fakeimg"><img src="https://images.unsplash.com/photo-1497440001374-f26997328c1b?auto=format&fit=crop&w=900&q=80" class='img-responsive' alt="Paneles solares"></div>
      <p>@yield("descripcion_about")</p>
      <h3 class="mt-4">Nuestros servicios</h3>
      <p>Te ayudamos a escoger la mejor solución solar para tu hogar o negocio.</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="{{route('contact')}}" target="_blank">Cotizar proyecto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Instalación residencial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Paneles para comercio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Mantenimiento</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>

    <div class="{{ $empresaFormatoInicial ? 'col-sm-8' : 'legacy-panel' }}">
      <h2>Beneficios de la energía solar</h2>
      <h5>Menor consumo, mayor ahorro</h5>
      <div class="fakeimg"><img src="https://images.unsplash.com/photo-1509391366360-2e959784a276?auto=format&fit=crop&w=1200&q=80" class='img-responsive' alt="Instalación solar"></div>
      <p>Reducimos tu factura eléctrica con sistemas diseñados para tus necesidades reales.</p>
      <p>Con paneles solares de alta eficiencia, puedes generar energía limpia, mejorar tu independencia energética y aumentar el valor de tu propiedad.</p>
      <span class="badge bg-primary">@yield("texto_ejemplo")</span>

      <h2 class="mt-5">Compromiso con Yucatán</h2>
      <h5>Calidad, seguridad y eficiencia</h5>
      <div class="fakeimg"><img src="https://images.unsplash.com/photo-1466611653911-95081537e5b7?auto=format&fit=crop&w=1200&q=80" class='img-responsive' alt="Equipo solar"></div>
      <p>Trabajamos con tecnología de vanguardia y un equipo técnico especializado para garantizar instalaciones seguras y duraderas.</p>
      <p>Desde la evaluación inicial hasta la puesta en marcha, acompañamos cada etapa de tu proyecto solar.</p>
    </div>
  </div>
</div>
 
<div class="container mt-5 table-responsive">
  @yield('contenido_listado')
</div>
 
<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>SunGo Energía Solar</p>
  <em>@yield("Autor") · @yield("actividad")</em><br>
  <i class="fa-brands fa-facebook"></i>
  <i class="fa-brands fa-twitter"></i>
  <i class="fa-brands fa-instagram"></i>
  <i class="fa-brands fa-linkedin"></i>
  <i class="fa-brands fa-github"></i>
  <i class="fa-brands fa-whatsapp"></i>
  <i class="fa-brands fa-telegram"></i>
  <i class="fa-brands fa-youtube"></i>
  <i class="fa-brands fa-twitch"></i>
  <i class="fa-brands fa-discord"></i>
  <i class="fa-brands fa-snapchat"></i>
  <i class="fa-brands fa-pinterest"></i>
  <i class="fa-brands fa-reddit"></i>
  <i class="fa-brands fa-tiktok"></i>
</div>
 
<div class="modal" tabindex="-1" id="myModal" role="dialog">
  <form id="editForm" method="POST">
    @csrf @method('PUT')
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">@yield('titulo_modal')</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type='hidden' name='id' id='id'>
          <input type='text' name='name' id='name' class="form-control">
          <input type='text' name='calle' id='calle' class="form-control">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </form>
</div>
 
</body>
</html>
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
        $('#tablausuarios').DataTable({
            columns: [
                { data: 'name' },
                { data: 'email' },
                { data: 'telefono' },
                { data: 'calle' },
                { data: 'acciones'}
            ]
        });
    });
 
    function carga_modal(id, nombre, calle){
      $('#id').val(id);
      $('#name').val(nombre);
      $("#calle").val(calle);
      $("#editForm").attr('action','/actualizar-dato/'+id);
      $('#myModal').modal('show');
    }
 
 
    $("#editForm").on('submit',function(e){
      e.preventDefault();
      alert($(this).serialize());
      $.ajax({
        url:$(this).attr('action'),
        type:'POST',
        method:'PUT',
        data:$(this).serialize(),
        success: function(response){
          //console.log(response);
          $("#myModal").modal('hide');
          location.reload();
        },
        error:function(xhr){
          console.log(xhr.responseText);
        }
      })
    })
</script>
 
 