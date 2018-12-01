<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Adopteros</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Bootstrap -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        
        <!--Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
        
        <!--Bootshape-->
        <link href="/css/bootshape.css" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: bold;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            input,textarea,select,button.btn,a.btn{
                font-weight: bold;
            }
            @media (min-width: 768px){
                .navbar > .container .navbar-brand {
                    margin-left: -30px;
                }
            }
        </style>
    </head>
    <body>
        <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
      
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Adopteros <span class="green"> Arg</span></a>

        </div>
        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                           <!-- <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>-->
                        @else
                        <nav role="navigation" class="collapse navbar-collapse navbar-right">
                            <ul class="navbar-nav nav">
                                <li class="active"><a href="/">Home</a></li>
                                <!--<li class="dropdown">
                                <a data-toggle="dropdown" href="#" class="dropdown-toggle">Dropdown <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Item 1</a></li>
                                    <li class="active"><a href="#">Item 2</a></li>
                                    <li><a href="#">Item 3</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">All Items</a></li>
                                </ul>
                                </li>-->
                                <li><a href="/newDog">Nuevo ingreso</a></li>
                                <li><a href="/newAdopter">Nuevo adoptante</a></li>
                                <li><a href="/allVaccinations">Vacunas</a></li>
                                <li><a href="/allAdopters">Adoptantes</a></li>
                                <li><form class="form-search" method="get" id="s" action="/">
                                
                                <label for="inputZip">Buscador</label>
                                <input type="text" class="form-control" id="inputZip">
                            
                            </form></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            </ul>

                            </nav>
                            
                        @endguest
        
        
      </div>
    </div><!-- End Navigation bar -->

    