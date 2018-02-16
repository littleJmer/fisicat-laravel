@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Perfil')

@section('content')
<?php //echo '<pre>'; print_r($contacto); echo '</pre>'; ?>
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>{{ $contacto->tipo }}</h2>
</header>
<section id="caratula">
	<div class="img">
		<img class="default-image-profile" src="{{ asset('storage') . '/' . $contacto->foto }}" alt="Imagen de perfil" />
	</div>
	<div class="info">
		<header>
			<h3>{{ $contacto->nombre }}</h3>
		</header>
		<span>{{ $contacto->titulo }}</span>
		<ul>
			<li>{{ $contacto->departamento }}</li>
			<li>Extensión {{ $contacto->extension }}</li>
			<li><!-- <a href="mailto:{{ $contacto->correo_electronico }}"> --><?php echo $contacto->correo_electronico; ?></a><!-- </li> -->
			<li>
				<i class="fa fa-cloud-download" aria-hidden="true" style="color: rgb(198, 146, 0);"></i>
				<a href="{{ asset('storage') . '/' . $contacto->cv }}" target="_blank" class="download-cv" href="">Descargar Curriculum</a>
			</li>
		</ul>
	</div>
</section>
<article class="article-profile">
	<header>
		<h3>Resumen Curricular:</h3>
	</header>
	<p><?php echo strip_tags(trim($contacto->resumen)); ?></p>
</article>
<article class="article-profile">
	<header>
		<h3>Publicaciones recientes:</h3>
	</header>
	<p><?php echo strip_tags(trim($contacto->publicaciones)); ?></p>
</article>
@endsection