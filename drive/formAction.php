<?php

require_once 'conectarDrive.php';
session_start();
$client = getClient();

if (isset($_SESSION['token']) && isset($_POST['docName'])) {

    $client = authenticate($client, $_SESSION['token']);
    $nameFile = $_POST['docName'];
    $service = new Google_Service_Drive($client);

    $fileMetadata = new Google_Service_Drive_DriveFile(array(
        'name' => $nameFile,
        'mimeType' => 'application/vnd.google-apps.document'));
    $fileMetadata->setTitle($nameFile);

    $file = $service->files->insert($fileMetadata, array(
        'fields' => 'id', 'convert' => 'true'));

    header('Location: listar_archivos.php');
} else {
    header('Location: index.php');
}