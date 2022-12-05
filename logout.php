<?php
session_start();
require("./config/config.inc.php");
session_destroy();
header('Location: '.ROOT.'login.php');
?>