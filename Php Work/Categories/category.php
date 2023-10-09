<?php
include("connection.php");

if(isset($_POST['btn_submit'])){
$c_name = $_POST['c_name'];
$insert_query ="INSERT INTO `tbl_categorires`( `c_name`) VALUES('$c_name')";

$run = mysqli_query($connect,$insert_query);

if($run){
    echo "<script>alert('data inserted')</script>";
    header('location:form.php');
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">

    
    <form action=""method="POST">
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CATEGORY</label>
    <input type="text"name="c_name" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit"name="btn_submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</body>


</html>
