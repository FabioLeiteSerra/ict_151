<?php
session_start();
header('Content-type: application/json');
require("./../../config/config.inc.php");
require(WAY."/include/autoload.inc.php");

$user = new Personne($_POST['id_per']);
$fnc = new Fonction($_POST['id_fnc']);
if($_POST['checked'] == 1) {
    if ($user->add_fnc($fnc->get_id_fnc())) {
        $tab['reponse'] = true;
        $tab['message']['texte'] = "La fonction " . $fnc->get_nom() . " (" . $fnc->get_abr() . ") à bien été ajoutée à " . $user->get_prenom() . " " . $user->get_nom();
    } else {
        $tab['reponse'] = false;
    }
}else {
    if ($user->del_fnc($fnc->get_id_fnc())) {
        $tab['reponse'] = true;
        $tab['message']['texte'] = "La fonction " . $fnc->get_nom() . " (" . $fnc->get_abr() . ") à bien été retirée à " . $user->get_prenom() . " " . $user->get_nom();
    } else {
        $tab['reponse'] = false;
    }
}

if($tab['reponse']){
    $tab['message']['type'] = "success";
}else{

    $tab['message']['text'] = "Un problème est survenu";
    $tab['message']['type'] = "danger";
}
echo json_encode($tab);
?>