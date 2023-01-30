@extends('admin.layouts.layout')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Документы</h1>
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
                            @if (isset($documents) && count($documents) != 0)
                                <div class="table-responsive">
                                    <table class="table">
                                        <!-- <thead> -->
                                        @foreach ($documents as $document)
                                        	<a href="{{ route('admin.sveden.document.edit', ['document' => $document->id]) }}"
                                               class="btn btn-info btn-sm float-left mr-1">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
				                            @for($i = 0; $i < count($arrayNameDocument); $i++)

												<tr>
													<th width="50%" style="background-color: #5F8A96; color: black">{{ $arrayNameLabel[$i] }}</th>
													<th width="50%" style="color: black" itemprop="ustavDocLink"> 
														{!! $document->getFileName($document[$arrayNameDocument[$i]]) !!}
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

