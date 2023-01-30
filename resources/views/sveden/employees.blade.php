
@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Руководство. Преподавательский состав</h3>

        		@if (count($teachers) || count($managers) != 0)
                    <div class="table-responsive">
                		@if (count($managers) != 0)
                                <!-- <thead> -->
                            <h2>Руководство</h2>
                            @foreach($managers as $manager)
                                <table class="table">
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">ФИО</th>
											<th width="50%"  style="color: black" itemprop="fio">{{ $manager->fullname }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Телефон </th>
											<th width="50%"  style="color: black" itemprop="telephone">{{ $manager->telephone }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Почта</th>
											<th width="50%"  style="color: black" itemprop="email">{{ $manager->email }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Должность</th>
											<th width="50%"  style="color: black" itemprop="post">{{ $manager->post }}</th>
										</tr>

                                </table>
                            @endforeach

                		@endif
                		@if (count($teachers) != 0)
                                <!-- <thead> -->
                            <h2>Педагоги</h2>
                            @foreach($teachers as $teacher)
                                <table class="table">
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">ФИО</th>
											<th width="50%"  style="color: black" itemprop="fio">{{ $teacher->fullname }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Телефон </th>
											<th width="50%"  style="color: black" itemprop="telephone">{{ $teacher->telephone }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Почта</th>
											<th width="50%"  style="color: black" itemprop="email">{{ $teacher->email }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Должность</th>
											<th width="50%"  style="color: black" itemprop="post">{{ $teacher->post }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Образование</th>
											<th width="50%"  style="color: black" itemprop="teachingLevel">{{ $teacher->education }}</th>
										</tr>
										<tr>
											<th width="50%" style="background-color: #5F8A96; color: black">Опыт работы</th>
											<th width="50%"  style="color: black" itemprop="genExperience">{{ $teacher->work_experience }}</th>
										</tr>

                                </table>
                            @endforeach

                		@endif
                    </div>
                @else
                    <p>Сотрудников пока нет пока нет...</p>
                @endif
        </div>
    </div>

	    <hr class="invis">


@endsection

                            