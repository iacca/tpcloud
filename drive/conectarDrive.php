<?php
require_once 'google-api-php-client/src/Google/Client.php';
require_once "google-api-php-client/src/Google/Service/Oauth2.php";
require_once "google-api-php-client/src/Google/Service/Drive.php";

function getClient(){
    $client = new Google_Client();
    // Get your credentials from the console
    $client->setClientId('1082901596035-nt366r17h3lo51lhktdgukmjg5qttgd7.apps.googleusercontent.com');
    $client->setClientSecret('XGNfTz9llyrGg4PSVBCP_m1z');
    $client->setRedirectUri('http://'.$_SERVER['HTTP_HOST'].'/drive/listar_archivos.php');
    $client->setScopes(array('https://www.googleapis.com/auth/drive'));
    
    return $client;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
