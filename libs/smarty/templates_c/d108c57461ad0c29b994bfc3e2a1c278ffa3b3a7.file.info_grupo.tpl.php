<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 21:14:06
         compiled from "vistas\info_grupo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18084555d3b907e7bb1-97763264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd108c57461ad0c29b994bfc3e2a1c278ffa3b3a7' => 
    array (
      0 => 'vistas\\info_grupo.tpl',
      1 => 1432322020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18084555d3b907e7bb1-97763264',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555d3b90df2b25_01123877',
  'variables' => 
  array (
    'num' => 0,
    'selecciones' => 0,
    'seleccion' => 0,
    'jornadas' => 0,
    'jornada' => 0,
    'historico' => 0,
    'jornadasB' => 0,
    'jornadasC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555d3b90df2b25_01123877')) {function content_555d3b90df2b25_01123877($_smarty_tpl) {?><div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Grupo <?php echo $_smarty_tpl->tpl_vars['num']->value;?>
</h1>
            </div>
        </div>
        <!-- /.row -->
	<!--saddfkj-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <h4><!--<a data-toggle="collapse" aria-expanded="true" class="collapsed" href="#col1" style="color:white">Clasificaci&oacute;n</a>-->Clasificaci&oacute;n</h4> 
                </div>
                <!-- /.panel-heading -->
                <!--<div id="col1" class="panel-collapse ollapse" aria-expanded="false">-->
                <div class="panel">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th><i class="fa fa-slack"></i></th>
                                    <th>Equipos</th>
                                    <th></th>
                                    <th>Pt</th>
                                    <th>Pj</th>
					                <th>Pg</th>
                                    <th>Pe</th>
				 	                <th>Pp</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['seleccion'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['seleccion']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['selecciones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['seleccion']->key => $_smarty_tpl->tpl_vars['seleccion']->value) {
$_smarty_tpl->tpl_vars['seleccion']->_loop = true;
?>
								<tr>                                                                                                        
                                    <td><?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getPos();?>
</td>                                            
									<td><a style="color: black" href="dashboard.php?v=info_pais&pais=<?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getName();?>
</a></td>
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getEscudo();?>
" alt="-"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getPuntos();?>
</td>                                        
									<td><?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getJugados();?>
</td>                                        
									<td><?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getVictorias();?>
</td>                                        
									<td><?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getEmpates();?>
</td>                                        
									<td><?php echo $_smarty_tpl->tpl_vars['seleccion']->value->getDerrotas();?>
</td>											
								</tr>
								<?php } ?>						                            
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->  
        <div class="col-lg-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <h4><a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#col2" style="color:white">Jornada 1  <span class="fa fa-fw fa-caret-down"></span></a></h4>
                </div>
                <!-- /.panel-heading -->
                <div id="col2" class="panel-collapse collapse" aria-expanded="false">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
					                <th></th>
                                </tr>
                            </thead>
                            <tbody>                                        
                                <?php  $_smarty_tpl->tpl_vars['jornada'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jornada']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jornadas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jornada']->key => $_smarty_tpl->tpl_vars['jornada']->value) {
$_smarty_tpl->tpl_vars['jornada']->_loop = true;
?>
                                <tr>                                            
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getEscudoLocal();?>
" class="center-block"></td>   
                                    <td style="text-align: center"><a style="color: black" href="#" onClick="window.location='index.php?pais=<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getIdLocal();?>
'"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getLocal();?>
</a></td>                                                                               
                                    <?php if ($_smarty_tpl->tpl_vars['jornada']->value->getResultado()==0) {?>

                                        <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                        <ul class='timeline'>
                                                        <?php  $_smarty_tpl->tpl_vars['historico'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['historico']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jornada']->value->getHistorico(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['historico']->key => $_smarty_tpl->tpl_vars['historico']->value) {
$_smarty_tpl->tpl_vars['historico']->_loop = true;
?>
                                                            <li>
                                                                <div class='timeline-badge'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getAnio();?>
</i></div>
                                                                <div class='timeline-panel'>
                                                                <div class='timeline-heading'>
                                                                    <h5 class='timeline-title'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getCompetition();?>
</h5>
                                                                    <p><small class='text-muted'><i class='fa fa-clock-o'></i> <?php echo $_smarty_tpl->tpl_vars['historico']->value->getFecha();?>
</small></p>
                                                                </div>
                                                                <div class='timeline-body'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getLocal();?>
 <?php echo $_smarty_tpl->tpl_vars['historico']->value->getGolL();?>
-<?php echo $_smarty_tpl->tpl_vars['historico']->value->getGolV();?>
 <?php echo $_smarty_tpl->tpl_vars['historico']->value->getVisitante();?>
</div>
                                                                </div>
                                                            </li>
                                                        <?php } ?>                                
                                                        </ul>
                                                    </div>" data-toggle="popo"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getHora();?>
:<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getMinutos();?>
<br><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getFecha();?>
</a></td>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['jornada']->value->getResultado()!=0) {?>
                                        <td><div class="panel panel-red"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getResultado();?>
</div></td>      
                                    <?php }?>                                            
                                    <td style="text-align: center"><a style="color: black" href="dashboard.php?v=info_pais&pais=<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getIdVisitante();?>
"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getVisitante();?>
</a></td>
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getEscudoVisitante();?>
" class="center-block"></td>                                               
                                </tr>
                                <?php } ?>                                                  
                            </tbody>                                
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>             
        <div class="col-lg-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <h4><a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#col3" style="color:white">Jornada 2  <span class="fa fa-fw fa-caret-down"></span></a></h4>
                </div>
                <!-- /.panel-heading -->
                <div id="col3" class="panel-collapse collapse" aria-expanded="false">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>                                        
                                <?php  $_smarty_tpl->tpl_vars['jornada'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jornada']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jornadasB']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jornada']->key => $_smarty_tpl->tpl_vars['jornada']->value) {
$_smarty_tpl->tpl_vars['jornada']->_loop = true;
?>
                                <tr>                                            
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getEscudoLocal();?>
" class="center-block"></td>   
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais=<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getIdLocal();?>
"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getLocal();?>
</a></td>                                                                               
                                    <?php if ($_smarty_tpl->tpl_vars['jornada']->value->getResultado()==0) {?>

                                        <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                        <ul class='timeline'>
                                                        <?php  $_smarty_tpl->tpl_vars['historico'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['historico']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jornada']->value->getHistorico(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['historico']->key => $_smarty_tpl->tpl_vars['historico']->value) {
$_smarty_tpl->tpl_vars['historico']->_loop = true;
?>
                                                            <li>
                                                                <div class='timeline-badge'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getAnio();?>
</i></div>
                                                                <div class='timeline-panel'>
                                                                <div class='timeline-heading'>
                                                                    <h5 class='timeline-title'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getCompetition();?>
</h5>
                                                                    <p><small class='text-muted'><i class='fa fa-clock-o'></i> <?php echo $_smarty_tpl->tpl_vars['historico']->value->getFecha();?>
</small></p>
                                                                </div>
                                                                <div class='timeline-body'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getLocal();?>
 <?php echo $_smarty_tpl->tpl_vars['historico']->value->getGolL();?>
-<?php echo $_smarty_tpl->tpl_vars['historico']->value->getGolV();?>
 <?php echo $_smarty_tpl->tpl_vars['historico']->value->getVisitante();?>
</div>
                                                                </div>
                                                            </li>
                                                        <?php } ?>                                
                                                        </ul>
                                                    </div>" data-toggle="popo"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getHora();?>
:<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getMinutos();?>
<br><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getFecha();?>
</a></td>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['jornada']->value->getResultado()!=0) {?>
                                        <td><div class="panel panel-red"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getResultado();?>
</div></td>      
                                    <?php }?>                                            
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais=<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getIdVisitante();?>
"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getVisitante();?>
</a></td>                                                                                                                                                                                        
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getEscudoVisitante();?>
" class="center-block"></td>                                                                                                                                            
                                </tr>
                                <?php } ?>                                                  
                            </tbody>                           
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>             
        <div class="col-lg-12">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <h4><a data-toggle="collapse" aria-expanded="false" class="collapsed" href="#col4" style="color:white">Jornada 3  <span class="fa fa-fw fa-caret-down"></span></a></h4>
                </div>
                <!-- /.panel-heading -->
                <div id="col4" class="panel-collapse collapse" aria-expanded="false">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>                                        
                                <?php  $_smarty_tpl->tpl_vars['jornada'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['jornada']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jornadasC']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['jornada']->key => $_smarty_tpl->tpl_vars['jornada']->value) {
$_smarty_tpl->tpl_vars['jornada']->_loop = true;
?>
                                <tr>                                            
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getEscudoLocal();?>
" class="center-block"></td>   
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais=<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getIdLocal();?>
"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getLocal();?>
</a></td>                                                                               
                                    <?php if ($_smarty_tpl->tpl_vars['jornada']->value->getResultado()==0) {?>

                                        <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                        <ul class='timeline'>
                                                        <?php  $_smarty_tpl->tpl_vars['historico'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['historico']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jornada']->value->getHistorico(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['historico']->key => $_smarty_tpl->tpl_vars['historico']->value) {
$_smarty_tpl->tpl_vars['historico']->_loop = true;
?>
                                                            <li>
                                                                <div class='timeline-badge'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getAnio();?>
</i></div>
                                                                <div class='timeline-panel'>
                                                                <div class='timeline-heading'>
                                                                    <h5 class='timeline-title'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getCompetition();?>
</h5>
                                                                    <p><small class='text-muted'><i class='fa fa-clock-o'></i> <?php echo $_smarty_tpl->tpl_vars['historico']->value->getFecha();?>
</small></p>
                                                                </div>
                                                                <div class='timeline-body'><?php echo $_smarty_tpl->tpl_vars['historico']->value->getLocal();?>
 <?php echo $_smarty_tpl->tpl_vars['historico']->value->getGolL();?>
-<?php echo $_smarty_tpl->tpl_vars['historico']->value->getGolV();?>
 <?php echo $_smarty_tpl->tpl_vars['historico']->value->getVisitante();?>
</div>
                                                                </div>
                                                            </li>
                                                        <?php } ?>                                
                                                        </ul>
                                                    </div>" data-toggle="popo"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getHora();?>
:<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getMinutos();?>
<br><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getFecha();?>
</a></td>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['jornada']->value->getResultado()!=0) {?>
                                        <td><div class="panel panel-red"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getResultado();?>
</div></td>      
                                    <?php }?>                                            
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais=<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getIdVisitante();?>
"><?php echo $_smarty_tpl->tpl_vars['jornada']->value->getVisitante();?>
</a></td>                                                                                                                                                           
                                    <td><img src="<?php echo $_smarty_tpl->tpl_vars['jornada']->value->getEscudoVisitante();?>
" class="center-block"></td>                                                                                                                                            
                                </tr>
                                <?php } ?>                                                  
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>             
    </div>								
        
</div><?php }} ?>
