
<?php

$idd = $_GET['id'];


$sql = "SELECT * FROM `product` WHERE p_id = $idd";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_array($result);

?>



<div class="col-sm-12 col-xl-11" style="margin-left: 10px; margin-top: 10px">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">UPDATE PRODUCT</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" value="<?php echo $row['P_Name']?>" name="pname" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Price</label>
                                    <input type="number" value="<?php echo $row['price']?>" name="price" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Catogery</label>
                                    <select name="cat" class="form-control">

                                        <?php
                                        $sql1 = "SELECT * FROM `catogery`";
                                        $result1 = mysqli_query($db,$sql1);
                                        while($row1  = mysqli_fetch_array($result1)){

                                            echo "<option value='$row1[id]'>$row1[Name]</option>";
                                        }  
                                         ?>
                                </select>
                                    </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Description</label>
                                    <input type="text" value="<?php echo $row['description']?>" name="desc" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Image</label>
                                    <input type="file" value="<?php echo $row['image']?>" name="img" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                <button type="submit" name="btn" value="catogery details" class="btn btn-primary">update</button>
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

                                    $ql =" UPDATE `product` SET P_Name='$pname',price='$price',catogery='$catogery',description='$description',image='$folder',Featuredproduct='1' WHERE p_id = $idd";
                

                                        if(mysqli_query($db,$ql)){

                                            if(move_uploaded_file($tempname,$folder)){

                                                echo"<script>alert('data upload Successfully!');</script>";

                                            }else{
                                                echo"<script>alert('Something went wrong!');</script>";
                                                
                                            }
                                        }
                                }
                                
                                ?>