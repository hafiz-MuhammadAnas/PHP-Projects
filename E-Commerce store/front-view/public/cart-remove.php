<?php

session_start();


$key = $_GET["key"];

unset($_SESSION["cartsession"][$key]);

header("location: cart.php");




?>