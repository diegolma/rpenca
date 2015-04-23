<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 20:58:40
         compiled from "vistas\home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11585552fe5a70a2933-08427916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b1355cad3e184c38dc9467d6413a38aa7f55b8d' => 
    array (
      0 => 'vistas\\home.tpl',
      1 => 1429210683,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11585552fe5a70a2933-08427916',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_552fe5a7215ac5_20391064',
  'variables' => 
  array (
    'proyecto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_552fe5a7215ac5_20391064')) {function content_552fe5a7215ac5_20391064($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/grayscale.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Intro Header -->
    <header class="intro">        
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">PENCA</h1>
                        <p class="intro-text">Alguien en algún lugar<br>está trabajando para terminar esta web.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Juego</h2>
                <p>Este juego es un certamen de pronósticos deportivos que premia los conocimientos futbolísticos de los participantes.</p>
                <p>Para participar es necesario registrarse y/o inciar sesión con Facebook.</p>                
                <p>El participante deberá colocar el pronóstico sobre el resultado de cada partido (resultado dentro de los 90 minutos). El participante podrá modificar sus pronósticos hasta 30 minutos antes del comienzo de cada partido.</p>
                <p>Puntuación<br>
                a) Por cada resultado donde se acierte el ganador o el empate, el participante acumulará 3 puntos. <br>b) Por cada resultado donde el usuario acierte además el tanteador exacto del partido, se duplicarán los puntos referidos en el numeral anterior. </p>
                <p>Por defecto el sistema creará una tabla general de posiciones entre todos los participantes.</p>                
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Info de la copa</h2>
                    <p>La Copa América 2015 será la XLIV edición de este torneo, la principal competencia futbolística entre selecciones nacionales de América del Sur y el más antiguo del mundo aún en vigencia. Organizado por la Conmebol, administrador del fútbol en Sudamérica y órgano del fútbol afiliado a la FIFA, el torneo se llevará a cabo por séptima vez en Chile entre el 11 de junio y el 4 de julio de 2015.</p>
                    <p>El vigente campeón del torneo es Uruguay, que se coronó en la edición anterior de la Copa América luego de vencer a su similar de Paraguay por 3:0 en la final, organizada en 2011 por Argentina. El campeón de este torneo participará en representación de Conmebol en la Copa FIFA Confederaciones 2017, que tendrá lugar en Rusia.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Un Mate?</h2>
                <p>Como buenos Uruguayos que somos nos gusta el mate, puedes cebarnos uno, avísanos:</p>
                <p><a href="mailto:contacto@onse.com.uy">contacto@onse.com.uy</a>
                </p>
                <!--<ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>-->
            </div>
        </div>
    </section>

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

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"><?php echo '</script'; ?>
>

    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="js/grayscale.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>