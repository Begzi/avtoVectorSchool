@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Образовательные стандарты</h1>
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
                            @if (isset($eduStandarts) && count($eduStandarts) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        @foreach($eduStandarts as $eduStandart)
                                        <div class="container-fluid">
                                        	<div class="row" >
	                                            <a href="{{ route('admin.sveden.eduStandarts.edit', ['eduStandarts' => $eduStandart->id]) }}"
	                                               class="btn btn-info btn-sm float-left mr-1">
	                                                <i class="fas fa-pencil-alt"></i>
	                                            </a>
	                                        </div>
                                        	<div class="text" itemprop="eduFedDoc">
												{!!  $eduStandart->text !!}
	                                        </div>
                                        	<div class="text" itemprop="eduStandartDoc">
												{!! $eduStandart->link_requirements  !!}
	                                        </div>
	                                    </div>
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

