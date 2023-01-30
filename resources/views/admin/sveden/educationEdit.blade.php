@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование образования</h1>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.education.update', ['education' => $education->id]) }}"  enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="education_lvl">Уровень образования<font color="f33810">*</font></label>
                                    <input type="text" name="education_lvl"
                                           class="form-control @error('education_lvl') is-invalid @enderror" id="education_lvl"
                                           value="{{ $education->education_lvl }}">
                                </div>
                                <div class="form-group">
                                    <label for="code">Код и наименование профессии, специальности, направления подготовки<font color="f33810">*</font></label>
                                    <input type="text" name="code"
                                           class="form-control @error('code') is-invalid @enderror" id="code"
                                           value="{{ $education->code }}">
                                </div>
                                <div class="form-group">
                                    <label for="people_count">Количесвто обучающихся<font color="f33810">*</font></label>
                                    <input type="text" name="people_count"
                                           class="form-control @error('people_count') is-invalid @enderror" id="people_count"
                                           value="{{ $education->people_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="language">Язык на котором ведутся занятия<font color="f33810">*</font></label>
                                    <input type="language" name="language"
                                           class="form-control @error('language') is-invalid @enderror" id="language"
                                           value="{{ $education->language }}">
                                </div>

                                @for($i = 0; $i < count($arrayNameDocument); $i++)
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="{{$arrayNameDocument[$i]}}">
                                                {{ $arrayNameLabel[$i] }}
                                            </label>
                                            @if($education->getFileName($education[$arrayNameDocument[$i]]) != 'СканФайла отстутствует')
                                                <br>
                                                <label for="{{$arrayNameDocument[$i]}}">{{ $arrayNameLabelAddedDocument[$i] }} {!! $education->getFileName($education[$arrayNameDocument[$i]]) !!}
                                                </label>
                                            @endif
                                            <input type="file" name="{{$arrayNameDocument[$i]}}"
                                                   class="form-control" id="{{$arrayNameDocument[$i]}}">
                                        </div>                              
                                    </div>
                                @endfor
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.education.index') }}"
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

