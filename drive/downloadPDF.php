<?php
require_once 'conectarDrive.php';
require_once 'SetupSmarty.php';
session_start();
$client = getClient();
if (isset($_SESSION['token']) && isset($_GET['fileId'])) {
    $client = authenticate($client, $_SESSION['token']);
    if (!$client->isAccessTokenExpired()) {
        $fileId = $_GET['fileId'];
        $service = new Google_Service_Drive($client);
        $file = $service->files->get($fileId);
        $data = downloadFile($client, $file);
        $ruta = $file->getTitle().'.pdf';
        file_put_contents($ruta, $data);
        header('Content-Type: application/force-download');
        header('Content-Disposition: attachment; filename='.$ruta);
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: '.filesize($ruta));
        readfile($ruta);
        unlink($ruta);
}else{
         unset($_SESSION['token']);
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}
?>
