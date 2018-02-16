	
<!-- header menu -->
<header id="menu_header">
	<div id="head_menu_header">
		<a href="{{ url('/') }}" target="_self">
			<div id="logo_unam_2">
				<img src="{{ asset('img/svg/logo_unam.svg') }}" alt="Universidad Nacional Autónoma de México">
				<img src="{{ asset('img/svg/logo_unam_text.svg') }}" alt="UNAM">
			</div>
			<div id="h1_header">
				<h1>F&Iacute;SICA TE&Oacute;RICA</h1>
			</div>
		</a>	
		<div class="right-header">
			<div id="logo_cnyn_2">
				<a href="{{ url('/') }}">
					<img src="{{ asset('img/svg/logo_cnyn.svg') }}" alt="UNAM: Centro de Nanociencias y Nanotecnología">
				</a>
			</div>
			<div class="btn_menu">
				<a id="btn_menu" class="menu_close" href="javascript:void(0)"></a>
			</div>
		</div>	
	</div>
	<nav>
		<ul id="menu_ul" class="menu-hidden">
			<li><a href="/">Inicio</a></li>
			<li class="sub_menu_ul"><a href="{{ url('directorio') }}">Directorio&nbsp;<!-- <span class="caret"></span> --></a>
				<!-- <ul>
					<li><a href="/personal-academico">Personal Acad&eacute;mico</a></li>
					<li><a href="/personal-academico">Personal Acad&eacute;mico</a></li>
				</ul> -->
			</li>
			<li><a href="{{ url('investigacion') }}">Investigaci&oacute;n</a></li>
			<li><a href="{{ url('productividad') }}">Productividad</a></li>
			<li><a href="{{ url('colaboraciones') }}">Colaboraciones</a></li>
			<li><a href="{{ url('proyectos-vigentes') }}">Proyectos vigentes</a></li>
			<li><a href="{{ url('infraestructura') }}">Infraestructura</a></li>
			<li><a href="{{ url('tesis') }}">Tesis</a></li>
			<li><a href="{{ url('contacto') }}">Contacto</a></li>
		</ul>
		<div id="logo-unam">
			<img id="svg-unam-logo" src="{{ asset('img/svg/logo_unam.svg') }}" alt="Universidad Nacional Autónoma de México">
			<img id="svg-unam" src="{{ asset('img/svg/logo_unam_text.svg') }}" alt="UNAM">
		</div>
		<a href="{{ url('/') }}" id="logo-cnyn">
			<img src="{{ asset('img/svg/logo_cnyn.svg') }}" alt="UNAM: Centro de Nanociencias y Nanotecnología">
		</a>
	</nav>
</header>
<!-- end header menu -->