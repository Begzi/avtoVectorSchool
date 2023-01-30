@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Материально-техническое обеспечение и оснащённость образовательного процесса</h1>
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
                            @if (isset($objects) && count($objects) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($objects as $object)

                                            <a href="{{ route('admin.sveden.objectsSchool.edit', ['objectsSchool' => $object->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество кабинетов</th>
                                                <th width="50%"  style="color: black" itemprop="purposeCab">{{ $object->cabinet_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество Машин</th>
                                                <th width="50%"  style="color: black" itemprop="osnPrac">{{ $object->car_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество столов</th>
                                                <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->table_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество стулов</th>
                                                <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->chair_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество плакатов</th>
                                                <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->placat_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество манекенов</th>
                                                <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->maneken_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество компьютеров</th>
                                                <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->pc_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество процессоров</th>
                                                <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->processor_count }}</th>
                                            </tr>
                                            <tr>
                                                <th width="50%" style="background-color: #5F8A96; color: black">Количество экранов</th>
                                                <th width="50%"  style="color: black" itemprop="osnCab">{{ $object->screen_count }}</th>
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

