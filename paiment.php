<?php
if(isset($_POST['paiement'])){
    require_once('vendor/autoload.php');
    $prix = (float)$_POST['paiement'];

    // On instancie Stripe
    \Stripe\Stripe::setApiKey('sk_test_51Izg05HH8s2GTQjMSYIAVVhkuy97c7VyYnsn4a2cXrV7PhH2HOurpvSYJzJcCy92YEfmipIRQPKpre71pii7xeYO00VEF1rf5c');

    $intent = \Stripe\PaymentIntent::create([
        'amount' => $prix*100,
        'currency' => 'eur'
    ]);
}else{
    header('Location: /index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paiement</title>
</head>
<body>
    <div class="container">
    <img src="src/images/logo_5.png" alt="logo" style="max-width: 100%;">
        <form method="post"  style="max-width: 500px; margin: 0 auto;">
            <div id="errors"></div><!--Contiendra les messages d'erreur de paiement-->
            <input type="text" id="cardholder-name" placeholder="Titulaire de la carte">

            <div id="card-elements"></div><!--Contiendra le formulaire de saisie des informations de carte-->
            <div id="card-errors" role="alert"></div><!--Contiendra les erreurs relatives à la carte-->
            <button id="card-button" type="button" data-secret="<?= $intent['client_secret'] ?>">Procéder au paiement</button>
        </form>
    </div>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="src/js/stripe.js"></script>
    </body>
</html>