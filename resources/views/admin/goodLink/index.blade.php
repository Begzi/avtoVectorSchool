@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Контент для вкладки "полезные ссылки"</h1>
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
                            @if (isset($goodLinks) && count($goodLinks) != 0)
                                @foreach($goodLinks as $goodLink)

                                    <a href="{{ route('admin.goodLink.edit', ['goodLink' => $goodLink->id]) }}"
                                       class="btn btn-info btn-sm float-left mr-1">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <div class="page-wrapper">
                                        <div class="container-fluid text">
                                            <h3>{{ $goodLink->title }}</h3>
                                            <div class="text">
                                                {!! $goodLink->text !!}
                                            </div>

                                        </div>
                                    </div>

                                        <hr class="invis">
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

