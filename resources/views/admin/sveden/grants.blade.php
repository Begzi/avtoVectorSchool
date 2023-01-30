@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Стипендии</h1>
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
                            @if (isset($grants) && count($grants) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($grants as $grant)

                                            <a href="{{ route('admin.sveden.grants.edit', ['grants' => $grant->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
											<tr>
												<th width="50%" style="background-color: #5F8A96; color: black">Стипендии и иные виды материальной поддержки</th>
												<th width="50%"  style="color: black" itemprop="grant">{{ $grant->scholarship }}</th>
											</tr>

											<tr>
												<th style="background-color: #5F8A96; color: black" >Информация об общежитиях</th>
												<th style="color: black" itemprop="hostelInfo">{{ $grant->dormitory }}</th>
											</tr>
                                        @endforeach
                                    </table>
                                </div>
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

