@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Directorio')

@section('content')
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>Directorio</h2>
</header>
<nav class="nav-directorio">
	<ul>
		<li><a href="javascript:void(0);" data-tab="tabAcademico" class="nav-directorio-select">Personal Acad&eacute;mico</a></li>
		<li><a href="javascript:void(0);" data-tab="tabEstudiante">Estudiantes</a></li>
		<li><a href="javascript:void(0);" data-tab="tabPostgrado">Postdoctorado</a></li>
		<li><a href="javascript:void(0);" data-tab="tabVisitante">Visitantes</a></li>
	</ul>
</nav>
<section class="tabHolder">
	<div id="tabAcademico" class="tabActive">
		<section id="profiles">
			<?php
			foreach ($directorio as $key => $card) {
				if($card->tipo != 'Personal Académico') continue;
			?>
				<div class="card">
					<article>
						<div class="img">
							<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<img class="default-image-profile" src="{{ asset('storage') . '/' . $card->foto }}" alt="Imagen de perfil" />
							</a>
						</div>
						<div class="info">
							<header>
								<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<h3><?php echo $card->nombre; ?></h3>
								</a>	
							</header>
							<span><?php echo $card->titulo; ?></span>
							<ul>
								<li><?php echo $card->departamento; ?></li>
								<li><?php echo $card->extension; ?></li>
								<li>
									<!-- <a href="mailto:{{ $card->correo_electronico }}"> --><?php echo $card->correo_electronico; ?><!-- </a> -->
								</li>
							</ul>
						</div>
					</article>
				</div>
			<?php
			}
			?>
		</section>
	</div>
	<div id="tabEstudiante">
		<section id="profiles">
			<?php
			foreach ($directorio as $key => $card) {
				if($card->tipo != 'Estudiante') continue;
			?>
				<div class="card">
					<article>
						<div class="img">
							<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<img class="default-image-profile" src="{{ asset('storage') . '/' . $card->foto }}" alt="Imagen de perfil" />
							</a>
						</div>
						<div class="info">
							<header>
								<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<h3><?php echo $card->nombre; ?></h3>
								<?php echo $card->tipo; ?>
								</a>	
							</header>
							<span><?php echo $card->titulo; ?></span>
							<ul>
								<li><?php echo $card->departamento; ?></li>
								<li><?php echo $card->extension; ?></li>
								<li>
									<a href="mailto:{{ $card->correo_electronico }}"><?php echo $card->correo_electronico; ?></a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			<?php
			}
			?>
		</section>
	</div>
	<div id="tabPostgrado">
		<section id="profiles">
			<?php
			foreach ($directorio as $key => $card) {
				if($card->tipo != 'Postdoctorado') continue;
			?>
				<div class="card">
					<article>
						<div class="img">
							<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<img class="default-image-profile" src="{{ asset('storage') . '/' . $card->foto }}" alt="Imagen de perfil" />
							</a>
						</div>
						<div class="info">
							<header>
								<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<h3><?php echo $card->nombre; ?></h3>
								</a>	
							</header>
							<span><?php echo $card->titulo; ?></span>
							<ul>
								<li><?php echo $card->departamento; ?></li>
								<li><?php echo $card->extension; ?></li>
								<li>
									<a href="mailto:{{ $card->correo_electronico }}"><?php echo $card->correo_electronico; ?></a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			<?php
			}
			?>
		</section>
	</div>
	<div id="tabVisitante">
		<section id="profiles">
			<?php
			foreach ($directorio as $key => $card) {
				if($card->tipo != 'Visitante') continue;
			?>
				<div class="card">
					<article>
						<div class="img">
							<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<img class="default-image-profile" src="{{ asset('storage') . '/' . $card->foto }}" alt="Imagen de perfil" />
							</a>
						</div>
						<div class="info">
							<header>
								<a href="{{ url('/directorio/perfil') . '/' . $card->slug() }}" target="_self">
								<h3><?php echo $card->nombre; ?></h3>
								</a>	
							</header>
							<span><?php echo $card->titulo; ?></span>
							<ul>
								<li><?php echo $card->departamento; ?></li>
								<li><?php echo $card->extension; ?></li>
								<li>
									<a href="mailto:{{ $card->correo_electronico }}"><?php echo $card->correo_electronico; ?></a>
								</li>
							</ul>
						</div>
					</article>
				</div>
			<?php
			}
			?>
		</section>
	</div>
</section>
@endsection