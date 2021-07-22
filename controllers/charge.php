<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../lib/pdo_db.php';
require_once __DIR__ . '/../models/Clients.php';

$civility = $_SESSION['data'][0];
$lastName = $_SESSION['data'][1];
$firstName = $_SESSION['data'][2];
$situation = $_SESSION['data'][3];
$raisons = $_SESSION['data'][4];
$nbPartic = $_SESSION['data'][5];
$email = $_SESSION['data'][6];
$tel = $_SESSION['data'][7];
$adress = $_SESSION['data'][8];
$city = $_SESSION['data'][9];
$cp = $_SESSION['data'][10];
$price = $_SESSION['data'][11];
$optionnel = $_SESSION['data'][12];
$areaone = $_SESSION['data'][13];
$areatwo = $_SESSION['data'][14];
$total = $_SESSION['data'][15];


// required price to string
$price = array_search((int)$price, $required_prices);

// optional price to string
$keys = [];
if ($optionnel !== null) {
  foreach ($optionnel as $value) {
    $keys[] = (array_search((int)$value, $optional_prices));
    $optionnel = implode(", ", $keys);
  }
}



\Stripe\Stripe::setApiKey('sk_test_51Izg05HH8s2GTQjMSYIAVVhkuy97c7VyYnsn4a2cXrV7PhH2HOurpvSYJzJcCy92YEfmipIRQPKpre71pii7xeYO00VEF1rf5c');

$token = $_POST['stripeToken'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => strval($total) * 100,
  "currency" => "eur",
  "description" => "Place au colloque",
  "customer" => $customer->id
));

//////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////
$clientData = [
  'customerID' => $charge->customer,
  'transactionID' => $charge->id,
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
  'total' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status
];

// Instantiate Transaction
$client = new Clients();

// Add client To DB
$client->addClient($clientData);

// Redirect to success
header('Location: ../success.php?tid=' . $charge->id . '&product=' . $charge->description);
