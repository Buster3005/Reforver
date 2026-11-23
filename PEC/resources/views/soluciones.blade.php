<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soluciones</title>
</head>
<body>
   @extends('layouts.app')

@section('titulo', 'Catálogo - REFORVER')

@section('contenido')

<center><h1 style="color: #ffffff;">Problemas...Pero lo solucionamos</h1></center>
<div class="tarjetas">
    <div class="texto-tarjeta">
    <h2>Contaminación del suelo por cercanía a un cerro con basura</h2>
<p>El agua de lluvia arrastra desechos y lixiviados desde el cerro hacia el terreno, además de dejar escombros superficiales que intoxican la tierra e impiden cultivar de forma segura.</p>
<ul>
    <li><strong>Excavar una zanja de desvío:</strong> Hacer una zanja de 50 a 80 cm de profundidad en el límite con el cerro para desviar el agua contaminada antes de que entre al terreno.</li>
    <li><strong>Colocar una barrera impermeable:</strong> Forrar la zanja con geomembrana o plástico agrícola grueso y levantar un bordo con pasto denso para frenar filtraciones subterráneas.</li>
    <li><strong>Limpiar y analizar la tierra:</strong> Retirar plásticos, vidrios o metales de la superficie y realizar un análisis de laboratorio para descartar metales pesados antes de sembrar.</li>
    <li><strong>Regenerar o aislar los cultivos:</strong> Mezclar composta madura y carbón vegetal para atrapar toxinas, o usar camas elevadas aisladas del piso si se van a cultivar alimentos.</li>
</ul>
    </div>
    <div class="imagen-tarjeta">
        <img src="{{ asset('css/basura.jpg') }}" alt="Basura">
</div>
</div>





<div class="tarjetas">
     <div class="imagen-tarjeta">
        <img src="{{ asset('css/construccion.jpg') }}" alt="Construcción">
</div>
    
    <div class="texto-tarjeta">
<h2>Suelo compactado por maquinaria de construcción</h2>
<p>El paso de máquinas pesadas aplasta los poros de la tierra, lo que provoca encharcamientos durante las lluvias, impide la entrada de oxígeno y bloquea el crecimiento de las raíces.</p>
<ul>
    <li><strong>Descompactar mecánicamente:</strong> Pasar un arado de subsuelo (o usar una horca de doble mango en espacios pequeños) a una profundidad de 40 a 60 cm sin voltear las capas de tierra.</li>
    <li><strong>Aplicar arado biológico:</strong> Sembrar plantas de raíces gruesas y profundas, como nabo forrajero, alfalfa o pasto vetiver, para que perforen las capas duras de forma natural.</li>
    <li><strong>Incorporar materia orgánica:</strong> Añadir una capa de 5 a 10 cm de composta, humus de lombriz o estiércol maduro para devolverle esponjosidad y vida microbiana al suelo.</li>
    <li><strong>Agregar biocarbón o zeolita:</strong> Mezclar carbón vegetal triturado en la tierra suelta para mejorar la retención de humedad y evitar que el suelo vuelva a apelmazarse.</li>
</ul>
</div>
</div>



<div class="tarjetas">
    <div class="texto-tarjeta">
    <h2>Presencia de tuzas que dañan las plantas</h2>
<p>Al aflojar la tierra, a las tuzas les resulta más sencillo excavar túneles hacia los cultivos para comerse las raíces, levantar las plantas jóvenes y secar el jardín.</p>
<ul>
    <li><strong>Proteger raíces con malla metálica:</strong> Formar canastillas con malla galvanizada (abertura máxima de 1.2 cm) alrededor de árboles nuevos o colocarla en el fondo de los huertos a 30 o 40 cm de profundidad.</li>
    <li><strong>Sembrar bordes de plantas repelentes:</strong> Rodear las zonas vulnerables con especies de olor fuerte como ajo, cebolla, ruda o cempasúchil, cuyas raíces irritan su olfato y las mantienen alejadas.</li>
    <li><strong>Eliminar su alimento y encharcar túneles:</strong> Arrancar malezas con bulbos o raíces carnosas que las atraen y aplicar riegos profundos ocasionales para incomodarlas y obligarlas a irse.</li>
    <li><strong>Colocar trampas mecánicas:</strong> Ubicar los montículos de tierra fresca en forma de herradura y poner trampas específicas para tuza en el túnel principal, evitando venenos que contaminen el suelo.</li>
</ul>
    </div>
    <div class="imagen-tarjeta">
        <img src="{{ asset('css/tuzas.jpg') }}" alt="Tuzas">
</div>
</div>





@endsection
</body>
</html>