@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Productividad')

@section('content')
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>Productividad</h2>
</header>
<section class="cards-productividad">
	<header>
		<h2>Ultimos 5 años</h2>
	</header>
	@foreach($data as $item)
	<div class="card-productividad">
		<p>"{{$item->titulo}}"</p>
		{!! $item->participantes !!}
		<p class="root">{{$item->referencia}}</p>
		<span>({{$item->fi}})</span>
	</div>
	@endforeach
	<!-- <div class="card-productividad">
		<p>"Spin-orbit effects in a triple quantum dot shuttle"</p>
		<p>J. Villavicencio, I. Maldonado, E. Cota y G. Platero</p>
		<p class="root">Phys. Rev. B 88, 245305 (2013)</p>
		<span>(FI 3.767)</span>
	</div>
	<div class="card-productividad">
		<p>"Plasmon features of coinage metal nanoparticles supported on zolites"</p>
		<p>C. López-Bastidas, E. Smolentseva, V. Petranovskii y R. Machorro</p>
		<p class="root">Plasmonics 8, 1551 (2013)</p>
		<span>(FI 2.425)</span>
	</div>
	<div class="card-productividad">
		<p>"Quadrupolar second-harmonic generation by helical beams and vectorial vortices with radial or azimuthal polarization"</p>
		<p>M.A. González Mandujano y J. Maytorena</p>
		<p class="root">Phys. Rev. A 88, 6 (2013)</p>
		<span>(FI 3.042)</span>
	</div>
	<div class="card-productividad">
		<p>"Absence of thermo-spin current response of a spin-orbit coupled two-dimensional electron gas"</p>
		<p>Priscilla Iglesias y J. Maytorena</p>
		<p>"Quantum ring spin-interference device tuned by quantum point contacts"</p>
		<p>Leo Diago-Cisneros y F. Mireles</p>
		<p class="root">Journal of Applied Physics 114, 193706 (2013)</p>
		<span> (FI 2.210)</span>
	</div> -->
</section>
@endsection