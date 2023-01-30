@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование Материально-техническое обеспечение и оснащённость образовательного процесса</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.objectsSchool.update', ['objectsSchool' => $object->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="cabinet_count">Количество кабинетов<font color="f33810">*</font></label>
                                    <input type="text" name="cabinet_count"
                                           class="form-control @error('cabinet_count') is-invalid @enderror" id="cabinet_count"
                                           value="{{ $object->cabinet_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="car_count">Количество Машин<font color="f33810">*</font></label>
                                    <input type="text" name="car_count"
                                           class="form-control @error('car_count') is-invalid @enderror" id="car_count"
                                           value="{{ $object->car_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="table_count">Количество столов<font color="f33810">*</font></label>
                                    <input type="text" name="table_count"
                                           class="form-control @error('table_count') is-invalid @enderror" id="table_count"
                                           value="{{ $object->table_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="chair_count">Количество стулов<font color="f33810">*</font></label>
                                    <input type="text" name="chair_count"
                                           class="form-control @error('chair_count') is-invalid @enderror" id="chair_count"
                                           value="{{ $object->chair_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="placat_count">Количество плакатов<font color="f33810">*</font></label>
                                    <input type="text" name="placat_count"
                                           class="form-control @error('placat_count') is-invalid @enderror" id="placat_count"
                                           value="{{ $object->placat_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="maneken_count">Количество манекенов<font color="f33810">*</font></label>
                                    <input type="text" name="maneken_count"
                                           class="form-control @error('maneken_count') is-invalid @enderror" id="maneken_count"
                                           value="{{ $object->maneken_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="pc_count">Количество компьютеров<font color="f33810">*</font></label>
                                    <input type="text" name="pc_count"
                                           class="form-control @error('pc_count') is-invalid @enderror" id="pc_count"
                                           value="{{ $object->pc_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="processor_count">Количество процессоров<font color="f33810">*</font></label>
                                    <input type="text" name="processor_count"
                                           class="form-control @error('processor_count') is-invalid @enderror" id="processor_count"
                                           value="{{ $object->processor_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="screen_count">Количество экранов<font color="f33810">*</font></label>
                                    <input type="text" name="screen_count"
                                           class="form-control @error('screen_count') is-invalid @enderror" id="screen_count"
                                           value="{{ $object->screen_count }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.objectsSchool.index') }}"
	                           class="btn btn-warning">
	                            Назад
	                        </a>
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

