@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Финансово-хозяйственная деятельность</h3>
				<table class="table"><caption></caption>
					<tr>
						<th width="50%" style="background-color: #5F8A96; color: black">Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт бюджетных ассигнований федерального бюджета (тыс. руб.)</th>
						<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $budget->federal_budget }}</th>
					</tr>

					<tr>
						<th style="background-color: #5F8A96; color: black" >Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт бюджетов субъектов Российской Федерации (тыс. руб.)</th>
						<th style="color: black" itemprop="finBRVolume">{{ $budget->subject_budget }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт местных бюджетов (тыс. руб.)</th>
						<th style="color: black" itemprop="finBMVolume">{{ $budget->local_budget }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Объём образовательной деятельности, финансовое обеспечение которой осуществляется по договорам об образовании за счёт средств физических и (или) юридических лиц (тыс. руб.)</th>
						<th style="color: black" itemprop="finPVolume">{{ $budget->person_budget }}</th>
					</tr>
				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
