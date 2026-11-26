<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'REFORVER | CBTa 35')</title>
    
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    
    @stack('estilos')
</head>
<body>

    <header>
       
        <nav class="menu">
             <a href="{{ route('inicio') }}">
           
            <img src="{{ asset('css/Bustericono.png') }}" alt="REFORVER CBTa 35" class="logo-img" style="width: 50px; height: 50px; border-radius: 10%;">
        </a>
            <a href="{{ route('inicio') }}"><h1>REFORVER| CBTa 35</h1></a>

            <ul class="enlaces">
                
                <li><a href="{{ route('catalogo') }}">Catálogo</a></li>
                <li><a href="{{ route('soluciones') }}">Soluciones</a></li>
                <li><a href="{{ route('multimedia') }}">Multimedia</a></li>
                <li><a href="{{ route('acerca') }}">Acerca de</a></li>
                <li><a href="{{ route('referencias') }}">Referencias</a></li>
            </ul>
        </nav>
    </header>

    <main>
       
        @yield('contenido')
    </main>

    <footer>
        <div class="contenido-footer">
            <h3>Reforver - CBTa 35</h3>
            <p>"Si los arboles viven, nosostros lo haremos".</p>
            <p class="creditos">©2026 BusterGVD Todos los derechos reservados </p>
        </div>
    </footer>
<a href="#inicio" class="btn-subir"><h3>↑ Subir</h3></a>
    @stack('scripts')
</body>
</html>