<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 23:34:19
         compiled from "vistas\partidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309055563c144ca3959-44905901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3151e098a93aef4816689e1489bb044011c41f12' => 
    array (
      0 => 'vistas\\partidos.tpl',
      1 => 1432848855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309055563c144ca3959-44905901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5563c144cd65e8_28555889',
  'variables' => 
  array (
    'usuario' => 0,
    'part' => 0,
    'partido' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5563c144cd65e8_28555889')) {function content_5563c144cd65e8_28555889($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Todos Los Partidos</h1>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="panel-group" id="acordion">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true">Partidos sin pronosticar:</a>
					</h4>
				</div>
				<div id="collapse1" class="panel-collapse collapse in" aria-expanded="true">
					<div class="panel-body">
						<ul class="list-group"> 
							
							<?php  $_smarty_tpl->tpl_vars['partido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['part']->value->sinPronostico($_smarty_tpl->tpl_vars['usuario']->value->getId()); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partido']->key => $_smarty_tpl->tpl_vars['partido']->value) {
$_smarty_tpl->tpl_vars['partido']->_loop = true;
?>
								<li class="list-group-item">
									<form>
										<input type="hidden" name="partido" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->getId();?>
">
										<div class="row">
											<div class="col-lg-2">
												<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionA()->getName();?>

												<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionA()->getId();?>
" name="sel1">
											</div>
											<div class="col-lg-5" style="text-align:center;">
												<input type="text" name="pred1" size="3" required style="text-align:right;">
												 - 
												<input type="text" name="pred2" size="3" required>
											</div>
											<div class="col-lg-2">
												<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionB()->getName();?>

												<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionB()->getId();?>
" name="sel2">
											</div>
											<div class="col-lg-3">
												<button class="btn btn-primary btn-sm">Pronosticar</button>
											</div>
										</div>
									</form>
								</li>
							<?php } ?>
							
						</ul>
					</div>
				</div>
			</div>
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" class="">Partidos con Predicci&oacute;n: <small class="pull-right">&iquest;Seguro que lo quer&eacute;s as&iacute;?</small></a>
					</h4>
				</div>
				<div id="collapse2" class="panel-collapse collapse in" aria-expanded="true">
					<div class="panel-body" id="pr">
						<ul class="list-group"> 
							
							<?php  $_smarty_tpl->tpl_vars['partido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['part']->value->yaPronosticados($_smarty_tpl->tpl_vars['usuario']->value->getId()); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partido']->key => $_smarty_tpl->tpl_vars['partido']->value) {
$_smarty_tpl->tpl_vars['partido']->_loop = true;
?>
								<li class="list-group-item">
									<form>
										<input type="hidden" name="partido" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->getId();?>
">
										<div class="row">
											<div class="col-lg-2">
												<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionA()->getName();?>

												<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionA()->getId();?>
" name="sel1">
											</div>
											<div class="col-lg-5" style="text-align:center;">
												<input type="text" name="pred1" size="3" required style="text-align:right;" placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->haPronosticado($_smarty_tpl->tpl_vars['partido']->value->getId(),$_smarty_tpl->tpl_vars['partido']->value->getSeleccionA()->getId());?>
">
												 - 
												<input type="text" name="pred2" size="3" required placeholder="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->haPronosticado($_smarty_tpl->tpl_vars['partido']->value->getId(),$_smarty_tpl->tpl_vars['partido']->value->getSeleccionB()->getId());?>
">
											</div>
											<div class="col-lg-2">
												<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionB()->getName();?>

												<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionB()->getId();?>
" name="sel2">
											</div>
											<div class="col-lg-3">
												<button class="btn btn-success btn-sm">Actualizar</button>
											</div>
										</div>
									</form>
								</li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true">Partidos Finalizados <small class="pull-right">&iquest;Y... C&oacute;mo te fu&eacute;?</small></a>
					</h4>
				</div>
				<div id="collapse3" class="panel-collapse collapse in" aria-expanded="true">
					<div class="panel-body">
						<ul class="list-group">
							<?php  $_smarty_tpl->tpl_vars['partido'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['partido']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['part']->value->finalizados(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['partido']->key => $_smarty_tpl->tpl_vars['partido']->value) {
$_smarty_tpl->tpl_vars['partido']->_loop = true;
?>
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2">
										<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionA()->getName();?>

									</div>
									<div class="col-lg-5" style="text-align:center;">
										<input type="text" style="text-align:right;" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->goles($_smarty_tpl->tpl_vars['partido']->value->getSeleccionA()->getId());?>
" readonly="" size="3"> - <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['partido']->value->goles($_smarty_tpl->tpl_vars['partido']->value->getSeleccionB()->getId());?>
" readonly="" size="3">
									</div>
									<div class="col-lg-2">
										<?php echo $_smarty_tpl->tpl_vars['partido']->value->getSeleccionB()->getName();?>

									</div>
									<div class="col-lg-3">
										<a href="dashboard.php?v=perfil_usr">Ver puntos</a>
									</div>
								</div>
							</li>
							<?php } ?>
						</ul>
						<p>Puede que el listado de los partidos ya jugados no se encuentre actualizado, en caso de que as&iacute; sea, intentalo m&aacute;s tarde...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
