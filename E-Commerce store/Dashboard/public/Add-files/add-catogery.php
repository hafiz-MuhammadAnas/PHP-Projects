<?php
include("db-config.php");

?>




<div class="col-sm-12 col-xl-11" style="margin-left: 10px; margin-top: 10px">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">ADD CATEGORY</h6>
                            <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Category Name</label>
                                    <input type="text" name="cat" class="form-control" id="exampleInputEmail1">
                                    <br>
                                    <button type="submit" name="btn" value="catogery details" class="btn btn-primary">submit</button>
                                </div>

                                <?php

                                if(isset($_POST["btn"])){  

                                $cat_name = $_POST["cat"];

                               $query = "Insert into catogery values('','$cat_name')";
                               if( mysqli_query($db,$query)){

                               echo "<script>
                                  alert('New Category Added!!');
                                 </script>";

                                  }

                                  }

                                   ?>