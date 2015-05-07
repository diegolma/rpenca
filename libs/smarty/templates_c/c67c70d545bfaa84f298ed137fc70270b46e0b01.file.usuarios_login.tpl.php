<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-07 03:47:04
         compiled from "vistas\usuarios_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30584554ac07e14f016-40894501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67c70d545bfaa84f298ed137fc70270b46e0b01' => 
    array (
      0 => 'vistas\\usuarios_login.tpl',
      1 => 1430962691,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30584554ac07e14f016-40894501',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554ac07e162899_29476417',
  'variables' => 
  array (
    'urlFB' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554ac07e162899_29476417')) {function content_554ac07e162899_29476417($_smarty_tpl) {?><div id="myModal" class="modal fade" >
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                <div class="panel-heading">
                    <h4 style="color:black">Iniciar Sesión</h4>
                    <div style="float:right; font-size: 80%; position: relative; top:-5px"><a href="#">Olvido contraseña?</a></div>
                </div>
            </div>
            <div class="modal-body">
                <div class="col-md-5 social">
                    <a href= <?php echo $_smarty_tpl->tpl_vars['urlFB']->value;?>
 class="facebook"><i class="fa fa-facebook-square fa-4x"></i><h4>Facebook</h4></a>
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
            </div>
            <div class="modal-footer">        
            </div>     

        </div>
    </div>
</div>      <?php }} ?>
