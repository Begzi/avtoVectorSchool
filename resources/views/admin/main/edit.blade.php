@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Все данные сайта, главная страница и вспомогательные данные сайта</h1>
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

                        <form role="form" method="post" action="{{ route('admin.main.update', ['main' => $main->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tagline">Слоган автошколы, будет отображен на главной странице<font color="f33810">*(обязательно, если не хотите никакого слогана, напишите "Пусто"</font></label>
                                    <input type="text" name="tagline"
                                           class="form-control @error('tagline') is-invalid @enderror" id="tagline"
                                           value="{{ $main->tagline }}">
                                </div>
                                <div class="form-group">
                                    <label for="text">Текст, который будет отображен на главной странице, до Контактов<font color="f33810">*(обязательно, если не хотите никакого слогана, напишите "Пусто"</font></label>
                                    <textarea name="text"
                                           class="form-control @error('text') is-invalid @enderror" id="description"
                                           >{{ $main->text }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="local_budget">Почта, на которую будут отправляться данные с формы на главной странице (там где предложено оставлять контакты пользователей)<font color="f33810">*(если не надо напишите echis@example.com)</font></label>
                                    <input type="text" name="email"
                                           class="form-control @error('email') is-invalid @enderror" id="email"
                                           value="{{ $main->email }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.main') }}"
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

