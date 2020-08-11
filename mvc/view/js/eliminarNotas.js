function eliminar(idObjepto){

conf=confirm('Desea Eliminar la nota ');
		if (conf==true) {
			$.ajax({
				url: "../../Controller/controllerNotas.php", 
				type: "POST",
				datatype: "json",
				data:{
					"deleteSubject":"ok",
					"idnotas":idObjepto
				},
				success:function(rta){
					swal("Nota eliminada!");
             setTimeout('document.location.reload()',5000);
					$('#fila-'+idObjepto).remove();
				},
				error:function(rta){
					alert("error");
				}
			});
		}else{
			sweetAlert("Oops...", "La nota no fue eliminada! "+idObjepto+"", "error");
		}
		
		}