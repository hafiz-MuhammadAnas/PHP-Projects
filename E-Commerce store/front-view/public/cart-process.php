<?php
session_start();
$pid= $_POST["id"];
$qty= $_POST["quantity"];
$price= $_POST["price"];
$name= $_POST["name"];


$total= $qty * $price ;

$cart = array(
    $pid => array(
        "id" => $pid,
        "name" => $name,
        "Price" => $price,
        "quantity" => $qty,
        "total" => $total,


    )



    );

    $status="";

    if(empty($_SESSION["cartsession"]) || $_SESSION["cartsession"] == "") {

        $_SESSION["cartsession"] = $cart;

        $status = "if condition";
 
     }else{

        if(in_array($pid,array_column($_SESSION["cartsession"],'id'))){

            $key=array_search($pid,array_column($_SESSION["cartsession"],'id'));

            $_SESSION["cartsession"][$key]["quantity"] += $qty;
            $_SESSION["cartsession"][$key]["total"] += $total;

            $status="add successfully";

        }else{

            $status="not added";
        $_SESSION["cartsession"] = array_merge( $_SESSION["cartsession"], $cart);



        }

    }

     echo $status;

     ?>





    
    
    
    
    
    
    
    
    




