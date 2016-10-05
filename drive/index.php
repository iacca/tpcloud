<?php
require_once 'conectarDrive.php';
session_start();
$client = getClient();


if(isset($_GET["logout"])){
  session_destroy();
  header('Location: index.php');
 }
if (!$client->getAccessToken() && !isset($_SESSION['token'])) {
        $authUrl = $client->createAuthUrl();
        print "<a class='login' href='$authUrl'>Login</a>";
}