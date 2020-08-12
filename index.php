<?php
session_start();
session_destroy();
 require_once 'mvc/Controller/ControllerLogin.php';
require_once 'mvc/model/connectionLogin.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Inicio QAP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
/*background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');*/
background-image: url('https://seleritysas.com/wp-content/uploads/2019/12/shutterstock_606583169.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 30px;
background-color: #12B34F;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}


.panel-login {
	border-color: #ccc;
	-webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
	box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
	color: #00415d;
	background-color: #fff;
	border-color: #fff;
	text-align:center;
}
.panel-login>.panel-heading a{
	text-decoration: none;
	color: #666;
	font-weight: bold;
	font-size: 15px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
	color: #029f5b;
	font-size: 18px;
}
.panel-login>.panel-heading hr{
	margin-top: 10px;
	margin-bottom: 0px;
	clear: both;
	border: 0;
	height: 1px;
	background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
	background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
	background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}
.panel-login input[type="text"],.panel-login input[type="email"],.panel-login input[type="password"] {
	height: 45px;
	border: 1px solid #ddd;
	font-size: 16px;
	-webkit-transition: all 0.1s linear;
	-moz-transition: all 0.1s linear;
	transition: all 0.1s linear;
}
.panel-login input:hover,
.panel-login input:focus {
	outline:none;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	border-color: #ccc;
}
.btn-login {
	background-color: #59B2E0;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #59B2E6;
}
.btn-login:hover,
.btn-login:focus {
	color: #fff;
	background-color: #53A3CD;
	border-color: #53A3CD;
}
.forgot-password {
	text-decoration: underline;
	color: #888;
}
.forgot-password:hover,
.forgot-password:focus {
	text-decoration: underline;
	color: #666;
}

.btn-register {
	background-color: #1CB94E;
	outline: none;
	color: #fff;
	font-size: 14px;
	height: auto;
	font-weight: normal;
	padding: 14px 0;
	text-transform: uppercase;
	border-color: #1CB94A;
}
.btn-register:hover,
.btn-register:focus {
	color: #fff;
	background-color: #1CA347;
	border-color: #1CA347;
}

.ajusta{
	margin-top: 130px;
}

.margen{
	margin-top: 20px;
}
.margenv{
    margin-top: 30px;
}
#radioBtn .notActive{
    color: #3276b1;
    background-color: #fff;
}

    </style>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
     <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<script type="text/javascript">
 window.history.forward(1);
</script>

<body onLoad=”history.go(+1)”>




<div class="container">
	<!-- <div class="d-flex justify-content-center h-100">
		<div class="card">
			v
			<div class="card-body">
				<form id="login-form" method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						     
						</div>
					<input type="text" class="form-control" placeholder="Nombre" id="nick" name="nick" required>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
								</div>
						      <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" required>				 
							
					</div>
				
					<div class="form-group">
					<input type="submit" value="Ingresar" class="btn float-right login_btn text-light" id="btnGiris">
					</div>
				</form>

				<br>
				<br>

				
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					EPM<a href="#">QAP</a>
					<div style="text-align:center"><img class="mt-2"src="https://manar.com.co/areasoporte/logo.php" alt="photo" style="width:90%"></div>
				</div>
				
			</div>

			<div class="form-group" style="margin: 50px; margin-left:110px;">
					<input type="submit" value="Version Publica" class="  text-light btn btn-success btn " id="">
					</div>
		</div>
	</div> -->

    	<div class="row ajusta">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">




							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Externo</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Interno</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">



								<div class="card-body">
								<form id="login-form"  method="post" role="form" style="display: block;">
									<div class="input-group form-group">
									
							            <div class="input-group-prepend">
							             <span class="input-group-text"><i class="fas fa-user"></i></span>		     
						                </div>			     
						                
										<input type="text" name="nick" id="nick"  class="form-control" placeholder="Username" value="" required="">


									</div>
									<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
								     </div>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
									</div>
									<div class="form-group margen">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit"  class="form-control btn btn-login " value="Iniciar Sesion">
											</div>
										</div>
									</div>
									<div class="form-group margen">
										<div class="row">
											
											<div class="form-group text-center">
										<div style="text-align:center"><img class="mt-2"src="https://manar.com.co/areasoporte/logo.php" alt="photo" style="width:50%"></div>
									     </div>
										</div>
									</div>
								</form>

							</div>
								<form id="register-form" action="mvc\model\ldap.php" method="post" role="form" style="display: none;">
									<div class="form-group">
                           				<label for="happy" class="col-sm-4 col-md-4 control-label text-right">Seleccione su app</label>
                     					<div class="col-sm-7 col-md-7">
                   							<div class="radio">
  												<label><input type="radio" name="app" id="app" value="Nomina" checked>Nomina</label>
											</div>
											<div class="radio">
  												<label><input type="radio" name="app" id="app" value="Monitoreo">Monitoreo</label>
											</div>   
                  						</div> 
                  					</div>
                  				    <div class="col-md-12"></div>
									<div class="input-group form-group">
									
							            <div class="input-group-prepend">
							             <span class="input-group-text"><i class="fas fa-user"></i></span>		     
						                </div>			     
						                
										<input type="text" required="" name="username" id="username"  class="form-control" placeholder="nombre.apellido" value="">


									</div>
									
									<div class="input-group form-group">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="fas fa-key"></i></span>
								     </div>
										<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" required="">
									</div>
									
									<div class="form-group margenv">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Iniciar Sesion">
											</div>
										</div>
									</div>
									<div class="form-group margen">
										<div class="row">
											
											<div class="form-group text-center">
										<div style="text-align:center"><img class="mt-2"src="https://manar.com.co/areasoporte/logo.php" alt="photo" style="width:50%"></div>
									     </div>
										</div>
									</div>
								</form>
								<div class="col-lg-12">
									<div class="text-center">
										<a href="https://192.168.1.4/extensions/Publico/Publico.php"><button class="btn btn-success btn-lg">Acceso publico</button></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
<script type="text/javascript">
$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});

</script>
<script>
    $('#radioBtn a').on('click', function(){
    var sel = $(this).data('title');
    var tog = $(this).data('toggle');
    $('#'+tog).prop('value', sel);
    
    $('a[data-toggle="'+tog+'"]').not('[data-title="'+sel+'"]').removeClass('active').addClass('notActive');
    $('a[data-toggle="'+tog+'"][data-title="'+sel+'"]').removeClass('notActive').addClass('active');
})

 

</script>

</body>
</html>

