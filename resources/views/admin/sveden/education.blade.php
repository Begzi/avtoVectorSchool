@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Образование</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
<!-- licenseDocLink -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body">
                            @if (isset($educations) && count($educations) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($educations as $education)

                                            <a href="{{ route('admin.sveden.education.edit', ['education' => $education->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
											<tr>
												<th width="50%" style="background-color: #5F8A96; color: black">Уровень образования</th>
												<th width="50%"  style="color: black" itemprop="eduLevel">{{ $education->education_lvl }}</th>
											</tr>

											<tr>
												<th style="background-color: #5F8A96; color: black" >Код и наименование профессии, специальности, направления подготовки</th>
												<th style="color: black" itemprop="eduCode eduName eduProf">{{ $education->code }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Количесвто обучающихся</th>
												<th style="color: black" itemprop="”numberAll”">{{ $education->people_count }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Язык на котором ведутся занятия</th>
												<th style="color: black" itemprop="language">{{ $education->language }}</th>
											</tr>

                                            @for($i = 0; $i < count($arrayNameDocument); $i++)

                                                <tr>
                                                    <th width="50%" style="background-color: #5F8A96; color: black">{{ $arrayNameLabel[$i] }}</th>
                                                    <th width="50%" style="color: black" itemprop="ustavDocLink"> 
                                                        {!! $education->getFileName($education[$arrayNameDocument[$i]]) !!}
                                                    </th>
                                                </tr>
                                            @endfor
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

