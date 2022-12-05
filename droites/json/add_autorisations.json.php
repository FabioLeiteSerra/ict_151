<?php
header('Content-Type: application/json');
session_start();
require ("./../../config/config.inc.php");
require_once(WAY."/include/autoload.inc.php");

$aut_user = new Autorisation();
$aut_admin = new Autorisation();

$tab_user = array();
$tab_user['nom_aut'] = $_POST['nom_aut'];
$tab_user['code_aut'] = "ADM_".strtoupper($_POST['code_aut']);
$tab_user['desc_aut'] = $_POST['desc_user_aut'];

$tab_admin = array();
$tab_admin['nom_aut'] = $_POST['nom_aut'];
$tab_admin['code_aut'] = "USR_".strtoupper($_POST['code_aut']);
$tab_admin['desc_aut'] = $_POST['desc_admin_aut'];

if($aut_user->check_code($tab_user['code_aut'])) {

    $id = $aut_user->add($tab_user);
    $aut_user->set_id_aut($id);
    $aut_user->init();

    $id = $aut_admin->add($tab_admin);
    $aut_admin->set_id_aut($id);
    $aut_admin->init();

    $tab['reponse'] = true;
    $tab['message']['texte'] = "la Autorisation " . $aut_user->get_nom() . " (" . $aut_user->get_code() . ") $ bien été ajoutée";
    $tab['message']['type'] = "success";
}else{
    $tab['reponse'] = false;
    $tab['message']['texte'] = "Un problème est survenu";
    $tab['message']['type'] = "danger";
}

echo json_encode($tab);
?>