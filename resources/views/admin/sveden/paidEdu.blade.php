@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Платные образовательные услуги</h1>
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
                            @if (isset($paidEdus) && count($paidEdus) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach($paidEdus as $paidEdu)
	                                        <div class="container-fluid">
	                                        	<div class="row" >
		                                            <a href="{{ route('admin.sveden.paidEdu.edit', ['paidEdu' => $paidEdu->id]) }}"
		                                               class="btn btn-info btn-sm float-left mr-1">
		                                                <i class="fas fa-pencil-alt"></i>
		                                            </a>
		                                        </div>
	                                        	<div class="text" itemprop="eduFedDoc">
													{!! $paidEdu->text  !!}
		                                        </div>

                                            <div class="row" >
                                                <a href="{{ route('admin.sveden.document.edit.for.paidEdu', ['document' => $document->id]) }}"
                                                   class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                            </div>
											<tr>
												<th width="50%" style="background-color: #5F8A96; color: black" >Документ о порядке оказания платных образовательных услуг</th>
												<th width="50%"  style="color: black" itemprop="paidEduDocLink">
													{!! $document->getFileName($document->paidEduDocLink) !!}
                                    			</th>
											</tr>
											<tr>
												<th style="background-color: #5F8A96; color: black" >Образец договора об оказании платных образовательных услуг</th>
												<th style="color: black" itemprop="paidEduDogDocLink">
													{!! $document->getFileName($document->paidEduDogDocLink) !!}
                                    			</th>
											<tr>
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

