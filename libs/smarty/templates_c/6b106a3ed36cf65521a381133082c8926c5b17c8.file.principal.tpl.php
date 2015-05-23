<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 03:16:18
         compiled from "vistas\principal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434555e9d0a187279-34132740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b106a3ed36cf65521a381133082c8926c5b17c8' => 
    array (
      0 => 'vistas\\principal.tpl',
      1 => 1432343773,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434555e9d0a187279-34132740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555e9d0a236f25_58356124',
  'variables' => 
  array (
    'usuario' => 0,
    'k' => 0,
    'persona' => 0,
    'pDeHoy' => 0,
    'parido' => 0,
    'partido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555e9d0a236f25_58356124')) {function content_555e9d0a236f25_58356124($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
        <h1 class="page-header">#LaPenca</h1>
    </div>
</div>
<div class="row">
	<div class="col-lg-6"> <!--El bicho-->
		<img src="imgs/zincha.png" class="img-responsive">
	</div>
	<div class="col-lg-6"><!--La tabla de calificaciones-->
		<div class="panel panel-success">
			<div class="panel-heading">
				<i class="fa fa-trophy"></i>  Ranking de Usuarios
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<div class="dataTables_wrapper form-inline dt-bootstrap no-footer">
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
	</div>
</div>
<div class="row">
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-futbol-o"></i> Encuentros de hoy:
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table>
						<?php  $_smarty_tpl->tpl_vars['partido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pDeHoy']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partido']->key => $_smarty_tpl->tpl_vars['partido']->value) {
$_smarty_tpl->tpl_vars['partido']->_loop = true;
?>
						<tr>
							<form method="POST">
								<td><?php echo $_smarty_tpl->tpl_vars['parido']->value->paricipantes(1)->getName();?>
</td><!--Seleccion a-->
								<td>
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->participantes(1)->getId();?>
" name="sel1">
									<input type="text" name="pred1">
								</td><!--prediccion a a-->
								<td> - </td><!-- - -->
								<td>
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->participantes(2)->getId();?>
" name="sel2">
									<input type="text" name="pred2">
								</td><!--prediccion b-->
								<td>
									<?php echo $_smarty_tpl->tpl_vars['parido']->value->paricipantes(2)->getName();?>

								</td><!--seleccion b-->
								<td>
									<button class="btn btn-primary btn-md"></button>
								</td><!--boton de predecir/cambiar -->
							</form>
						</tr>
						<?php } ?>
					</table>
				</div>
			</div>
			<a href="">
				<div class="panel-footer">
					<span class="pull-left">Ver todos los partidos</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
</div><?php }} ?>
