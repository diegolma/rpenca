<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-28 01:23:55
         compiled from "vistas\partidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309055563c144ca3959-44905901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3151e098a93aef4816689e1489bb044011c41f12' => 
    array (
      0 => 'vistas\\partidos.tpl',
      1 => 1432681886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309055563c144ca3959-44905901',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5563c144cd65e8_28555889',
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
				<div id="collapse2" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">
						<ul class="list-group">
							
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
				<div id="collapse3" class="panel-collapse collapse" aria-expanded="false">
					<div class="panel-body">
						<ul class="list-group">
							
						</ul>
						<p>Puede que el listado de los partidos ya jugados no se encuentre actualizado, en caso de que as&iacute; sea, intentalo m&aacute;s tarde...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
