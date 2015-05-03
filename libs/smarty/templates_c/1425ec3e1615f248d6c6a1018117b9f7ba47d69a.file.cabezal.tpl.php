<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-03 01:03:34
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:503355384450b51a41-73241465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1425ec3e1615f248d6c6a1018117b9f7ba47d69a' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1430607812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '503355384450b51a41-73241465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55384450b8c3c3_34269931',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55384450b8c3c3_34269931')) {function content_55384450b8c3c3_34269931($_smarty_tpl) {?><nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="page-scroll" href="#page-top">
                    <img src="imgs/logo.png" alt="PENCA COPA AMERICA 2015">
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
                      <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                    <li>                    
                      <a class="page-scroll" data-toggle="modal" href="vistas/usuarios_login.tpl" data-target="#myModal">Ingresar</a>
                    </li>
                    <li>                    
                      <a class="page-scroll" data-toggle="modal" href="vistas/usuarios_registro.tpl" data-target="#registro">Registrarse</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>        
    <div id="myModal" class="modal fade" >
        <div class="modal-dialog">
            <div class="modal-content">
              
            </div>
        </div>
    </div>
    <div id="registro" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              
            </div>
        </div>
    </div>

    <?php }} ?>
