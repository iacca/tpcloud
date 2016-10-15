<?php
require_once 'conectarDrive.php';
require_once 'LocalFile.php';
require_once 'SetupSmarty.php';
session_start();

if (isset($_SESSION['token'])) {
    $client = authenticate(getClient(), $_SESSION['token']);
    if (!$client->isAccessTokenExpired()) {
    $files = listarArchivos($client);
    $setup = getSmarty();
    
    $setup->assign('files',$files);
    $setup->assign('lugar','lista');
    $setup->display('backend.tpl'); 
    }else{
         unset($_SESSION['token']);
        header('Location: index.php');
    }    
} else {
    header('Location: index.php');
}

?>