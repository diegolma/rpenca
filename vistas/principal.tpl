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
				<i class="fa fa-futbol-o"></i> Encuentros de hoy:
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table>
						{foreach from=$pDeHoy item=partido}
						<tr>
							<form method="POST">
								<td>{$parido->paricipantes(1)->getName()}</td><!--Seleccion a-->
								<td>
									<input type="hidden" value="{$partido->participantes(1)->getId()}" name="sel1">
									<input type="text" name="pred1">
								</td><!--prediccion a a-->
								<td> - </td><!-- - -->
								<td>
									<input type="hidden" value="{$partido->participantes(2)->getId()}" name="sel2">
									<input type="text" name="pred2">
								</td><!--prediccion b-->
								<td>
									{$parido->paricipantes(2)->getName()}
								</td><!--seleccion b-->
								<td>
									<button class="btn btn-primary btn-md"></button>
								</td><!--boton de predecir/cambiar -->
							</form>
						</tr>
						{/foreach}
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
</div>