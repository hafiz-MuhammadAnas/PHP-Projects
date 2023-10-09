<?php
include("db-config.php");
$id = $_GET['id'];
// $delete_query= "DELETE FROM `tb_product` WHERE id ='$id'";
$delete_query = "SELECT * FROM `product` WHERE p_id = $id";
$run_query=mysqli_query($db,$delete_query);
// if($run_query){
//     // header("location:table.php");
// }
// else{
//     echo "not deleted";
// }


?>