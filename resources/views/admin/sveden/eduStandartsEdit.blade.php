@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование Образовательные стандарты</h1>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.eduStandarts.update', ['eduStandarts' => $eduStandarts->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="text">Первый абзац, написать какие требования к автошколам есть (eduFedDoc)<font color="f33810">*</font></label>
                                    <textarea  name="text"
                                           class="form-control" id="content" rows="7" placeholder="Текст требования ..."
                                           > 
                                           {{ $eduStandarts->text }}
                                       </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="content">Ссыдки на эти требования, каждая ссылка на новом абзаце (eduStandartDoc)<font color="f33810">*</font></label>
                                    <textarea name="link_requirements" class="form-control" id="description" rows="7"
                                              placeholder="Введите ссылки ..." >{{ $eduStandarts->link_requirements }}</textarea>
                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.eduStandarts') }}"
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


