@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Meta теги сайта</h1>
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
                            @if (isset($metas) && count($metas) != 0)
                                <div class="table-responsive">
                                    @foreach($metas as $meta)
                                            <!-- <thead> -->

                                        <a href="{{ route('admin.meta.edit', ['metum' => $meta->id]) }}"
                                           class="btn btn-info btn-sm float-left mr-1">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>

                                </div>   
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Title мета тега. Оно будет отображаться при поисковике. То что будет ссылкой, до 69 символов(Гугл), 70 символов (Яндекс)</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="page-wrapper">
                                <div class="blog-custom-build">
                                    <div class="text">
                                        <h2>{{ $meta->title }} </h2>                          
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Desciption мета тега. То что будет отображаться текстом под ссылкой в поисковиках, лучше добавить информацию об автошколе, какая она, слоган и тд.</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="page-wrapper">
                                <div class="blog-custom-build">
                                    <div class="text">
                                        <h2>{!! $meta->description !!} </h2>                          
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Keywords мета тега. По словам которые тут введёте будет искаться ваша автошкола. Частые их изменение плохо, поисковик может вовсе перестать показывать, поэтому для изменения его хорошенько всё обдумать.</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="page-wrapper">
                                <div class="blog-custom-build">
                                    <div class="text">
                                        <h2>{!! $meta->keywords !!} </h2>                          
                                    </div>
                                </div>                  
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
                                    @endforeach
                            @else
                                <p>Сведений пока нет...</p>
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
                            @endif
@endsection

