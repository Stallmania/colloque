<?php
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/Customer.php');
  require_once('models/Transaction.php');

  \Stripe\Stripe::setApiKey('sk_test_51Izg05HH8s2GTQjMSYIAVVhkuy97c7VyYnsn4a2cXrV7PhH2HOurpvSYJzJcCy92YEfmipIRQPKpre71pii7xeYO00VEF1rf5c');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $profession = $POST['profession'];
 $token = $POST['stripeToken'];

 var_dump($token);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

var_dump($customer);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => 13300,
  "currency" => "eur",
  "description" => "Place au colloque",
  "customer" => $customer->id
));

// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email,
  'profession' => $profession
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
//header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);