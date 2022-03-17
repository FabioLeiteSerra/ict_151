<pre>
<?php

session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('./config/config.inc.php');
require(WAY."/include/autoload.inc.php");

$per = new Personne(1);

//$per->set_nom("Lerdorf");
//$per->set_prenom("Rasmus");
//$per->set_email("rasmus.lerdorf@php.net");
//$per->set_password("Pa\$\$w0rd");
//$per->set_news_letter("1");

echo $per;

$per->check_login("rasmus.lerdorf@php.com", 'Passw0rd');

print_r($_SESSION);

$per = new Personne($_SESSION['id']);
if($per->check_connect()){
    echo 'logué';
}else{
    echo 'pas logué';
}
?>
<a href="./controle_login.php">logué ?</a>
<?php
//
//echo $hash = password_hash($per->get_password(), PASSWORD_DEFAULT);
//
//
//if(password_verify($per->get_password(),$hash)){
//    echo "\nPassword OK";
//}

//$tab = array();
//$tab['nom_per'] = "Lerdorf";
//$tab['prenom_per'] = "Rasmus";
//$tab['email_per'] = "rasmus.lerdorf@php.com";
//$tab['news_letter_per'] = "1";
//$tab['password'] = "Passw0rd";
//
////$per->add($tab);
//
//if(!$per->check_email($tab['email_per'])){
//    $per->add($tab);
//}
?>
</pre>
