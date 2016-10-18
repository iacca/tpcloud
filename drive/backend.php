<?php
require_once 'conectarDrive.php';
session_start();

if (isset($_SESSION['token'])) {
    $client = authenticate(getClient(), $_SESSION['token']);
    if (!$client->isAccessTokenExpired()) {
        require_once 'SetupSmarty.php';
        $user = getUserInfo($client);
        $setup = getSmarty();
        $setup->assign('nombre',$user->name);
        $setup->assign('lugar', 'menu');
        $setup->display('backend.tpl');
    } else {
        unset($_SESSION['token']);
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}
?>