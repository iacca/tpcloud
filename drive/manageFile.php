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
    
    $permissions = listarPermisos($client, $fileId);
    
    $setup = getSmarty();
    $setup->assign('lugar','permisos');
    $setup->assign('nombre', $file->getTitle());
    $setup->assign('permissions', $permissions);
    $setup->display('backend.tpl'); 

    }else{
         unset($_SESSION['token']);
        header('Location: index.php');
    }
    
} else {
    header('Location: index.php');
}
?>
