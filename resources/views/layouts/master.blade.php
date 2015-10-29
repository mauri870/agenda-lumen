<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Agenda</title>

    <!-- Bootstrap -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">


    {{--Custom--}}
    <link href="{{ url('css/custom.min.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}"><i class="fa fa-tty"></i> Agenda</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <form class="navbar-form navbar-left" role="search" action="{{ route('home.search') }}" method="post">
                    <div class="form-group">
                        <input type="text" name="pesquisa" class="form-control" placeholder="Pesquisar contato">
                    </div>
                    <button  class="btn btn-default">Buscar</button>
                </form>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="container">
    {{-- Letters --}}
    <div class="row text-center">
        <div class="col-md-12">
            <ul class="list-inline">
                <li>
                    @foreach($letters as $char)
                        <a href="{{ route('home.letter',['letter'=>$char]) }}">
                            <button class="btn btn-primary btn-xs">{{ $char }}</button>
                        </a>
                    @endforeach
                </li>
            </ul>
        </div>
    </div>
    <div class="row text-left">
        <div class="col-md-12">
            <a href="{{ route('home.create.person') }}">
                <button class="btn btn-primary">
                    <i class="fa fa-plus"></i> Novo Contato
                </button>
            </a>
        </div>
    </div>
    <br>

    {{-- Body --}}
    @yield('content')
</div>
<!-- /container -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ url('js/scripts.js') }}"></script>
</body>
</html>