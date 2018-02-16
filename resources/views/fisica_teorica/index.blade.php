@extends('fisica_teorica/base')

@section('title', 'FISICA TEORICA')

@section('content')
@if( $riel->count() > 0 )
	<div class="secciones">
		<div id="inicio-owl-carousel" class="owl-carousel owl-theme">
			@foreach($riel as $r)
				<div class="item-inicio" style="background-image:url('{{ asset('storage') . '/' . $r->imagen }}');">
					<div class="item-inicio-info">
						<a href="{{ $r->url }}"><span><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="unam cnyn" /></span>{!! $r->descripcion !!}</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
@endif
<!-- <div class="secciones">
	<div class="video">
		<video poster="img/cnyn_fisica_teorica_img1.jpg" autoplay="true" loop="true" preload="auto" muted="true">
			<source src="video/index.mp4" type="video/mp4">
			<source src="video/index.ogg" type="video/ogg">
			Your browser does not support the video tag.
		</video>
		<div class="video-maya-02"></div>
	</div>
</div> -->
<div class="secciones background-star">
	<div class="div-as-table">
		<div>
			<article class="article-607">
				<img id="molecula" src="img/svg/mol.svg" alt="Molecula">
				<header>
					<h2>Objetivos</h2>
				</header>
				<!-- <p>Estudiar las propiedades de transporte de carga y espín en arreglos de puntos cuánticos, nanotubos de carbón y grafeno.
					En particular, nos interesa el control cuántico de estos sistemas a través de estudiar los efectos de interacciones 
					(espín-órbita, hiperfina) en los tiempos de decoherencia, así como propiedades de entrelazamiento para aplicaciones
					en computación cuántica.<br/><br/>
					Por otro lado, estudiamos las propiedades ópticas (espectros de emisión y absorción) de estos 
					sistemas para explorar sus posibilidades como emisores y detectores de radiación de altas frecuencias, así como la 
					interacción entre plasmones de superficie en nanopartículas metálicas y radiación electromagnética.<br/><br/>
					Tambien se realizan cálculos de primeros principios de la estructura electrónica de materiales.</p> -->
				{!! $objetivo->descripcion !!}
			</article>
		</div>
	</div>
</div>
<div class="wrapper-slide">
	<header>
		<h2 class="titulo-50">
			<a href="{{ url('/eventos-noticias') }}">
				<span class="span-triangule"><img src="img/svg/triangule_w_golden.svg" alt="eventos unam cnyn"></span>Eventos
			</a>
		</h2>
	</header>
	<div id="eventos-owl-carousel" class="owl-carousel owl-theme eventos-noticias-owl-carousel">
		<?php $contador = 0; $mustOpen = true; ?>
		@foreach($eventos as $e)
			<?php $contador++; ?>
			<?php if( $mustOpen ) { echo '<div>'; $mustOpen = false; } ?>
				<div class="card">
					<a href="{{ url('/eventos/') .'/'. $e->id }}">
						<article>
							<header>
								<h3>{{ $e->titulo }}</h3>
								<span><?php echo date('d/m/Y G:i:s', strtotime( $e->created_at )); ?></span>
							</header>
							<img src="{{ asset('storage') . '/' . $e->miniatura }}" />
							<p><?php echo substr( strip_tags($e->intro), 0, 287 ) . '...'; ?></p>
						</article>
					</a>
				</div>
			<?php if( $contador%2 == 0 ) { echo '</div>'; $mustOpen = true; } ?>
		@endforeach
		<?php if( $mustOpen == false ) echo '</div>'; ?>
	</div>
</div>
<div class="wrapper-slide">
	<header>
		<h2 class="titulo-50">
			<a href="{{ url('/eventos-noticias') }}">
				<span class="span-triangule"><img src="img/svg/triangule_w_golden.svg" alt="eventos unam cnyn"></span>Noticias
			</a>
		</h2>
	</header>
	<div id="noticias-owl-carousel" class="owl-carousel owl-theme eventos-noticias-owl-carousel">
		<?php $contador = 0; $mustOpen = true; ?>
		@foreach($noticias as $e)
			<?php $contador++; ?>
			<?php if( $mustOpen ) { echo '<div>'; $mustOpen = false; } ?>
				<div class="card">
					<a href="{{ url('/eventos/') .'/'. $e->id }}">
						<article>
							<header>
								<h3>{{ $e->titulo }}</h3>
								<span><?php echo date('d/m/Y G:i:s', strtotime( $e->created_at )); ?></span>
							</header>
							<img src="{{ asset('storage') . '/' . $e->miniatura }}" />
							<p><?php echo substr( strip_tags($e->intro), 0, 287 ) . '...'; ?></p>
						</article>
					</a>
				</div>
			<?php if( $contador%2 == 0 ) { echo '</div>'; $mustOpen = true; } ?>
		@endforeach
		<?php if( $mustOpen == false ) echo '</div>'; ?>
	</div>
</div>
@endsection