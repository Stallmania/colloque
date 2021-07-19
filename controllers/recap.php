<?php
session_start();
require_once __DIR__.'/../config/config.php'; //'config/config.php';
require_once __DIR__.'/validateForm.php'; //'validateForm.php';
require_once __DIR__.'/validateLogic.php'; //'validateLogic.php';

$valid = new validateForm();

/********************************************************** */
/*-------Escape XSS----------*/

if (isset($_POST['send'])) {
    $civility = (isset($_POST['civilite'])?$valid->xssEscape(($_POST['civilite'])):null);
    $lastName = (isset($_POST['prenom'])?$valid->xssEscape(($_POST['prenom'])):null);
    $firstName = (isset($_POST['nom'])?$valid->xssEscape(($_POST['nom'])):null);
    $situation = (isset($_POST['situation'])?$valid->xssEscape(($_POST['situation'])):null);
    $raisons = (isset($_POST['raisons'])?$valid->xssEscape(($_POST['raisons'])):null);
    $nbPartic = (isset($_POST['nbPartic'])?$valid->xssEscape(($_POST['nbPartic'])):null);
    $email = $valid->xssEscape(($_POST['email']));
    $tel = $valid->xssEscape(($_POST['tel']));
    $adress = $valid->xssEscape(($_POST['adress']));
    $city = $valid->xssEscape(($_POST['ville']));
    $cp = $valid->xssEscape(($_POST['cp']));
    $price = (isset($_POST['price'])?$valid->xssEscape(($_POST['price'])):null);
    $optionnel = (isset($_POST['optionnel'])?($_POST['optionnel']):null);
    $areaone = (isset($_POST['areaone'])?$valid->xssEscape(($_POST['areaone'])):null);
    $areatwo = (isset($_POST['areatwo'])?$valid->xssEscape(($_POST['areatwo'])):null);
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

$nbPartic =  $logic->numberOfparticipants($nbPartic);

/********************************************************** */
/********** validate and return the required price ****************** */
$require_choise = $logic->validatePrice($price, $required_prices);


/********************************************************** */
/*----  validate, return liste of optional choises and calculate the sum -----*/
if (!empty($optionnel)) {
    $optionnel_choisis = [];
    foreach($optionnel as $option){
        $optionnel_choisis[] = $logic->validatePrice($option, $optional_prices);
    }
    $total = $nbPartic * ($price + array_sum($optionnel));
}else{
    $total = $nbPartic * $price ;
}











