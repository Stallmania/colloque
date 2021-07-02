<?php
require_once 'validateForm.php';
require_once '../config/config.php';

if (isset($_POST['send'])) {
    $civility = (isset($_POST['civilite'])?($_POST['civilite']):null);
    $lastName = (isset($_POST['prenom'])?($_POST['prenom']):null);
    $firstName = (isset($_POST['nom'])?($_POST['nom']):null);
    $situation = (isset($_POST['situation'])?($_POST['situation']):null);
    $raisons = (isset($_POST['raisons'])?($_POST['raisons']):null);
    $nbPartic = (isset($_POST['nbPartic'])?($_POST['nbPartic']):null);
    $email = ($_POST['email']);
    $tel = ($_POST['tel']);
    $adress = ($_POST['adress']);
    $city = ($_POST['ville']);
    $cp = ($_POST['cp']);
    $price = (isset($_POST['price'])?($_POST['price']):null);
    $optionnel = (isset($_POST['optionnel'])?($_POST['optionnel']):null);
}
$allPosts = [$civility,$lastName,$firstName,$situation,$raisons,$nbPartic,$email,$tel,$adress,$city,$cp,$price,$optionnel];
/********************************************************** */
/*------consistency between civility and input fields---*/
if (isset($_POST['send'])){
    if (($lastName || $firstName || $situation) && ($civility === 'raison')){
        header('Location: ../reservation.php');
    }
    if (($raisons || $nbPartic) && (($civility === 'mme'|| $civility === 'monsieur'))){
        header('Location: ../reservation.php');
    }
}

$requiredFielsPhysic = [$lastName,$firstName,$situation,$email,$tel,$adress,$city,$cp,$price];
$requiredFielsLegal = [$raisons,$nbPartic,$email,$tel,$adress,$city,$cp,$price];


/********************************************************** */
/*-------Max and min char length authorized--------------------------*/
$valid = new validateForm();
$valid->validatingNomberOfChar($lastName,2,50);
$valid->validatingNomberOfChar($firstName,2,50);
$valid->validatingNomberOfChar($situation,2,100);
$valid->validatingNomberOfChar($nbPartic,1,2);
$valid->validatingNomberOfChar($email,5,100);
$valid->validatingNomberOfChar($tel,10,14);
$valid->validatingNomberOfChar($adress,3,100);
$valid->validatingNomberOfChar($city,2,60);
$valid->validatingNomberOfChar($cp,5,5);


/********************************************************** */
/*--------ensure that required fields are filled-----*/
$valid->requiredRadio($civility, $civilities);
$valid->requiredRadio($price, $required_prices);

if ($civility === 'mme' || $civility === 'monsieur') {
    $valid->fieldNotEmpty($requiredFielsPhysic);
}

if ($civility === 'raison') {
    $valid->fieldNotEmpty($requiredFielsLegal);
}

$nbParticipants =  $valid->numberOfparticipants($nbPartic);

/********************************************************** */
/********** validate and return the required price ****************** */
$require_choise = $valid->validatePrice($price, $required_prices);

var_dump($require_choise);

/********************************************************** */
/*----  validate and return liste of optional choises -----*/
if (!empty($optionnel)) {
    foreach($optionnel as $option){
        $optionnel_choisis = $valid->validatePrice($option, $optional_prices);
        var_dump($optionnel_choisis);
    }
}else{
    $optionnel = [0];
}

/**********************************/
/******* sum ************* */
$total = $nbParticipants * ($price + array_sum($optionnel));
var_dump($total);

