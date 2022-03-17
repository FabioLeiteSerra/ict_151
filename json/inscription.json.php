<?php
session_start();
header('content-type: application/json');

require('./../config/config.inc.php');
require(WAY."/include/autoload.inc.php");

$per = new Personne();

$tab = array();

if(!$per->check_email($_POST['email_per'])){
    $per->add($_POST);
    $tab['reponse'] = true;
    $tab['messages']['texte'] = "Bienvenue, utilisez vos identifiants pour vous connecter";
    $tab['messages']['type'] = "success";
}else{
    $tab['reponse'] = false;
    $tab['messages']['texte'] = "Cet email est déjà utilisé !";
    $tab['messages']['type'] = "danger";
}

echo json_encode($tab);
?>