<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="css/timeline.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Grupos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Grupo A</a>
                            </li>
                            <li>
                                <a href="#">Grupo B</a>
                            </li>
                            <li>
                                <a href="#">Grupo C</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Grupo {$num}</h1>
                    </div>
                </div>
                <!-- /.row -->
			<!--saddfkj-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h4><!--<a data-toggle="collapse" aria-expanded="true" class="collapsed" href="#col1" style="color:white">Clasificaci&oacute;n</a>-->Clasificaci&oacute;n</h4> 
                        </div>
                        <!-- /.panel-heading -->
                        <!--<div id="col1" class="panel-collapse ollapse" aria-expanded="false">-->
                        <div class="panel">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th><i class="fa fa-slack"></i></th>
                                            <th>Equipos</th>
                                            <th></th>
                                            <th>Pt</th>
                                            <th>Pj</th>
							                <th>Pg</th>
                                            <th>Pe</th>
						 	                <th>Pp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach from=$selecciones item=seleccion}
										<tr>                                                                                                        
                                            <td>{$seleccion->getPos()}</td>                                            
											<td><a style="color: black" href="#" onClick="window.location='index.php?pais={$seleccion->getId()}'">{$seleccion->getName()}</a></td>
                                            <td><img src="{$seleccion->getEscudo()}" alt="-"></td>
											<td>{$seleccion->getPuntos()}</td>                                        
											<td>{$seleccion->getJugados()}</td>                                        
											<td>{$seleccion->getVictorias()}</td>                                        
											<td>{$seleccion->getEmpates()}</td>                                        
											<td>{$seleccion->getDerrotas()}</td>											
										</tr>
										{/foreach}						                            
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->  
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h4><a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#col2" style="color:white">Jornada 1  <span class="fa fa-fw fa-caret-down"></span></a></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div id="col2" class="panel-collapse collapse" aria-expanded="false">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
							                <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        {foreach from=$jornadas item=jornada}
                                        <tr>                                            
                                            <td><img src="{$jornada->getEscudoLocal()}" class="center-block"></td>   
                                            <td style="text-align: center"><a style="color: black" href="#" onClick="window.location='index.php?pais={$jornada->getIdLocal()}'">{$jornada->getLocal()}</a></td>                                                                               
                                            {if $jornada->getResultado()==0}

                                                <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                                <ul class='timeline'>
                                                                {foreach from=$jornada->getHistorico() item=historico}
                                                                    <li>
                                                                        <div class='timeline-badge'>{$historico->getAnio()}</i></div>
                                                                        <div class='timeline-panel'>
                                                                        <div class='timeline-heading'>
                                                                            <h5 class='timeline-title'>{$historico->getCompetition()}</h5>
                                                                            <p><small class='text-muted'><i class='fa fa-clock-o'></i> {$historico->getFecha()}</small></p>
                                                                        </div>
                                                                        <div class='timeline-body'>{$historico->getLocal()} {$historico->getGolL()}-{$historico->getGolV()} {$historico->getVisitante()}</div>
                                                                        </div>
                                                                    </li>
                                                                {/foreach}                                
                                                                </ul>
                                                            </div>" data-toggle="popo">{$jornada->getHora()}:{$jornada->getMinutos()}<br>{$jornada->getFecha()}</a></td>
                                            {/if}
                                            {if $jornada->getResultado()!=0}
                                                <td><div class="panel panel-red">{$jornada->getResultado()}</div></td>      
                                            {/if}                                            
                                            <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdVisitante()}">{$jornada->getVisitante()}</a></td>
                                            <td><img src="{$jornada->getEscudoVisitante()}" class="center-block"></td>                                               
                                        </tr>
                                        {/foreach}                                                  
                                    </tbody>                                
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>             
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h4><a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#col3" style="color:white">Jornada 2  <span class="fa fa-fw fa-caret-down"></span></a></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div id="col3" class="panel-collapse collapse" aria-expanded="false">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        {foreach from=$jornadasB item=jornada}
                                        <tr>                                            
                                            <td><img src="{$jornada->getEscudoLocal()}" class="center-block"></td>   
                                            <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdLocal()}">{$jornada->getLocal()}</a></td>                                                                               
                                            {if $jornada->getResultado()==0}

                                                <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                                <ul class='timeline'>
                                                                {foreach from=$jornada->getHistorico() item=historico}
                                                                    <li>
                                                                        <div class='timeline-badge'>{$historico->getAnio()}</i></div>
                                                                        <div class='timeline-panel'>
                                                                        <div class='timeline-heading'>
                                                                            <h5 class='timeline-title'>{$historico->getCompetition()}</h5>
                                                                            <p><small class='text-muted'><i class='fa fa-clock-o'></i> {$historico->getFecha()}</small></p>
                                                                        </div>
                                                                        <div class='timeline-body'>{$historico->getLocal()} {$historico->getGolL()}-{$historico->getGolV()} {$historico->getVisitante()}</div>
                                                                        </div>
                                                                    </li>
                                                                {/foreach}                                
                                                                </ul>
                                                            </div>" data-toggle="popo">{$jornada->getHora()}:{$jornada->getMinutos()}<br>{$jornada->getFecha()}</a></td>
                                            {/if}
                                            {if $jornada->getResultado()!=0}
                                                <td><div class="panel panel-red">{$jornada->getResultado()}</div></td>      
                                            {/if}                                            
                                            <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdVisitante()}">{$jornada->getVisitante()}</a></td>                                                                                                                                                                                        
                                            <td><img src="{$jornada->getEscudoVisitante()}" class="center-block"></td>                                                                                                                                            
                                        </tr>
                                        {/foreach}                                                  
                                    </tbody>                           
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>             
                <div class="col-lg-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <h4><a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#col4" style="color:white">Jornada 3  <span class="fa fa-fw fa-caret-down"></span></a></h4>
                        </div>
                        <!-- /.panel-heading -->
                        <div id="col4" class="panel-collapse collapse" aria-expanded="false">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>                                        
                                        {foreach from=$jornadasC item=jornada}
                                        <tr>                                            
                                            <td><img src="{$jornada->getEscudoLocal()}" class="center-block"></td>   
                                            <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdLocal()}">{$jornada->getLocal()}</a></td>                                                                               
                                            {if $jornada->getResultado()==0}

                                                <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                                <ul class='timeline'>
                                                                {foreach from=$jornada->getHistorico() item=historico}
                                                                    <li>
                                                                        <div class='timeline-badge'>{$historico->getAnio()}</i></div>
                                                                        <div class='timeline-panel'>
                                                                        <div class='timeline-heading'>
                                                                            <h5 class='timeline-title'>{$historico->getCompetition()}</h5>
                                                                            <p><small class='text-muted'><i class='fa fa-clock-o'></i> {$historico->getFecha()}</small></p>
                                                                        </div>
                                                                        <div class='timeline-body'>{$historico->getLocal()} {$historico->getGolL()}-{$historico->getGolV()} {$historico->getVisitante()}</div>
                                                                        </div>
                                                                    </li>
                                                                {/foreach}                                
                                                                </ul>
                                                            </div>" data-toggle="popo">{$jornada->getHora()}:{$jornada->getMinutos()}<br>{$jornada->getFecha()}</a></td>
                                            {/if}
                                            {if $jornada->getResultado()!=0}
                                                <td><div class="panel panel-red">{$jornada->getResultado()}</div></td>      
                                            {/if}                                            
                                            <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdVisitante()}">{$jornada->getVisitante()}</a></td>                                                                                                                                                           
                                            <td><img src="{$jornada->getEscudoVisitante()}" class="center-block"></td>                                                                                                                                            
                                        </tr>
                                        {/foreach}                                                  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>             
            </div>								
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>    
    <script src="js/grayscale.js"></script>            
</body>

</html>

