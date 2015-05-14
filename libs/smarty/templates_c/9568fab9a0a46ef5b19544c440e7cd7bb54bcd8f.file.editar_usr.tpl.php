<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-10 17:23:51
         compiled from "vistas\editar_usr.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21714554d3510938ca4-25729137%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9568fab9a0a46ef5b19544c440e7cd7bb54bcd8f' => 
    array (
      0 => 'vistas\\editar_usr.tpl',
      1 => 1431271361,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21714554d3510938ca4-25729137',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_554d35109409a4_17310609',
  'variables' => 
  array (
    'mensaje' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554d35109409a4_17310609')) {function content_554d35109409a4_17310609($_smarty_tpl) {?><div class="row">
	<div class="col-lg-12">
		<div class="alert alert-info alert-dismissabe">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
			<i class="fa fa-info-circle"></i>
			<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-8">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-user"></i>
				Informaci&oacute;n de tu cuenta:
			</div>
			<div class="panel-body">
				<ul class="list-group">
					<li class="list-group-item" id="nombre">
						<strong>Nombre: </strong><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getName();?>

						<a class="badge hide">
							<i class="fa fa-pencil"></i>
							 Editar
						</a>
						<form class="hide" method="POST">
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="editname" required value=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getName();?>
><!--Cambiar por variable-->
							</div>
							<br>
							<button class="btn btn-sm mar bot sociales btn-block">
								<i class="fa fa-floppy-o"></i>
							 	Guardar
							</button>
						</form>
					</li>
					<li class="list-group-item" id="apellido">
						<strong>Apellido: </strong><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>

						<a class="badge hide">
							<i class="fa fa-pencil"></i>
							 Editar
						</a>
						<form class="hide" method="POST">
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="editlastname" required value=<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
 ><!--Cambiar por variable-->
							</div>
							<br>
							<button class="btn btn-sm mar bot sociales btn-block">
								<i class="fa fa-floppy-o"></i>
							 	Guardar
							</button>
						</form>
					</li>
					<li class="list-group-item" id="email">
						<strong>E-mail: </strong><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getEmail();?>

					</li>
					<li class="list-group-item" id="password">
						<strong>Contrase&ntilde;a: </strong> **********
						<a class="badge hide">
							<i class="fa fa-pencil"></i>
							 Editar
						</a>
						<form class="hide" method="POST">
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="oldpassword" placeholder="Contrase&ntilde;a Actual:" required>
							</div>
							<br>
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="password" placeholder="Nueva Contrase&ntilde;a:" required>
							</div>
							<br>
							<div class="input-group mar">
								<span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" class="form-control" name="repassword" placeholder="Repetir Nueva Contrase&ntilde;a:" required>
							</div>
							<br>
							<button class="btn btn-sm mar bot sociales btn-block">
								<i class="fa fa-floppy-o"></i>
							 	Guardar
							</button>
						</form>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-picture-o"></i>
				Ete so vo' guachin
			</div>
			<div class="panel-body">
				<img alt="alta foto. Pero no se ve">
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-3">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-slack fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">12</div>
						<div>Pronosticos</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a href="">
					<span class="pull-left">Ver detalles</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
				</a>
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
						<div class="huge">12</div>
						<div>Aciertos</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a href="">
					<span class="pull-left">Ver detalles</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
				</a>
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
						<div class="huge">12</div>
						<div>Aciertos Exactos</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a href="">
					<span class="pull-left">Ver detalles</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
				</a>
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
						<div class="huge">12</div>
						<div>Puntaje</div>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a href="">
					<span class="pull-left">Ver detalles</span>
	                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
	                <div class="clearfix"></div>
				</a>
			</div>
		</div>
	</div>
</div><?php }} ?>
