<?php
include("db-config.php");
$query= "Select * from Catogery";
$result = mysqli_query($db,$query);

?>



<div class="col-sm-12 col-xl-11" style="margin-left: 10px; margin-top: 10px">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">ADD PRODUCT</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Book Name</label>
                                    <input type="text" name="pname" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Book Price</label>
                                    <input type="number" name="price" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Catogery</label>
                                    <select name="cat" class="form-control">

                                        <?php
                                        
                                        while($row = mysqli_fetch_array($result)){

                                            echo "<option value='$row[id]'>$row[Name]</option>";
                                        }  
                                        ?>
                                </select>
                                    </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" name="desc" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input type="file" name="img" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <button type="submit" name="btn" value="catogery details" class="btn btn-primary">Add</button>
                                    </form>
                                </div>
                                </div>


                                <?php
                                
                                if(isset($_POST["btn"])){

                                    $pname = $_POST["pname"];
                                    $price = $_POST["price"];
                                    $catogery = $_POST["cat"];
                                    $description = $_POST["desc"];

                                    $filename = $_FILES["img"]["name"];
                                    $tempname = $_FILES["img"]["tmp_name"];
                                    $folder = "../../Contnt/images/" . $filename;

                                    $ql = "INSERT INTO `product`( `P_Name`, `price`, `catogery`, `description`, `image`) VALUES ('$pname','$price','$catogery','$description','$folder')";

                                        if(mysqli_query($db,$ql)){

                                            if(move_uploaded_file($tempname,$folder)){

                                                echo"<script>alert('data upload Successfully!');</script>";

                                            }else{
                                                echo"<script>alert('Something went wrong!');</script>";
                                                
                                            }
                                        }
                                }
                                
                                ?>