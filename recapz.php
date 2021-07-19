<?php $titel = 'Réservation - Colloque AFFECT 2021'?>
<?php
require_once __DIR__.'/navbar.php';
require_once __DIR__.'/controllers/recapz.php';//'controllers/recapz.php';
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
    <p>Votre commande a bien été prise en compte, vous recevrez un émail de confirmation.</p>
    </div>
</div>

<div class="space"><?php require_once __DIR__.'/footer.php' ?></div>
<script src="src/js/toggle.js"></script>
</body>
</html>
