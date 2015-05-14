<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 08:05:38
         compiled from "vistas\usuarios_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2757255543b320bd5f3-59006208%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c67c70d545bfaa84f298ed137fc70270b46e0b01' => 
    array (
      0 => 'vistas\\usuarios_login.tpl',
      1 => 1431127438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2757255543b320bd5f3-59006208',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'urlFB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55543b320d8b83_10632159',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55543b320d8b83_10632159')) {function content_55543b320d8b83_10632159($_smarty_tpl) {?><div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>   
                    <div class="panel-heading">
                        <h4 style="color:black">Iniciar Sesi&oacute;n o <a href="#">Reg&iacute;strate</a></h4>                        
                    </div>
                </div>
                <div class="modal-body">        
                        <fieldset>                                   
                                <div class="row row-centered">
                                    <div class="col col-sm-4">
                                        <a href= <?php echo $_smarty_tpl->tpl_vars['urlFB']->value;?>
 class="btn btn-lg face sociales center-block">        
                                            <i class="fa fa-facebook visible-xs"></i>
                                            <span class="hidden-xs">Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col col-sm-4">
                                        <a href="#" class="btn btn-lg twitter sociales center-block">       
                                            <i class="fa fa-twitter visible-xs"></i>
                                            <span class="hidden-xs">Twitter</span>
                                        </a>
                                    </div>  
                                    <div class="col col-sm-4">
                                        <a href="#" class="btn btn-lg goog sociales center-block">                                          
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
                                    <form action="" autocomplete="off" method="POST">
                                        <div class="input-group mar">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="email" class="form-control" name="user" placeholder="Email">
                                        </div>                                                              
                                        <div class="input-group mar">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" name="password" placeholder="Contrase&ntilde;a">
                                        </div>
                                        <button class="btn btn-sm mar bot sociales btn-block" type="submit">INGRESAR</button>
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
                                            <a href="#" class="olv">&iquest;Olvidaste tu contrase&ntilde;a?</a>
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
</div>      <?php }} ?>
