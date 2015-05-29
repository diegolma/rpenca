            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            {$pais} <img src="{$escudo}" alt="No tiene escudo">
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
                                        <div class="huge">{$participaciones}</div>
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
                                        <div class="huge">{$copas}</div>
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
                                        <div class="huge">{$jugados}</div>
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
                                        <div class="huge">{$victorias}</div>
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
                                    <script type="text/javascript">
                                        $(document).ready(function(){
                                            $("#jug").click(function(){
                                                {$jugador->getidJugador()}
                                            });
                                        });
                                    </script>
							
                            		{foreach from=$jugadores item=jugador}
                  					<tr>
                    					<td>
                                            <a href="kitty.php?juga={$jugadror->getidJugador()}" >
                                            {$jugador->getNick()}    
                                            </a>
                                        </td>
                    					<td>{$jugador->getPos()}</td>                                        
                    					<td>{$jugador->getGol()}</td>                                        
                    					<td>{$jugador->getAma()}</td>                                        
                    					<td>{$jugador->getRoj()}</td>                                        
                    					<td><img src="{$jugador->getFoto()}" alt="Sin foto"></img></td>                                        
              						</tr>
                					{/foreach}								
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
										<td>{$presidente}</td>
									</tr>
									<tr>
										<th>Director T&eacute;cnico</th>
										<td>{$dt}</td>
									</tr>		
									<tr>
										<th>Nombre Completo</th>
										<td>{$nombre}</td>
									</tr>	
									<tr>
										<th>P&aacute;gina Web</th>
										<td><a href="{$web}" target="_blank">{$web}</a></td>
									</tr>	
									<tr>
										<th>Twitter oficial</th>
										<td><a href="http://www.twitter.com/{$twitter}" target="_blank">{$twitter}</a></td>
									</tr>	
									<tr>
										<th>Direcci&oacute;n</th>
										<td>{$direccion}</td>
									</tr>	
									<tr>
										<th>Referencia</th>
										<td>{$nombreCorto}</td>
									</tr>	
								</tbody>
							</table>
                    </div>                   
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->