@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Proyectos Vigentes')

@section('content')
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" />Proyectos vigentes</span></h2>
</header>
<section class="cards-proyectos">
	<br/>
	@foreach($data as $item)
	<div class="card-proyecto">
		<header>
			<h3><span class="f-colaboraciones"></span>{{$item->titulo}}</h3>
		</header>
		{!! $item->texto !!}
	</div>
	@endforeach
	<!-- <div class="card-proyecto">
		<header>
			<h3><span class="f-colaboraciones"></span>Propiedades ópticas de nanoestructuras: plasmones en monómeros y dímeros esferoidales</h3>
		</header>
		<p>DGAPA-PAPIIT IN111013</p>
		<p>C. López-Bastidas, responsable</p>
		<p>Vigencia: 2013-2015</p>
	</div>
	<div class="card-proyecto">
		<header>
			<h3><span class="f-colaboraciones"></span>Transporte cuántico y espintrónica en nanoestructuras de grafeno</h3>
		</header>
		<p>DGAPA-PAPIIT IN109911</p>
		<p>F. Mireles, responsable</p>
		<p>Vigencia: 2011-2014</p>
	</div>
	<div class="card-proyecto">
		<header>
			<h3><span class="f-colaboraciones"></span>Control de qubits de espín y/o carga en arreglos de puntos cuánticos: transporte, entrelazamiento y propiedades ópticas</h3>
		</header>
		<p>DGAPA-PAPIIT IN112012</p>
		<p>E. Cota, responsable; F. Rojas, co-responsable</p>
		<p>Vigencia: 2012-2015</p>
	</div> -->
</section>
@endsection