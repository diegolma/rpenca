<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-05 02:34:27
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9620553edb7877ce27-82255756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f67501b89dbb1670591a8169c93fcd250c368aaf' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1430784624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9620553edb7877ce27-82255756',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553edb78820f59_71085205',
  'variables' => 
  array (
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553edb78820f59_71085205')) {function content_553edb78820f59_71085205($_smarty_tpl) {?><nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
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
                    <!--
                    Acá vamos a hacer las verificaciones para ver si mostramos esto o el nombre del usuario Logueado.
                    -->
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value!='') {?>
                    <li>
                        <a class="page-scroll"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getName();?>
</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?cerrar=1">Cerrar Sesion</a>
                    </li>
                    <?php } else { ?>
                    <li>                    
                      <a class="page-scroll" data-toggle="modal" href="vistas/usuarios_login.tpl" data-target="#myModal">Ingresar</a>
                    </li>
                    <li>                    
                      <a class="page-scroll" data-toggle="modal" href="vistas/usuarios_registro.tpl" data-target="#registro">Registrarse</a>
                    </li>
                    <?php }?>
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
