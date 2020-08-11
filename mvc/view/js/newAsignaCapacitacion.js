$().ready(function(){
$('#AsignaCapa').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerCapacitacion.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Capacitaciòn  Asignada!", " la Capacitaciòn a sido asignada exitosamente  !", "success");
	setTimeout("location.href='Capacitacion.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});