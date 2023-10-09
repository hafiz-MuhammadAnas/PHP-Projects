<?php
include ('connection.php');
$select_query = "SELECT * FROM `info_tbl` ";
$run_query = mysqli_query($con , $select_query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <center><h1>DATABASE</h1></center><br><br>
    <div class="container">
        <table class="table table-bordered">
            <tr>
                <th>username</th>
                <th>email</th>
                <th>image</th>
            </tr>
            <?php  
        while ($row = mysqli_fetch_array($run_query)) {  ?>
            <tr>

                <td> <?php echo $row['username'] ?> </td>
                <td> <?php echo $row['email'] ?> </td>
             

                <td><img src="<?php echo $row['image'] ?>" alt="" height="100px" >  </td>
                

              <td> 
                <a class="btn btn-success" href="update.php?id=<?php echo $row['id'] ?>">Edit</a>
                <a class="btn btn-danger" onclick="return confirm('are you sure? you want to delete')" href="delete.php?id=<?php echo $row['id'] ?>">Delete</a>
                
                 </td>
            </tr>
            <?php  
            }
            ?>
</table>
</div>
</body>
</html>



