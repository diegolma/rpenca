<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-19 03:04:31
         compiled from "vistas\alert.tpl" */ ?>
<?php /*%%SmartyHeaderCode:612555a83b64cc701-91177421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec0dda17f238d94850bb4b392d06838f438a27a' => 
    array (
      0 => 'vistas\\alert.tpl',
      1 => 1431997437,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612555a83b64cc701-91177421',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555a83b6570836_58601979',
  'variables' => 
  array (
    'mensaje' => 0,
    'estilo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555a83b6570836_58601979')) {function content_555a83b6570836_58601979($_smarty_tpl) {?><div class="row">
    <div class="col-lg-12">
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
        <div class="<?php echo $_smarty_tpl->tpl_vars['estilo']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
        <?php }?>
    </div>
</div><?php }} ?>
