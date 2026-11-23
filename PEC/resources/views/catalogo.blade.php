<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
</head>
<body id="inicio">
   @extends('layouts.app')

@section('titulo', 'Catálogo - REFORVER')

@section('contenido')
 <h1 style="text-align: center; color: #ffffff;">Catálogo de especies</h1>
   <div class="tarjetas">
    <div class="texto-tarjeta">
         <h2>Hablemos un poco de la reforestación</h2><br>
          <p><em>Según Iberdrola (s. f.) explica que...</em><br><br> "La reforestación consiste en repoblar zonas deforestadas para recuperar bosques destruidos en el pasado reciente. Ante la pérdida de grandes masas forestales, vitales para la absorción de CO2, la generación de oxígeno y la lucha contra el cambio climático, se hace necesaria la plantación masiva de árboles nuevos con el objetivo de evitar la pérdida de ecosistemas y frenar el deterioro del planeta."

.</p>
</div>
   </div>
   <h1 style="text-align: center; color: #ffffff;">Especies que sirven para la reforestación</h1>


   <div class="tarjetas">
    <div class="texto-tarjeta">
         <h2>1. Pirul (Schinus molle)</h2><br>
        <p>Nombre común: Pirul
        <br><br>Nombre científico: Schinus molle
        <br><br>Características biológicas y resistencia: Árbol perennifolio de copa amplia (6 a 15 metros de altura) con un sistema de raíces profundas y extendidas. Presenta alta resistencia a sequías prolongadas, heladas ligeras y vientos fuertes. Aunque es una especie introducida, está ampliamente naturalizada en el Valle de México y tolera terrenos degradados, salinos y compactados.
        <br><br>Frecuencia de riego: Moderado durante el primer año de establecimiento (1 a 2 veces por semana en temporada seca); una vez adulto, sobrevive únicamente con agua de lluvia.
        <br><br>Nivel de exposición solar: Pleno sol.
        <br><br>Tipo de suelo y espacio recomendado: Suelos pobres, pedregosos, arcillosos o ligeramente alcalinos con buen drenaje. Requiere de 5 a 6 metros de distancia respecto a otras plantas o construcciones por el alcance de su copa y raíces.</p>
    </div>
    <div class="imagen-tarjeta">
        <img src="{{ asset('css/pirul.jpg') }}" alt="Pirul">
    </div>
   </div>



   <div class="tarjetas">
    <div class="imagen-tarjeta">
        <img src="{{ asset('css/Nopal.jpg') }}" alt="Nopal">
    </div>
   <div class="texto-tarjeta">
    <h2>2. Nopal (Opuntia ficus-indica)</h2><br>
    <p>Nombre común: Nopal (nopal verdura o tunero)
    <br><br>Nombre científico: Opuntia ficus-indica
    <br><br>Características biológicas y resistencia: Cactácea arbustiva suculenta (1.5 a 3 metros de altura) con tallos modificados en pencas recubiertas de una cutícula cerosa que evita la pérdida de humedad. Gracias a su metabolismo CAM y almacenamiento interno de agua, soporta sequías extremas, radiación solar intensa y erosión eólica en zonas semiáridas.
    <br><br>Frecuencia de riego: Muy bajo; cada 15 a 20 días en época seca durante los primeros meses de establecimiento. Una vez enraizado, no requiere riego adicional.
    <br><br>Nivel de exposición solar: Pleno sol directo.
    <br><br>Tipo de suelo y espacio recomendado: Suelos franco-arenosos, pedregosos o calcáreos con excelente drenaje (sensible a encharcamientos). Se recomienda dejar de 1.5 a 2.5 metros entre ejemplares.</p>
</div>
   </div>



   <div class="tarjetas">
    <div class="texto-tarjeta">
    <h2>3. Huizache (Vachellia farnesiana)</h2><br>
    <p>Nombre común: Huizache
    <br><br>Nombre científico: Vachellia farnesiana (sinónimo Acacia farnesiana)
    <br><br>Características biológicas y resistencia: Especie nativa de México tipo arbusto o árbol pequeño espinoso y caducifolio (3 a 7 metros de altura). Tolera sequías severas, altas temperaturas y terrenos perturbados. Como leguminosa, fija nitrógeno atmosférico en el suelo mediante simbiosis bacteriana, ayudando a recuperar la fertilidad de áreas degradadas.
    <br><br>Frecuencia de riego: Bajo; riego de auxilio cada 10 a 15 días durante los primeros 6 meses tras la siembra. Posteriormente resiste la temporada seca sin riego.
    <br><br>Nivel de exposición solar: Pleno sol.
    <br><br>Tipo de suelo y espacio recomendado: Se adapta a suelos arcillosos, pedregosos, alcalinos y pobres en nutrientes, siempre que no permanezcan inundados. Requiere de 3 a 4 metros de distancia entre plantas.</p>
</div>
    <div class="imagen-tarjeta">
        <img src="{{ asset('css/huizache.jpg') }}" alt="Huizache">
    </div>
   </div>



   <div class="tarjetas">
    <div class="imagen-tarjeta">
        <img src="{{ asset('css/maguey.jpg') }}" alt="Maguey">
    </div>
    <div class="texto-tarjeta">
    <h2>4. Maguey (Agave salmiana)</h2><br>
    <p>Nombre común: Maguey (maguey pulquero o manso)
    <br><br>Nombre científico: Agave salmiana
    <br><br>Características biológicas y resistencia: Planta suculenta nativa del altiplano mexicano con forma de roseta grande (1.5 a 2.5 metros de altura). Sus hojas gruesas y carnosas almacenan agua y reducen la transpiración, resistiendo tanto sequías extremas como heladas invernales. Sus raíces fibrosas sujetan la tierra y frenan la erosión hídrica y eólica en terrenos inclinados.
    <br><br>Frecuencia de riego: Mínimo; riego ligero cada 15 a 20 días únicamente durante los primeros 2 a 3 meses para facilitar el enraizamiento. Después depende exclusivamente de la lluvia.
    <br><br>Nivel de exposición solar: Pleno sol.
    <br><br>Tipo de suelo y espacio recomendado: Suelos áridos, pedregosos, francos o arcillo-arenosos con buen drenaje. Se recomienda un espacio de 2.5 a 3 metros entre ejemplares debido al ancho de sus pencas.</p>
</div>
   </div>



@endsection
 <a href="#inicio" class="btn-subir"><h3>↑ Subir</h3></a>
</body>
</html>