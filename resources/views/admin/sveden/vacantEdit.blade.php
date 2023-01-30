@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование Вакантные места для приёма (перевода) обучающихся</h1>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.vacant.update', ['vacant' => $vacant->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="federal_budget_count">Количество вакантных мест для приёма (перевода) на места финансируемые за счёт бюджетных ассигнований федерального бюджета<font color="f33810">*</font></label>
                                    <input type="text" name="federal_budget_count"
                                           class="form-control @error('federal_budget_count') is-invalid @enderror" id="federal_budget_count"
                                           value="{{ $vacant->federal_budget_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="subject_budget_count">Количество вакантных мест для приёма (перевода) на места финансируемые за счёт бюджетов субъектов Российской Федерации<font color="f33810">*</font></label>
                                    <input type="text" name="subject_budget_count"
                                           class="form-control @error('subject_budget_count') is-invalid @enderror" id="subject_budget_count"
                                           value="{{ $vacant->subject_budget_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="local_budget_count">Количество вакантных мест для приёма (перевода) на места финансируемые за счёт местных бюджетов<font color="f33810">*</font></label>
                                    <input type="text" name="local_budget_count"
                                           class="form-control @error('local_budget') is-invalid @enderror" id="local_budget_count"
                                           value="{{ $vacant->local_budget_count }}">
                                </div>
                                <div class="form-group">
                                    <label for="person_budget_count">Количество вакантных мест для приёма (перевода) на места финансируемые за счёт по договорам об образовании и за счёт средств физических и (или) юридических лиц<font color="f33810">*</font></label>
                                    <input type="text" name="person_budget_count"
                                           class="form-control @error('person_budget_count') is-invalid @enderror" id="person_budget_count"
                                           value="{{ $vacant->person_budget_count }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.vacant.index') }}"
	                           class="btn btn-warning">
	                            Назад
	                        </a>
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

