$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerUser.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Consultor Asignado!", "El Consultor ha sido asignado exitosamente!", "success");
	setTimeout("location.href='AsignarUser.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});