<?php

require_once 'google-api-php-client/src/Google/Client.php';
require_once "google-api-php-client/src/Google/Service/Oauth2.php";
require_once "google-api-php-client/src/Google/Service/Drive.php";

function getClient() {
    $client = new Google_Client();
    // Get your credentials from the console
    $client->setClientId('1082901596035-ld3emqsfi5phg07kame7qhm92abn5cui.apps.googleusercontent.com');
    $client->setClientSecret('JO0UEs_3LRrRot52XJxhZ01v');
    $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/drive/oauth2callback.php');
    $client->setScopes(array(
        'https://www.googleapis.com/auth/drive',
        'https://www.googleapis.com/auth/userinfo.email'));

    return $client;
}

function authenticate($client, $token) {
    $client->setAccessToken($token);
    return $client;
}

function listarArchivos($client) {
    set_time_limit(0);
    $userInfo = getUserInfo($client);
    $emailAddress = $userInfo->getEmail();

    $service = new Google_Service_Drive($client);
    $results = $service->files->listFiles(array('q' => "mimeType != 'application/vnd.google-apps.folder' and ( '$emailAddress' in owners or '$emailAddress' in writers)"));
    $listFiles = array();
    foreach ($results->getItems() as $file) {
        $date = new DateTime($file->getModifiedDate());
        $newFile = new LocalFile($file->getTitle(), $file->getId(), $date->format('Y-m-d H:i:s'));
        array_push($listFiles, $newFile);
    }

    return $listFiles;
}

function listarPermisos($client, $fileId) {
    $service = new Google_Service_Drive($client);
    $results = $service->permissions->listPermissions($fileId);
    $listPermissions = array();
    foreach ($results->getItems() as $permission) {
        if ($permission->role != 'owner') {
            array_push($listPermissions, $permission);
        }
    }

    return $listPermissions;
}

function getUserInfo($client) {
    $userInfoService = new Google_Service_Oauth2($client);
    try {
        $userInfo = $userInfoService->userinfo->get();

        if ($userInfo != null && $userInfo->getId() != null) {
            return $userInfo;
        } else {
            echo "No user ID";
        }
    } catch (Exception $e) {
        print 'An error occurred: ' . $e->getMessage();
    }
}
