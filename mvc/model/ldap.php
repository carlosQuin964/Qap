<?php

  $ldap_dn = 'qlik'.chr(92).$_POST["username"];
  $ldap_user = $_POST["username"];
  $ldap_password = $_POST["password"];
  $ldap_con = ldap_connect("ldap://qlik.local/");
  ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);
  $app_seleccionada = $_POST["app"];
  
  
$proxyRestUri ='https://win-suubo8fmu6j:4243/qps/qap';
$QRSurl = $url = $proxyRestUri . '/ticket?xrfkey=0123456789abcdef'; 
$QRSCertfile = "C:/xampp/htdocs/certificates/client.pem";
$QRSCertkeyfile = "C:/xampp/htdocs/certificates/client_key.pem";

$userDirectory = 'QLIK';
$selectedUser = $_POST["username"];
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
        

        
 
   if(@ldap_bind($ldap_con,$ldap_dn,$ldap_password)){

        if($ldap_user=='marcos.herrera' || $ldap_user=='julian.gonzalez' ){
               if($app_seleccionada == "Nomina"){
                 header("location:https://192.168.1.4/qap/extensions/Interno/Interno.html?qlikTicket=".$ticket); 
               }
               elseif($app_seleccionada == "Monitoreo"){
                 header("location:https://192.168.1.4/qap/extensions/Monitoreo/Monitoreo.html?qlikTicket=".$ticket); 
               }
            }   
        else {
         
               if($app_seleccionada == "Nomina"){
                 header("location:https://192.168.1.4/qap/extensions/Interno/Interno.html?qlikTicket=".$ticket); 
               }
               elseif($app_seleccionada == "Monitoreo"){
                 echo '<script> alert("Usted no tiene permiso para acceder a esta App");</script>'; 
                 echo '<script>window.location="../../index.php"; </script>'; 
               }
            }
         
   }
   else{
     echo '<script> alert("Usuario o clave incorrectos");</script>';    
     echo '<script>window.location="../../index.php"; </script>'; 
   }

?>

