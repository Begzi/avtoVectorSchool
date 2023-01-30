@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Материально-техническое обеспечение и оснащённость образовательного процесса</h3>
				<table class="table"><caption></caption>
					
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество кабинетов</th>
                        <th width="50%"  style="color: black" itemprop="purposeCab">{{ $object->cabinet_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество Машин</th>
                        <th width="50%"  style="color: black" itemprop="osnPrac">{{ $object->car_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество столов</th>
                        <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->table_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество стулов</th>
                        <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->chair_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество плакатов</th>
                        <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->placat_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество манекенов</th>
                        <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->maneken_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество компьютеров</th>
                        <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->pc_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество процессоров</th>
                        <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->processor_count }}</th>
                    </tr>
                    <tr>
                        <th width="50%" style="background-color: #5F8A96; color: black">Количество экранов</th>
                        <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->screen_count }}</th>
                    </tr>
				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
