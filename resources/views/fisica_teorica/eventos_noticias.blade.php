@extends('fisica_teorica/base')

@section('title', 'FISICA TEORIA | Directorio')

@section('extra_css')
<style>
	table tr td > .card {
	border: solid 1px #c4c4c4;
	display: block;
	padding: 10px;
	margin-bottom: 15px;
}

table tr td > .card > a {
	text-decoration: none;
	display: block;
}

table tr td > .card > a > article > header {
	margin: 0 0 5px 0;
	padding: 0 0 0 15px;
}

table tr td > .card > a > article > header > h3 {
	margin: 0;
	font-size: 18px;
	font-weight: 600;
	color: #666666;
}

table tr td > .card > a > article > header > span {
	margin: 0;
	font-size: 16px;
	font-weight: 400;
}

table tr td > .card > a > article > img {
	display: inline-block;
    margin: 0;
    padding: 0;
    width: 35%;
    height: auto;
}

table tr td > .card > a > article > p {
	position: relative;
	display: inline-block;
    vertical-align: top;
    width: 63%;
    margin: 0;
    padding: 0;
    font-size: 16px;
    font-weight: 400;
    margin-left: .9%;
    padding-bottom: 15px;
    color: #666666;
    word-break: break-word;
    min-height: 124px;
}

table tr td > .card > a > article > p:after {
	content: '';
    width: 100%;
    height: 5px;
    background-color: rgb(198, 146, 0);
    display: block;
    position: absolute;
    bottom: 0;
}

.table>tbody>tr>td, 
.table>tbody>tr>th, 
.table>tfoot>tr>td, 
.table>tfoot>tr>th, 
.table>thead>tr>td, 
.table>thead>tr>th {
	padding: 0px;
	border-top: 0px;
}

.p-r {
	position: relative;
}

.searchinput {
	position: absolute;
    top: 12px;
    right: 28px;
    width: 350px;
}

.p-csm {
	padding: 6px 33px !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current {
	background: #2a4c72 !important;
	color: #fff !important;
	border: none;
}

.dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
	background: rgb(198, 146, 0) !important;
	border: none;
	color: #fff !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
	background: rgb(198, 146, 0) !important;
	border: none;
}

table.dataTable.no-footer {
	border: none;
}

#enTable {
	display: block;
}

@media only screen and (max-width : 1024px) {
	
	.searchinput {
	    width: 200px;
	}

}

@media only screen and (max-width : 768px) {
	
	.searchinput {
		position: unset;
		margin: 10px auto 0;
		max-width: 350px;
		width: 90%;
	}

	table tr td > .card > a > article {
		display: flex;
    	flex-direction: column;
    	justify-content: flex-start;
	}

	table tr td > .card > a > article > img,
	table tr td > .card > a > article > p {
		display: block;
		margin: 0 auto;
		max-width: 400px;
		width: 100%;
	}

}


</style>
@endsection

@section('content')
<header class="title-page background-personal-academico">
	<h2>
		<span class="span-triangule">
			<img src="{{ asset('img/svg/triangule_w.svg') }}" alt="directorio unam cnyn" />
		</span>Eventos y Noticias
	</h2>
</header>
<nav class="nav-directorio p-r">
	<ul>
		<li><a href="javascript:void(0);" class="p-csm" data-filter="event">Eventos</a></li>
		<li><a href="javascript:void(0);" class="p-csm" data-filter="not">Noticias</a></li>
	</ul>
	<input type="text" id="searchen" class="form-control searchinput" placeholder="Buscar..">
</nav>
<div style="max-width: 669px; margin: 0 auto; width: 90%; padding: 20px 0px;">
	<div>
		<table id="enTable" class="table">
			<thead>
				<tr>
					<th>Eventos | Noticias</th>
					<th>Tipo</th>
				</tr>
			</thead>
			<tbody>
				@foreach($en as $e)
					<tr>
						<td>
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
						</td>
						<td>
							{{ $e->tipo }}
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('extra_js')
<script>
	var $enTable = $("#enTable");
	var DTobj;

	DTobj = $enTable.DataTable({
		dom: 'tpr',
		language: {
			"sProcessing":     "Procesando...",
			"sLengthMenu":     "Mostrar _MENU_ registros",
			"sZeroRecords":    "No se encontraron resultados",
			"sEmptyTable":     "Ningún dato disponible en esta tabla",
			"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			"sInfoPostFix":    "",
			"sSearch":         "Buscar:",
			"sUrl":            "",
			"sInfoThousands":  ",",
			"sLoadingRecords": "Cargando...",
			"oPaginate": {
				"sFirst":    "Primero",
				"sLast":     "Último",
				"sNext":     "Siguiente",
				"sPrevious": "Anterior"
			},
			"oAria": {
				"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				"sSortDescending": ": Activar para ordenar la columna de manera descendente"
			}
		},
		columnDefs: [
			{
				targets: [-1],
				visible: false
			}
		]
	});

	$enTable.find('thead').hide();
	
	$('#searchen').keyup(function() {
		$enTable.DataTable().search($(this).val()).draw();
	});

	$('[data-filter]').click(function(e) {
		e.preventDefault();
		var txt = $(this).data('filter');
		$enTable.DataTable().column(1).search(txt).draw();
	});

</script>
@endsection