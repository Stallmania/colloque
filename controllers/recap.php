<?php
session_start();
require_once './config/config.php';
require_once 'validateForm.php';
require_once 'validateLogic.php';

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
    $areaone = (isset($_POST['areaone'])?($_POST['areaone']):null);
    $areatwo = (isset($_POST['areatwo'])?($_POST['areatwo']):null);
}
else{
    header('Location: ../reservation.php');
}
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


/********************************************************** */
/*-------Max and min char length authorized and validation for every field----------*/
$valid = new validateForm();
$valid->validatingNomberOfChar($lastName,2,50);
$valid->validateName($lastName);

$valid->validatingNomberOfChar($firstName,2,50);
$valid->validateName($firstName);

$valid->validatingNomberOfChar($situation,2,100);
$valid->validateName($situation);

$valid->validatingNomberOfChar($raisons,1,100);
$valid->validateNameOfCompany($raisons);

$valid->validatingNomberOfChar($nbPartic,1,2);

$valid->validatingNomberOfChar($email,5,100);
$valid->validateEmail($email);

$valid->validatingPhone($tel);

$valid->validatingNomberOfChar($adress,3,100);
$valid->validateNameOfCompany($adress);

$valid->validatingNomberOfChar($city,2,60);
$valid->validateName($city);

$valid->validatingNomberOfChar($cp,5,5);
$valid->cp($cp);


/******************************************************* */
/*--------ensure that required fields are filled-----*/
$logic = new validateLogic();
$logic->requiredRadio($civility, $civilities);
$logic->requiredRadio($price, $required_prices);


$requiredFielsPhysic = [$lastName,$firstName,$situation,$email,$tel,$adress,$city,$cp,$price];
$requiredFielsLegal = [$raisons,$nbPartic,$email,$tel,$adress,$city,$cp,$price];

if ($civility === 'mme' || $civility === 'monsieur') {
    $logic->fieldNotEmpty($requiredFielsPhysic);
}

if ($civility === 'raison') {
    $logic->fieldNotEmpty($requiredFielsLegal);
}

$nbParticipants =  $logic->numberOfparticipants($nbPartic);

/********************************************************** */
/********** validate and return the required price ****************** */
$require_choise = $logic->validatePrice($price, $required_prices);


/********************************************************** */
/*----  validate and return liste of optional choises -----*/
if (!empty($optionnel)) {
    $optionnel_choisis = [];
    foreach($optionnel as $option){
        $optionnel_choisis[] = $logic->validatePrice($option, $optional_prices);
    }
}else{
    $optionnel = [0];
}

/**********************************/
/******* sum ************* */
$total = $nbParticipants * ($price + array_sum($optionnel));
return $total;





