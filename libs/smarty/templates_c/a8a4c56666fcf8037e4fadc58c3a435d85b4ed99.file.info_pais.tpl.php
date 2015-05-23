<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-23 02:19:54
         compiled from "vistas\info_pais.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4313555fc735846888-56578883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8a4c56666fcf8037e4fadc58c3a435d85b4ed99' => 
    array (
      0 => 'vistas\\info_pais.tpl',
      1 => 1432340334,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4313555fc735846888-56578883',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555fc735af9fb1_93558471',
  'variables' => 
  array (
    'pais' => 0,
    'escudo' => 0,
    'participaciones' => 0,
    'copas' => 0,
    'jugados' => 0,
    'victorias' => 0,
    'jugadores' => 0,
    'jugador' => 0,
    'presidente' => 0,
    'dt' => 0,
    'nombre' => 0,
    'web' => 0,
    'twitter' => 0,
    'direccion' => 0,
    'nombreCorto' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555fc735af9fb1_93558471')) {function content_555fc735af9fb1_93558471($_smarty_tpl) {?>            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <?php echo $_smarty_tpl->tpl_vars['pais']->value;?>
 <img src="<?php echo $_smarty_tpl->tpl_vars['escudo']->value;?>
" alt="No tiene escudo">
                        </h1>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-info-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['participaciones']->value;?>
</div>
                                        <div>Participaciones</div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-trophy fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['copas']->value;?>
</div>
                                        <div>Copas</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-futbol-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['jugados']->value;?>
</div>
                                        <div>Partidos</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-child fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $_smarty_tpl->tpl_vars['victorias']->value;?>
</div>
                                        <div>Victorias</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-8">
						<h2>Plantilla</h2>
						<div class="table-responsive" id="planti">
							<table class="table table-bordered table-hover table-striped" id="dataTables-example">
								<thead>
									<tr>
										<th>Jugador</th>
										<th>Posici&oacute;n</th>										
										<th><i class="fa fa-futbol-o"></i></th>
										<th><i class="fa fa-file-o" style="background-color:yellow"></i></th>
										<th><i class="fa fa-file-o" style="background-color:red"></i></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['jugador'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jugador']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jugadores']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jugador']->key => $_smarty_tpl->tpl_vars['jugador']->value) {
$_smarty_tpl->tpl_vars['jugador']->_loop = true;
?>
                  					<tr>
                    					<td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->getNick();?>
</td>
                    					<td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->getPos();?>
</td>                                        
                    					<td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->getGol();?>
</td>                                        
                    					<td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->getAma();?>
</td>                                        
                    					<td><?php echo $_smarty_tpl->tpl_vars['jugador']->value->getRoj();?>
</td>                                        
                    					<td><img src="<?php echo $_smarty_tpl->tpl_vars['jugador']->value->getFoto();?>
" alt="Sin foto"></img></td>                                        
              						</tr>
                					<?php } ?>								
								</tbody>
							</table>
						</div>
					</div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4">
                        <h2>Informaci&oacute;n</h2>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped" id="info">
								<tbody>
									<tr>
										<th>Presidente</th>
										<td><?php echo $_smarty_tpl->tpl_vars['presidente']->value;?>
</td>
									</tr>
									<tr>
										<th>Director T&eacute;cnico</th>
										<td><?php echo $_smarty_tpl->tpl_vars['dt']->value;?>
</td>
									</tr>		
									<tr>
										<th>Nombre Completo</th>
										<td><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</td>
									</tr>	
									<tr>
										<th>P&aacute;gina Web</th>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['web']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['web']->value;?>
</a></td>
									</tr>	
									<tr>
										<th>Twitter oficial</th>
										<td><a href="http://www.twitter.com/<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
</a></td>
									</tr>	
									<tr>
										<th>Direcci&oacute;n</th>
										<td><?php echo $_smarty_tpl->tpl_vars['direccion']->value;?>
</td>
									</tr>	
									<tr>
										<th>Referencia</th>
										<td><?php echo $_smarty_tpl->tpl_vars['nombreCorto']->value;?>
</td>
									</tr>	
								</tbody>
							</table>
                    </div>                   
                <!-- /.row -->

            </div>
            <!-- /.container-fluid --><?php }} ?>
