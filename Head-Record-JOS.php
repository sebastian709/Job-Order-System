<?php
session_start();
include 'include/connect.php'; 
include 'include/isset-Head.php';
include 'include/security.php';

$user = $_SESSION['USERNAME'];
$dept = "";
$fname = "";


$all = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$user.'" ');

if(mysqli_num_rows($all) > 0)
{
  $fname = "";
  $dept = "";
  while ($row = mysqli_fetch_assoc($all)) 
  {
    $fname = $row["firstname"];
    $dept = $row["department"];
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
         <h6 style="font-weight:bold; color:darkgreen; text-align:center; background-color:white; height:22px; ">Program Head</h6>
      </div>








            <!-- Divider -->
      <hr class="sidebar-divider my-0">


       <!-- Nav Item - Manage Accounts -->
      <li class="nav-item active">
        <a class="nav-link" href="Head-Record-JOS.php">
          <i class="fas fa-book"></i>
          <span>Record</span></a>
      </li> 
                  <!-- Divider -->
      <hr class="sidebar-divider my-0">


       <!-- Nav Item - Manage Accounts -->
      <li class="nav-item">
        <a class="nav-link" href="Head-Request.php">
           <i class="fas fa-file-signature"></i>
          <span>Request</span></a>
      </li



            <!-- Divider -->
      <hr class="sidebar-divider my-0">




      <!-- Heading -->
      <div class="sidebar-heading">
        Have a nice day!
      </div>


           <!-- Nav Item - Reports -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-scroll"></i></i>
          <span>Others</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Others</h6>
            <a class="collapse-item" data-toggle="modal" data-target="#ProfileModal">Profile</a>
            <a class="collapse-item"  data-toggle="modal" data-target="#logoutModal" style="cursor: pointer;">Logout</a>

          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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

  

                      <span class="mr-2 d-none d-lg-inline margin" ><h3 style="color:white;font-weight:bold; font-family:times; margin-right:10px; margin-top:15px;"> <?php echo "Welcome"." ".$fname; ?> </h3></span>
                   </div>

                </div>

      

              </nav>
          </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
               <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center; margin-left:23%; font-weight:bold;">Job Order System Record</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
            <h6 style="float:left; font-weight: bold;">Department:<?php echo $dept; ?></h6>
             <h6 style="margin-left: 5px;"></h6>
             
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Location</th>
                      <th>Description</th>
                      <th>Admin</th>
                      <th>Engineer</th>
                      <th>Certified</th>
                      <th>Date</th>

                      
                    </tr>
                  </thead>
                 
                <tbody>
                    <?php
                       $department= "";
                        $table = mysqli_query($conn,'SELECT * FROM jos_record WHERE DEPARTMENT = "'.$dept.'"  ');

                        if(mysqli_num_rows($table) > 0)
                          { 
                           
                            
                             while ($row = mysqli_fetch_assoc($table)) 
                                {  
                                  
                                  

                                   
                                    
                                  ?>
                    <tr>
                      <th><?php echo $row["id"]; ?></th>
                      <th><?php echo $row["name"];  ?></th>
                      <th><?php echo $row["department"]; ?></th>
                      <th><?php echo $row["location"]; ?></th>
                      <th>
                       <form method="post" action="Head-Record-JOS.php">
                        <input type="hidden" name="view_id" value="<?php echo $row["id"];  ?>">
                        <input type="hidden" name="view_name" value="<?php echo $row["name"];  ?>   ">
                           <button type="submit" name="view_btn" class="btn-primary" style="font-weight:bold; border-radius:10px 10px 10px 10px;" ><i class="fas fa-eye"></i> View</button>
                       </form>
                      </th>
                      <th><?php echo $row["admin"]; ?></th>
                      <th><?php echo $row["engineer"]; ?></th>
                      <th><?php echo $row["head"]; ?></th>
                      <th><?php echo $row["petsa"]; ?></th>
                     
                        
        
                    </tr>
                     <?php
                                   }
                                
                                  }

                                ?>  

                  </tbody>
                </table>
              </div>
            </div>
          </div>


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
          <style type="text/css">   .back{background-color: rgba(0,100,0,.9); border-radius:10px 10px 10px 10px;} .modal-title{color:white; font-weight: bold;} ::placeholder{font-weight: bold; color:darkgray; } .username,.password{border:none; color:white; background-color: transparent; margin-left:5px; border-bottom: 2px solid white; font-weight: bold; text-align: center; width: 40%;}  .username:focus,.password:focus{outline: none;} .username{margin-right: 20px;}.username,.password,.fa-user-tie,.fa-unlock-alt{margin-top: 30px;} .fa-user-tie,.fa-unlock-alt,#note{color:white;}    #x{color:white;}  .fa-pen{color:white;} .f-col,.s-col{  float: left; color: white; font-size: 20px;}.f-col{width: 70%}.s-col{width: 30%} #title{font-weight: bold; font-size: 20px;} #mat{width: 100%;}
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
          <form method="POST" action="Head-Record-JOS.php">
          <button class="btn btn-danger" type="submit" name="logout_btn">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>







        <!-- Progress Modal-->
  <div class="modal fade" id="ProgressModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">The work is in progress?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>


          <div class="modal-body">
                <h6 id="note">Click "Confirm" if you want to. </h6>

          </div>


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="ManageAccount-Admin.php">Confirm</a>
        </div>
      </div>
    </div>
  </div>
    <!-- End Edit Account Modal-->







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


          <div class="modal-body">

            <style type="text/css">table{color: white; font-weight: bold;}</style>
              <table style="text-transform: uppercase;">
                <style type="text/css">#ml{padding-left: 50px;}</style>

                <tr>
                  <td> </td>
                  <td id="ml">Description</td>
                </tr>
                <tr>
                  <td>Need to</td>
                  <td id="ml">Object</td>
                  <td id="ml">Quantity</td>
                </tr>
                <tr>
                  <!--Need to: Repair/Produce/Replacement  -->
                  <td>Repair</td>
                  <td id="ml">Fluorescent</td>
                  <td id="ml">2</td>
                  
                </tr>
                                <tr>
                  <!--Need to: Repair/Produce/Replacement  -->
                  <td>Repair</td>
                  <td id="ml">Fluorescent</td>
                  <td id="ml">2</td>
                  
                </tr>
                                <tr>
                  <!--Need to: Repair/Produce/Replacement  -->
                  <td>Repair</td>
                  <td id="ml">Fluorescent</td>
                  <td id="ml">2</td>
                  
                </tr>
                                <tr>
                  <!--Need to: Repair/Produce/Replacement  -->
                  <td>Repair</td>
                  <td id="ml">Fluorescent</td>
                  <td id="ml">2</td>
                  
                </tr>
                                <tr>
                  <!--Need to: Repair/Produce/Replacement  -->
                  <td>Repair</td>
                  <td id="ml">Fluorescent</td>
                  <td id="ml">2</td>
                  
                </tr>
              </table>
                
                

          </div>


        <div class="modal-footer">
          <button class="btn-primary" data-toggle="modal" data-target="#FinishedModal" style="font-weight:bold; border-radius:10px 10px 10px 10px;"><i class="fas fa-eye"></i> View</button>
          <a class="btn btn-primary" href="Admin-Record-JOS.php" >Ok</a>
          
        </div>
      </div>
    </div>
  </div>


    <!-- Delete Modal -->

    <div class="modal fade" id="FinishedModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">The Job is Finished?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>


          <div class="modal-body">
                <h6 id="note">Click "Confirm" if you want to. </h6>

          </div>


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="ManageAccount-Admin.php">Confirm</a>
        </div>
      </div>
    </div>
  </div>


  <!-- End Delete Modal -->


  
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

</body>

</html>
