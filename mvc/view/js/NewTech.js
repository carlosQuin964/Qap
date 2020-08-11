$().ready(function(){
$('#tech').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerProyecto.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("tecnologia Agregada!", "se guardo correctamente la tecnologia  !", "success");
	setTimeout("location.href='Tecnologia.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});