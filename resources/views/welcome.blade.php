@extends('layouts.layout')

@section('header')

    <section id="cta" class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 align-self-center">
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="newsletter-widget text-center align-self-center">
                        <h3>Оставьте заявку!</h3>
                        <p>Можете оставить, номер телефона, либо почту. Мы свяжемся с вами</p>
                        <form class="form-inline" method="post" action="{{ route('home.storage') }}">
                            @csrf
                            @method('POST')
                            <input type="text" name="text" placeholder="Add your email here.." required class="form-control" />

                            <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>         
                    </div><!-- end newsletter -->
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
        <div class='container-fluid'>
            @if ($main->tagline != 'Пусто')
                <div class="page-wrapper">
                    <div class="blog-custom-build">
                        <div class="text">
                            <h2>{{ $main->tagline }} </h2>                          
                        </div>
                    </div>                  
                </div>
            @endif
            <div class="row">
                <div class="col-lg-4 col-md-12">
                    <div class="newsletter-widget text-center align-self-center">
                        <img style="height: 125px" src="/assets/front/images/theory.png" alt="">
                        <h3>Теория</h3>
                        <p>Разберём правила дорожного движения, правила первой помощи и многое другое</p>     
                    </div><!-- end newsletter -->
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="newsletter-widget text-center align-self-center">
                        <img style="height: 125px" src="/assets/front/images/car.jpeg" alt="">
                        <h3>Практика</h3>
                        <p>Научим вас безопасно и эффективно передвигаться на автомабилях</p>     
                    </div><!-- end newsletter -->
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="newsletter-widget text-center align-self-center">
                        <img style="height: 150px" src="/assets/front/images/exam.jpg" alt="">
                        <h3>Экзамены</h3>
                        <p>Экзамен будут максимально похожи на экзамен в ГАИ</p>     
                    </div><!-- end newsletter -->
                </div>
            </div>
            
            @if ($main->text != '<p>Пусто</p>')
                <div class="page-wrapper">
                    <div class="blog-custom-build">
                        <div class="text">
                            {!! $main->text !!}                            
                        </div>
                    </div>                  
                </div>
            @endif
            <div class="page-wrapper">
                <div class="blog-custom-build">
                    <h2>Наши контакты:</h2>
                    <p style="color: black" itemprop='school_name'><strong>Автошкола "ВЕКТОР"</strong></p>
                    <p style="color: black" itemprop='address'>{{ $common->address }}</p>
                    <p style="color: black" itemprop='phone'><b>{{ $common->phone }}</b></p>
                </div>
            </div>
        </div>
    

    <hr class="invis">


@endsection
