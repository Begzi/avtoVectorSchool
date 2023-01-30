@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Стипендии</h3>
				<table class="table"><caption></caption>
					
					<tr>
						<th width="50%" style="background-color: #5F8A96; color: black">Стипендии и иные виды материальной поддержки</th>
						<th width="50%"  style="color: black" itemprop="grant">{{ $grant->scholarship }}</th>
					</tr>

					<tr>
						<th style="background-color: #5F8A96; color: black" >Информация об общежитиях</th>
						<th style="color: black" itemprop="hostelInfo">{{ $grant->dormitory }}</th>
					</tr>
				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
