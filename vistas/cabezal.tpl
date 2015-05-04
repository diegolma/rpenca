<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
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
                    {if $usuario!=""}
                    <li>
                        <a class="page-scroll">{$usuario->getName()}</a>
                    </li>
                    {else}
                    <li>                    
                      <a class="page-scroll" data-toggle="modal" href="vistas/usuarios_login.tpl" data-target="#myModal">Ingresar</a>
                    </li>
                    <li>                    
                      <a class="page-scroll" data-toggle="modal" href="vistas/usuarios_registro.tpl" data-target="#registro">Registrarse</a>
                    </li>
                    {/if}
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>        u
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

    