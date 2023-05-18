<?php 

session_start();

if (!isset($_SESSION)) {
    header("location: ./view/");
}

header("location: ./view/login.php")

?>