@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div>	
        	<br><br><h3>Платные образовательные услуги</h3>
				<table class="table"><caption></caption>
                    <div class="container-fluid">
                    	<div class="text" itemprop="eduFedDoc">
							{!! $paidEdu->text  !!}
                        </div>
                       	<br>
                       	<hr>
						<tr>
							<th width="50%" style="background-color: #5F8A96; color: black" >Документ о порядке оказания платных образовательных услуг</th>
							<th width="50%"  style="color: black" itemprop="paidEdu">
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
				</table>
        </div>
    </div>

	    <hr class="invis">


@endsection
