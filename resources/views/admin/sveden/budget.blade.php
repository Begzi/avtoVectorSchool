@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Финансово-хозяйственная деятельность</h1>
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
                            @if (isset($budgets) && count($budgets) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($budgets as $budget)

                                            <a href="{{ route('admin.sveden.budget.edit', ['budget' => $budget->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
											<tr>
												<th width="50%" style="background-color: #5F8A96; color: black">Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт бюджетных ассигнований федерального бюджета (тыс. руб.)</th>
												<th width="50%"  style="color: black" itemprop="finBFVolume">{{ $budget->federal_budget }}</th>
											</tr>

											<tr>
												<th style="background-color: #5F8A96; color: black" >Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт бюджетов субъектов Российской Федерации (тыс. руб.)</th>
												<th style="color: black" itemprop="finBRVolume">{{ $budget->subject_budget }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Объём образовательной деятельности, финансовое обеспечение которой осуществляется за счёт местных бюджетов (тыс. руб.)</th>
												<th style="color: black" itemprop="finBMVolume">{{ $budget->local_budget }}</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Объём образовательной деятельности, финансовое обеспечение которой осуществляется по договорам об образовании за счёт средств физических и (или) юридических лиц (тыс. руб.)</th>
												<th style="color: black" itemprop="finPVolume">{{ $budget->person_budget }}</th>
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

