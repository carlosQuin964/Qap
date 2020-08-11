$().ready(function(){
$('#newCapa').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerCapacitacion.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Capacitaciòn  agregada!", "Capacitaciòn  agregada ya la puedes asignar a un usuario !", "success");
	setTimeout("location.href='AsignarCapacitacion.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});