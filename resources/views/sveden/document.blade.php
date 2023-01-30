@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Документы</h3>
                <table class="table">

                    @foreach ($documents as $document)
                        @for($i = 0; $i < count($arrayNameDocument); $i++)

							<tr>
								<th width="50%" style="background-color: #5F8A96; color: black">{{ $arrayNameLabel[$i] }}</th>
								<th width="50%" style="color: black" itemprop="{{$arrayNameDocument[$i]}}"> 
									{!! $document->getFileName($document[$arrayNameDocument[$i]]) !!}
                    			</th>
							</tr>
                        @endfor
                    @endforeach
                </table>
        </div>
    </div>

	    <hr class="invis">


@endsection
