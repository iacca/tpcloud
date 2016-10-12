<?php
require_once 'google-api-php-client/src/Google/Client.php';
require_once "google-api-php-client/src/Google/Service/Oauth2.php";
require_once "google-api-php-client/src/Google/Service/Drive.php";

function getClient(){
    $client = new Google_Client();
    // Get your credentials from the console
    $client->setClientId('1082901596035-ld3emqsfi5phg07kame7qhm92abn5cui.apps.googleusercontent.com');
    $client->setClientSecret('JO0UEs_3LRrRot52XJxhZ01v');
    $client->setRedirectUri('http://'.$_SERVER['HTTP_HOST'].'/drive/oauth2callback.php');
    $client->setScopes(array('https://www.googleapis.com/auth/drive'));
    
    return $client;
}

function authenticate($client, $token){
    $client->setAccessToken($token);
    return $client;
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

