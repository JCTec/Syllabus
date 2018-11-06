<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Syllabus') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });

            $('#logoutB').on('click', function () {
                $('#logout-form').submit();
            });

            /*$("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });*/

        });
    </script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');

        .buttonIC {
            border-radius: 15px;
            background-color: #0069D7;
            height: 40px;
            width: 100px;
            border-color: #0069D7;
            border-style: solid;
            color: white;
            cursor: pointer;
            float: right;
        }

        .buttonIC:hover {
            background-color: #005ebb;
            border-color: #005ebb;

        }

        .competenciaLabel {
            background-color: white;
            text-align: center;
            align-content: center;
        }

        .competenciaLabel label {
            font-size: 15px;
            display: block;
            text-align: center;
            align-content: center;
            width: 100%;
            height: 100%;
            padding-top: 20px;
            padding-bottom: 20px;

        }

        .rowCompetencia {
            background-color: #F2F2F2;
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 20px;
        }

        .competencia {
            background-color: white;
            width: 90%;
            height: 60px;
            display: flex;
            border-radius: 20px;
            text-align: center;
            align-content: center;
            vertical-align: middle;
            margin-top: 20px;
            margin-bottom: 20px;

        }


        .competencia h6 {
            color: #ed7d31;
            padding-left: 10%;
            display: flex;
            width: 100%;
            height: 100%;
            text-align: center;
            align-content: center;
            vertical-align: middle;
            align-items: center;

        }

        .mainRow {
            margin-top: 20px;
            background-color: #ed7d31;
            height: 50px;
            color: white;
            text-align: center;
            border-left: none;
        }

        .subRow {
            background-color: white;
            height: 50px;
            border-left: 1px solid #D5D5D5;

        }

        .sec{
            border-right: 1px solid #D5D5D5;
        }

        #syllabusTable tr:first-child td {
            border-radius: 0;
            font-family: 'Roboto Condensed' SansSerif;
            border: none;
        }


        #syllabusTable tr td{
            height: 20px;
            border-radius: 10%;
            overflow: hidden;
            white-space: nowrap;
            font-family: 'Roboto' SansSerif;
            border: 1px #e3e3e3 solid;

        }


        #syllabusTable {
            margin-top: 30px;
            background: #fff none repeat scroll 0 0;
            height: 100%;
            width: 100%;
            table-layout: fixed;
            border: 1px #c1c1c1 solid;
        }


        .SyllabusNav {
            width: 102%;
            height: 30px;
            background-color: #ed7d31;
        }

        .SyllabusNav .col {
            color: white;
            border-right: 1px solid white;
            text-align: center;
        }

        .SyllabusNav .col-8 {
            color: white;
            text-align: right;
        }

        .SyllabusNav .col-8 a {
            color: white;
        }

        .SyllabusNav .col h4{
            color: white;
            font-family: "Helvetica Neue Light", "HelveticaNeue-Light", "Helvetica Neue", Calibri, Helvetica, Arial, sans-serif;
            cursor: pointer;
        }

        .box {
            margin-top: 20px;
            width: 100%;
            height: 30px;
            background-color: #ed7d31;
            border-radius: 20px;
        }

        .table .row .col {
            text-align: center;
        }

        .logoutButton {
            filter: brightness(1);
            cursor: pointer;
        }

        .logoutButton:hover {
            filter: brightness(0.8);
        }

        .editB {
            cursor: pointer;
        }

        .chat {
            height: 100%;
            width: 100%;
            background-color: #1b1e21;
        }

        .chatBubble {
            z-index: 10;
            bottom: 30px;
            float: right;
            position: relative;
            left: -42%; /* or right 50% */
            text-align: left;
        }

    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{asset('img/anahuac.png')}}" width="30px" height="30px">
                    {{ config('app.name', 'Syllabus') }}
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item">

                                @if(isset($nameMapa))

                                    {{$nameMapa}}

                                @endif

                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @if(Request::url() != route('login') && Request::url() != route('logout') && Request::url() != route('register'))

            <div class="SyllabusNav row">
                <div class="col">
                    <h4><a>2010</a></h4>
                </div>

                <div class="col">
                    <h4><a>2011</a></h4>
                </div>

                <div class="col">
                    <h4><a>2012</a></h4>
                </div>

                <div class="col-8">
                    {{Auth::user()->name}}

                    <img id="logoutB" class="logoutButton" src="{{asset('img/logout.png')}}" width="20px" height="20px">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

            </div>

        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
