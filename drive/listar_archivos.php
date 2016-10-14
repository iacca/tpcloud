<?php
require_once 'conectarDrive.php';
require_once 'LocalFile.php';
session_start();
$client = getClient();
if (isset($_SESSION['token'])) {
    $client = authenticate($client, $_SESSION['token']);
    
    print "<a class='logout' href='index.php?logout=1'>Logout</a>";
    print "<a class='newDoc' href='nuevoDocumento.php'>Nuevo Documento</a>";

    $results = listarArchivos($client);
    if (count($results) == 0) {
        print "No files found.\n";
    } else {
        print "<table border='1'><thead><th>Archivo</th><th>Operación</th></thead>";
        foreach ($results as $file) {
            printf("<tr><td>%s</td><td><a class='newDoc' href='manageFile.php?fileId=%s'>Permisos</a></td></tr>", $file->fileName,$file->fileId);
            
        }
        print "</table>";
    }
} else {
    header('Location: index.php');
}

?>