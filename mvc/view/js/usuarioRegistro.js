$().ready(function(){
$('form').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../Controller/userController.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Registro completado!", "Felicitaciones ya puedes ingresar con tu usuario y contraseña!", "success");
	setTimeout("location.href='../../index.php'", 5000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});