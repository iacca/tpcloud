<?php
require_once 'conectarDrive.php';
require_once 'SetupSmarty.php';
session_start();
$client = getClient();
if (isset($_SESSION['token']) && isset($_POST['email']) && isset($_SESSION['file'])) {

    $client = authenticate($client, $_SESSION['token']);
    if (!$client->isAccessTokenExpired()) {
    $email = $_POST['email'];
    
    $service = new Google_Service_Drive($client);
    $file = $_SESSION['file'];
    $fileId = $file->getId();
    shareFileId($client, $fileId, $email);
    unset($_SESSION['file']);
    header("Location: manageFile.php?fileId=$fileId");
    }else{
         unset($_SESSION['token']);
        header('Location: index.php');
    }
    
} else {
    header('Location: index.php');
}
?>
