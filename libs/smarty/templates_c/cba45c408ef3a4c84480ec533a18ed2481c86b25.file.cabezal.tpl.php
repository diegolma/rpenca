<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-09 01:23:41
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135455525b87dc3b8a8-26749892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cba45c408ef3a4c84480ec533a18ed2481c86b25' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1428368649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135455525b87dc3b8a8-26749892',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'proyecto' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5525b87dc6c5e0_89494980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5525b87dc6c5e0_89494980')) {function content_5525b87dc6c5e0_89494980($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php">Cerrar Sesión</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="index.php">
            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar..." value='<?php echo $_smarty_tpl->tpl_vars['buscar']->value;?>
'>
            <input type="submit" value="Buscar" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </nav><?php }} ?>
