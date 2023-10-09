<?php

$query = "SELECT product.p_id, product.P_Name,product.price,product.description,product.image,product.Featuredproduct, catogery.Name as catogery FROM product INNER JOIN catogery WHERE product.catogery = catogery.id";
$result = mysqli_query($db,$query);

?>

<a href="index.php?page=Add-files/add-product.php" class="btn btn-primary">Add Product</a>
<div class="col-sm-12 col-xl-11" style="margin-left: 10px; margin-top: 10px">
                        <div class="bg-secondary rounded h-100 p-4">
                           <center> <h6 class="mb-4"> COSMETICS DETAILS</h6></center>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Product Name </th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Action</th>

                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                
                                while($row=mysqli_fetch_array($result)){
                                  ?>
                                  <tr>

                                    <th scope="row"><?php echo $row["p_id"]?></th>
                                     <td><?php echo $row["P_Name"]?></td>
                                     <td><?php echo $row["price"]?></td>
                                     <td><?php echo $row["catogery"]?></td>
                                     <td><?php echo $row["description"]?></td>
                                     <td><img src="<?php echo $row['image']?>" width="100px" height="100px"></td>


                                     
                                     <td><a href="index.php?page=update-files/update-product.php&id=<?php echo $row['p_id']?>"><button class="btn btn-info">Update</button></a>
                                     <td><a href="index.php?page=update-files/delete.php&id=<?php echo $row['p_id']?>"><button class="btn btn-info">Delete</button></a>

                                </td>
                                     
                                     
                                </tr>

                                <?php

                                }

                                ?>
                               