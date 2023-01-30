@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование Финансово-хозяйственная деятельность</h1>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.employees.storage') }}">
                            @csrf
                            @method('POST')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Руководство или Преподаватель?<font color="f33810">*</font></label>
						            <select name="employee_id" id="employee_id" class="select" style="width: 20%;" >
						                    <option value="1" selected>Руководство</option>
						                    <option value="2">Преподаватель</option>
						            </select>
						            <br>
                                    <label for="fullname">ФИО сотрудника<font color="f33810">*</font></label>
                                    <input type="text" name="fullname"
                                           class="form-control @error('fullname') is-invalid @enderror" id="fullname">

                                    <label for="telephone">Телефон<font color="f33810">*</font></label>
                                    <input type="text" name="telephone"
                                           class="form-control @error('telephone') is-invalid @enderror" id="telephone">

                                    <label for="email">Почта<font color="f33810">*</font></label>
                                    <input type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror" id="email">
                                    <label for="post">Должность<font color="f33810">*</font></label>
                                    <input type="text" name="post"
                                           class="form-control @error('post') is-invalid @enderror" id="post">
                                    <label for="education">Образование</label>
                                    <input type="text" name="education"
                                           class="form-control @error('education') is-invalid @enderror" id="education" placeholder="Для Преподавателей объязательное поле">
                                    <label for="work_experience">Опыт работы</label>
                                    <input type="text" name="work_experience"
                                           class="form-control @error('work_experience') is-invalid @enderror" id="work_experience" placeholder="Для Преподавателей объязательное поле">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.employees') }}"
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

