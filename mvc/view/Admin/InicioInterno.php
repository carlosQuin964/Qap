<?php
 
$proxyRestUri ='https://win-suubo8fmu6j:4243/qps/qap';
$QRSurl = $url = $proxyRestUri . '/ticket?xrfkey=0123456789abcdef'; 
$QRSCertfile = "C:/xampp/htdocs/certificates/client.pem";
$QRSCertkeyfile = "C:/xampp/htdocs/certificates/client_key.pem";

$userDirectory = 'QLIK';
$selectedUser = $_GET["user"];
$reqFields = array('UserDirectory' => $userDirectory, 'UserId' => $selectedUser, 'Attributes' => array());//, 'Targetld' => $targetld);


$request = curl_init();
        $options = array(
          CURLOPT_URL => $QRSurl,
          CURLOPT_SSLCERT => $QRSCertfile,
         //CURLOPT_SSLCERTPASSWD => $certPassword,
          CURLOPT_SSLKEY => $QRSCertkeyfile,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_SSL_VERIFYHOST => false,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_HTTPHEADER => array('X-Qlik-Xrfkey:0123456789abcdef', 'Content-Type: application/json'),
          CURLOPT_POSTFIELDS => json_encode($reqFields),
        );
        curl_setopt($request, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt_array($request, $options);
        $response = curl_exec($request);
        //print_r($response);
        if (!$response) {
            if ($errno = curl_errno($request)) {
                $errorMessage = curl_strerror($errno);
                echo "cURL error ({$errno}):\n {$errorMessage}";
            }
            echo "\r\n\r\n";
            foreach ($options as $key => $value) {
                echo "$key = $value\r\n";
            }
            echo "\r\n\r\n";
        } else {
           $decodedJSON = json_decode($response);
           $ticket = $decodedJSON->{'Ticket'};
        }
        curl_close($request);


if(isset($_GET["user"])){
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
    <script src="../js/testHTML.js"></script>

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
          <a class="navbar-brand" href="#">Bienvenido:  <?php echo $_GET["user"]  ?></a>
        </div>
   
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
                <h2 class="text-center">Salarios </h2>
                <ul class="list-inline text-center">
                    <li >Qlik|</li>
                    <li>Manar |</li>
                    <li>Epm |</li>
                </ul>
            </div>
            <br>
            
                
    </div> <!-- /row -->
    <h1>token : <?php echo $ticket; ?></h1>
    <!-- /Poner aqui los Gaficos  -->
            <div id="products" class="row view-group center">

             <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        
                         <iframe src="https://192.168.1.4/qap/single/?QlikTicket='<?php  $ticket?>'&appid=1b903f4c-6f7b-4238-94ce-e8a1bcf9070b&obj=qwpJw&opt=ctxmenu,currsel" style="border:none;width:100%;height:100%;"></iframe>
                        
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>

                  <div class="item col-xs-6 col-lg-6">
                        <div class="thumbnail card">
                        <div class="img-event">
                            <?php echo '<iframe src="https://192.168.1.4/qap/single/?QlikTicket='. $ticket .'&appid=1b903f4c-6f7b-4238-94ce-e8a1bcf9070b&obj=qwpJw&opt=ctxmenu,currsel" style="border:none;width:100%;height:100%;"></iframe>'?>
                        </div>
                        <div class="caption card-body">
         
                              
                            </div>
                        </div>
                    </div>


              <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <iframe src="https://192.168.1.4/single/?appid=1b903f4c-6f7b-4238-94ce-e8a1bcf9070b&obj=qwpJw&opt=ctxmenu,currsel" style="border:none;width:100%;height:100%;"></iframe>
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
                            <iframe src="https://192.168.1.4/qap/single/?appid=1b903f4c-6f7b-4238-94ce-e8a1bcf9070b&obj=AtJTmYD&opt=ctxmenu,currsel" style="border:none;width:100%;height:100%;"></iframe>
                        </div>
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>

               <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <iframe src="https://192.168.1.4/qap/single/?appid=1b903f4c-6f7b-4238-94ce-e8a1bcf9070b&obj=XJMgp&opt=ctxmenu,currsel" style="border:none;width:100%;height:100%;"></iframe>
                        </div>
                        <div class="caption card-body">
                          
                        </div>
                    </div>
             </div>

             <div class="item col-xs-6 col-lg-6">
                <div class="thumbnail card">
                        <div class="img-event">
                            <iframe src="https://192.168.1.4/qap/single/?appid=1b903f4c-6f7b-4238-94ce-e8a1bcf9070b&obj=vGQsYrS&opt=ctxmenu,currsel" style="border:none;width:100%;height:100%;"></iframe>
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
        }
        else{

            header("Location:homeAdmin.php../../../../index.php");

        }
         
        //}
        ?>


