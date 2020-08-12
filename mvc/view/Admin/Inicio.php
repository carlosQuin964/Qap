<?php
require_once '../../model/Login.php';

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

 if(isset($_SESSION['id'])){



 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Inicio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .my-card
{
    position:absolute;
    left:40%;
    top:-20px;
    border-radius:50%;
}

        .nav-side-menu {
  overflow: auto;
  font-family: verdana;
  font-size: 12px;
  font-weight: 200;
  background-color: #2e353d;
  position: fixed;
  top: 0px;
  width: 300px;
  height: 100%;
  color: #e1ffff;
}
.nav-side-menu .brand {
  background-color: #23282e;
  line-height: 50px;
  display: block;
  text-align: center;
  font-size: 14px;
}
.nav-side-menu .toggle-btn {
  display: none;
}
.nav-side-menu ul,
.nav-side-menu li {
  list-style: none;
  padding: 0px;
  margin: 0px;
  line-height: 35px;
  cursor: pointer;
  /*    
    .collapsed{
       .arrow:before{
                 font-family: FontAwesome;
                 content: "\f053";
                 display: inline-block;
                 padding-left:10px;
                 padding-right: 10px;
                 vertical-align: middle;
                 float:right;
            }
     }
*/
}
.nav-side-menu ul :not(collapsed) .arrow:before,
.nav-side-menu li :not(collapsed) .arrow:before {
  font-family: FontAwesome;
  content: "\f078";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
  float: right;
}
.nav-side-menu ul .active,
.nav-side-menu li .active {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
}
.nav-side-menu ul .sub-menu li.active,
.nav-side-menu li .sub-menu li.active {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li.active a,
.nav-side-menu li .sub-menu li.active a {
  color: #d19b3d;
}
.nav-side-menu ul .sub-menu li,
.nav-side-menu li .sub-menu li {
  background-color: #181c20;
  border: none;
  line-height: 28px;
  border-bottom: 1px solid #23282e;
  margin-left: 0px;
}
.nav-side-menu ul .sub-menu li:hover,
.nav-side-menu li .sub-menu li:hover {
  background-color: #020203;
}
.nav-side-menu ul .sub-menu li:before,
.nav-side-menu li .sub-menu li:before {
  font-family: FontAwesome;
  content: "\f105";
  display: inline-block;
  padding-left: 10px;
  padding-right: 10px;
  vertical-align: middle;
}
.nav-side-menu li {
  padding-left: 0px;
  border-left: 3px solid #2e353d;
  border-bottom: 1px solid #23282e;
}
.nav-side-menu li a {
  text-decoration: none;
  color: #e1ffff;
}
.nav-side-menu li a i {
  padding-left: 10px;
  width: 20px;
  padding-right: 20px;
}
.nav-side-menu li:hover {
  border-left: 3px solid #d19b3d;
  background-color: #4f5b69;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
}
@media (max-width: 767px) {
  .nav-side-menu {
    position: relative;
    width: 100%;
    margin-bottom: 10px;
  }
  .nav-side-menu .toggle-btn {
    display: block;
    cursor: pointer;
    position: absolute;
    right: 10px;
    top: 10px;
    z-index: 10 !important;
    padding: 3px;
    background-color: #ffffff;
    color: #000;
    width: 40px;
    text-align: center;
  }
  .brand {
    text-align: left !important;
    font-size: 22px;
    padding-left: 20px;
    line-height: 50px !important;
  }
}
@media (min-width: 767px) {
  .nav-side-menu .menu-list .menu-content {
    display: block;
  }
}
body {
  margin: 0px;
  padding: 0px;
}


.accesoR{
  margin-left: 100px
}
.top{
    margin-top: 50px;
}


.cta-100 {
  margin-top: 100px;
  padding-left: 8%;
  padding-top: 7%;
}
.col-md-4{
    padding-bottom:20px;
}

.white {
  color: #fff !important;
}
.mt{float: left;margin-top: -20px;padding-top: 20px;}
.bg-blue-ui {
  background-color: #708198 !important;
}
figure img{width:300px;}

#blogCarousel {
  padding-bottom: 100px;
}

.blog .carousel-indicators {
  left: 0;
  top: -50px;
  height: 50%;
}


/* The colour of the indicators */

.blog .carousel-indicators li {
  background: #708198;
  border-radius: 50%;
  width: 8px;
  height: 8px;
}

.blog .carousel-indicators .active {
  background: #0fc9af;
}




.item-carousel-blog-block {
  outline: medium none;
  padding: 15px;
}

.item-box-blog {
  border: 1px solid #dadada;
  text-align: center;
  z-index: 4;
  padding: 20px;
}

.item-box-blog-image {
  position: relative;
}

.item-box-blog-image figure img {
  width: 100%;
  height: auto;
}

.item-box-blog-date {
  position: absolute;
  z-index: 5;
  padding: 4px 20px;
  top: -20px;
  right: 8px;
  background-color: #41cb52;
}

.item-box-blog-date span {
  color: #fff;
  display: block;
  text-align: center;
  line-height: 1.2;
}

.item-box-blog-date span.mon {
  font-size: 18px;
}

.item-box-blog-date span.day {
  font-size: 16px;
}

.item-box-blog-body {
  padding: 10px;
}

.item-heading-blog a h5 {
  margin: 0;
  line-height: 1;
  text-decoration:none;
  transition: color 0.3s;
}

.item-box-blog-heading a {
    text-decoration: none;
}

.item-box-blog-data p {
  font-size: 13px;
}

.item-box-blog-data p i {
  font-size: 12px;
}

.item-box-blog-text {
  max-height: 100px;
  overflow: hidden;
}

.mt-10 {
  float: left;
  margin-top: -10px;
  padding-top: 10px;
}

.btn.bg-blue-ui.white.read {
  cursor: pointer;
  padding: 4px 20px;
  float: left;
  margin-top: 10px;
}

.btn.bg-blue-ui.white.read:hover {
  box-shadow: 0px 5px 15px inset #4d5f77;
}

.aba{

    margin-top: -60px
}

.btnNo {
        background: none;
        color: inherit;
        border: none;
        padding: 0;
        font: inherit;
        cursor: pointer;
        outline: inherit;
}


.title-header:before {
    border-top: 2px solid #28d094;
    content: "";
    left: 0;
    position: absolute;
    right: 0;
    top: 50%;
}

.title-header h4 {
    background: #fff;
    color: #363636;
    display: inline-block;
    font-weight: 600;
    line-height: 40px;
    margin: 0;
    padding: 0 30px;
    position: relative;
    text-transform: uppercase;
    border: 2px solid #28d094;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>


     <?php 
     include'../../model/UsuarioDAO.php';
    $User = new UsuarioDAO();
    $AppUser = new UsuarioDAO();
    include '../../model/permisosDTO.php';

    $idUser = $_SESSION['id'];
    $allUsuariosL = $User->readUserHub($idUser);
    //var_dump ($); readUsuarioConsultor
    //var_dump ($);
    ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css
">

<div class="nav-side-menu">
    <div class="brand">Stream</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
             <ul id="menu-content" class="menu-content collapse out">

<?php

if ($allUsuariosL == NULL ) {
    
}else{

 foreach ($allUsuariosL as $userStreamn ){
    $NombreStream = $userStreamn->get('NombreStream');
    $IdStream = $userStreamn->get('IdStream');
    $Napps = $userStreamn->get('Apps');
   
   echo '
   <form id="Apps">
  
             <li>
                  <a href="#">

                  <i class="fa fa-dashboard fa-lg"></i>  <input type="submit" class="btnNo" name="str" text="hola" value="'.$NombreStream.'">
                  </a>
                </li>
     
      </form>
';
}}

?>

               
            </ul>
     </div>
</div>
  <div class="container top">
  <div class="accesoR">
<div class="row w-100">
    <?php

if ($allUsuariosL == NULL ) {
    echo '<div class="alert alert-primary" role="alert">
No tiene streams Asociados  
</div> ' ;
}else{

 foreach ($allUsuariosL as $userStreamn ){
    $NombreStream = $userStreamn->get('NombreStream');
    $IdStream = $userStreamn->get('IdStream');
    $Napps = $userStreamn->get('Apps');
   
   echo '
    
   <div class="col-md-3">
   <form id="Apps">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card" ><span class="fa fa-bar-chart" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4># Apps </h4></div>
                <div class="text-info text-center mt-2"><h1>'.$Napps.'</h1></div>
               <input type="submit" name="str" text="hola" value="'.$NombreStream.'" class="btn btn-outlined btn-block btn-primary">
            </div>
              </form>
        </div>  
';
}}

?>



</div>
</div>
</div>





   <div class="container cta-100 aba ">
     <?php
    if(isset($_GET["str"])){


        echo  ' <div class="row mt-5 top">
            <div class="col-md-12">
                    <div class="title-header text-center">
                        <h4>Stream : '.$_GET["str"].'</h4>
                    </div>
                </div>
        </div> 
        <br>';
        }
  ?>
        <div class="container">
          <div class="row blog">
            <div class="col-md-12">
              <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
             <!--   <ol class="carousel-indicators">
                  <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#blogCarousel" data-slide-to="1"></li>
                </ol>
               Carousel items -->
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">


  <?php  

       if(isset($_GET["str"])){


        $allApp = $AppUser->readAppHub($_GET["str"]);
         

         foreach ($allApp as $app ){
          $NombreApp = $app->get('NombreApp');
          $IdApp = $app->get('IdApp');
          $Url = $app->get('Url');
          $NombreStreamSeleccionado = $app->get('NombreStream');
         
         echo '
        <div class="col-md-4" >
                          <div class="item-box-blog">
                            <div class="item-box-blog-image">
                              <!--Date-->
                              <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                              <!--Image-->
                              <figure> <img alt="" src="https://cio.com.mx/wp-content/uploads/2016/03/analitica-sas.jpg"> </figure>
                            </div>
                            <div class="item-box-blog-body">
                              <!--Heading-->
                              <div class="item-box-blog-heading">
                                <a href="#" tabindex="0">
                                  <h5>'.$NombreApp .'</h5>
                                </a>
                              </div>
                              <!--Data-->
                              <!--Text-->
                              <div class="item-box-blog-text">
                                <p><!--Aqui donde se agrege el comentario de la app queda cool --></p>
                              </div>
                              <div class="mt"> <a href="'.$Url.'" tabindex="0" class="btn bg-blue-ui white read">Abrir App</a> </div>
                              <!--Read More Button-->
                            </div>
                          </div>
                        </div>
    ';
    }

    }else{

     echo '<div class="alert alert-Danger"> </div>';

    }

    ?>


                    </div>
                    <!--.row-->
                  </div>
                  <!--.item-->
                
                  <!--.item-->
                </div>
                <!--.carousel-inner-->
              </div>
              <!--.Carousel-->
            </div>
          </div>

 

        </div>
      </div>
   


<script type="text/javascript">

</script>
</body>
</html>


 <?php
        }else{

            header("Location:Inicio.php../../../../index.php");

        }
        ?>