<div class="modal-header">    
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 style="color:black">Registrarse</h4>
</div>
<div class="modal-body">  
  <form class="form-horizontal" method="POST" action="index.php" onsubmit="chekearSubmit(this)">
  <fieldset>
  <!-- Text input-->  
    <div class="input-group mar">
      <span class="input-group-addon"><i class="fa fa-user registro"></i></span>
      <input id="name" name="name" type="text" placeholder="Nombre" class="form-control" required="" >      
    </div>  

  <!-- Text input-->  
    <div class="input-group mar">
      <span class="input-group-addon"><i class="fa fa-user registro"></i></span>
      <input id="lastname" name="lastname" type="text" placeholder="Apellido" class="form-control" required="">      
    </div>  

  <!-- Text input-->  
    <div class="input-group mar">
      <span class="input-group-addon"><i class="fa fa-envelope registro"></i></span>
      <input id="email" name="email" type="email" placeholder="Email" class="form-control" required="">    
    </div>  

  <!-- Password input-->  
    <div class="input-group mar">
      <span class="input-group-addon"><i class="fa fa-key registro"></i></span>
      <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control" required="">      
    </div>  

  <!-- Password input-->  
    <div class="input-group mar">
        <span class="input-group-addon"><i class="fa fa-key registro"></i></span>
        <input id="password2" name="password2" type="password" placeholder="Repetir contraseña" class="form-control" required="">      
    </div>  
  <br>  
  <!-- Button -->  
    <button id="confirmar" name="confirmar" class="btn btn-sm bot sociales btn-block">Registrarse</button>            
  </fieldset>
  </form>
</div>
<div class="modal-footer">
  <button type="button" class="close" data-toggle="tooltip" data-placement="left" title="Una vez que te registres podrás asociar tus cuentas de redes sociales e iniciar sesión con ellas." data-original-title=""><i class="fa fa-info-circle"></i></button>
</div>
