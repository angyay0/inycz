<html lang="es">
    <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inmobiliaria YCZ - @yield('title')</title>
        {!! HTML::script('js/jquery-1.11.3.min.js') !!}
        {!! HTML::script('js/bootstrap.js') !!}
        {!! HTML::script('js/script.js') !!}
        {!! HTML::style('css/bootstrap.css') !!}
        {!! HTML::style('css/style.css') !!}

        <!-- Fonts -->
	      <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	      <!--[if lt IE 9]>
		        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	      <![endif]-->
    </head>
    <body>
        @section('header')
            <div id="header" class="page-header">
              <div class="row">
                <div class="col-lg-4">
                  <img src="img/ycz.png" alt="YCZ" class="img-rounded img-responsive center-block" width="80%" height="80%">
                </div>
                <div class="col-lg-4">
                </div>
                <div class="col-lg-4">
                  <ul class="nav nav-pills text-bottom">
                    <li role="presentation"><a href="#">Ofertas</a></li>
                    <li role="presentation"><a href="#">Galeria</a></li>
                    <li role="presentation"><a href="#">Contacto</a></li>
                    <li role="presentation"><a href="#">Aviso de Privacidad</a></li>
                  </ul>
                </div>
              </div>
            </div>
        @show

        <div id="content" class="container-fluid">
            @yield('content')
        </div>
    </body>
</html>
