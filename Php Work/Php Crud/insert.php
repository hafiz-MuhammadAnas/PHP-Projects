<?php
// include('header.php')
?>
<?php
include('connection.php');
if(isset($_POST['btnsubmit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];


    // $image=$_FILES['image'];
    echo '<Pre>';
   print_r($_FILES);
   echo '</Pre>';
   
    $file_name=$_FILES['image']['name'];
    $full_path=$_FILES['image']['full_path'];
  $type=$_FILES['image']['type'];
    $tmp_name=$_FILES['image']['tmp_name']; 

    $image='image/'.$file_name;
    move_uploaded_file($tmp_name,$image);

 $query ="INSERT INTO `info_tbl`( `username`, `email`,`image`) VALUES ('$username','$email','$image')";

    $run = mysqli_query($con, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>sign-up page</title>
</head>
<body>
<div class="conatiner mt-3">    
<form method="POST"  enctype="multipart/form-data" >
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" name="username"class="form-control" id="exampleInputEmail1">
    </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="text" name="email" class="form-control" id="exampleInputPassword1">
  </div>

 


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" name="image" class="form-control">
  </div>

<button type="submit"  name="btnsubmit" class="btn btn-primary">Sign-Up</button>
</form>
</div>
</body>
</html>