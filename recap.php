<?php
require_once __DIR__.'/navbar.php';
require_once __DIR__.'/controllers/recap.php';   //'/controllers/recap.php';

$allPostAndTotal = [$civility,$lastName,$firstName,$situation,$raisons,$nbPartic,$email,$tel,$adress,$city,$cp,$price,$optionnel,$areaone,$areatwo,$total,$require_choise,$optionnel_choisis];
$_SESSION['data'] = $allPostAndTotal;

if ($total == 0) {
    header('Location: recapz.php');
}
?>
<div class="container">
recaputulatif :
    <p>Nombre de participant(s) :<?=$nbPartic?> </p>
    <ul>
        <li><?=$require_choise?></li>
        <?php if (!empty($optionnel_choisis)):?>
            <?php foreach ($optionnel_choisis as $op): ?>
                <li><?=$op?></li>
            <?php endforeach ?>
        <?php else: ?>
            <li>(sans options)</li>
        <?php endif ?>
    </ul>
</div>
<div>
    <form action="controllers\charge.php" method="post" id="payment-form">
    <h2>payer : <?=$total?></h2>
        <div class="form-row">
            <div id="card-element" class="form-control">
                    <!-- a Stripe Element will be inserted here. -->
            </div>
                
            <div id="card-errors" role="alert">
                    <!-- Used to display form errors -->
            </div>
        </div>
        <!-- <button>Submit Payment</button> -->
        <button>Submit Payment</button>
    </form>
<div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./src/js/charge.js"></script>