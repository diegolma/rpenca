<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-19 04:03:51
         compiled from "vistas\perfil_usr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3229155543b459550e5-39532637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36ae070b61fc50f7d14eab858bfec7d1fcf753b8' => 
    array (
      0 => 'vistas\\perfil_usr.tpl',
      1 => 1431991822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3229155543b459550e5-39532637',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55543b45ab4a34_56685958',
  'variables' => 
  array (
    'usuario' => 0,
    'pronostico' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55543b45ab4a34_56685958')) {function content_55543b45ab4a34_56685958($_smarty_tpl) {?>
<div class="row"><!--Datos de Usuario-->
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-user"></i>
				Informaci&oacute;n de tu cuenta:
			</div>
			<div class="panel-body">
				<ul class="list-group" id="datos">
					<li class="list-group-item">
						<strong>Nombre: </strong><area><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getName();?>
</area>
						<a class="badge hide">
							<i class="fa fa-pencil"></i>
							 Editar
						</a>
						<form class="hide" method="POST">
							<hr>
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="editname" required placeholder="Nuevo Nombre:">
                            </div>
							<br>
							<button class="btn btn-sm mar bot sociales btn-block">
								<i class="fa fa-floppy-o"></i>
							 	Guardar
							</button>
						</form>
					</li>
					<li class="list-group-item">
						<strong>Apellido: </strong><area><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
</area>
						<a class="badge hide">
							<i class="fa fa-pencil"></i>
							 Editar
						</a>
						<form class="hide" method="POST">
							<hr>
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="editlastname" required placeholder="Nuevo Apellido:">
							</div>
							<br>
							<button class="btn btn-sm mar bot sociales btn-block">
								<i class="fa fa-floppy-o"></i>
							 	Guardar
							</button>
						</form>
					</li>
					<li class="list-group-item">
						<strong>E-mail: </strong><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();?>

					</li>
					<li class="list-group-item">
						<strong>Contrase&ntilde;a: </strong> **********
						<a class="badge hide">
							<i class="fa fa-pencil"></i>
							 Editar
						</a>
						<form class="hide" method="POST" id="pass">
							<hr>
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="password" class="form-control" name="oldpassword" placeholder="Contrase&ntilde;a Actual:" required>
							</div>
							<br>
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Nueva Contrase&ntilde;a:" required>
							</div>
							<br>
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="password" class="form-control" name="repassword" placeholder="Repetir Nueva Contrase&ntilde;a:" required>
							</div>
							<br>
							<button class="btn btn-sm mar bot sociales btn-block">
								<i class="fa fa-floppy-o"></i>
							 	Guardar
							</button>
						</form>
					</li>
					<li class="list-group-item" style="text-align: right;">
						<a id="cancelar">Cancela tu cuenta.</a>
						<div class="alert alert-danger alert-dismisable hide" style="text-align: left;">
							<button type="button" class="close">×</button>
							Estás a punto de cancelar tu cuenta. Esto borrará todos los datos y tu progreso en la aplicacion. ¿Estás seguro?<br>
							<a href="delete_usr.php" class="alert-link">Si, deseo cancelar mi cuenta.</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-picture-o"></i>
				Imágen de la Cuenta
			</div>
			<div class="panel-body" style="text-align:center;">
				<img alt="" src=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getAvatar();?>
>
			</div>
		</div>
	</div>
</div>
<div class="row"><!--los cuadritos de colores-->
	<div class="col-lg-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-slack fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div id="pron"class="huge"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->estadisticas('pronosticos');?>
</div>
						<div>Pronosticos</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-trophy fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div id="aciertos" class="huge"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->estadisticas('aciertos');?>
</div>
						<div>Aciertos</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-trophy fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div id="exactos" class="huge"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->estadisticas('exactos');?>
</div>
						<div>Aciertos Exactos</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-slack fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->estadisticas('puntos');?>
</div>
						<div>Puntos</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row"><!--Comienzo de las estadisticas-->
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-pie-chart"></i>
				Estadisticas de Pronosticos
			</div>
			<div class="panel-body" id="graf" style="min-height: 300px;"></div>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-clock-o"></i>
				Historial de Pronosticos
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-hover" style="text-align:center;">
						<thead>
					    	<tr>
					    		<th rowspan="2">Fecha del Partido</th>
					      		<th colspan="2">Selecci&oacute;n A</th>
							    <th colspan="2">Selecci&oacute;n B</th>
							    <th colspan="2">Pronostico</th>
							    <th rowspan="2">Puntos</th>
					    	</tr>
					    	<tr>
					    		<th>Nombre</th>
					      		<th>Goles</th>
					      		<th>Goles</th>
					      		<th>Nombre</th>
					      		<th> #A</th>
					      		<th> #B</th>
					    	</tr>
					  	</tead>
					  	<tbody>
					  		<?php if (!$_smarty_tpl->tpl_vars['usuario']->value->pronosticos()) {?>
					  		<tr>
					  			<td colspan="8"><span>No has realizado apuestas a&uacute;n</span></td>
					  		</tr>
					  		<?php }?>

					    	<?php  $_smarty_tpl->tpl_vars['pronostico'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pronostico']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuario']->value->pronosticos(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pronostico']->key => $_smarty_tpl->tpl_vars['pronostico']->value) {
$_smarty_tpl->tpl_vars['pronostico']->_loop = true;
?>
					    	<tr>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->getFecha();?>
</td>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->selA();?>
</td>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->golesA();?>
</td>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->golesB();?>
</td>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->selB();?>
</td>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->pronA();?>
</td>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->pronB();?>
</td>
					    		<td><?php echo $_smarty_tpl->tpl_vars['pronostico']->value->puntos();?>
</td>
					    	</tr>
					    	<?php } ?>
					  	</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row"><!--un intento de footer-->
	<div class="col-lg-12">
		<div class="footer">
			Tus datos y tu privacidad son importantes para nosotros. Lee nuestras
			<a href="#"><strong>Politicas de Privacidad</strong></a>.
		</div>
	</div>
</div><?php }} ?>
