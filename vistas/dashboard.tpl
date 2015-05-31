<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>La Penca - Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    {if $vista=='info_grupo.tpl'}
    <link rel="stylesheet" type="text/css" href="css/timeline.css">
    {/if}
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    
    <script src="js/cosas.js"></script>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--El favicon-->
    <link rel="icon" type="image/png" href="favicon.png">


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">La Penca</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {$usuario->getName()} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="http://localhost/penca/trunk/dashboard.php?v=perfil_usr"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" onclick="window.location='index.php?cerrar=1'"><i class="fa fa-fw fa-power-off"></i> Cerrar Sesi&oacute;n</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="dashboard.php?"><i class="fa fa-fw fa-dashboard"></i> Principal </a>
                    </li>
                    <li>
<<<<<<< .mine
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Grupos <i class="fa fa-fw fa-caret-down"></i></a>
=======
                        <a href="dashboard.php?v=perfil_usr"><i class="fa fa-fw fa-user"></i> Mi Perfil </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Grupos <i class="fa fa-fw fa-caret-down"></i></a>
>>>>>>> .r41
                        <ul id="demo" class="collapse">
                            <li>
<<<<<<< .mine
                                <a href="#" role="button" onClick="window.location='index.php?grupo=1" >Grupo 1</a>
=======
                                <a href="http://localhost/penca/trunk/dashboard.php?v=info_grupo&group=1">Grupo 1</a>
>>>>>>> .r41
                            </li>
                            <li>
<<<<<<< .mine
                                <a href="#" role="button" onClick="window.location='index.php?grupo=2" >Grupo 2</a>
=======
                                <a href="http://localhost/penca/trunk/dashboard.php?v=info_grupo&group=2">Grupo 2</a>
>>>>>>> .r41
                            </li>
                            <li>
<<<<<<< .mine
                                <a href="#" role="button" onClick="window.location='index.php?grupo=3" >Grupo 3</a>
=======
                                <a href="http://localhost/penca/trunk/dashboard.php?v=info_grupo&group=3">Grupo 3</a>
>>>>>>> .r41
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="dashboard.php?v=partidos"><i class="fa fa-fw fa-futbol-o"></i> Todos los Partidos </a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            {include file=$vista}
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    {if $vista=='perfil_usr'}
    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    {/if}
    <script type="text/javascript" src="libs/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
    <script src="js/grayscale.js"></script>

</body>

</html>
