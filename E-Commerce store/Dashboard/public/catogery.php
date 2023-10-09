<?php

$query = "select * from catogery";
$result = mysqli_query($db,$query);



?>
<a href="index.php?page=Add-files/add-catogery.php" class="btn btn-primary">Add Catogery</a>
<div class="col-sm-12 col-xl-11" style="margin-left: 10px; margin-top: 10px">
                        <div class="bg-secondary rounded h-100 p-4">
                           <center> <h6 class="mb-4">Catogery details</h6></center>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">category</th>
                                        <th scope="col">Action</th>
                                     
                                    </tr>
                                </thead>
                                <tbody>

                                <?php
                                
                                while($row=mysqli_fetch_array($result)){
                                  ?>
                                  <tr>

                                    <th scope="row"><?php echo $row["id"]?></th>
                                     <td><?php echo $row["Name"]?></td>
                                    <!-- <td><a href="index.php?page=update-files/update-cat.php&id"<?php echo $row["id"]?> class="btn btn-info"></a></td>  -->
                                     <td><a href="index.php?page=update-files/update-catogery.php&id=<?php echo $row["id"]?>"><button class="btn btn-info">Update</button></a>
                                     <td><a href="index.php?page=update-files/update-catogery.php&id=<?php echo $row["id"]?>"><button class="btn btn-info">Delete</button></a>
                                  </tr>
                                    <?php
                                }
                                
                                ?>

                                </table>
                                </tbody>

