@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Contacto')

@section('content')
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>Contacto</h2>
</header>
<div class="section-info-contact">
	<header>
		<h3>Direcci&oacute;n</h3>
	</header>
	<p>CNyN-UNAM, Km 107 Carretera<br>Tijuana-Ensenada. Ensenada, Baja California</p>
	<header>
		<h3>Tel&eacute;fono</h3>
	</header>
	<p>(646) 175-0650</p>
	<a id="contact-mapita" href="https://www.google.com.mx/maps/place/UNAM:+Centro+de+Nanociencias+y+Nanotecnolog%C3%ADa/@31.868461,-116.6689366,16.75z/data=!4m5!3m4!1s0x0:0x5b9c958899e469f9!8m2!3d31.8682551!4d-116.6665695" target="_blank">
		<img src="../img/svg/google_maps.svg" alt="Direccion en Google Maps">
	</a>
</div>
<div class="section-title-contact">
	<header>
		<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w_golden.svg') }}" alt="directorio unam cnyn" /></span>Cont&aacute;ctanos</h2>
	</header>
</div>
<section class="section-form-contact">
	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
	@endif
	<form method="POST" action="{{ url('contacto') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<legend>Mi informaci&oacute;n</legend>
		<div class="row">
			<div class="col-md-6">
				<label>Nombre(s):</label>
				<input type="text" name="nombre" />
			</div>
			<div class="col-md-6">
				<label>Apellidos:</label>
				<input type="text" name="apellidos" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Correo electr&oacute;nico</label>
				<input type="email" name="correo_electronico" />
			</div>
			<div class="col-md-6">
				<label>Tel&eacute;fono</label>
				<input type="text" name="telefono" />
			</div>
		</div>
		<br />
		<legend>Mi ubicaci&oacute;n</legend>
		<div class="row">
			<div class="col-md-6">
				<label>País</label>
				<input type="text" name="pais" />
			</div>
			<div class="col-md-6">
				<label>Estado</label>
				<input type="text" name="estado" />
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label>Ciudad</label>
				<input type="text" name="ciudad" />
			</div>
		</div>
		<br />
		<legend>Otra informaci&oacute;n</legend>
		<div class="row">
			<div class="col-md-6">
				<label>&Aacute;rea de inter&eacute;s</label>
				<select name="area_interes">
					<option value=""></option>
					<option value="licenciatura">Licenciatura</option>
					<option value="maestria">Maestr&iacute;a</option>
					<option value="doctorado">Doctorado</option>
					<option value="postdoctorado">Postdoctorado</option>
					<option value="visitante">Visitante</option>
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<label>Comentarios</label>
				<textarea name="comentarios" rows="6"></textarea>
			</div>
		</div>
		<br />
		<input type="submit" name="Enviar" />
	</form>
</section>
@endsection