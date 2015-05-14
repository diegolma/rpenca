<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 07:52:15
         compiled from "vistas\usuarios_registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:324175554380ff1d8c9-84085088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04c762942580ab7af9208317b9adb46142ccd912' => 
    array (
      0 => 'vistas\\usuarios_registro.tpl',
      1 => 1431119825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324175554380ff1d8c9-84085088',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555438100219d2_38966559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555438100219d2_38966559')) {function content_555438100219d2_38966559($_smarty_tpl) {?><div class="modal-header">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h4 style="color:black">Registrarse</h4>
</div>
<div class="modal-body">
  <br>
  <br>


  <form class="form-horizontal" method="POST" action="index.php" onsubmit="chekearSubmit(this)">
  <fieldset>
  <!-- Text input-->
  <div class="form-group">    
    <div class="col-md-7 regi" id="divname">
    <a><i class="fa fa-user fa-2x registro"></i></a>
    <input id="name" name="name" type="text" placeholder="Nombre" class="form-control input-md regis" required="" >
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">    
    <div class="col-md-7 regi">
    <a><i class="fa fa-user fa-2x registro"></i></a>
    <input id="lastname" name="lastname" type="text" placeholder="Apellido" class="form-control input-md regis" required="">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">    
    <div class="col-md-7 regi">
      <a><i class="fa fa-envelope fa-2x registro"></i></a>
      <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md regis" required="">
      
    </div>
  </div>

  <!-- Password input-->
  <div class="form-group">    
    <div class="col-md-7 regi">
      <a><i class="fa fa-key fa-2x registro"></i></a>
      <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control input-md regis" required="">
      
    </div>
  </div>
  <!-- Password input-->
  <div class="form-group">    
    <div class="col-md-7 regi">
      <a><i class="fa fa-key fa-2x registro"></i></a>
      <input id="password2" name="password2" type="password" placeholder="Repetir contraseña" class="form-control input-md regis" required="">
      
    </div>
  </div>
  <br>
  <br>
  <!-- Button -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="confirmar"></label>
    <div class="col-md-6 btnreg" >
      <button id="confirmar" name="confirmar" class="btn btn-primary">Registrarse</button>      
    </div>
  </div>
  </fieldset>
  </form>
</div>
<div class="modal-footer">
</div>
<?php }} ?>
