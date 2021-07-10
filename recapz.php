<?php
require_once __DIR__.'/navbar.php';
require_once __DIR__.'/controllers/recapz.php';//'controllers/recapz.php';
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
    <p>Votre commande est prise en compte, vous recevrai un Email de confirmation.</p>
</div>