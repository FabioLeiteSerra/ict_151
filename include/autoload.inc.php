<?php

function chargerClasse($class){
    require WAY."/class/".$class.".class.php";
}

spl_autoload_register('chargerClasse');
