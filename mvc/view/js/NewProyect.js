$().ready(function(){
$('#proy').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerProyecto.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Proyecto Agregado!", "se guardo correctamente el Proyecto  !", "success");
	setTimeout("location.href='proyecto.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});