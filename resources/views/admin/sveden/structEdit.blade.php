@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование структуры</h1>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.struct.update', ['struct' => $struct->id]) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="government">Структурные подразделения<font color="f33810">*</font></label>
                                    <input type="text" name="government"
                                           class="form-control @error('government') is-invalid @enderror" id="government"
                                           value="{{ $struct->government }}">
                                </div>
                                <div class="form-group">
                                    <label for="leader_government">Руководители структурных подразделений<font color="f33810">*</font></label>
                                    <input type="text" name="leader_government"
                                           class="form-control @error('leader_government') is-invalid @enderror" id="leader_government"
                                           value="{{ $struct->leader_government }}">
                                </div>
                                <div class="form-group">
                                    <label for="location_government">Адресса структурных подразделений<font color="f33810">*</font></label>
                                    <input type="text" name="location_government"
                                           class="form-control @error('location_government') is-invalid @enderror" id="location_government"
                                           value="{{ $struct->location_government }}">
                                </div>
                                <div class="form-group">
                                    <label for="site_government">Сайты структурных подразделений</label>
                                    <input type="text" name="site_government"
                                           class="form-control @error('site_government') is-invalid @enderror" id="site_government"
                                           value="{{ $struct->site_government }}">
                                </div>
                                <div class="form-group">
                                    <label for="email_government">Почты структурных подразделений</label>
                                    <input type="email_government" name="email_government"
                                           class="form-control @error('email_government') is-invalid @enderror" id="email_government"
                                           value="{{ $struct->email_government }}">
                                </div>
                                <div class="form-group">
                                    <label for="info_about_government">Информация о структурных подразделений</label>
                                    <input type="text" name="info_about_government"
                                           class="form-control @error('info_about_government') is-invalid @enderror" id="info_about_government"
                                           value="{{ $struct->info_about_government }}">
                                </div>

                                <div class="form-group">

                                    <label for="info_about_government_pdf">Информация о структурных подразделений (СканФайла, pdf)</label>
                                    @if($struct->getFileName() != 'СканФайла отстутствует')
                                        <br>
                                        <label for="info_about_government_pdf">Добавленная информация о структурных подразделений {!! $struct->getFileName() !!}
                                        </label>
                                    @endif
                                    <input type="file" name="info_about_government_pdf"
                                           class="form-control" id="info_about_government_pdf">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.struct.index') }}"
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

