$().ready(function(){
$('#Cliente').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerProyecto.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Cliente Agregado!", "Se guardo correctamente el Cliente   !", "success");
	setTimeout("location.href='Cliente.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});