$().ready(function(){
$('#newTipoProyecto').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerProyecto.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Tipo de proyecto creado!", "Se creo el tipo de proyecto exitosamente !", "success");
	setTimeout("location.href='TipoProyecto.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});