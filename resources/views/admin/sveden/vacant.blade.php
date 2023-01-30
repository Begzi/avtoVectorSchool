@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Вакантные места для приёма (перевода) обучающихся</h1>
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
                            @if (isset($vacants) && count($vacants) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($vacants as $vacant)

                                            <a href="{{ route('admin.sveden.vacant.edit', ['vacant' => $vacant->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
											<tr>
												<th width="50%" style="background-color: #5F8A96; color: black">Количество вакантных мест для приёма (перевода) на места финансируемые за счёт бюджетных ассигнований федерального бюджета</th>
												<th width="50%"  style="color: black" itemprop="numberBFVacant">{{ $vacant->federal_budget_count }}</th>
											</tr>

											<tr>
												<th style="background-color: #5F8A96; color: black" >Количество вакантных мест для приёма (перевода) на места финансируемые за счёт бюджетов субъектов Российской Федерации</th>
												<th style="color: black" itemprop="numberBRVacant">{{ $vacant->subject_budget_count }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Количество вакантных мест для приёма (перевода) на места финансируемые за счёт местных бюджетов</th>
												<th style="color: black" itemprop="numberBMVacant">{{ $vacant->local_budget_count }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Количество вакантных мест для приёма (перевода) на места финансируемые за счёт по договорам об образовании и за счёт средств физических и (или) юридических лиц</th>
												<th style="color: black" itemprop="numberPVacant">{{ $vacant->person_budget_count }}</th>
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

