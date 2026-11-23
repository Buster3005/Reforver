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
            <p class="creditos">©2026 Todos los derechos reservados </p>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>