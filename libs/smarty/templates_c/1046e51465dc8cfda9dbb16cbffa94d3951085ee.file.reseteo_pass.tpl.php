<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-19 03:54:08
         compiled from "vistas\reseteo_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29368555a7d8f8e6f30-92757235%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1046e51465dc8cfda9dbb16cbffa94d3951085ee' => 
    array (
      0 => 'vistas\\reseteo_pass.tpl',
      1 => 1432000028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29368555a7d8f8e6f30-92757235',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555a7d8f96fad2_37646758',
  'variables' => 
  array (
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a7d8f96fad2_37646758')) {function content_555a7d8f96fad2_37646758($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Penca - Restablecer Contrase&ntilde;a</title>
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
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">        

    <!--El favicon-->
    <link rel="icon" type="image/png" href="favicon.png">

  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Intro Header -->
    <header class="intro" id="prueba">        
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" id="contenido">
                        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
                        <div class="alert alert-danger"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
                        <?php } else { ?>
                        <form method="POST">
                            <div class="input-group mar col-lg-12">
                                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                <input type="email" class="form-control" name="mail" placeholder="Email:" required="">
                            </div>
                            <button class="btn btn-default btn-block">Reestablecer Contrase&ntilde;a</button>
                        </form>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    Just to make our placeholder images work. Don't actually copy the next line!
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.js"><?php echo '</script'; ?>
>
    IE10 viewport hack for Surface/desktop Windows 8 bug
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>-->
    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="js/jquery.js"><?php echo '</script'; ?>
>

    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>

    <!-- Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="js/jquery.easing.min.js"><?php echo '</script'; ?>
>
    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="js/grayscale.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>
