<?php

session_start();

foreach($_SESSION["cartsession"] as $row ){

        echo  "

       <ol>
        <li>$row[name]</li>
        <li>$row[Price]</li>

       
        
        
        </ol>
        ";
}



?>