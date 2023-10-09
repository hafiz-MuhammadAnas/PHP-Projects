

<?php
session_start();
include_once('includes/config.php');
if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid-Tms | Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include_once('includes/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php include_once('includes/navbar.php');?>
                <!-- End of Topbar -->


            <!-- Footer -->
  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Manage Phlebotomist</h1>

<!-- Modal -->
<div class="modal fade" id="AddUsermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD USER</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> 
      <form action="code.php" method="post">
      <div class="modal-body">
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="fname" class="form-control" placeholder="name">
      </div>
        <div class="form-group">
          <label for="">E-mail</label>
          <input type="text" name="email" class="form-control" placeholder="E-mail">
      </div>
        <div class="form-group">
          <label for="">Address</label>
          <input type="text" name="address" class="form-control" placeholder="Address">
      </div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
          <?php
          if(isset($_SESSION['status']))
          {
            echo "<h4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
          }
          
          
          
          ?>
    
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Phlebotomist Information</h6>
        <div class="card">
              <h3 class="card-title">
              </h3>
              <a href="" data-bs-toggle="modal" data-bs-target="#AddUserModal" class="btn btn-primary float-right addduser w-1px">Add User</a>
             </div></div>
            </div> 
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Sno.</th>
                        <th>Emp Id</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                        <th>Reg. Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Sno.</th>
                        <th>Emp Id</th>
                        <th>Name</th>
                        <th>Mobile No.</th>
                         <th>Reg. Date</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
<?php $query=mysqli_query($con,"select * from tblphlebotomist");
$cnt=1;
while($row=mysqli_fetch_array($query)){
?>

                    <tr>
                        <td><?php echo $cnt;?></td>
                        <td><?php echo $row['EmpID'];?></td>
                        <td><?php echo $row['FullName'];?></td>
                        <td><?php echo $row['MobileNumber'];?></td>
                         <td><?php echo $row['RegDate'];?></td>
                        <td>

            <a href="edit-phlebotomist.php?pid=<?php echo $row['id'];?>"><i class="fas fa-edit" style="color:blue"></i></a> |

            <a href="manage-phlebotomist.php?pid=<?php echo $row['id'];?>&&action=delete" onclick="return confirm('Do you really want to delete this record?');"><i class="fa fa-trash" aria-hidden="true" style="color:red" title="Delete this record"></i></a></td>
                    </tr>
           <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
           <?php include_once('includes/footer2.php');?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>
</html>
<?php } ?>