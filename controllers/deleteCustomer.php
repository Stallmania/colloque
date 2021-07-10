<?php
require_once __DIR__.'/../models/Clients.php';

$client = new Clients();

if(isset($_GET['clientID'])){
    $id_client = $_GET['clientID'];

    $isDeleted = $client->deleteCus($id_client);
}else{
    $isDeleted = true;
}

if ($isDeleted) {
    header('Location: ./personne.php');
    exit;
}

?>