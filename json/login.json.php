<?php
session_start();
header('content-type: application/json');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('../config/config.inc.php');
require(WAY."/include/autoload.inc.php");

$per = new Personne(1);

$tab = array();

if($per->check_email($_POST['email_per'])){
    if($per->check_login($_POST['email_per'], $_POST['password'])){
        $tab['reponses'] = true;
        $tab['messages']['texte'] = 'Combinaison valide';
        $tab['messages']['type'] = "success";

    }else{
        $tab['reponses'] = false;
        $tab['messages']['texte'] = 'Combinaison invalide';
        $tab['messages']['type'] = "danger";
    }
}else{
    $tab['reponses'] = false;
    $tab['messages']['texte'] = 'Combinaison invalide';
    $tab['messages']['type'] = "danger";
}

echo json_encode($tab)
?>