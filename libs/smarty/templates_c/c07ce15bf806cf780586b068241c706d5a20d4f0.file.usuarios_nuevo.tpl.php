<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-13 05:31:19
         compiled from "vistas\usuarios_nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105185526cff5bfff36-11756507%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c07ce15bf806cf780586b068241c706d5a20d4f0' => 
    array (
      0 => 'vistas\\usuarios_nuevo.tpl',
      1 => 1428895871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105185526cff5bfff36-11756507',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5526cff5de83d0_56741888',
  'variables' => 
  array (
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'nom' => 0,
    'ape' => 0,
    'deFB' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5526cff5de83d0_56741888')) {function content_5526cff5de83d0_56741888($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>          
          <form class="form-horizontal" method="post">
            <fieldset>
            <?php if ($_smarty_tpl->tpl_vars['nom']->value=='') {?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre</label>  
              <div class="col-md-4">
              <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control input-md" required="">
                
              </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['nom']->value!='') {?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre</label>  
              <div class="col-md-4">
              <input id="nombre" name="nombre" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
" class="form-control input-md" readonly="" value="<?php echo $_smarty_tpl->tpl_vars['nom']->value;?>
">
                
              </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ape']->value=='') {?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="apellido">Apellido</label>  
              <div class="col-md-4">
              <input id="apellido" name="apellido" type="text" placeholder="Silvera" class="form-control input-md" required="">
                
              </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['ape']->value!='') {?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="apellido">Apellido</label>  
              <div class="col-md-4">
              <input id="apellido" name="apellido" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['ape']->value;?>
" class="form-control input-md" readonly="" value="<?php echo $_smarty_tpl->tpl_vars['ape']->value;?>
">
                
              </div>
            </div>
            <?php }?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="edad">Edad</label>  
              <div class="col-md-4">
              <input id="edad" name="edad" type="text" placeholder="21" class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">C.I.</label>  
              <div class="col-md-4">
              <input id="ci" name="ci" type="text" placeholder="1.234.567-2" class="form-control input-md" required="">
                
              </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['deFB']->value!='') {?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">Email</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="<?php echo $_smarty_tpl->tpl_vars['deFB']->value;?>
" class="form-control input-md" readonly="" value="<?php echo $_smarty_tpl->tpl_vars['deFB']->value;?>
">
                
              </div>
            </div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['deFB']->value=='') {?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">Email</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="text" placeholder="user@domain.com" class="form-control input-md" required="">
                
              </div>
            </div>
            <?php }?>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">Contraseña</label>  
              <div class="col-md-4">
              <input id="password" name="password" type="password" placeholder="******" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="guardar"></label>
              <div class="col-md-4">
                <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
              </div>
            </div>

            </fieldset>
          </form>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>
