<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <!-- Fonts -->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>
    <style type="text/css">
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }
        main {
            flex: 1 0 auto;
        }
    </style>
        <body>
    <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>

        <header>
            <nav>
                <div class="container">
                    <div class="nav-wrapper">
                        <style class="brand-logo">Materialize</style>
                        <ul class="right side-nav" id="nav-mobile">
                            <li class="hide-on-small-only"><a href="parallax.html"><i class="mdi-navigation-arrow-back"></i></a></li>
                        </ul>
                        <a class="button-collapse" href="#" data-activates='nav-mobile'><i class="mdi-navigation-menu"></i></a>
                    </div>
                </div>
            </nav>
        </header>
        <main>
            <div class="container content col s6">
                    <form class="col s6" method="post" action="login">
                        <div class="input-field col s6">
                            <input type="text" id="webmail" name="webmail" class="validate">
                            <label for="webmail">Webmail ID</label>
                        </div>
                        <div class="input-field col s6">
                            <input type="password" id="password" name="password" class="validate">
                            <label for="password " >password</label>
                        </div>

                        <div>
                            <label for="course" >Course</label>
                            <select class="browser-default" id="course" name="course" >
                                <option value="undergraduates" selected>Undergraduates</option>
                                <option value="masters">Masters</option>
                                <option value="phd">PhD</option>
                            </select>
                        </div>
                        <br>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                             <i class="material-icons right">send</i>
                        </button>
                        <div>
                            <ul>
                                <li>* Only for Graduating Students </li>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>* {{ $error }}</li>
                                        @endforeach
                                </div>
                            @endif
                            </ul>
                        </div>
                    </form>
                </div>

        </main>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                    </div>
                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>


{{--<label for="password" data-error= @if (count($errors) > 0)--}}
        {{--<ul>--}}
    {{--@foreach ($errors->all() as $error)--}}
        {{--<li> {{$error}} </li>--}}
        {{--@endforeach--}}
        {{--</ul>--}}
        {{--@endif--}}
        {{-->Password</label>--}}