<?php
require_once 'google-api-php-client/src/Google/Client.php';
require_once "google-api-php-client/src/Google/Service/Oauth2.php";
require_once "google-api-php-client/src/Google/Service/Drive.php";


 session_start();
 if(isset($_GET["logout"])){
  session_destroy();
 }

    $client = new Google_Client();
    // Get your credentials from the console
    $client->setClientId('1082901596035-nt366r17h3lo51lhktdgukmjg5qttgd7.apps.googleusercontent.com');
    $client->setClientSecret('XGNfTz9llyrGg4PSVBCP_m1z');
    $client->setRedirectUri('http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']);
    $client->setScopes(array('https://www.googleapis.com/auth/drive'));
    $authUrl = $client->createAuthUrl();
    if (isset($_GET['code'])) {
        $client->authenticate($_GET['code']);  
        $_SESSION['token'] = $client->getAccessToken();
       
    }
    if (!$client->getAccessToken() && !isset($_SESSION['token'])) {
        $authUrl = $client->createAuthUrl();
        print "<a class='login' href='$authUrl'>Conectar</a>";
    }        
   if (isset($_SESSION['token'])) {
       print "<a class='logout' href='".$_SERVER['PHP_SELF']."?logout=1'>Salir</a><br>";
      $client->setAccessToken($_SESSION['token']);
      $service = new Google_Service_Drive($client);
      $results = $service->files->listFiles();
      if (count($results->getItems()) == 0) {
        print "No files found.\n";
      } else {
        print "<table border='1'><thead><th>Archivo</th></thead>";
        foreach ($results->getItems() as $file) {
          printf("<tr><td>%s</td></tr>", $file->getTitle());
        }
        print "</table>";
      }
    }
?>