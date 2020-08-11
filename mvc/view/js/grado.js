$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/gradoController.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Grado creado!", "Grado Agregado a la lista de Grados  !", "success");
	setTimeout("location.href='crearGrado.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});