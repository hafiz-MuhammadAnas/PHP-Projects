<?php

include("../db-config.php");

$pid= $_GET["id"];

$query= "update product set Featuredproduct=0 where p_id=$pid";
if(mysqli_query($db,$query)){

    header("location: ../index.php?page=product.php");
}

?>