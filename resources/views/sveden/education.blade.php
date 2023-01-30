@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Образование</h3>
				<table class="table"><caption></caption>

					<tr>
						<th width="50%" style="background-color: #5F8A96; color: black">Уровень образования</th>
						<th width="50%"  style="color: black" itemprop="eduLevel">{{ $education->education_lvl }}</th>
					</tr>

					<tr>
						<th style="background-color: #5F8A96; color: black" >Код и наименование профессии, специальности, направления подготовки</th>
						<th style="color: black" itemprop="eduCode eduName eduProf">{{ $education->code }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Количесвто обучающихся</th>
						<th style="color: black" itemprop="”numberAll”">{{ $education->people_count }}</th>
					</tr>
					<tr>
						<th style="background-color: #5F8A96; color: black" >Язык на котором ведутся занятия</th>
						<th style="color: black" itemprop="language">{{ $education->language }}</th>
					</tr>
                    @for($i = 0; $i < count($arrayNameDocument); $i++)

                        <tr>
                            <th width="50%" style="background-color: #5F8A96; color: black">{{ $arrayNameLabel[$i] }}</th>
                            <th width="50%" style="color: black" itemprop="ustavDocLink"> 
                                {!! $education->getFileName($education[$arrayNameDocument[$i]]) !!}
                            </th>
                        </tr>
                    @endfor
				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
