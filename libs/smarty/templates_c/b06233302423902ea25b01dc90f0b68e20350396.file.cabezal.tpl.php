<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 21:14:02
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23033552f4f0abbf968-91667909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b06233302423902ea25b01dc90f0b68e20350396' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1429211635,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23033552f4f0abbf968-91667909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552f4f0ac119f2_85813561',
  'variables' => 
  array (
    'proyecto' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552f4f0ac119f2_85813561')) {function content_552f4f0ac119f2_85813561($_smarty_tpl) {?><!--<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Cerrar Sesión</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="index.php">
            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar..." value='<?php echo $_smarty_tpl->tpl_vars['buscar']->value;?>
'>
            <input type="submit" value="Buscar" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </nav>-->

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="logo.png" alt="PENCA COPA AMERICA 2015">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                      <a href="#page-top"></a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#about">Juego</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#download">Info de la copa</a>
                    </li>
                    <li>
                      <a class="page-scroll" href="#contact">Caca</a>
                    </li>
                    <li>                    
                      <a class="page-scroll" href="">Ingresar</a>
                    </li>
                    <li>                    
                      <a class="page-scroll" href="">Registrarse</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php }} ?>
