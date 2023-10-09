<?php

session_start();
$index = $_POST["index"];
$qty = $_POST["qty"];
$total = $_POST["total"];


$_SESSION["cartsession"][$index]["quantity"] = $qty;
$_SESSION["cartsession"][$index]["total"] = $total;




?>