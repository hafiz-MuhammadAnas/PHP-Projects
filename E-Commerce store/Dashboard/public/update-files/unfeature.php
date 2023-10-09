<?php

    include("../db-config.php");

    $pid = $_GET["id"];


    $query = "update product set is_feature = 0 where p_id = $pid";
    if(mysqli_query($db,$query)){

        header("Location: ../index.php?page=product.php");

    }


?>