@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Directorio')

@section('content')
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>Eventos</h2>
</header>
<section class="evento-noticia">
	<h2>{{ $evento->titulo }}</h2>
	<label class="sub-title-1">asdasd</label>
	<label class="sub-title-2"><?php echo date('d/m/Y G:i:s', strtotime( $evento->created_at )); ?></label>
	<figure>
		<img src="{{ asset('storage') . '/' . $evento->miniatura }}" alt="">
	</figure>
	<div class="toolbar-social">
		<a href=""><img src="{{ asset('img/svg/fb_icon.svg') }}" alt=""></a>
		<a href=""><img src="{{ asset('img/svg/tw_icon.svg') }}" alt=""></a>
	</div>
	<article>{!! $evento->contenido !!}</article>
</section>
@endsection