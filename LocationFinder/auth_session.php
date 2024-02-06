<?php
session_start();
if(!isset($_SESSION["IPS"]))   {
    header("Location: customIP.php");
    exit();
}
?>