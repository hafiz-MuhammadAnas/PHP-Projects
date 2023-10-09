<?php
$connect = mysqli_connect("localhost","root","","db_product");
if($connect === false){
echo "not connected";
}
else{
    echo "connected";
}
?>