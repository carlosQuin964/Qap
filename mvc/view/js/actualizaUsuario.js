$().ready(function(){
$('#actualizar').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerUser.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Actualizacion completada!", "Felicitaciones El usuario se ha Actualizado Correctamente  !", "success");

location.reload(true);
//	setTimeout("location.href='notas.php'", 5000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});