<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
    <div class="panel-heading">
        <h4 style="color:black">Iniciar Sesión</h4>
        <div style="float:right; font-size: 80%; position: relative; top:-5px"><a href="#">Olvido contraseña?</a></div>
    </div>
</div>
<div class="modal-body">
    <div class="col-md-5 social">
        <a href="#" class="facebook"><i class="fa fa-facebook-official fa-4x"></i><h4>Facebook</h4></a>
        <a href="#" class="twitter"><i class="fa fa-twitter fa-4x"></i><h4>Twitter</h4></a>
        <a href="#" class="google"><i class="fa fa-google-plus fa-4x"></i><h4>Google+</h4></a>
    </div>
    <div class="col-md-7 separador">    
        <form class="form-horizontal" method="POST" action="index.php">
        <fieldset>        

        <!-- Text input-->
        <div class="form-group">          
          <div class="col-md-7 login">
            <a><i class="fa fa-envelope fa-2x"></i></a>
            <input id="user" name="user" type="email" placeholder="Email" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Password input-->
        <div class="form-group">                  
          <div class="col-md-7 login">
            <a><i class="fa fa-key fa-2x"></i></a>
            <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md" required="">
            
          </div>
        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="log"></label>
          <div class="btnlogin">
            <button id="log" name="log" class="btn btn-primary">Ingresar</button>
          </div>
        </div>
        </fieldset>
        </form>
    </div>
<div class="modal-footer">        
</div>           