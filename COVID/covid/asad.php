<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>

<!-- Topbar Search -->
<?php if($_SESSION['aid']):?>

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a>
        <!-- Dropdown - Messages -->
        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li>
<?php $query=mysqli_query($con,"select * from tbltestrecord where ReportStatus is null");
$count=mysqli_num_rows($query);


?>
    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <!-- Counter - Alerts -->
            <span class="badge badge-danger badge-counter"><?php echo $count;?></span>
        </a>
        <!-- Dropdown - Alerts -->
        <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">
                Alerts Center
            </h6>
            <?php if($count>0){
while($row=mysqli_fetch_array($query)){
                ?>
            <a class="dropdown-item d-flex align-items-center" href="test-details.php?tid=<?php echo $row['id'];?>&&oid=<?php echo $row['OrderNumber'];?>">
                <div class="mr-3">
                    <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                    </div>
                </div>
                <div>
                    <div class="small text-gray-500"><?php echo $row['RegistrationDate'];?></div>
                    <span class="font-weight-bold">A new test received # <?php echo $row['OrderNumber'];?></span>
                </div>
            </a>
        <?php }} else{?>
            <p style="color:red">No record found</p>
        <?php } ?>
        
            <a class="dropdown-item text-center small text-gray-500" href="new-test.php">Show All Alerts</a>
        </div>
    </li>

 

    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php
//Fetching admin Name
$adid=$_SESSION['aid'];
$ret1=mysqli_query($con,"select AdminName from tbladmin where ID='$adid'");
while($row1=mysqli_fetch_array($ret1)){

?>

            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php  echo $row1['AdminName'];?></span>
       <?php } ?>
            <img class="img-profile rounded-circle"
                src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="profile.php">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
            </a>
            <a class="dropdown-item" href="change-password.php">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
              Change Password
            </a>
   
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>
<?php endif;?>

</nav>
       
      
       <!-- Sidebar -->
       <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-virus"></i>
    </div>
    <div class="sidebar-brand-text mx-3">COVID19-TMS</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">
<?php if($_SESSION['aid']):?>


<li class="nav-item">
        <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="vaccines.php">
        <i class="fa-solid fa-syringe"></i>
            <span>Vaccines</span></a>
    </li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
        aria-expanded="true" aria-controls="collapseOne">
        <i class="fas fa-fw fa-users"></i>
        <span>Phlebotomist</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="add-phlebotomist.php">Add</a>
             <a class="collapse-item" href="manage-phlebotomist.php">Manage</a>
        </div>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-virus"></i>
        <span>Testing</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="new-test.php">New</a>
            <a class="collapse-item" href="assigned-test.php">Assigned</a>
            <a class="collapse-item" href="ontheway-samplecollection-test.php">On the Way for<br /> Sample Collection</a>
             <a class="collapse-item" href="sample-collected-test.php">Sample Collected</a>
               <a class="collapse-item" href="samplesent-lab-test.php">Sent to lab</a>
                <a class="collapse-item" href="reportdelivered-test.php">Report Delivered</a>
<a class="collapse-item" href="all-test.php">All Tests</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
        aria-expanded="true" aria-controls="collapseThree">
        <i class="fas fa-fw fa-file"></i>
        <span>Report</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="bwdates-report-ds.php">B/w Dates Report</a>
             <a class="collapse-item" href="search-report.php">Search Report</a>
            </div>
    </div>
</li>

<?php else:    ?>          

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="live-test-updates.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    COVID19 Testing
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
        aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Testing</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="new-user-testing.php">New User</a>
            <a class="collapse-item" href="registered-user-testing.php">Already Registered User</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link" href="patient-search-report.php">
        <i class="fas fa-fw fa-file"></i>
        <span>Test Report</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="login.php">
        <i class="fas fa-fw fa-user"></i>
        <span>Admin</span></a>
</li>

<?php endif;    ?>          

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->
<script src="https://kit.fontawesome.com/600681f055.js" crossorigin="anonymous"></script>
 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PHPGurukul 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->