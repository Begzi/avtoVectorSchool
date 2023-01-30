<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas $metaTags['keywords'] $metaTags['title'] $metaTags['description'] -->
    <meta name="keywords" content="Улан-Удэ, Автошкола, Вектор">
    <meta name="title" content="Вектор - Автошкола в Улан-Удэ">
    <meta name="description" content="Вектор - Автошкола в Улан-Удэ, отвечающий всем требованиям образовательной организации. Обучим качественно, быстро и правильно!">
    <meta name="author" content="Echis">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet"> 
	<link rel="stylesheet" href="{{ asset('assets/front/css/front.css') }}">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->

</head>
<body>

    <div id="wrapper">
        
        @include('layouts.navbar')

        @if(isset($main))
            @yield('header')
        @endif

        <section class="section lb">
            <div class="container">
                <div class="row">
                    @if(isset($sveden))
                        <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                            @yield('content')
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                            @include('layouts.sidebarSveden')
                        </div>
                    @else
                        <div class="container-fluid">
                            @yield('content')
                        </div>
                    @endif
                   
                  
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <footer class="footer">
            <div class="container">

                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <br>
                        <div class="copyright">&copy; Markedia. Design: <a href="http://html.design">HTML Design</a>.</div>
                        <div><a href="https://ru.freepik.com/free-photo/portrait-beautiful-young-asian-business-woman-with-car-key-on-yellow-background_13001595.htm">Изображение от lifeforstock</a> на Freepik</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->
<script src="{{ asset('assets/front/js/front.js') }}"></script>

</body>
</html>