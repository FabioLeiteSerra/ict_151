<?php
session_start();
require("./config/config.inc.php");
//require(WAY."/include/autoload.inc.php");
$autorisation = 'PRT_USR';
require (WAY.'/include/secure.inc.php');
require_once (WAY . "/include/head.inc.php");

?>
<div class="col-md-12">
    <div class="panel panel-primary">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
        <?php
            echo "<pre>";
            print_r($_SESSION);
            echo "</pre>";
        ?>
        </div>
    </div>
</div>