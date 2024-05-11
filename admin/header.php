<?php
$con=mysqli_connect('localhost','root','','shortner');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin</title>
      <!-- Google-Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:100,300,400,600,700,900,400italic' rel='stylesheet'>
      <!-- Bootstrap core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/bootstrap-reset.css" rel="stylesheet">
      <!--Icon-fonts css-->
      <link href="assets/ionicon/css/ionicons.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="css/style.css" rel="stylesheet">
      <link href="css/style-responsive.css" rel="stylesheet" />
   </head>
   <body>
      <!-- Aside Start-->
      <aside class="left-admin">
         <!-- brand -->
         <div class="logo">
            <a href="index-2.html" class="logo-expanded">
            <img src="img/single-logo.png" alt="logo">
            <span class="nav-label">Admin</span>
            </a>
         </div>
         <!-- / brand -->
         <!-- Navbar Start -->
         <nav class="navigation">
            <ul class="list-unstyled">
            <li class="has-submenu"><a href="index.php"><i class="ion-grid"></i> <span class="nav-label">Create Url</span></a>
               </li>
               <li class="has-submenu"><a href="list.php"><i class="ion-grid"></i> <span class="nav-label">List</span></a>
               </li>
              
            </ul>
</nav>
      </aside>
      <!-- Aside Ends-->
      <!--Main Content Start -->
      <section class="content">
         <!-- Header -->
         <header class="top-head container-fluid">
            <button type="button" class="navbar-toggle pull-left">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <!-- Right navbar -->
          <ul class="list-inline navbar-right top-menu top-right-menu">
               <li class="dropdown text-center">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                  <span class="username">John Deo </span> <span class="caret"></span>
                  </a>
                  
               </li>
            </ul>
            <!-- End right navbar -->
         </header>
         <!-- Header Ends -->