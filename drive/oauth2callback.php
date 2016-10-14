<?php
require_once 'conectarDrive.php';
session_start();
$client = getClient();

if (isset($_GET['code'])) {

    $client->authenticate($_GET['code']);
    $_SESSION['token'] = $client->getAccessToken();
    $_SESSION['code'] = $_GET['code'];
    header('Location: listar_archivos.php');
   
} else {
    header('Location: index.php');
}
