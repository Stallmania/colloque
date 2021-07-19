<?php $titel = 'Réservation - Colloque AFFECT 2021'?>
<?php
require_once __DIR__.'/navbar.php';
require_once __DIR__.'/controllers/recap.php';   //'/controllers/recap.php';

$allPostAndTotal = [$civility,$lastName,$firstName,$situation,$raisons,$nbPartic,$email,$tel,$adress,$city,$cp,$price,$optionnel,$areaone,$areatwo,$total,$require_choise,$optionnel_choisis];
$_SESSION['data'] = $allPostAndTotal;

if ($total == 0) {
    header('Location: recapz.php');
}
?>
<div class="container allRecap">
    <div class="recap">
        <h4>Votre récapitulatif:</h4>
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
    <div class="payment">
        <form action="controllers\charge.php" method="post" id="payment-form">
            <h2>Payer : <?=$total?> €</h2>
            <div class="form-row">
                <div id="card-element" class="form-control">
                        <!-- a Stripe Element will be inserted here. -->
                </div>
                    
                <div id="card-errors" role="alert">
                        <!-- Used to display form errors -->
                </div>
            </div>
            <!-- <button>Submit Payment</button> -->
            <button>Payer</button>
        </form>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="./src/js/charge.js"></script>
<div class="space"></div>

<div class="space"><?php require_once __DIR__.'/footer.php' ?></div>
<script src="src/js/toggle.js"></script>
</body>
</html>

