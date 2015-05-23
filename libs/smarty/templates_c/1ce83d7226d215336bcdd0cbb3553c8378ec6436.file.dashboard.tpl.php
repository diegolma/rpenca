<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 05:28:00
         compiled from "vistas\dashboard.tpl" */ ?>
<?php /*%%SmartyHeaderCode:289855543b458ad140-15910821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ce83d7226d215336bcdd0cbb3553c8378ec6436' => 
    array (
      0 => 'vistas\\dashboard.tpl',
      1 => 1432265276,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289855543b458ad140-15910821',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55543b4591a751_66076781',
  'variables' => 
  array (
    'vista' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55543b4591a751_66076781')) {function content_55543b4591a751_66076781($_smarty_tpl) {?><!DOCTYPE html>
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
    <?php if ($_smarty_tpl->tpl_vars['vista']->value=='info_grupo.tpl') {?>
    <link rel="stylesheet" type="text/css" href="css/timeline.css">
    <?php }?>
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">

    <!-- Morris Charts CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="js/cosas.js"><?php echo '</script'; ?>
>

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
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
                <a class="navbar-brand" href="dashboard.php">Penca - Tu Cuenta</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getName();?>
 <b class="caret"></b></a>
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
                        <a href="http://localhost/penca/trunk/dashboard.php?v=perfil_usr"><i class="fa fa-fw fa-user"></i> Mi Perfil </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-users"></i> Grupos <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="http://localhost/penca/trunk/dashboard.php?v=info_grupo&group=1">Grupo 1</a>
                            </li>
                            <li>
                                <a href="http://localhost/penca/trunk/dashboard.php?v=info_grupo&group=2">Grupo 2</a>
                            </li>
                            <li>
                                <a href="http://localhost/penca/trunk/dashboard.php?v=info_grupo&group=3">Grupo 3</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['vista']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['vista']->value=='perfil_usr') {?>
    <!-- Morris Charts JavaScript -->
    <?php echo '<script'; ?>
 src="js/plugins/morris/raphael.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/plugins/morris/morris-data.js"><?php echo '</script'; ?>
>
    <?php }?>
    <?php echo '<script'; ?>
 type="text/javascript" src="libs/DataTables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/dataTables.bootstrap.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/grayscale.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }} ?>
