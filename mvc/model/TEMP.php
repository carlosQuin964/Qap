
        $proxyRestUri = 'https://myqliksense-url.com:4243/qps';
        $reqFields = array('UserDirectory' => $userDirectory, 'UserId' => $selectedUser, 'Attributes' => array());//, 'Targetld' => $targetld);
        $url = $proxyRestUri . '/ticket?xrfkey=ABCDEFG123456789';

        $certFile = "/home/docker/web/localhost.pem";


        $keyFile   = "/home/docker/web/localhost_key.pem";


        $certPassword = 'secret';


        $request = curl_init();


        $options = array(


          CURLOPT_URL => $url,


          CURLOPT_SSLCERT => $certFile,


          CURLOPT_SSLCERTPASSWD => $certPassword,


          CURLOPT_SSLKEY => $keyFile,


          CURLOPT_RETURNTRANSFER => true,


          CURLOPT_FOLLOWLOCATION => true,


          CURLOPT_SSL_VERIFYHOST => false,


          CURLOPT_SSL_VERIFYPEER => false,


          CURLOPT_HTTPHEADER => array('X-Qlik-Xrfkey:ABCDEFG123456789', 'Content-Type: application/json'),


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




        return $ticket;