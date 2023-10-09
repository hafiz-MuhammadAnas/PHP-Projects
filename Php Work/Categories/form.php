<?php
include("connection.php");
$fetch_query ="SELECT * FROM `tbl_categorires`";
$run = mysqli_query($connect,$fetch_query);
if(isset($_POST['btnsubmit'])){
    $p_name = $_POST['p_name'];
    $p_des = $_POST['p_des'];
    $p_price = $_POST['p_price'];
    $p_cat = $_POST['p_cat'];
  
    $insert_query ="INSERT INTO `tbl_product`( `p_name`, `p_price`, `p_description`
     ) VALUES
    ('$p_name','$p_des','$p_price','$p_cat')";
  $run_query = mysqli_query($connect, $insert_query);
  if($run_query){
      echo "<script>alert('data inserted')</script>";
  }
  }
    
    
    


  

   


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container mt-5">
<form nethod="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PRODUCT NAME</label>
    <input type="text"name="p_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PRODUCT DESCRIPTION</label>
    <input type="text"name="p_des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">PRODUCT PRICE </label>
    <input type="text"name="p_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PRODUCT CATEGORY</label>
    <select class="form-control" name="p_cat" aria-label="default select example">
        <?php
        while($data =mysqli_fetch_array($run)){
        
            ?>
            <option value="<?php echo $data['c_id']?>"> <?php echo $data ['c_name'] ?></option>
            <?php
        }
            ?>
       </select>
       </div>
  <button type="submit"name="btnsubmit" class="btn btn-success">Submit</button>
</form>
</div>

</body>
</html>