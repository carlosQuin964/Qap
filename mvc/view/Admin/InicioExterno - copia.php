<?php
require_once '../../model/Login.php';

  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

 if(isset($_SESSION['nombre'])){



 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Inicio QAP</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        .navbar{margin-bottom:0;}
section{width:100%; float:left;}
.banner-section{background-image:url("https://pbs.twimg.com/media/C2J48xhWgAA1zRC.jpg"); background-size:cover; height: 435px; left: 0; position: absolute; top: 0; background-position:0;}
.post-title-block{padding:90px 0;}
.post-title-block h1 {color:#12B34F; font-size: 85px; font-weight: bold; text-transform: capitalize;}
.post-title-block h2 {color:#12B34F; font-size: 55px; font-weight: bold; text-transform: capitalize;}
.post-title-block li{font-size:20px; color: #000000;}
.image-block{float:left; width:100%; margin-bottom:10px;}
.footer-link{float:left; width:100%; background:#222222; text-align:center; padding:30px;}
.footer-link a{color:#A9FD00; font-size:18px; text-transform:uppercase;}
.margen{margin-top:70px;}

.view-group {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: row;
    flex-direction: row;
    padding-left: 0;
    margin-bottom: 0;
}
.thumbnail
{
    margin-bottom: 30px;
    padding: 0px;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    border-radius: 0px;
}

.item.list-group-item
{
    float: none;
    width: 100%;
    background-color: #fff;
    margin-bottom: 30px;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    max-width: 100%;
    padding: 0 1rem;
    border: 0;
}
.item.list-group-item .img-event {
    float: left;
    width: 30%;
}

.item.list-group-item .list-group-image
{
    margin-right: 10px;
}
.item.list-group-item .thumbnail
{
    margin-bottom: 0px;
    display: inline-block;
}
.item.list-group-item .caption
{
    float: left;
    width: 70%;
    margin: 0;
}

.item.list-group-item:before, .item.list-group-item:after
{
    display: table;
    content: " ";
}

.item.list-group-item:after
{
    clear: both;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
 <!-- Static navbar -->
    <nav class="navbar navbar-inverse  navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bienvenido :  <?php echo $_SESSION['nombre'];  ?></a>
        </div>
      <!--/  <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li class="active"><a href="./">Static top <span class="sr-only">(current)</span></a></li>
            <li><a href="../navbar-fixed-top/">Fixed top</a></li>
          </ul>
        </div>

        /.nav-collapse -->
<ul class="nav navbar-nav navbar-right">
<a class="navbar-brand" href="../../../../index.php">Salir </a>
</ul>
      </div>

    </nav>

<section class="banner-section">
</section>
<section class="post-content-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 post-title-block">               
                <h1 class="text-center">QAP</h1>
                <h2 class="text-center">Hidruitango</h2>
                <ul class="list-inline text-center">
                    <li >Qlik|</li>
                    <li>Manar |</li>
                    <li>Epm |</li>
                </ul>
            </div>
            <br>
            
                
    </div> <!-- /row -->

    <!-- /Poner aqui los Gaficos  -->
         <div id="products" class="row view-group center">

             <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>

                  <div class="item col-xs-6 col-lg-6">
                        <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
         
                              
                            </div>
                        </div>
                    </div>


              <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>
           </div>

           <!-- Cierra Grupo de 3 -->


                <div id="products" class="row view-group margen">
               <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>

               <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>

             <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
                        </div>
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>



  </div>
</section>

<section class="footer-link"><a href="https://manar.com.co/" target="_blank">Manar Tecnologies</a></section>
      
<script type="text/javascript">

</script>
</body>
</html>


<?php
        }else{

            header("Location:homeAdmin.php../../../../index.php");

        }
        ?>