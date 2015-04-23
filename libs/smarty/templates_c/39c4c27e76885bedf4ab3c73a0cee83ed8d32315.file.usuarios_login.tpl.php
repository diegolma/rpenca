<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 00:44:53
         compiled from "vistas\usuarios_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269925525b87d9380b9-62841679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c4c27e76885bedf4ab3c73a0cee83ed8d32315' => 
    array (
      0 => 'vistas\\usuarios_login.tpl',
      1 => 1429137887,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269925525b87d9380b9-62841679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5525b87dc00f13_48685458',
  'variables' => 
  array (
    'proyecto' => 0,
    'mensaje' => 0,
    'loginUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5525b87dc00f13_48685458')) {function content_5525b87dc00f13_48685458($_smarty_tpl) {?>
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

    <div class="container">

      <form class="form-signin" method="POST">
        <h2 class="form-signin-heading">Login</h2>
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>                        
          <br>
        <input type="email" id="email" name="email" class="form-control input-md" placeholder="Email address" required="" autofocus="">                                  
        <br>
        <input type="password" id="password" name="password" class="form-control input-md" placeholder="Password" required="">          
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>                
        <br>
        <button class="btn btn-lg btn-primary btn-block" onclick="window.location='<?php echo $_smarty_tpl->tpl_vars['loginUrl']->value;?>
'">Ingresar FB</button>
      </form>              
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
