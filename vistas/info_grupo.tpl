<div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Grupo {$num}</h1>
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
                                {foreach from=$selecciones item=seleccion}
								<tr>                                                                                                        
                                    <td>{$seleccion->getPos()}</td>                                            
									<td><a style="color: black" href="dashboard.php?v=info_pais&pais={$seleccion->getId()}">{$seleccion->getName()}</a></td>
                                    <td><img src="{$seleccion->getEscudo()}" alt="-"></td>
									<td>{$seleccion->getPuntos()}</td>                                        
									<td>{$seleccion->getJugados()}</td>                                        
									<td>{$seleccion->getVictorias()}</td>                                        
									<td>{$seleccion->getEmpates()}</td>                                        
									<td>{$seleccion->getDerrotas()}</td>											
								</tr>
								{/foreach}						                            
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
                                {foreach from=$jornadas item=jornada}
                                <tr>                                            
                                    <td><img src="{$jornada->getEscudoLocal()}" class="center-block"></td>   
                                    <td style="text-align: center"><a style="color: black" href="#" onClick="window.location='index.php?pais={$jornada->getIdLocal()}'">{$jornada->getLocal()}</a></td>                                                                               
                                    {if $jornada->getResultado()==0}

                                        <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                        <ul class='timeline'>
                                                        {foreach from=$jornada->getHistorico() item=historico}
                                                            <li>
                                                                <div class='timeline-badge'>{$historico->getAnio()}</i></div>
                                                                <div class='timeline-panel'>
                                                                <div class='timeline-heading'>
                                                                    <h5 class='timeline-title'>{$historico->getCompetition()}</h5>
                                                                    <p><small class='text-muted'><i class='fa fa-clock-o'></i> {$historico->getFecha()}</small></p>
                                                                </div>
                                                                <div class='timeline-body'>{$historico->getLocal()} {$historico->getGolL()}-{$historico->getGolV()} {$historico->getVisitante()}</div>
                                                                </div>
                                                            </li>
                                                        {/foreach}                                
                                                        </ul>
                                                    </div>" data-toggle="popo">{$jornada->getHora()}:{$jornada->getMinutos()}<br>{$jornada->getFecha()}</a></td>
                                    {/if}
                                    {if $jornada->getResultado()!=0}
                                        <td><div class="panel panel-red">{$jornada->getResultado()}</div></td>      
                                    {/if}                                            
                                    <td style="text-align: center"><a style="color: black" href="dashboard.php?v=info_pais&pais={$jornada->getIdVisitante()}">{$jornada->getVisitante()}</a></td>
                                    <td><img src="{$jornada->getEscudoVisitante()}" class="center-block"></td>                                               
                                </tr>
                                {/foreach}                                                  
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
                                {foreach from=$jornadasB item=jornada}
                                <tr>                                            
                                    <td><img src="{$jornada->getEscudoLocal()}" class="center-block"></td>   
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdLocal()}">{$jornada->getLocal()}</a></td>                                                                               
                                    {if $jornada->getResultado()==0}

                                        <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                        <ul class='timeline'>
                                                        {foreach from=$jornada->getHistorico() item=historico}
                                                            <li>
                                                                <div class='timeline-badge'>{$historico->getAnio()}</i></div>
                                                                <div class='timeline-panel'>
                                                                <div class='timeline-heading'>
                                                                    <h5 class='timeline-title'>{$historico->getCompetition()}</h5>
                                                                    <p><small class='text-muted'><i class='fa fa-clock-o'></i> {$historico->getFecha()}</small></p>
                                                                </div>
                                                                <div class='timeline-body'>{$historico->getLocal()} {$historico->getGolL()}-{$historico->getGolV()} {$historico->getVisitante()}</div>
                                                                </div>
                                                            </li>
                                                        {/foreach}                                
                                                        </ul>
                                                    </div>" data-toggle="popo">{$jornada->getHora()}:{$jornada->getMinutos()}<br>{$jornada->getFecha()}</a></td>
                                    {/if}
                                    {if $jornada->getResultado()!=0}
                                        <td><div class="panel panel-red">{$jornada->getResultado()}</div></td>      
                                    {/if}                                            
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdVisitante()}">{$jornada->getVisitante()}</a></td>                                                                                                                                                                                        
                                    <td><img src="{$jornada->getEscudoVisitante()}" class="center-block"></td>                                                                                                                                            
                                </tr>
                                {/foreach}                                                  
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
                                {foreach from=$jornadasC item=jornada}
                                <tr>                                            
                                    <td><img src="{$jornada->getEscudoLocal()}" class="center-block"></td>   
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdLocal()}">{$jornada->getLocal()}</a></td>                                                                               
                                    {if $jornada->getResultado()==0}

                                        <td style="text-align: center"><a tabindex="0" rel="popover" role="button" title="Histórico" data-content="<div class='panel-body'>
                                                        <ul class='timeline'>
                                                        {foreach from=$jornada->getHistorico() item=historico}
                                                            <li>
                                                                <div class='timeline-badge'>{$historico->getAnio()}</i></div>
                                                                <div class='timeline-panel'>
                                                                <div class='timeline-heading'>
                                                                    <h5 class='timeline-title'>{$historico->getCompetition()}</h5>
                                                                    <p><small class='text-muted'><i class='fa fa-clock-o'></i> {$historico->getFecha()}</small></p>
                                                                </div>
                                                                <div class='timeline-body'>{$historico->getLocal()} {$historico->getGolL()}-{$historico->getGolV()} {$historico->getVisitante()}</div>
                                                                </div>
                                                            </li>
                                                        {/foreach}                                
                                                        </ul>
                                                    </div>" data-toggle="popo">{$jornada->getHora()}:{$jornada->getMinutos()}<br>{$jornada->getFecha()}</a></td>
                                    {/if}
                                    {if $jornada->getResultado()!=0}
                                        <td><div class="panel panel-red">{$jornada->getResultado()}</div></td>      
                                    {/if}                                            
                                    <td style="text-align: center"><a style="color: black" href="#" onclick="window.location='index.php?pais={$jornada->getIdVisitante()}">{$jornada->getVisitante()}</a></td>                                                                                                                                                           
                                    <td><img src="{$jornada->getEscudoVisitante()}" class="center-block"></td>                                                                                                                                            
                                </tr>
                                {/foreach}                                                  
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
        
</div>