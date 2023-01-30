@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Структура и ирганы уравления образовательной организацией</h3>
				<table class="table"><caption></caption>
					<tr>
						<th  width="50%"  style="background-color: #5F8A96; color: black">Структурные подразделения</th>
						<th width="50%"  style="color: black" itemprop="fullName">{{ $struct->government }}</th>
					</tr>

					<tr>
						<th style="background-color: #5F8A96; color: black" >Руководители структурных подразделений</th>
						<th style="color: black" itemprop="shrotName">{{ $struct->leader_government }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Адресса структурных подразделений</th>
						<th style="color: black" itemprop="regDate">{{ $struct->location_government }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Сайты структурных подразделений</th>
						<th style="color: black" itemprop="nameUchred">{{ $struct->site_government }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Почты структурных подразделений</th>
						<th style="color: black" itemprop="repInfo">{{ $struct->email_government }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Информация о структурных подразделений</th>
						<th style="color: black" itemprop="address">{{ $struct->info_about_government }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Информация о структурных подразделений (СканФайла, в pdf)</th>
						<th itemprop="filInfo">
            				{!! $struct->getFileName() !!}
            			</th>
					</tr>


				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
