@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование общей информации</h1>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.common.update', ['common' => $common->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="fullname">Полное наименование организации<font color="f33810">*</font></label>
                                    <input type="text" name="fullname"
                                           class="form-control @error('fullname') is-invalid @enderror" id="fullname"
                                           value="{{ $common->fullname }}">
                                </div>
                                <div class="form-group">
                                    <label for="shortname">Короткое наименование организации<font color="f33810">*</font></label>
                                    <input type="text" name="shortname"
                                           class="form-control @error('shortname') is-invalid @enderror" id="shortname"
                                           value="{{ $common->shortname }}">
                                </div>
                                <div class="form-group">
                                    <label for="created_school">Дата создания автошколы<font color="f33810">*</font></label>
                                    <input type="date" name="created_school"
                                           class="form-control @error('created_school') is-invalid @enderror" id="created_school"
                                           value="{{ $common->created_school }}">
                                </div>
                                <div class="form-group">
                                    <label for="founder">Представитель (Учредитель) образовательной организаци<font color="f33810">*</font></label>
                                    <input type="text" name="founder"
                                           class="form-control @error('founder') is-invalid @enderror" id="founder"
                                           value="{{ $common->founder }}">
                                </div>
                                <div class="form-group">
                                    <label for="found_members">Представительства образовательной организации</label>
                                    <input type="found_members" name="found_members"
                                           class="form-control @error('found_members') is-invalid @enderror" id="found_members"
                                           value="{{ $common->found_members }}">
                                </div>
                                <div class="form-group">
                                    <label for="address">Адрес местонахождения образовательной организации<font color="f33810">*</font></label>
                                    <input type="text" name="address"
                                           class="form-control @error('address') is-invalid @enderror" id="address"
                                           value="{{ $common->address }}">
                                </div>
                                <div class="form-group">
                                    <label for="address_branch">Филиалы образовательной организации</label>
                                    <input type="text" name="address_branch"
                                           class="form-control @error('address_branch') is-invalid @enderror" id="address_branch"
                                           value="{{ $common->address_branch }}">
                                </div>
                                <div class="form-group">
                                    <label for="work_time_day">Режим, график работы<font color="f33810">*</font></label>
                                    <textarea type="text" name="work_time_day"
                                           class="form-control @error('work_time_day') is-invalid @enderror" id="work_time_day">
                                    	{{ $common->work_time_day }}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Контактные телефоны<font color="f33810">*</font></label>
                                    <input type="text" name="phone"
                                           class="form-control @error('phone') is-invalid @enderror" id="phone"
                                           value="{{ $common->phone }}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Адреса электронной почты<font color="f33810">*</font></label>
                                    <input type="email" name="email"
                                           class="form-control @error('email') is-invalid @enderror" id="email"
                                           value="{{ $common->email }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.common.index') }}"
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

