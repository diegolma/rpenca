<div class="row">
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
							
							{foreach from=$part->sinPronostico($usuario->getId()) item=partido}
								<li class="list-group-item">
									<form>
										<input type="hidden" name="partido" value="{$partido->getId()}">
										<div class="row">
											<div class="col-lg-2">
												{$partido->getSeleccionA()->getName()}
												<input type="hidden" value="{$partido->getSeleccionA()->getId()}" name="sel1">
											</div>
											<div class="col-lg-5" style="text-align:center;">
												<input type="text" name="pred1" size="3" required style="text-align:right;">
												 - 
												<input type="text" name="pred2" size="3" required>
											</div>
											<div class="col-lg-2">
												{$partido->getSeleccionB()->getName()}
												<input type="hidden" value="{$partido->getSeleccionB()->getId()}" name="sel2">
											</div>
											<div class="col-lg-3">
												<button class="btn btn-primary btn-sm">Pronosticar</button>
											</div>
										</div>
									</form>
								</li>
							{/foreach}
							
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
							
							{foreach from=$part->yaPronosticados($usuario->getId()) item=partido}
								<li class="list-group-item">
									<form>
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
												<button class="btn btn-success btn-sm">Actualizar</button>
											</div>
										</div>
									</form>
								</li>
							{/foreach}
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
							{foreach from=$part->finalizados() item=partido}
							<li class="list-group-item">
								<div class="row">
									<div class="col-lg-2">
										{$partido->getSeleccionA()->getName()}
									</div>
									<div class="col-lg-5" style="text-align:center;">
										<input type="text" style="text-align:right;" value="{$partido->goles($partido->getSeleccionA()->getId())}" readonly="" size="3"> - <input type="text" value="{$partido->goles($partido->getSeleccionB()->getId())}" readonly="" size="3">
									</div>
									<div class="col-lg-2">
										{$partido->getSeleccionB()->getName()}
									</div>
									<div class="col-lg-3">
										<a href="dashboard.php?v=perfil_usr">Ver puntos</a>
									</div>
								</div>
							</li>
							{/foreach}
						</ul>
						<p>Puede que el listado de los partidos ya jugados no se encuentre actualizado, en caso de que as&iacute; sea, intentalo m&aacute;s tarde...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>