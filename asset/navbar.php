<?php 
Echo '
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<span class="navbar-brand" data-toggle="tooltip" data-placement="right" id="title">Cargando...</span>

		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">
				<li>
					<a class="qcmd" data-qcmd="clearAll">Borrar todo</a>
				</li>
				<li>
					<a class="qcmd" data-qcmd="back">Atrás</a>
				</li>
				<li>
					<a class="qcmd" data-qcmd="forward">Adelante</a>
				</li>
				<li class="dropdown qcmd">
					<a class="dropdown-toggle" data-toggle="dropdown">Favoritos <b class="caret"></b></a>
					<ul id="qbmlist" class="dropdown-menu dropdown-menu-right"></ul>
				</li>
				<li class="dropdown qcmd">
					<a class="dropdown-toggle" data-toggle="dropdown">Más<b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li>
							<a class="qcmd" data-qcmd="lockAll">Bloquear</a>
						</li>
						<li>
							<a class="qcmd" data-qcmd="unlockAll">Desbloquear</a>
						</li>
					</ul>

				</li>
				<li>
					<a class="qcmd" href="http://192.168.1.3/">Salir </a>
				</li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</div>
';
?>
