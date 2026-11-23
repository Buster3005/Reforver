<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimedia</title>
</head>
<body>
     @extends('layouts.app')

@section('titulo', 'Catálogo - REFORVER')

@section('contenido')
<br><br>
    <h1 style="color: #ffffff;">Videos informativo</h1>
<br><br>


<div class="tarjeta">
    <iframe 
      class="video-responsivo"
      src="{{ asset('css/Construcciones.mp4') }}" 
      title="Reproductor de video" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
    <div class="texto-tarjeta">
        <h2 style="color: #ffffff;">Construcciones</h2>
        <p style="color: #ffffff;">El paso de máquinas pesadas aplasta los poros de la tierra, lo que provoca encharcamientos durante las lluvias, impide la entrada de oxígeno y bloquea el crecimiento de las raíces.</p>
    </div>
</div>
<div class="tarjeta">
    <iframe 
      class="video-responsivo"
      src="{{ asset('css/Reforestacion.mp4') }}" 
      title="Reproductor de video" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
    <div class="texto-tarjeta">
        <h2 style="color: #ffffff;">Reforestación</h2>
        <p style="color: #ffffff;">La reforestación es un proceso que consiste en la replantación de árboles en áreas deforestadas o degradadas, con el objetivo de restaurar los ecosistemas forestales y promover la biodiversidad.</p>
    </div>
</div>
<div class="tarjeta">
    <iframe 
      class="video-responsivo"
      src="{{ asset('css/Tuza.mp4') }}" 
      title="Reproductor de video" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
    <div class="texto-tarjeta">
        <h2 style="color: #ffffff;">Tuza</h2>
        <p style="color: #ffffff;">La tuza es una práctica agrícola que consiste en la aplicación de materia orgánica al suelo para mejorar su estructura y fertilidad.</p>
    </div>
</div>
<div class="tarjeta">
    <iframe 
      class="video-responsivo"
      src="{{ asset('css/CyCContaminacion.mp4') }}" 
      title="Reproductor de video" 
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
    <div class="texto-tarjeta">
        <h2 style="color: #ffffff;">Contaminación</h2>
        <p style="color: #ffffff;">La contaminación es la introducción de sustancias o elementos nocivos en el medio ambiente, que pueden tener efectos perjudiciales para la salud humana, los ecosistemas y la biodiversidad.</p>
    </div>

</div>

@endsection
</body>
</html>