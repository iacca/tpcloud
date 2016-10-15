<?php
require_once 'conectarDrive.php';
require_once 'SetupSmarty.php';
session_start();
$client = getClient();

if(isset($_GET["logout"])){
  session_destroy();
  header('Location: index.php');
}
if (!$client->getAccessToken() && !isset($_SESSION['token'])) {
    $authUrl = $client->createAuthUrl();
    $setup = getSmarty();
    $setup->assign('authUrl',$authUrl);
    $setup->display('index.tpl');
}else{
    header('Location: backend.php');
}