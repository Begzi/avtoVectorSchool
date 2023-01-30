@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Образовательные стандарты и требования</h3>
				<table class="table"><caption></caption>

	                <div class="container-fluid">
	                	<div class="text" itemprop="eduFedDoc">
							{!! $eduStandart->text !!}
	                    </div>

	                	<div class="text" itemprop="eduStandartDoc">
							{!! $eduStandart->link_requirements !!}
	                    </div>
	                </div>
				</table>
        </div>
    </div>
	    <hr class="invis">


@endsection
