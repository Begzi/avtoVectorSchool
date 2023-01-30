@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Контент для шаблонов сайта</h1>
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
                            @if (isset($mains) && count($mains) != 0)
                                <div class="table-responsive">
                                    @foreach($mains as $main)
                                        <table class="table">
                                            <!-- <thead> -->

                                            <a href="{{ route('admin.main.edit', ['main' => $main->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>

											<tr>
												<th style="background-color: #5F8A96; color: black" >Почта, на которую будут отправляться данные с формы на главной странице (там где предложено оставлять контакты пользователей)</th>
												<th style="color: black" itemprop="finBRVolume">{{ $main->email }}</th>
											</tr>
                                        </table>
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
                    <h1>Слоган автошколы, будет отображен на главной странице</h1>
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
                                        <h2>{{ $main->tagline }} </h2>                          
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
                    <h1>Текст, который будет отображен на главной странице, до Контактов</h1>
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
                                        <h2>{!! $main->text !!} </h2>                          
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

