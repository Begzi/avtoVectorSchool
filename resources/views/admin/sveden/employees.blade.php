@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Руководство. Преподавательский состав</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">

                            
                            <a href="{{ route('admin.sveden.employees.create') }}" class="btn btn-primary mb-3">Добавить Сотрудника</a>
                    		@if (count($teachers) || count($managers) != 0)
                                <div class="table-responsive">
                            		@if (count($managers) != 0)
	                                        <!-- <thead> -->
                                        <h2>Руководство</h2>
                                        @foreach($managers as $manager)
		                                    <table class="table">


		                                            <a href="{{ route('admin.sveden.manager.edit', ['manager' => $manager->id]) }}"
		                                               class="btn btn-info btn-sm float-left mr-1">
		                                                <i class="fas fa-pencil-alt"></i>
		                                            </a>
						                            <form
						                                action="{{ route('admin.sveden.manager.destroy', ['manager' => $manager->id]) }}"
						                                method="post" class="float-left">
						                                @csrf
						                                @method('DELETE')
						                                <button type="submit" class="btn btn-danger btn-sm"
						                                        onclick="return confirm('Подтвердите удаление')">
						                                    <i
						                                        class="fas fa-trash-alt"></i>
						                                </button>
						                            </form>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">ФИО</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $manager->fullname }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Телефон </th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $manager->telephone }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Почта</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $manager->email }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Должность</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $manager->post }}</th>
													</tr>

		                                    </table>
                                        @endforeach

                            		@endif
                            		@if (count($teachers) != 0)
	                                        <!-- <thead> -->
                                        <h2>Педагоги</h2>
                                        @foreach($teachers as $teacher)
		                                    <table class="table">

		                                            <a href="{{ route('admin.sveden.teacher.edit', ['teacher' => $teacher->id]) }}"
		                                               class="btn btn-info btn-sm float-left mr-1">
		                                                <i class="fas fa-pencil-alt"></i>
		                                            </a>
						                            <form
						                                action="{{ route('admin.sveden.teacher.destroy', ['teacher' => $teacher->id]) }}"
						                                method="post" class="float-left">
						                                @csrf
						                                @method('DELETE')
						                                <button type="submit" class="btn btn-danger btn-sm"
						                                        onclick="return confirm('Подтвердите удаление')">
						                                    <i
						                                        class="fas fa-trash-alt"></i>
						                                </button>
						                            </form>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">ФИО</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $teacher->fullname }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Телефон </th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $teacher->telephone }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Почта</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $teacher->email }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Должность</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $teacher->post }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Образование</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $teacher->education }}</th>
													</tr>
													<tr>
														<th width="50%" style="background-color: #5F8A96; color: black">Опыт работы</th>
														<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $teacher->work_experience }}</th>
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
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

