<?php
include 'include/connect.php'; 
session_start();
include 'include/security.php';
$user = $_SESSION['USERNAME'];

$id_rec = $_SESSION['mid'];


$fname = "";


$all = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$user.'" ');

if(mysqli_num_rows($all) > 0)
{
  $fname = "";
  while ($row = mysqli_fetch_assoc($all)) 
  {
    $fname = $row["firstname"];
  }
}


?> 
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Job Order System - Reports</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/allheader.css">
      <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <style type="text/css">
    .sidebar{
      font-family: tahoma;
      font-weight: bold;
    }
  </style>


</head>

<!-- ========================================================== -->



<body id="page-top">





  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:darkgreen;">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="Reports-Admin.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-cog fa-spin"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><h5  style="margin-left:-10px; font-weight:bold; ">Job Order System</h5></div>
      </a>
            <!-- Divider -->
      <hr class="sidebar-divider my-0">

<div class="sidebar-heading">
         <h6 style="font-weight:bold; color:white; text-align:center; background-color:darkblue; height:22px; ">ADMIN</h6>
      </div>

      
            <!-- Divider -->
      <hr class="sidebar-divider my-0">

       <!-- Nav Item - Manage Accounts -->
      <li class="nav-item">
        <a class="nav-link ">
         
          <span>&nbsp</span></a>
      </li> 



  

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>

      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->

         <div class="topbar-background">

              <nav class="nav-bar static-top navbar-expand topbar mb-4" style="background: linear-gradient(to left, rgb(0,100,0,.5),rgb(0,100,0,.8),green,green,green,green);">


                <div class="background">
                     <!-- Sidebar Toggle (Topbar) -->
                  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3 btn1" >
                      <i class="fa fa-bars"></i>
                  </button>

                   <div class="logo-txt" aria-label="Search" aria-describedby="basic-addon2">
                      <img src="img/olfu_logo_white_burned.png" id="fat-logo">
                      <h1 style="color:white; font-family:times;  " id="fat-txt">O u r &nbsp Lady &nbsp of &nbsp Fatima <br> U&nbsp  n&nbsp i &nbsp v &nbsp e &nbsp r&nbsp s &nbsp i &nbsp t &nbsp y</h1>
                   </div>

                   <div class="name-position">
                      <span class="mr-2 d-none d-lg-inline margin" ><h3 style="color:white;font-weight:bold; font-family:times; margin-right:10px; margin-top:15px;"><?php echo "Welcome"." ".$fname; ?></h3></span>
                   </div>

                </div>

          

              </nav>
          </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
               <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center; margin-left:16%; font-weight:bold;">Materials Description</h1>
          <?php 
                  $query = "SELECT * FROM materials_description WHERE id='$id_rec' ";
                  $query_run = mysqli_query( $conn , $query);


                  if(mysqli_num_rows($query_run) > 0)
                          { 
                            
                             while ($row = mysqli_fetch_assoc($query_run))

                             {  ?>

<table style="text-transform: uppercase; width: 100%; border: 2px solid gray; color: black ">
                <style type="text/css">#ml{padding-left: 50px;}</style>

                <tr style="border-bottom: 2px solid gray; font-weight: bold; color: white; background-color: gray;">
                  <td>Name :<?php echo $row["name"]; ?></td>
                  
                  <td id="ml">Order No.<?php echo $row["id"]; ?></td>
                </tr>

                 

                <tr style=" border-bottom: 2px solid gray; color: white; background-color: green;">
                  <!--Need to: Repair/Produce/Replacement  -->
                  
                  <td id="ml" style="width: 50%; font-weight: bold; ">Materials</td>
                  <td id="ml" style="width: 50%; font-weight: bold;">Quantity</td>
                  
                </tr>

               



                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  
                  <td id="ml">1.<?php echo $row["m1"]; ?></td>
                  <td id="ml"><?php echo $row["q1"]; ?></td>
                </tr>

                
                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                 
                  <td id="ml">2.<?php echo  $row["m2"]; ?></td>
                  <td id="ml"><?php echo $row["q2"] ?></td>
                  
                </tr>

                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                
                  <td id="ml">3.<?php echo  $row["m3"]; ?></td>
                  <td id="ml"><?php echo $row["q3"] ?></td>
                  
                </tr>

                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                
                  <td id="ml">4.<?php echo  $row["m4"]; ?></td>
                  <td id="ml"><?php echo $row["q4"] ?></td>
                  
                </tr>
                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                
                  <td id="ml">5.<?php echo  $row["m5"]; ?></td>
                  <td id="ml"><?php echo $row["q5"] ?></td>
                  
                </tr>
                  <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                
                  <td id="ml"></td>
                  <td id="ml">
                    <form method="post" action="Admin-Record-Materials.php">
                        <input type="hidden" name="" value="<?php echo $row["id"];  ?>">
                           <button class="btn-primary" data-toggle="modal" data-target="#MessageModal"  style="font-weight:bold; border-radius:10px 10px 10px 10px; float: right; margin-right: 5%;"><i class="fas fa-arrow-circle-left"></i> back</button>
                       </form></td>
                  
                </tr>
                               

              </table>
          
  <?php

                             }
                          }
                          
           ?>
          

      </div>
      <!-- End of Main Content -->

            <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; OLFU Job Order 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->



    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



            <!-- The style of the add Account -->
          <style type="text/css">   .back{background-color: rgba(0,100,0,.9); border-radius:10px 10px 10px 10px;} .modal-title{color:white; font-weight: bold;} ::placeholder{font-weight: bold; color:white; text-align: center;} .username,.password{border:none; color:white; background-color: transparent; margin-left:5px; border-bottom: 2px solid white; font-weight: bold; text-align: center; width: 40%;}  .username:focus,.password:focus{outline: none;} .username{margin-right: 20px;} .username,.password,.fa-user-tie,.fa-unlock-alt{margin-top: 30px;} .fa-user-tie,.fa-unlock-alt{color:white;}    #x{color:white;} .message{background-color: transparent;color:white; width: 430px;} .fa-pen{color:white;}
           </style>
         
          <!-- End of the style of the add Account -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>
        <div class="modal-body"> <h6 id="note">Click "Logout" below if you want to.</h6></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
















    <!-- End Message Modal-->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

    <!-- button color changer -->
  <script type="text/javascript">
    var primary = ["#5a5c69","#36b9cc"];
    var i = 0;

document.getElementByClassName("prim").addEventListener("click", function(){ 
  i = 1 < color.length ? ++i : 0;
  document.getElementByClassName("primback")[0].style.backgroundColor = primary[i] })


  </script>

</body>

</html>
