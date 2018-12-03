<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Syllabus')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Bubble.css')); ?>" rel="stylesheet">

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
        @import  url('https://fonts.googleapis.com/css?family=Roboto');

        body{
            font-family: 'Roboto', sans-serif;
        }

        * {
            font-family: 'Roboto', sans-serif;
        }

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

        .exportB{
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

        .SyllabusLink {
            color: black;
        }

        .DRow .col-3 {
            margin-left: 0px;

        }

        .myPlan {
            border-radius: 25px;
            border: #E5E5E5 1px solid;
            padding: 10px;
            height: 100%;
            width: 350px;
            box-shadow: -2px 2px #AFAFAF;
        }

        .exit {
            position: fixed;
            margin: -20px;
            background-color: #e7dad9;
            padding: 10px;
            border-radius: 50%;
            width: 35px;
            height: 35px;
        }

        .chat {
            position: fixed;
            bottom: 10px;
            right: 40px;
            height: 500px;
            width: 300px;
            overflow: hidden;
            border-radius: 2%;
            border: #e7dad9 1px solid;
            background-color: transparent;
        }

        .chat-header {
            background-color: #ed7d31;
            text-align: center;
            height: 10%;
            width: available;
            align-content: center;
            color: white;
        }

        .chat-message  {
            background-color: white;
            align-content: left;
            position: relative;
            width: 60%;
            height: 40px;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 30px;
            border-radius: 25px;
            padding-left: 20px;
        }

        .chat-content {
            background-color: #ffffff;
            width: available;
            max-width: 315px;
            height: 80%;
            overflow-x: hidden;
            overflow-y: scroll;
            padding-top: 10px;
        }

        .chat-toolbar {
            background-color: #e7dad9;
            height: 10%;
            align-content: center;
            text-align: center;
        }

        .toolbar{
            align-content: center;
            text-align: center;
            width: 80%;
        }

        #textSend{
            width: 100%;
            margin-left: 20px;
        }

        #chat-show {
            position: fixed;
            bottom: 10px;
            right: 40px;
            height: 80px;
            width: 80px;
            overflow: hidden;
            border-radius: 50%;
            background-color: #e7dad9;
            padding: 10px;
        }

        .clickable {
            cursor: pointer;
        }


        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }
        .avatar {
            width: 200px;
            height:200px;
            border-radius: 50%;
        }

        /* The Modal (background) */
        .modal {
            display:none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        #info {
            overflow-y: scroll;
            overflow-x: scroll;
            position: relative;
            height: 400px;

        }

        /* Modal Content Box */
        .modal-content {
            background-color: #ed7d31;
            margin: 4% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
            height: 80%;
            padding-bottom: 30px;
            color: white;
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }
        .close:hover,.close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            animation: zoom 0.6s
        }
        @keyframes  zoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        .noA{
            color: black;
        }

        .noA-white{
            color: white;
        }

        #nameLogo {
            position: absolute;
            right: 10px;
            top: 20px;
            width: 900px;
        }


    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div style="margin-left: 20px; margin-right: 20px">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                    <img src="<?php echo e(asset('img/anahuac.png')); ?>" width="180px" height="40px">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>
                </div>

            </div>
            <?php if(isset($nameMapa)): ?>
                <div id="nameLogo" class="row" style="text-align: right; align-content: right">
                    <div class="col"></div>
                    <div class="col">
                        <h4 style="color: #626262"><?php echo e($nameMapa); ?></h4>
                    </div>
                </div>
            <?php endif; ?>
        </nav>


        <?php if(Request::url() != route('login') && Request::url() != route('logout')): ?>

            <div class="SyllabusNav row">
                <?php if(Request::url() != route('dashboard')): ?>
                    <div class="col">
                        <h4><a>2010</a></h4>
                    </div>

                    <div class="col">
                        <h4><a>2011</a></h4>
                    </div>

                    <div class="col">
                        <h4><a>2012</a></h4>
                    </div>
                <?php else: ?>
                    <div class="col" style="border: none;">
                    </div>

                    <div class="col" style="border: none;">
                    </div>

                    <div class="col" style="border: none;">
                    </div>
                <?php endif; ?>

                <div class="col-8">
                    <div style="padding-right: 30px">
                        <?php if(auth()->guard()->guest()): ?>
                        <?php else: ?>
                            <?php echo e(Auth::user()->name); ?>

                        <?php endif; ?>

                        <img id="logoutB" class="logoutButton" src="<?php echo e(asset('img/logout.png')); ?>" width="20px" height="20px">

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </div>
                </div>

            </div>

        <?php endif; ?>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
