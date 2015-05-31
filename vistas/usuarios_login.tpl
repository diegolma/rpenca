<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="js/iniciar.js"></script>
<div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                    <div class="panel-heading">
                        <h4 style="color:black">Iniciar Sesi&oacute;n o <a class="page-scroll" data-toggle="modal" href="#" data-target="#registro">Reg&iacute;strate</a></h4>                        
                    </div>
                </div>
                <div class="modal-body">        
                        <fieldset>                                   
                                <div class="row row-centered">
                                <div class="alert alert-danger alert-dismissable hidden" id="men">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    Para poder iniciar sesión con esta red debes vincular tu cuenta primero.
                                </div>
                                    <div class="col col-sm-4">
                                        <a href="login-with.php?provider=Facebook" role="button" class="btn btn-lg face sociales center-block">        
                                            <i class="fa fa-facebook visible-xs"></i>
                                            <span class="hidden-xs">Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col col-sm-4">
                                        <a href="login-with.php?provider=Twitter" role="button" class="btn btn-lg twitter sociales center-block">       
                                            <i class="fa fa-twitter visible-xs"></i>
                                            <span class="hidden-xs">Twitter</span>
                                        </a>
                                    </div>  
                                    <div class="col col-sm-4">
                                        <a href="login-with.php?provider=Google" role="button" class="btn btn-lg goog sociales center-block">                                          
                                            <i class="fa fa-google visible-xs"></i>
                                            <span class="hidden-xs">Google+</span>
                                        </a>
                                    </div>  
                                </div>
                                <div class="row">
                                    <div class="col mart mar">
                                        <hr class="izq">
                                        <div class="dvi">
                                            <h4>o</h4>
                                        </div>                                      
                                        <hr class="der">
                                    </div>
                                </div>
                                <div> 
                                    <form action="" autocomplete="off" method="POST" id="elform">
                                        <div class="alert alert-danger hide" id="error"></div>
                                        <div class="input-group mar col-sm-12">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="email" class="form-control" name="user" placeholder="Email">
                                        </div>                                                              
                                        <div class="input-group mar col-lg-12">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Contrase&ntilde;a">
                                        </div>
                                        <button class="btn btn-sm mar bot sociales btn-block">INGRESAR</button>
                                    </form>                                 
                                </div>
                                <div class="">
                                <!--<div class="col-xs-12 col-sm-3">
                                        <label class="checkbox">
                                            <input type="checkbox" value="remember-me">Remember Me
                                        </label>
                                    </div>-->                                
                                    <div>
                                        <p>
                                            <a href="restaurar.php" class="olv">&iquest;Olvidaste tu contrase&ntilde;a?</a>
                                        </p>
                                    </div>
                                </div>              
                        </fieldset>    
                        </div>
				</div>
            <div class="modal-footer">        
            </div>     
        </div>
    </div>
</div>      