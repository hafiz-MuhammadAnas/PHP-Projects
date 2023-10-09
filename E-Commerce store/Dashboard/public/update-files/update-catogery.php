<?php

$idd = $_GET['id'];


$sql = "SELECT * FROM `catogery` WHERE id = $idd";
$result = mysqli_query($db,$sql);

$row = mysqli_fetch_array($result);

?>

<div class="col-sm-12 col-xl-11" style="margin-left: 10px; margin-top: 10px">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">UPDATE CATOGERY</h6>
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Catogery Name</label>
                                    <input type="text" value="<?php echo $row['Name']?>" name="cat" class="form-control" id="exampleInputEmail1">
                                    
                                </div>

                                    <button type="submit" name="btn" value="catogery details" class="btn btn-primary">submit</button>
                               </form>
                             </div>

                             <?php
                             if(isset($_POST["btn"]))
                             {
                                 $cat_name=$_POST["cat"];
                                 $qry="update catogery set name='$cat_name' where id='$idd'";
                                 if(mysqli_query($db,$qry));


                             }
                             ?>