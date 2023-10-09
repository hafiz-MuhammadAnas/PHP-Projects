
<?php
include("connection.php");
$id=$_GET['id'];
$query ="SELECT * FROM `info_tbl` WHERE id='$id'";
$run =mysqli_query($con,$query );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<body>
    <form action=""method="POST" enctype="multipart/form-data">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">user name</label>
    <input type="text" class="form-control"name="name" id="exampleInputEmail1" aria-describedby="emailHelp">

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="text" class="form-control"name="email" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" class="form-control"name="image" id="exampleInputPassword1">
  </div>
  <button type="submit"name="btnsubmit" class="btn btn-primary">Submit</button>
</form>
    </form>
  <?php
  if(isset($_POST['btnsubmit'])){
    $name = $_POST['name'];
    $email =$_POST['email'];
    $image =$_FILES['image'];
    echo '<Pre>';
    print_r($_FILES);
    echo '</Pre>';
    
     $file_name=$_FILES['image']['name'];
     $full_path=$_FILES['image']['full_path'];
   $type=$_FILES['image']['type'];
     $tmp_name=$_FILES['image']['tmp_name']; 
 
     $image='image/'.$file_name;
     move_uploaded_file($tmp_name,$image);
    $update = "UPDATE `info_tbl` SET `username`=' $name ',`email`=' $email'
    ,`image`='$image' WHERE id ='$id'";
    $run = mysqli_query($con,$update);
    if($run){
        header("location:view.php");
    }

    
  }
  ?>
</body>
</html>