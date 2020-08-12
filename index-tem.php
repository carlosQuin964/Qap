<!doctype html>
<html><head>
	<title>Qlik Sense Mashup</title>
	<?php include_Once 'D:\ManarTemp\Qap\asset\header.php';?>
	<style>
		/**
		* set padding to make room for bootstrap menu
		*
		*/
		body {
			padding-bottom: 30px;
		}

		/*
		* need to set the height for objects
		* set top padding to make room for selection toolbar
		*/
		div.qvobject, div.qvplaceholder {
			padding: 30px 10px 10px 10px;
			height: 400px;
		}

		.qcmd {
			cursor: pointer;
		}

		#popup {
			background-color: #7f8c8d;
			color: #FFFFFF;
			position: fixed;
			padding: 10px;
			margin: 10px;
			bottom: 0;
			right: 0;
			display: none;
			border-radius: 5px;
		}

		/*
		 * Overrides Bootstrap navbar z-index to avoid conflict with selections bar
		 */
		.navbar-fixed-top {
			position: relative;
			z-index: 100;
		}

	</style>
</head>
<body role="document" style="overflow: auto">
<!-- Fixed navbar -->
<!-- <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
		</div> -->
		<!--/.nav-collapse -->
	<!-- </div>
</div> -->	

<a class="btn btn-primary" target="_blank" href="..\SenseSites\Interno\Interno.php">  <button type="button" class="btn btn-primary">Interno</button>  </a>
<a class="btn btn-primary" target="_blank" href="..\SenseSites\Publico\Publico.php">  <button type="button" class="btn btn-primary">Publico</button>  </a>
<a class="btn btn-primary" target="_blank" href="..\SenseSites\Externo\Externo.php">  <button type="button" class="btn btn-primary">Externo</button>  </a>
<a class="btn btn-primary" target="_blank" href="..\SenseSites\Monitoreo\Monitoreo.php">  <button type="button" class="btn btn-primary">Monitoreo</button>  </a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="Publico.js"></script>



</body></html>