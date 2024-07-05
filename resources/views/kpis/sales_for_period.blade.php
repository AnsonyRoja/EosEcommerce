@extends('voyager::master')

@section('page_title',$title)

@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<style type="text/css">
	div.card-header, div.card-body{
		padding-left:20px !important;
	}
</style>
@stop

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h3>{{ $title }}</h3>
					</div>
					<div class="card-body">
						<h4>Parametros</h4>
						<hr />

						<div class="form-group">
							<label>Desde:</label>
							<input type="date" name="date_from" id="date_from" class="form-control" />
						</div>
						<div class="form-group">
							<label>Hasta:</label>
							<input type="date" name="date_to" id="date_to" class="form-control" />
						</div>
						<button class="btn btn-success" id="sales_for_period" type="button">Enviar</button>

						<h4>Resultado</h4>
						<hr />
						<div class="row">
							<div class="col-md-12">
								<div id="chart"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop