<!doctype html>
<html>
<head>
	<title>Qlik Sense Mashup</title>
	<?php include_Once 'D:\ManarTemp\Qap\asset\header.php';?>
	<link href="\asset\css\monitoreo.css" rel="stylesheet">
</head>
<body role="document" style="overflow: auto">
<!-- Fixed navbar -->

<?php include_Once 'D:\ManarTemp\Qap\asset\navbar.php';?>

<div class="container " id="main" role="main">
	<div class="alert alert-danger alert-dismissible" role="alert" style="display:none">
		<button type="button" class="close" id="closeerr" aria-label="Close"><span aria-hidden="true">×</span></button>
		<span id="errmsg"></span>
	</div>
	<div class="row">
		<div class="col-sm-4 qvobject" id="QV01">
		</div>
		<div class="col-sm-8 qvobject" id="QV02">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 qvobject" id="QV03">
		</div>
		<div class="col-sm-8 qvobject" id="QV04">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4 qvobject" id="QV05">
		</div>
		<div class="col-sm-8 qvobject" id="QV06">
		</div>
	</div>
	<!-- add more rows here if you want more visualizations -->
</div>

<!-- Bootstrap Modals -->
<div class="modal " id="createBmModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
				<h4 class="modal-title">Create bookmark</h4>
			</div>
			<div class="modal-body">
				<form>
					<label for="bmtitle" class="control-label">Title:</label>
					<input type="text" class="form-control" id="bmtitle">
					<label for="bmdesc" class="control-label">Description:</label>
					<input type="text" class="form-control" id="bmdesc">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" data-qcmd="createBm" class="qcmd btn btn-primary">Create</button>
			</div>
		</div>
	</div>
</div>
<!--Error Popup-->
<div id="popup">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closePopup"><span aria-hidden="true">×</span></button>

	<p id="popupText">
	</p>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="Monitoreo.js"></script>



</body></html>