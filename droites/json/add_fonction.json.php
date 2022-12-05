<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once(WAY."/include/autoload.inc.php");

$fnc = new Fonction();

if(!$fnc->check_abr($_POST['abr_fnc'])) {
    $id = $fnc->add($_POST);
    $fnc->set_id_fnc($id);
    $fnc->init();

    $tab['reponse'] = true;
    $tab['message']['texte'] = "la fonction" . $fnc->get_nom() . " (" . $fnc->get_abr() . ") $ bien été ajoutée";
    $tab['message']['type'] = "success";
}else{
    $tab['reponse'] = false;
    $tab['message']['texte'] = "Un problème est survenu";
    $tab['message']['type'] = "danger";
}

echo json_encode($tab);
?>