@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Редактирование Финансово-хозяйственная деятельность</h1>
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

                        <form role="form" method="post" action="{{ route('admin.sveden.budget.update', ['budget' => $budget->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="federal_budget">Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт бюджетных ассигнований федерального бюджета (тыс. руб.)<font color="f33810">*</font></label>
                                    <input type="text" name="federal_budget"
                                           class="form-control @error('federal_budget') is-invalid @enderror" id="federal_budget"
                                           value="{{ $budget->federal_budget }}">
                                </div>
                                <div class="form-group">
                                    <label for="subject_budget">Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт бюджетов субъектов Российской Федерации (тыс. руб.)<font color="f33810">*</font></label>
                                    <input type="text" name="subject_budget"
                                           class="form-control @error('subject_budget') is-invalid @enderror" id="subject_budget"
                                           value="{{ $budget->subject_budget }}">
                                </div>
                                <div class="form-group">
                                    <label for="local_budget">Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт местных бюджетов (тыс. руб.)<font color="f33810">*</font></label>
                                    <input type="text" name="local_budget"
                                           class="form-control @error('local_budget') is-invalid @enderror" id="local_budget"
                                           value="{{ $budget->local_budget }}">
                                </div>
                                <div class="form-group">
                                    <label for="person_budget">Объём образовательной деятельности, финансовое обеспечение которой осуществляется по договорам об образовании за счёт средств физических и (или) юридических лиц (тыс. руб.)<font color="f33810">*</font></label>
                                    <input type="text" name="person_budget"
                                           class="form-control @error('person_budget') is-invalid @enderror" id="person_budget"
                                           value="{{ $budget->person_budget }}">
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>

                        
                        <div class="card-footer">
	                        <a href="{{ route('admin.sveden.budget.index') }}"
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

