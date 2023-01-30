@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Основные сведения</h3>
				<table class="table"><caption></caption>
					<tr>
						<th style="background-color: #5F8A96; color: black">Полное наименование организации</th>
						<th style="color: black" itemprop="fullName">{{ $common->fullname }}</th>
					</tr>

					<tr>
						<th style="background-color: #5F8A96; color: black" >Короткое наименование организации</th>
						<th style="color: black" itemprop="shrotName">{{ $common->shortname }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Дата создания автошколы</th>
						<th style="color: black" itemprop="regDate">{{ $common->created_school }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Представитель (Учредитель) образовательной организаци</th>
						<th style="color: black" itemprop="nameUchred">{{ $common->founder }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Представительства образовательной организации</th>
						<th style="color: black" itemprop="repInfo">{{ $common->found_members }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Адрес местонахождения образовательной организации</th>
						<th style="color: black" itemprop="address">{{ $common->address }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Филиалы образовательной организации</th>
						<th style="color: black" itemprop="filInfo">{{ $common->address_branch }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Режим, график работы</th>
						<th style="color: black" itemprop="workTime">{{ $common->work_time_day }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Контактные телефоны</th>
						<th style="color: black" itemprop="telephone">{{ $common->phone }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Адреса электронной почты</th>
						<th style="color: black" itemprop="email">{{ $common->email }}</th>
					</tr>

				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
