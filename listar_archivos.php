<?php
require_once 'conectarDrive.php';
session_start();
$client = getClient();

if (isset($_GET['code'])) {
        $client->authenticate($_GET['code']);  
        $_SESSION['token'] = $client->getAccessToken();
        
        print "<a class='logout' href='index.php?logout=1'>Logout</a>";
        
      $service = new Google_Service_Drive($client);
      $results = $service->files->listFiles(array('q' => "mimeType != 'application/vnd.google-apps.folder'"));
      if (count($results->getItems()) == 0) {
        print "No files found.\n";
      } else {
        print "<table border='1'><thead><th>Archivo</th></thead>";
        foreach ($results->getItems() as $file) {
          printf("<tr><td>%s</td></tr>", $file->getTitle());
        }
        print "</table>";
      }
        
        
}else{
    header('Location: index.php');
}