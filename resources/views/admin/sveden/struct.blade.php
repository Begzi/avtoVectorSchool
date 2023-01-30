@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Структура</h1>
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
                            @if (isset($structs) && count($structs) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($structs as $struct)

                                            <a href="{{ route('admin.sveden.struct.edit', ['struct' => $struct->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
											<tr>
												<th  width="50%"  style="background-color: #5F8A96; color: black">Структурные подразделения</th>
												<th width="50%"  style="color: black" itemprop="fullName">{{ $struct->government }}</th>
											</tr>

											<tr>
												<th style="background-color: #5F8A96; color: black" >Руководители структурных подразделений</th>
												<th style="color: black" itemprop="shrotName">{{ $struct->leader_government }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Адресса структурных подразделений</th>
												<th style="color: black" itemprop="regDate">{{ $struct->location_government }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Сайты структурных подразделений</th>
												<th style="color: black" itemprop="nameUchred">{{ $struct->site_government }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Почты структурных подразделений</th>
												<th style="color: black" itemprop="repInfo">{{ $struct->email_government }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Информация о структурных подразделений</th>
												<th style="color: black" itemprop="address">{{ $struct->info_about_government }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Информация о структурных подразделений (СканФайла, в pdf)</th>
												<th style="color: black" itemprop="filInfo">
													{!! $struct->getFileName() !!}
                                    			</th>
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

