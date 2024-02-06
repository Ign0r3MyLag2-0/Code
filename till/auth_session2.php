<?php
session_start();
if(!isset($_SESSION["Restaurant_code"]))   {
    header("Location: loginchef.php");
    exit();
}

?>