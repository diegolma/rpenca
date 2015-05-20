<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-19 00:40:17
         compiled from "vistas\usuarios_registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2556555543b32107984-27716861%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c762942580ab7af9208317b9adb46142ccd912' => 
    array (
      0 => 'vistas\\usuarios_registro.tpl',
      1 => 1431988534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2556555543b32107984-27716861',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55543b3210f685_15724721',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55543b3210f685_15724721')) {function content_55543b3210f685_15724721($_smarty_tpl) {?><div class="modal-header">
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
    <button id="confirmar" name="confirmar" class="btn btn-sm mar bot sociales btn-block">Registrarse</button>            
  </fieldset>
  </form>
</div>
<div class="modal-footer">
</div>
<?php }} ?>
