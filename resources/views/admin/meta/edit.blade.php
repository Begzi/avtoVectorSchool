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

                        <form role="form" method="post" action="{{ route('admin.meta.update', ['metum' => $meta->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Title мета тега. Оно будет отображаться при поисковике. То что будет ссылкой, до 69 символов(Гугл), 70 символов (Яндекс)<font color="f33810">*</font></label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror" id="titleMeta"
                                           value="{{ $meta->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="description">Desciption мета тега. То что будет отображаться текстом под ссылкой в поисковиках, лучше добавить информацию об автошколе, какая она, слоган и тд.<font color="f33810">*</font></label>
                                    <textarea name="description"
                                           class="form-control @error('description') is-invalid @enderror" id="descriptionMeta"
                                           >{{ $meta->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="keywords"><font color="f33810">*Keywords мета тега. По словам которые тут введёте будет искаться ваша автошкола. Частые их изменение плохо, поисковик может вовсе перестать показывать, поэтому для изменения его хорошенько всё обдумать</font></label>
                                    <textarea name="keywords"
                                           class="form-control @error('keywords') is-invalid @enderror" id="keywordsMeta"
                                           >{{ $meta->keywords }}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.goodLink.index') }}"
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

