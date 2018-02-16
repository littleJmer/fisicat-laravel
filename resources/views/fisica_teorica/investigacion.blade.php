@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Investigacion')

@section('content')
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>L&iacute;neas de Investigaci&oacute;n</h2>
</header>
<br />
@foreach($data as $item)
<article class="article-1-col">
	<header>
		<h3>{{$item->titulo}}</h3>
	</header>
	{!! $item->texto !!}
</article>
@endforeach
<!-- <article class="article-1-col">
	<header>
		<h3>Transporte de carga y espín en nanoestructuras</h3>
	</header>
	<ul class="ul-lin-inv">
		<li><span>Objetivo:</span>Estudio del control y manipulación de cargas y espines en arreglos de puntos cuánticos en diferentes geometrías. Enfasis en los principios físicos que rigen las propiedades de transporte en sistemas relevantes para dispositivos espintrónicos y procesamiento de información cuántica.</li>
		<li><span>Temas de interés:</span>Efectos de interacciones en sistemas de doble y triple punto cuántico, transporte de carga y espín en nanoresonadores, entrelazamiento y disipación, efecto Hall de espín, magnetoconductancia en nanoconstricciones, oscilaciones de Bloch en nanotubos de carbón, espintrónica en puntos cuánticos de grafeno.</li>
		<li><span>Participantes:</span>E. Cota, J. Maytorena, F. Mireles, F. Rojas.</li>
		<li><span>Colaboradores:</span>S.E. Ulloa (Ohio U.), G. Platero (ICMM-CSIC), J.C. Egues (U. Sao Paulo), E. Marinero (Hitachi S.J.), A. Pérez Garrido (U. Cartagena).</li>
		<li><span>Estudiantes:</span>Ramón Carrillo, Aldo Rodríguez, Marysol Ochoa, Rafael G. Amparán, Francisco Domínguez, Moisés Chávez, Sukey Sosa.</li>
	</ul>
</article>
<article class="article-1-col">
	<header>
		<h3>Propiedades ópticas de nanoestructuras</h3>
	</header>
	<ul class="ul-lin-inv">
		<li><span>Objetivo:</span>Estudiar la interacción entre campos electromagnéticos y sistemas inhomogéneos en escalas nanométricas: superficies, nanopartículas, nanosondas.</li>
		<li><span>Temas de interés:</span>interacción e-e y efectos de acoplamiento espín-órbita en superficies y nanopartículas, respuesta óptica no lineal en nanopartículas, generación de segundo armónico en arreglos de puntos cuánticos, plasmónica.</li>
		<li><span>Participantes:</span>J. Maytorena, C. López-Bastidas.</li>
		<li><span>Colaboradores:</span>W.L. Mochán (CCF-UNAM), J. Recamier (CCF-UNAM), B. Mendoza (CIO), C. Valencia (UABC).</li>
		<li><span>Estudiantes:</span>Priscilla Iglesias, Elmer Cruz, Miguel Angel González, Wallace J. Herron, Alejandro Castellanos, Paola Góngora.</li>
	</ul>
</article>
<article class="article-1-col">
	<header>
		<h3>Cálculos de estructura electrónica de materiales</h3>
	</header>
	<ul class="ul-lin-inv">
		<li><span>Objetivo:</span>Investigar las propiedades estructurales y electrónicas de materiales superconductores y semiconductores de ancho de banda grande, por medio de paquetes de programación (CRYSTAL 98, WIEN2K) basados en métodos de teoría de muchos cuerpos (FLAPW, DFT, LSDA, GGA).</li>
		<li><span>Temas de interés:</span>propiedades de nitruros y carburos de metales de transición, propiedades estructurales y electrónicas de materiales superconductores.</li>
		<li><span>Participantes:</span>A. Reyes.</li>
		<li><span>Colaboradores:</span>M.J. Yacamán U. Texas- Austin), A. Posada-Amarillas (U. Sonora).</li>
	</ul>
</article> -->
@endsection