<?php
require(WAY."/include/autoload.inc.php");
if(isset($_SESSION['id'])) {
    $per = new Personne($_SESSION['id']);
    if (!$per->check_connect()) {
        session_destroy();
        header('Location: ' . ROOT . '/login.php');
        exit();
    }
    if (!$per->check_aut($autorisation)){
//        session_destroy();
        header('Location: ' . ROOT . '/index.php');
        exit();
    }
}else{
    session_destroy();
    header('Location: ' . ROOT . '/login.php');
    exit();
}
?>