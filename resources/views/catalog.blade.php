@extends('partials.base')
@section('title','Catalog')
@section('body')
{{-- <div class="jumbotron" style="background-image: url('{{ $portada }}');"> --}}

	<section class="jumbotron" style="background-color:white">
		<div class="contenedor" style="background-image: url('assets/img/banner-1-bio.jpg'); background-size: cover; background-position: center; width: 100%; height: 10rem; display: flex; justify-content: center; align-items: center; margin-bottom: 2.1%;">
			<div class="text-center">
				<h1 style="visibility: visible; -webkit-text-stroke: 1px white;">
					{{ $title }}
				</h1>
			</div>
		</div>
		
	</div>
	<catalog
		:tags="{{ $tags }}"
		:ads_a="{{ $ads_a }}"
		:ads_b="{{ $ads_b }}"
		:ads_c="{{ $ads_c }}"
		:ads_d="{{ $ads_d }}"
		:tasadolar="{{$tasa_dolar}}"
		:userlogged="{{ json_encode($_SESSION['usuario'] ?? '') }}">
	</catalog>
	
	
@stop

