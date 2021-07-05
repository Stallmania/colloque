<?php
session_start();
$civility = $_SESSION['data'][0] ;
$lastName = $_SESSION['data'][1] ;
$firstName = $_SESSION['data'][2] ;
$situation = $_SESSION['data'][3] ;
$raisons = $_SESSION['data'][4] ;
$nbPartic = $_SESSION['data'][5] ;
$email = $_SESSION['data'][6] ;
$tel = $_SESSION['data'][7] ;
$adress = $_SESSION['data'][8] ;
$city = $_SESSION['data'][9] ;
$cp = $_SESSION['data'][10];
$price = $_SESSION['data'][11];
$optionnel = $_SESSION['data'][12];
$areaone = $_SESSION['data'][13];
$areatwo = $_SESSION['data'][14];
$total = $_SESSION['data'][15];

require_once('../vendor/autoload.php');
require_once('../config/db.php');
require_once('../lib/pdo_db.php');
require_once('../models/Customer.php');
require_once('../models/Transaction.php');

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

// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $firstName,
  'last_name' => $lastName,
  'email' => $email,
  'profession' => $situation
];

// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: ../success.php?tid='.$charge->id.'&product='.$charge->description);