<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{ config('app.name', 'Laravel') }} | @yield('titulo')</title>
    @if(!(boolean) $__env->yieldContent('ignorecss'))
        <link href="/inspinia/css/bootstrap.min.css" rel="stylesheet">
        <link href="/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="/inspinia/css/plugins/iCheck/custom.css" rel="stylesheet">

        <!-- Toastr style -->
        <link href="/inspinia/css/plugins/toastr/toastr.min.css" rel="stylesheet">

        <!-- Gritter -->
        <link href="/inspinia/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

        <link href="/inspinia/css/animate.css" rel="stylesheet">

        <!-- Select2 -->
        <link href="/inspinia/css/plugins/select2/select2.min.css" rel="stylesheet">

        <link href="/inspinia/css/style.css" rel="stylesheet">
    @else
        @yield('css')
    @endif
</head>

<body class="fixed-sidebar no-skin-config full-height-layout pace-done">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <a href="{{ route('view', 'painel') }}"><img alt="image" class="img-circle" src="/inspinia/img/profile_small.jpg" /></a>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs"><strong class="font-bold">José da Silva</strong></span>
                                    <span class="text-muted text-xs block">Aluno <b class="caret"></b></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInDown m-t-xs">
                                <li><a href="#">Perfil</a></li>
                                <li><a href="#">Configurações</a></li>
                                <li><a href="#">Mensagens</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Sair</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href=""><i class="fa fa-university"></i> <span class="nav-label">Ambiente virtual</span></a></li>
                    <li><a href=""><i class="fa fa-pie-chart"></i> <span class="nav-label">Avaliação institucional</span></a></li>
                    <li><a href=""><i class="fa fa-book"></i> <span class="nav-label">Biblioteca</span></a></li>
                    <li><a href="{{ route('view', 'financeiro') }}"><i class="fa fa-calculator"></i> <span class="nav-label">Finaceiro</span></a></li>
                    <li><a href="{{ route('view', 'frequenciasnotas') }}"><i class="fa fa-line-chart"></i> <span class="nav-label">Frequências e notas</span></a></li>
                    <li><a href="{{ route('view', 'gradehorario') }}"><i class="fa fa-calendar"></i> <span class="nav-label">Grade de horários</span></a></li>
                    <li><a href="{{ route('view', 'historico') }}"><i class="fa fa-history"></i> <span class="nav-label">Histórico</span></a></li>
                    <li><a href=""><i class="fa fa-pencil"></i> <span class="nav-label">Matrícula</span></a></li>
                    <li><a href=""><i class="fa fa-envelope"></i> <span class="nkraav-label">Mensagens</span></a></li>
                    <li><a href=""><i class="fa fa-thumb-tack"></i> <span class="nav-label">Mural</span></a></li>
                    <li><a href=""><i class="fa fa-file-text-o"></i> <span class="nav-label">Protocolo</span></a></li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
               <!--  <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div> -->
            </form>
        </div>
        </nav>
        </div>
            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
        </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="/inspinia/js/jquery-3.1.1.min.js"></script>
    <script src="/inspinia/js/bootstrap.min.js"></script>
    <script src="/inspinia/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/inspinia/js/inspinia.js"></script>
    <script src="/inspinia/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/inspinia/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Select2 -->
    <script src="/inspinia/js/plugins/select2/select2.full.min.js"></script>

    <!-- iCheck -->
    <script src="/inspinia/js/plugins/iCheck/icheck.min.js"></script>

    <!-- FullCalendar -->
    <script src="/inspinia/js/plugins/fullcalendar/moment.min.js"></script>
    <script src="/inspinia/js/plugins/fullcalendar/fullcalendar.min.js"></script>

    @yield('js')
</body>
</html>
