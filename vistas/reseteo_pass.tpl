
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title>Penca - Restablecer Contrase&ntilde;a</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <script src="js/cosas.js"></script>
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
    {include file="cabezal.tpl"}
    <!-- Intro Header -->
    <header class="intro" id="prueba">        
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3" id="contenido">
                        {if $mensaje!=""}
                        <div class="alert alert-danger">{$mensaje}</div>
                        {else}
                        <form method="POST">
                            <div class="input-group mar col-lg-12">
                                <span class="input-group-addon"><i class="fa fa-at"></i></span>
                                <input type="email" class="form-control" name="mail" placeholder="Email:" required="">
                            </div>
                            <button class="btn btn-default btn-block">Reestablecer Contrase&ntilde;a</button>
                        </form>
                        {/if}
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    Just to make our placeholder images work. Don't actually copy the next line!
    <script src="../../assets/js/vendor/holder.js"></script>
    IE10 viewport hack for Surface/desktop Windows 8 bug
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>-->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
  </body>
</html>

