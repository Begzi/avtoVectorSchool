@extends('layouts.layout')


@section('content')
    <div class="page-wrapper">
        <div class="blog-custom-build">        	
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.common') }}">Основные сведения</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.struct') }}">Структура и органы управления образовательной организацией</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.document') }}">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.education') }}">Образование</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.eduStandarts') }}">Образовательные стандарты и требования</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.employees') }}">Руководство. Педагогический (научно-педагогический) состав</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.objects') }}">Материально-техническое обеспечение и оснащенность образовательного процесса</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.grants') }}">Стипендии и меры поддержки обучающихся</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.paidEdu') }}">Платные образовательные услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.budget') }}">Финансово-хозяйственная деятельность</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.vacant') }}">Вакантные места для приема (перевода) обучающихся</a>
                </li>
            </ul>
        </div>
    </div>

	    <hr class="invis">


@endsection
