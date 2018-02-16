@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Tesis')

@section('content')
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>Tesis</h2>
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
</section>
@endsection