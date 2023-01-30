@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Вакатные места</h3>
				<table class="table"><caption></caption>					
					<tr>
						<th width="50%" style="background-color: #5F8A96; color: black">Количество вакантных мест для приёма (перевода) на места финансируемые за счёт бюджетных ассигнований федерального бюджета</th>
						<th width="50%"  style="color: black" itemprop="numberBFVacant">{{ $vacant->federal_budget_count }}</th>
					</tr>

					<tr>
						<th style="background-color: #5F8A96; color: black" >Количество вакантных мест для приёма (перевода) на места финансируемые за счёт бюджетов субъектов Российской Федерации</th>
						<th style="color: black" itemprop="numberBRVacant">{{ $vacant->subject_budget_count }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Количество вакантных мест для приёма (перевода) на места финансируемые за счёт местных бюджетов</th>
						<th style="color: black" itemprop="numberBMVacant">{{ $vacant->local_budget_count }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Количество вакантных мест для приёма (перевода) на места финансируемые за счёт по договорам об образовании и за счёт средств физических и (или) юридических лиц</th>
						<th style="color: black" itemprop="numberPVacant">{{ $vacant->person_budget_count }}</th>
					</tr>
				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
