<?php
require_once 'conectarDrive.php';
session_start();

if (isset($_SESSION['token'])) {
    $client = authenticate(getClient(), $_SESSION['token']);
    if (!$client->isAccessTokenExpired()) {
        if (isset($_POST['docName'])) {
            $nameFile = $_POST['docName'];
            $service = new Google_Service_Drive($client);

            $fileMetadata = new Google_Service_Drive_DriveFile(array(
                'name' => $nameFile,
                'mimeType' => 'application/vnd.google-apps.document'));
            $fileMetadata->setTitle($nameFile);

            $file = $service->files->insert($fileMetadata, array(
                'fields' => 'id', 'convert' => 'true'));

            header('Location: listar_archivos.php');
        }
    } else {
        unset($_SESSION['token']);
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}