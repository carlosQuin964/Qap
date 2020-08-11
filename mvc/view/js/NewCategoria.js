$().ready(function(){
$('#categoria').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerProyecto.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("categoria Agregada!", "se guardo correctamente la categoria  !", "success");
	setTimeout("location.href='Categoria.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});