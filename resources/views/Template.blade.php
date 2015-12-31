<html>

<head>
    <title>
        Notre projet

    </title>
    <link rel="stylesheet" href="{{URL:: asset('css/style.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
     <link href= 'https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link href= 'https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css'>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

</head>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('home')}}">ToDoList</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    @if(Auth::check())
                        <li><a href="">Bonjour, {{ Auth::user()->name }}</a></li>
                        <li><a href="auth/logout">Deconnexion</a></li>
                    @else
                    <li class="active"><a href="{{route('connexion')}}">Connexion</a></li>
                    <li><a href="{{route('inscription')}}">Inscription</a></li>
                        @endif
                    @if(Auth::check())
                    <li><a href="{{route('administration')}}">Tache</a></li>
                            <li><a href="{{route('inventaire')}}">Listes des Taches</a></li>
                            <li><a href="{{url('/Apropos')}}">Apropos</a></li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
<body>


@yield('body')

</body>
</html>