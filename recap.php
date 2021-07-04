<?php
require_once 'header.php';
require_once 'controllers/recap.php';
?>

<div class="recap">
recaputulatif :

<p>Nombre de participant(s) :<?=$nbParticipants?> </p>
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

    <form action="" method="post" id="payment-form">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./src/js/charge.js"></script>