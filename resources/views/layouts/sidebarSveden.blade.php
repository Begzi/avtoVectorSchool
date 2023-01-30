<div class="sidebar">


    <div class="widget">
        <h2 class="widget-title">Сведения</h2>
        <div class="link-widget">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.common') }}">Основные сведения<span>({{ 10 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.struct') }}">Структура и органы управления образовательной организацией<span>({{ 7 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.document') }}">Документы<span>({{ 12 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.education') }}">Образование<span>({{ 5 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.eduStandarts') }}">Образовательные стандарты и требования</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.employees') }}">Руководство. Педагогический (научно-педагогический) состав<span>({{ 5 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.objects') }}">Материально-техническое обеспечение и оснащенность образовательного процесса<span>({{ 5 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.grants') }}">Стипендии и меры поддержки обучающихся<span>({{ 5 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.paidEdu') }}">Платные образовательные услуги<span>({{ 5 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.budget') }}">Финансово-хозяйственная деятельность<span>({{ 5 }})</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sveden.vacant') }}">Вакантные места для приема (перевода) обучающихся<span>({{ 5 }})</span></a>
                </li>
            </ul>
            <ul>
                @if(isset($cats))
                    @foreach($cats as $cat)
                        <li><a href="{{ route('tags.single', ['slug' => $cat->slug]) }}">{{ $cat->title }} <span>({{ $cat->posts_count }})</span></a></li>
                    @endforeach
                @endif
            </ul>
        </div><!-- end link-widget -->
    </div><!-- end widget -->
</div><!-- end sidebar -->
