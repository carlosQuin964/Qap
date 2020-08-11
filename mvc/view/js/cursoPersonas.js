$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/controladorCursosPersonas.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Estudiante Asociado!", "Felicitaciónes el Estudiante ha sido asociado al curso  !", "success");
	setTimeout("location.href='asignaciones.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});