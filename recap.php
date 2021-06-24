<?php
if (isset($_GET['price'])) {
    $Price = $_GET['price'];
}else{
    echo 'merci de choisir un champs';
}

$sum = 0;
if (isset($_GET['optionnel'])) {
    $sumOptionnels = $_GET['optionnel'];
    if (is_array($sumOptionnels)) {
        foreach ($sumOptionnels as $Optionnel) {
            $sum += (int) $Optionnel;
        }
    }else{
        $sum = $sumOptionnels;
    }
}

$sum = (int) $Price + (int) $sum;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        <form action="paiment.php" method="post">
            <h2>Votre total est de <strong><?=$sum ?></strong>€</h2>
            <input type="hidden" name="paiement"  id="prix" value="<?=$sum ?>">
            <button class="button is-link">paiement</button>
        </form>
    </div>
</body>
</html>