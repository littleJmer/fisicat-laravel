@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Infraestructura')

@section('extra_css')
	<link type="text/css" rel="stylesheet" href="{{ asset('lib/lightGallery-master/dist/css/lightgallery.min.css') }}" />
	<style>
    	.demo-gallery {
    		margin: 0 auto;
    		width: 90%;
    		max-width: 1250px;
    	}
    	.demo-gallery > ul {
    		margin-bottom: 0;
    		display: flex;
	    	flex-wrap: wrap;
	    	justify-content: center;
    	}
    	.demo-gallery > ul > li {
    		/*float: left;
    		margin-bottom: 15px;
    		margin-right: 20px;
    		width: 200px;*/
    		float: left;
		    width: 200px;
		    padding: 0px;
		    margin: 0px;
    	}
    	.demo-gallery > ul > li a {
    		border: 3px solid #FFF;
    		border-radius: 3px;
    		display: block;
    		overflow: hidden;
    		position: relative;
    		float: left;
    	}
    	.demo-gallery > ul > li a > img {
    		-webkit-transition: -webkit-transform 0.15s ease 0s;
    		-moz-transition: -moz-transform 0.15s ease 0s;
    		-o-transition: -o-transform 0.15s ease 0s;
    		transition: transform 0.15s ease 0s;
    		-webkit-transform: scale3d(1, 1, 1);
    		transform: scale3d(1, 1, 1);
    		height: auto;
    		width: 100%;
    	}
    	.demo-gallery > ul > li a:hover > img {
    		-webkit-transform: scale3d(1.1, 1.1, 1.1);
    		transform: scale3d(1.1, 1.1, 1.1);
    	}
    	.demo-gallery > ul > li a:hover .demo-gallery-poster > img {
    		opacity: 1;
    	}
    	.demo-gallery > ul > li a .demo-gallery-poster {
    		background-color: rgba(0, 0, 0, 0.1);
    		bottom: 0;
    		left: 0;
    		position: absolute;
    		right: 0;
    		top: 0;
    		-webkit-transition: background-color 0.15s ease 0s;
    		-o-transition: background-color 0.15s ease 0s;
    		transition: background-color 0.15s ease 0s;
    	}
    	.demo-gallery > ul > li a .demo-gallery-poster > img {
    		left: 50%;
    		margin-left: -10px;
    		margin-top: -10px;
    		opacity: 0;
    		position: absolute;
    		top: 50%;
    		-webkit-transition: opacity 0.3s ease 0s;
    		-o-transition: opacity 0.3s ease 0s;
    		transition: opacity 0.3s ease 0s;
    	}
    	.demo-gallery > ul > li a:hover .demo-gallery-poster {
    		background-color: rgba(0, 0, 0, 0.5);
    	}
    	.demo-gallery .justified-gallery > a > img {
    		-webkit-transition: -webkit-transform 0.15s ease 0s;
    		-moz-transition: -moz-transform 0.15s ease 0s;
    		-o-transition: -o-transform 0.15s ease 0s;
    		transition: transform 0.15s ease 0s;
    		-webkit-transform: scale3d(1, 1, 1);
    		transform: scale3d(1, 1, 1);
    		height: 100%;
    		width: 100%;
    	}
    	.demo-gallery .justified-gallery > a:hover > img {
    		-webkit-transform: scale3d(1.1, 1.1, 1.1);
    		transform: scale3d(1.1, 1.1, 1.1);
    	}
    	.demo-gallery .justified-gallery > a:hover .demo-gallery-poster > img {
    		opacity: 1;
    	}
    	.demo-gallery .justified-gallery > a .demo-gallery-poster {
    		background-color: rgba(0, 0, 0, 0.1);
    		bottom: 0;
    		left: 0;
    		position: absolute;
    		right: 0;
    		top: 0;
    		-webkit-transition: background-color 0.15s ease 0s;
    		-o-transition: background-color 0.15s ease 0s;
    		transition: background-color 0.15s ease 0s;
    	}
    	.demo-gallery .justified-gallery > a .demo-gallery-poster > img {
    		left: 50%;
    		margin-left: -10px;
    		margin-top: -10px;
    		opacity: 0;
    		position: absolute;
    		top: 50%;
    		-webkit-transition: opacity 0.3s ease 0s;
    		-o-transition: opacity 0.3s ease 0s;
    		transition: opacity 0.3s ease 0s;
    	}
    	.demo-gallery .justified-gallery > a:hover .demo-gallery-poster {
    		background-color: rgba(0, 0, 0, 0.5);
    	}
    	.demo-gallery .video .demo-gallery-poster img {
    		height: 48px;
    		margin-left: -24px;
    		margin-top: -24px;
    		opacity: 0.8;
    		width: 48px;
    	}
    	.demo-gallery.dark > ul > li a {
    		border: 3px solid #04070a;
    	}
    	.lg-outer .lg-thumb-item.active, .lg-outer .lg-thumb-item:hover {
    		border-color: rgb(198, 146, 0);
    	}
	</style>
@endsection

@section('content')
<?php 
	$alumnos 		= $infraestructura->where('tipo', 'Alumnos');
	$auditorio 		= $infraestructura->where('tipo', 'Auditorio');
	$biblioteca 	= $infraestructura->where('tipo', 'Biblioteca');
	$edificio 		= $infraestructura->where('tipo', 'Edificios');
	$investigadores = $infraestructura->where('tipo', 'Investigadores');
	$laboratorios 	= $infraestructura->where('tipo', 'Laboratorios');
?>
<header class="title-page background-personal-academico">
	<h2><span class="span-triangule"><img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" /></span>Infraestructura</h2>
</header>
<nav class="nav-directorio">
	<ul>
		@if($alumnos->count() > 0)
			<li><a href="javascript:void(0);" data-tab="tabAlumnos" class="nav-directorio-select">Alumnos</a></li>
		@endif
		@if($auditorio->count() > 0)
			<li><a href="javascript:void(0);" data-tab="tabAuditorio">Auditorio</a></li>
		@endif
		@if($biblioteca->count() > 0)
			<li><a href="javascript:void(0);" data-tab="tabBiblioteca">Biblioteca</a></li>
		@endif
		@if($edificio->count() > 0)
			<li><a href="javascript:void(0);" data-tab="tabEdificios">Edificios</a></li>
		@endif
		@if($investigadores->count() > 0)
			<li><a href="javascript:void(0);" data-tab="tabInvestigadores">Investigadores</a></li>
		@endif
		@if($laboratorios->count() > 0)
			<li><a href="javascript:void(0);" data-tab="tabLaboratorios">Laboratorios</a></li>
		@endif
	</ul>
</nav>
<section class="tabHolder">
	<div id="tabAlumnos" class="tabActive">
		<div class="demo-gallery">
	        <ul id="lightgallery" class="list-unstyled row">
	            @foreach($alumnos as $r)
	            	<li class="col-xs-6 col-sm-4 col-md-3" 
	            		data-src="{{ asset('storage') . '/' . $r->foto }}" 
	            		data-sub-html="">
	                    <a href="">
	                        <img class="img-responsive" src="{{ asset('storage') . '/' . $r->foto }}">
	                    </a>
	                </li>
	            @endforeach
	        </ul>
	    </div>
	</div>
	<div id="tabAuditorio">
		<div class="demo-gallery">
	        <ul id="lightgallery2" class="list-unstyled row">
	            @foreach($auditorio as $r)
	            	<li class="col-xs-6 col-sm-4 col-md-3" 
	            		data-src="{{ asset('storage') . '/' . $r->foto }}" 
	            		data-sub-html="">
	                    <a href="">
	                        <img class="img-responsive" src="{{ asset('storage') . '/' . $r->foto }}">
	                    </a>
	                </li>
	            @endforeach
	        </ul>
	    </div>
	</div>
	<div id="tabBiblioteca">
		<div class="demo-gallery">
	        <ul id="lightgallery3" class="list-unstyled row">
	            @foreach($biblioteca as $r)
	            	<li class="col-xs-6 col-sm-4 col-md-3" 
	            		data-src="{{ asset('storage') . '/' . $r->foto }}" 
	            		data-sub-html="">
	                    <a href="">
	                        <img class="img-responsive" src="{{ asset('storage') . '/' . $r->foto }}">
	                    </a>
	                </li>
	            @endforeach
	        </ul>
	    </div>
	</div>
	<div id="tabEdificios">
		<div class="demo-gallery">
	        <ul id="lightgallery4" class="list-unstyled row">
	            @foreach($edificio as $r)
	            	<li class="col-xs-6 col-sm-4 col-md-3" 
	            		data-src="{{ asset('storage') . '/' . $r->foto }}" 
	            		data-sub-html="">
	                    <a href="">
	                        <img class="img-responsive" src="{{ asset('storage') . '/' . $r->foto }}">
	                    </a>
	                </li>
	            @endforeach
	        </ul>
	    </div>
	</div>
	<div id="tabInvestigadores">
		<div class="demo-gallery">
	        <ul id="lightgallery5" class="list-unstyled row">
	            @foreach($investigadores as $r)
	            	<li class="col-xs-6 col-sm-4 col-md-3" 
	            		data-src="{{ asset('storage') . '/' . $r->foto }}" 
	            		data-sub-html="">
	                    <a href="">
	                        <img class="img-responsive" src="{{ asset('storage') . '/' . $r->foto }}">
	                    </a>
	                </li>
	            @endforeach
	        </ul>
	    </div>
	</div>
	<div id="tabLaboratorios">
		<div class="demo-gallery">
	        <ul id="lightgallery6" class="list-unstyled row">
	            @foreach($laboratorios as $r)
	            	<li class="col-xs-6 col-sm-4 col-md-3" 
	            		data-src="{{ asset('storage') . '/' . $r->foto }}" 
	            		data-sub-html="">
	                    <a href="">
	                        <img class="img-responsive" src="{{ asset('storage') . '/' . $r->foto }}">
	                    </a>
	                </li>
	            @endforeach
	        </ul>
	    </div>
	</div>
	<!-- <div id="tabAlumnos" class="tabActive">
		<div class="owl-carousel owl-theme infraestructura-owl-carousel">
		@foreach($alumnos as $r	)
			<div class="item-infraestructura" style="background-image: url('{{ asset('storage') . '/' . $r->foto }}');">
				<div class="description">
					<div class="txt">
						<p>aa<br/>lorem aslslie<br/>24/02/2017</p>
					</div>
					<div class="toolbar-social">
						<a href=""><img src="{{ asset('img/svg/fb_icon.svg') }}" alt=""></a>
						<a href=""><img src="{{ asset('img/svg/tw_icon.svg') }}" alt=""></a>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
	<div id="tabAuditorio">
		<div class="owl-carousel owl-theme infraestructura-owl-carousel">
			@foreach($auditorio as $r)
			<div class="item-infraestructura" style="background-image: url('{{ asset('storage') . '/' . $r->foto }}');">
				<div class="description">
					<div class="txt">
						<p>aa<br/>lorem aslslie<br/>24/02/2017</p>
					</div>
					<div class="toolbar-social">
						<a href=""><img src="{{ asset('img/svg/fb_icon.svg') }}" alt=""></a>
						<a href=""><img src="{{ asset('img/svg/tw_icon.svg') }}" alt=""></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div id="tabBiblioteca">
		<div class="owl-carousel owl-theme infraestructura-owl-carousel">
			@foreach($biblioteca as $r)
			<div class="item-infraestructura" style="background-image: url('{{ asset('storage') . '/' . $r->foto }}');">
				<div class="description">
					<div class="txt">
						<p>aa<br/>lorem aslslie<br/>24/02/2017</p>
					</div>
					<div class="toolbar-social">
						<a href=""><img src="{{ asset('img/svg/fb_icon.svg') }}" alt=""></a>
						<a href=""><img src="{{ asset('img/svg/tw_icon.svg') }}" alt=""></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div id="tabEdificios">
		<div class="owl-carousel owl-theme infraestructura-owl-carousel">
			@foreach($edificio as $r)
			<div class="item-infraestructura" style="background-image: url('{{ asset('storage') . '/' . $r->foto }}');">
				<div class="description">
					<div class="txt">
						<p>aa<br/>lorem aslslie<br/>24/02/2017</p>
					</div>
					<div class="toolbar-social">
						<a href=""><img src="{{ asset('img/svg/fb_icon.svg') }}" alt=""></a>
						<a href=""><img src="{{ asset('img/svg/tw_icon.svg') }}" alt=""></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div id="tabInvestigadores">
		<div class="owl-carousel owl-theme infraestructura-owl-carousel">
			@foreach($investigadores as $r)
			<div class="item-infraestructura" style="background-image: url('{{ asset('storage') . '/' . $r->foto }}');">
				<div class="description">
					<div class="txt">
						<p>aa<br/>lorem aslslie<br/>24/02/2017</p>
					</div>
					<div class="toolbar-social">
						<a href=""><img src="{{ asset('img/svg/fb_icon.svg') }}" alt=""></a>
						<a href=""><img src="{{ asset('img/svg/tw_icon.svg') }}" alt=""></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div id="tabLaboratorios">
		<div class="owl-carousel owl-theme infraestructura-owl-carousel">
			@foreach($laboratorios as $r)
			<div class="item-infraestructura" style="background-image: url('{{ asset('storage') . '/' . $r->foto }}');">
				<div class="description">
					<div class="txt">
						<p>aa<br/>lorem aslslie<br/>24/02/2017</p>
					</div>
					<div class="toolbar-social">
						<a href=""><img src="{{ asset('img/svg/fb_icon.svg') }}" alt=""></a>
						<a href=""><img src="{{ asset('img/svg/tw_icon.svg') }}" alt=""></a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div> -->
</section>
@endsection

@section('extra_js')
	<script type="text/javascript">

		$(document).ready(function(){
            $('#lightgallery').lightGallery({thumbnail:true});
            $('#lightgallery2').lightGallery({thumbnail:true});
            $('#lightgallery3').lightGallery({thumbnail:true});
            $('#lightgallery4').lightGallery({thumbnail:true});
            $('#lightgallery5').lightGallery({thumbnail:true});
            $('#lightgallery6').lightGallery({thumbnail:true});
        });

	</script>

	<script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
    <script src="{{ asset('lib/lightGallery-master/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('lib/lightGallery-master/lib/jquery.mousewheel.min.js') }}"></script>
@endsection