$().ready(function(){
$('#nuevoU').submit(function(e){
	e.preventDefault();
	var  data = $(this).serializeArray();
	$.ajax({
				url: "../../Controller/ControllerUser.php",
				type: "POST",
				datatype: "json",
				data: data
})
	.done(function(){
		
swal("Usuario Creado!", "Felicitaciónes un nuevo usuario ha creado !", "success");
	setTimeout("location.href='usuarios.php'", 3000);
	})


	.fail(function(){
		sweetAlert("Oops...", "Algo salio mal !", "error");
	})
	.always(function(){
		
	});

});
});