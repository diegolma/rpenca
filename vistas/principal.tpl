<div class="row">
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
								{foreach from=$usuario->ranking() item=persona key=k}
				                <tr>
				                    <td><strong>{$k+1}</strong></td><!--posicion-->
				                    <td><img src="{$persona->getAvatar()}"> </td><!--imagen-->                           
				                    <td>{$persona->getName()}</td><!--nombre-->                                     
				                    <td>{$persona->estadisticas('puntos')}</td><!--puntos-->                             
				                </tr>
				                {/foreach}
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
				<i class="fa fa-futbol-o"></i> Tus predicciones para los encuentros de hoy: <span class="pull-right badge">{date('d/m/Y')}</span>
			</div>
			<div class="panel-body" id="pdh">
				{if count($pDeHoy)>0}
				<ul class="list-group">
					{foreach from=$pDeHoy item=partido}
					<li class="list-group-item">
						<form method="POST" class="mar" action="apostar.php" autocomplete="off">
							<input type="hidden" name="partido" value="{$partido->getId()}">
							<div class="row">
								<div class="col-lg-2">
									{$partido->getSeleccionA()->getName()}
									<input type="hidden" value="{$partido->getSeleccionA()->getId()}" name="sel1">
								</div>
								<div class="col-lg-5" style="text-align:center;">
									<input type="text" name="pred1" size="3" required style="text-align:right;" placeholder="{$usuario->haPronosticado($partido->getId(), $partido->getSeleccionA()->getId())}">
									 - 
									<input type="text" name="pred2" size="3" required placeholder="{$usuario->haPronosticado($partido->getId(), $partido->getSeleccionB()->getId())}">
								</div>
								<div class="col-lg-2">
									{$partido->getSeleccionB()->getName()}
									<input type="hidden" value="{$partido->getSeleccionB()->getId()}" name="sel2">
								</div>
								<div class="col-lg-3">
									{if $usuario->haPronosticado($partido->getId(), $partido->getSeleccionA()->getId())===false}
										<button class="btn btn-primary btn-sm">Pronosticar</button>
									{else}
										<button class="btn btn-success btn-sm">Actualizar</button>
									{/if}
								</div>
							</div>
						</form>
					</li>
					{/foreach}	
				</ul>
				<div class="hide alert alert-dismisable">
					<button type="button" class="close">&times;</button>
					<span></span>
				</div>	
				{else}
				<p>Hoy no hay partidos para mostrar :(</p>
				{/if}
			</div>
			<a href="dashboard.php?v=partidos">
				<div class="panel-footer">
					<span class="pull-left">Ver todos los partidos</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-6">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="fa fa-clock-o"></i> Jugandose ahora:
			</div>
			<div class="panel-body">
				{if count($livescore) <= 0}
					Actualmente no se est&aacute;n jugando partidos.
				{else}
					<ul class="item-group">
					{foreach from=$livescore item=partido}
						<li class="list-group-item">
							<div class="row">
								<div class="col-lg-2">
									{$partido->getSeleccionA()->getName()}
								</div>
								<div class="col-lg-5" style="text-align:center;">
									<input type="text" name="pred1" size="3" required style="text-align:right;" value="{$partido->getGa()}" readonly="">
									 - 
									<input type="text" name="pred2" size="3" required value="{$partido->getGb()}" readonly="">
								</div>
								<div class="col-lg-2">
									{$partido->getSeleccionB()->getName()}
								</div>
								<div class="col-lg-3">
									{$partido->getMinuto()}''
								</div>
							</div>
						</form>
					</li>
					{/foreach}
					</ul>
				{/if}
			</div>
		</div>
	</div>
</div>