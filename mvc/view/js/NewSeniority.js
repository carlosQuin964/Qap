$().ready(function(){
$('#newSeniority').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerSeniority.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Seniority Creado!", "Se creo exitosamente el Seniority !", "success");
	setTimeout("location.href='Seniority.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});