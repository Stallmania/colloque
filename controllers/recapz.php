<?php
session_start();
require_once  __DIR__ . "/../models/Clients.php";
require_once  __DIR__ . "/../config/config.php";

$civility = $_SESSION['data'][0] ;
$lastName = $_SESSION['data'][1] ;
$firstName = $_SESSION['data'][2] ;
$situation = $_SESSION['data'][3] ;
$raisons = $_SESSION['data'][4] ;
$nbPartic = $_SESSION['data'][5] ;
$email = $_SESSION['data'][6] ;
$tel = $_SESSION['data'][7] ;
$adress = $_SESSION['data'][8];
$city = $_SESSION['data'][9];
$cp = $_SESSION['data'][10];
$price = $_SESSION['data'][11];
$optionnel = $_SESSION['data'][12];
$areaone = $_SESSION['data'][13];
$areatwo = $_SESSION['data'][14];
$total = $_SESSION['data'][15];
$require_choise = $_SESSION['data'][16];
$optionnel_choisis = $_SESSION['data'][17];

// required price to string
$price = array_search((int)$price, $required_prices);

// optional price to string
$keys = [];
if ($optionnel !== null) {
    foreach ($optionnel as $value) {
        $keys [] = (array_search((int)$value,$optional_prices));
        $optionnel = implode(", ",$keys);
    }
}

$generateToken = 'free'.uniqid();

$clientData = [
    'customerID' => $generateToken,
    'transactionID' => '-',
    'civility' => $civility,
    'lastName' => $lastName,
    'firstName' => $firstName,
    'situation' => $situation,
    'raisons' => $raisons,
    'nbPartic' => $nbPartic,
    'email' => $email,
    'tel' => $tel,
    'adress' => $adress,
    'city' => $city,
    'cp' => $cp,
    'price' => $price,
    'optionnel' => $optionnel,
    'areaone' => $areaone,
    'areatwo' => $areatwo,
    'total' => $total,
    'currency' => '-',
    'status' => '-'
    ];

  // Instantiate Transaction
    $client = new Clients();

  // Add client To DB
    $client->addClient($clientData);
    ?>