@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Полезные ссылки</h3>
				<table class="table"><caption></caption>

	                <div class="container-fluid text">
	                	<p>www.gibdd.ru — официальный сайт ГИБДД МВД России.</p>
	                	<p>www.gai.ru — информационный портал ГАИ.РУ.</p>

	                </div>
				</table>
        </div>
    </div>
    @if ($goodLink->title != 'Пусто' || $goodLink->text  != '<p>Пусто</p>')
	    <div class="page-wrapper">
	        <h3> {{ $goodLink->title }} </h3>
	        <div class="text">
	        	{!! $goodLink->text !!}
	        </div>
	    </div>
    @endif

	    <hr class="invis">


@endsection
