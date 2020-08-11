$().ready(function(){
$('#Plan').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerNecesidadesPlaneacion.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Planeaciòn Agregada!", "se guardo correctamente la Planeacion  !", "success");
	setTimeout("location.href='Planeacion.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});