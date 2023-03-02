<?php
include 'include/connect.php'; 
session_start();
include 'include/security.php';
include 'include/isset.php';

$user = $_SESSION['USERNAME'];

$id_rec = $_SESSION['action_id'];


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
                      <span class="mr-2 d-none d-lg-inline margin" ><h3 style="color:white;font-weight:bold; font-family:times; margin-right:10px;margin-top:15px;"><?php echo "Welcome"." ".$fname; ?></h3></span>
                   </div>

                </div>

          

              </nav>
          </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
               <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center; margin-left:16%; font-weight:bold;">Head Request Details</h1>
        

<table style="text-transform: uppercase; width: 100%; border: 2px solid gray; color: black ">
                <style type="text/css">#ml{padding-left: 50px;}</style>
                 <?php 
                  $query = "SELECT * FROM jos_description WHERE id='$id_rec' ";
                  $query_run = mysqli_query( $conn , $query);
                  $app_id = "";

                  if(mysqli_num_rows($query_run) > 0)
                          { 
                            
                             while ($row = mysqli_fetch_assoc($query_run))
                             
                             {  ?>
                <tr style="border-bottom: 2px solid gray; font-weight: bold; color: white; background-color: gray;">
                  <td>Name :<?php echo $row["name"]; ?></td>
                  <td> </td>
                  <td id="ml">Order No.<?php echo $row["id"]; ?></td>
                </tr>
                

                 

                <tr style=" border-bottom: 2px solid gray; color: white; background-color: green;">
                  <!--Need to: Repair/Produce/Replacement  -->
                  <td style="width: 33.33%; font-weight: bold; margin-left: 2%;">Need</td>
                  <td id="ml" style="width: 33.33%; font-weight: bold; ">Object</td>
                  <td id="ml" style="width: 33.33%; font-weight: bold;">Quantity</td>
                  
                </tr>

               



                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <td style="margin-left: 2%;">1.<?php echo $row["need_one"]; ?></td>
                  <td id="ml"><?php echo $row["o1"]; ?></td>
                  <td id="ml"><?php echo $row["q1"]; ?></td>
                </tr>

                
                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                 <td >2.<?php echo $row["n2"]; ?></td>
                  <td id="ml"><?php echo  $row["o2"]; ?></td>
                  <td id="ml"><?php echo $row["q2"] ?></td>
                  
                </tr>

                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                 <td>3.<?php echo $row["n3"]; ?></td>
                  <td id="ml"><?php echo  $row["o3"]; ?></td>
                  <td id="ml"><?php echo $row["q3"] ?></td>
                  
                </tr>

                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                 <td>4.<?php echo $row["n4"]; ?></td>
                  <td id="ml"><?php echo  $row["o4"]; ?></td>
                  <td id="ml"><?php echo $row["q4"] ?></td>
                  
                </tr>
                <tr style=" border-bottom: 2px solid gray; height: 30px;">
                  <!--Need to: Repair/Produce/Replacement  -->
                 <td>5.<?php echo $row["n5"]; ?></td>
                  <td id="ml"><?php echo  $row["o5"]; ?></td>
                  <td id="ml"><?php echo $row["q5"] ?></td>
                  
                </tr>
                  <tr style=" border: none;">
                  <!--Need to: Repair/Produce/Replacement  -->
                 <td><h6 style="visibility: hidden;"><?php echo  $row["id"]; ?></h6></td>
                  <td id="ml"></td>
                  <td id="ml">
                     <button class="btn btn-success approvebtn" style="font-weight:bold; border-radius:10px 10px 10px 10px; float: right; margin-right: 5%;" >Approve</button>
                    <form method="post" action="Admin-Proghead.php">
                        

                           <button class="btn btn-primary"   style="font-weight:bold; border-radius:10px 10px 10px 10px; float: right; margin-right: 5%;"><i class="fas fa-arrow-circle-left"></i> back</button>

                       </form></td>
                  
                </tr>
                     <?php

                             }
                          }
                          
           ?>            

              </table>
          

          

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


        <!-- Message Modal-->
  <div class="modal fade" id="MessageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Head Request Details</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>

          <form method="POST" action="Detail-Head-Request.php">

          <div class="modal-body">
            <input type="hidden" name="approve_id" id="approve_id">
            <h4 style="color: white;">Do you want to approve?</h4><br><br>
  


        <div class="modal-footer">
          <button class="btn btn-secondary" id="prim" type="button" data-dismiss="modal">Cancel</button>
         <button type="submit" class="btn btn-success" name="approve_btn">Approve</button>
          
        </div>
        </form>
      </div>
    </div>
  </div>


    <!-- End Message Modal-->













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
  <script src="js/popper.min.js"></script>

   <script>
      
        $('.approvebtn').on('click',function(){

          $('#MessageModal').modal('show');


          $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
              return $(this).text();
            }).get();

            console.log(data);
            $('#approve_id').val(data[0]);

        });
       
     </script>
  

</body>

</html>
