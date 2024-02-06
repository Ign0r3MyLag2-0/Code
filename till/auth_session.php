<?php
session_start();
if(!isset($_SESSION["Employee_number"]))   {
    header("Location: login.php");
    exit();
}

?>