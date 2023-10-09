<?php

include("../db-config.php");

$query= "select * from catogery";
$result= mysqli_query($db,$query);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ebook</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<style>
   
</style>

<body >
    <!-- Topbar Start -->
    <div class="container-fluid"  >
    
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-sm-flex">
            <div class="col-lg-4">
                <a href="index.php" class="text-decoration-none">
                    <span class="h2 text-uppercase text-success bg-dark px-1">DECORATIVE COSMETICS</span>
                   
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
               
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p style="color:blue;" style="color-red;"class="m-0">Customer Service</p>
                <h5 style="color:blue;" class="m-0">+92310-5119966/+92313-2582884 </h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30" >
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 style="color:blue;" class=" m-0;" ><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style= "width: calc(100% - 30px); z-index: 999; background-color:red;">
                    <div class="navbar-nav w-100">
                       
                        <?php
                        
                        while($row = mysqli_fetch_array($result)){


                          echo"  <a href='details.php?id=$row[id]' class='nav-item nav-link'>$row[Name]</a>";

                        }
                        
                        ?>

                       
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a style="color:blue;" href="index.php" class="nav-item nav-link active">Home</a>
                            <a style="color:blue;" href="details.php?id=1" class="nav-item nav-link">Shop</a>
                            <div class="nav-item dropdown">
                            </div>
                            <a style="color:blue;" href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                           
                            <a href="cart.php" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-success"></i> 
                            </a>
                            &nbsp;
                            &nbsp;
                            <a style="color:blue;" href=""  >Muhammad Anas </a>
                            &nbsp;
                            &nbsp;
                            <a style="color:blue;" href="logout.php"  >LOGOUT </a>
                         
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->