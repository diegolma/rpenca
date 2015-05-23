<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 04:48:21
         compiled from "vistas\principal_dash.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2574555e5d9812a480-75148359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc56ca20f090fe2d2b3cdbafc959dcfe2e8eb6f3' => 
    array (
      0 => 'vistas\\principal_dash.tpl',
      1 => 1432262774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2574555e5d9812a480-75148359',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555e5d9825afc9_74917026',
  'variables' => 
  array (
    'usuario' => 0,
    'k' => 0,
    'persona' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e5d9825afc9_74917026')) {function content_555e5d9825afc9_74917026($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
        <h1 class="page-header">#LaPenca</h1>
    </div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-warning">
					<div class="panel-heading" style="text-align: center;">
						<h3><strong><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getName();?>
 hasta ahora ganaste <?php echo $_smarty_tpl->tpl_vars['usuario']->value->estadisticas('puntos');?>
 puntos</strong></h3>
					</div>
					<div class="panel-footer">
						<a href="dashboard.php?v=perfil_usr" class="alert-link">
							<span class="pull-left">Ver Detalles</span>
							<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
	<div class="col-lg-6"><!--La tabla-->
		<div class="panel panel-success">
			<div class="panel-heading">
				<h4><i class="fa fa-trophy"></i>  Ranking de Usuarios</h4>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-hover" id="rank">
						<thead>
							<tr>
								<th><i class="fa fa-slack"></i></th>
								<th colspan="2">Usuario</th>
								<th>Puntos</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persona']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value->ranking(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['persona']->key => $_smarty_tpl->tpl_vars['persona']->value) {
$_smarty_tpl->tpl_vars['persona']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['persona']->key;
?>
			                <tr>
			                    <td><strong><?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
</strong></td><!--posicion-->
			                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['persona']->value->getAvatar();?>
"> </td><!--imagen-->                               
			                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getName();?>
</td><!--nombre-->                                     
			                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->estadisticas('puntos');?>
</td><!--puntos-->                                
			                </tr>
			                <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
