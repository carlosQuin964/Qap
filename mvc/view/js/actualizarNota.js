$().ready(function(){
$('#actualizar').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/controllerNotas.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
//swal("Registro completado!", "Felicitaciones ya puedes ingresar con tu usuario y contraseña!", "success");
location.hash = 'tab1';
location.reload(true);
//	setTimeout("location.href='notas.php'", 5000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});