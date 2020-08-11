$().ready(function(){
$('#necesidad').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerNecesidadesPlaneacion.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Necesidad Agregada!", "se guardo correctamente la Necesidad  !", "success");
	setTimeout("location.href='Necesidades.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});