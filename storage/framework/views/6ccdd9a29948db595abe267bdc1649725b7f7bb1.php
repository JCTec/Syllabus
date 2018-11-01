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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/Sidebar.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

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

            /*$("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });*/

        });
    </script>

    <style>
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
            color: black;
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
            background-color: #fd7203;
            height: 50px;
            border-left: 1px solid #D5D5D5;
        }

        .subRow {
            background-color: white;
            height: 50px;
            border-left: 1px solid #D5D5D5;

        }

        .sec{
            border-right: 1px solid #D5D5D5;
        }

        #syllabusTable tr td{
            border-right:1px solid #d5d5d5;
            border-bottom:1px solid #D5D5D5;
        }

        #syllabusTable {
            background: #fff none repeat scroll 0 0;
            border-left: 1px solid #D5D5D5;
            border-top: 1px solid #D5D5D5;
            height: 100%;
            width: 100%;
            table-layout: fixed;
        }

        .competenceS{

        }
    </style>
</head>
<body>
<div id="app">

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <!--<img src="<?php echo e(asset('img/anahuac.png')); ?>" width="30%" height="30%">--> <h3>Universidad Anáhuac Mayab</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Administrador de Competencias</p>
                
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content" style="background-color: #E7E5E6">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info" style="background-color: #fd8023; border-color: #fd8023;">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">

                            <li class="nav-item">
                                <a class="nav-link"> <?php echo e(Auth::user()->name); ?> </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><?php echo e(_('Cerrar Sesión')); ?></a>
                            </li>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Main Content -->

            <main class="py-4">
                <?php echo $__env->yieldContent('content'); ?>
            </main>

            <!------------------>
        </div>
    </div>


</div>
</body>
</html>
