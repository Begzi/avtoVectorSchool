@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование документов</h1>
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
                    @if (count($arrayNameDocument) == 2):
                        <form role="form" method="post" action="{{ route('admin.sveden.document.update.for.paidEdu', ['document' => $document->id]) }}" enctype="multipart/form-data">
                    @else:
                        <form role="form" method="post" action="{{ route('admin.sveden.document.update', ['document' => $document->id]) }}" enctype="multipart/form-data">
                    @endif
                            @csrf
                            @method('PUT')
                            @for($i = 0; $i < count($arrayNameDocument); $i++)
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="{{$arrayNameDocument[$i]}}">
                                            {{ $arrayNameLabel[$i] }}
                                        </label>
                                        @if($document->getFileName($document[$arrayNameDocument[$i]]) != 'СканФайла отстутствует')
                                            <br>
                                            <label for="{{$arrayNameDocument[$i]}}">{{ $arrayNameLabelAddedDocument[$i] }} {!! $document->getFileName($document[$arrayNameDocument[$i]]) !!}
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

                        @if (count($arrayNameDocument) == 2):
                            <a href="{{ route('admin.sveden.paidEdu.index') }}"
                               class="btn btn-warning">
                                Назад
                            </a>
                        @else:
	                        <a href="{{ route('admin.sveden.document.index') }}"
	                           class="btn btn-warning">
	                            Назад
	                        </a>
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

