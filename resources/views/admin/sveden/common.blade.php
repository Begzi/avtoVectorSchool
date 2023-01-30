@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Основные сведения</h1>
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
                            @if (isset($commons) && count($commons) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($commons as $common)

                                            <a href="{{ route('admin.sveden.common.edit', ['common' => $common->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
											<tr>
												<th width="50%" style="background-color: #5F8A96; color: black">Полное наименование организации</th>
												<th width="50%"  style="color: black" itemprop="fullName">{{ $common->fullname }}</th>
											</tr>

											<tr>
												<th style="background-color: #5F8A96; color: black" >Короткое наименование организации</th>
												<th style="color: black" itemprop="shrotName">{{ $common->shortname }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Дата создания автошколы</th>
												<th style="color: black" itemprop="regDate">{{ $common->created_school }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Представитель (Учредитель) образовательной организаци</th>
												<th style="color: black" itemprop="nameUchred">{{ $common->founder }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Представительства образовательной организации</th>
												<th style="color: black" itemprop="repInfo">{{ $common->found_members }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Адрес местонахождения образовательной организации</th>
												<th style="color: black" itemprop="address">{{ $common->address }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Филиалы образовательной организации</th>
												<th style="color: black" itemprop="filInfo">{{ $common->address_branch }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Режим, график работы</th>
												<th style="color: black" itemprop="workTime">{{ $common->work_time_day }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Контактные телефоны</th>
												<th style="color: black" itemprop="telephone">{{ $common->phone }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Адреса электронной почты</th>
												<th style="color: black" itemprop="email">{{ $common->email }}</th>
											</tr>
                                        @endforeach
                                        <!-- <tr>
                                            <th style="width: 30px">#</th>
                                            <th>Наименование</th>
                                            <th>Slug</th>
                                            <th>Actions</th>
                                        </tr>
                                        <tbody>
                                        </thead> -->
                                             <!--<tr>
                                                <td>{{ $common->id }}</td>
                                                <td>{{ $common->title }}</td>
                                                <td>{{ $common->slug }}</td>
                                                <td>
                                                </td>
                                            </tr>
                                        </tbody> -->
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

