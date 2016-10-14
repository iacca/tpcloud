<?php

require_once 'conectarDrive.php';
session_start();
$client = getClient();
if (isset($_SESSION['token']) && isset($_GET['fileId'])) {

    $client = authenticate($client, $_SESSION['token']);
    $fileId = $_GET['fileId'];
    print "<a class='logout' href='index.php?logout=1'>Logout</a>";
    print "<a class='listar' href='listar_archivos.php'>Volver</a>";

    $service = new Google_Service_Drive($client);
    $results = $service->permissions->listPermissions($fileId);
    
    
    if (count($results->getItems()) == 0) {
        print "No hay permisos.\n";
    } else {
    print "si hay permisos.\n";
    }
    
} else {
    header('Location: index.php');
}
?>
