<?php
require_once 'mvc/model/Login.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de 
//crear nuevas instancias, lo que ahorra consumo de recursos 

$nuevoSingleton = Login::singletonLogin();

if (isset($_POST['nick'])) {
    $nick = $_POST['nick'];
    $password = $_POST['password'];
    //accedemos al método usuarios y los mostramos
    
    $usuario = $nuevoSingleton->validarUsuario($nick, $password);
  
    if ($usuario == TRUE ) {
 //     header("Location:mvc\view/Admin\InicioExterno.php");
     $proxyRestUri ='https://win-suubo8fmu6j:4243/qps/qap';
     $QRSurl = $url = $proxyRestUri . '/ticket?xrfkey=0123456789abcdef'; 
     $QRSCertfile = "C:/xampp/htdocs/certificates/client.pem";
     $QRSCertkeyfile = "C:/xampp/htdocs/certificates/client_key.pem";

     $userDirectory = 'AD';
     $selectedUser = $_POST["nick"];
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
        header("location:https://192.168.1.4/qap/extensions/Externo/Externo.php?qlikTicket=".$ticket); 

      die();
     }else {
        echo '<script> alert("Usuario o clave incorrectos");</script>';    
        echo '<script>window.location="index.php"; </script>';    
    }
}
?>