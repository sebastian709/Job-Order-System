<?php
session_start();
$user = $_SESSION['USERNAME'];
include 'include/security.php';
include 'include/connect.php'; 
include 'include/isset.php';



$fname = "";


$all = mysqli_query($conn,'SELECT * FROM account WHERE USERNAME="'.$user.'" ');

if(mysqli_num_rows($all) > 0)
{
  $fname = "";
  while ($row = mysqli_fetch_assoc($all)) 
  {
    $fname = $row["firstname"];

    $acclvl = $row["access_level"];

    $_SESSION['ACCLVL'] = $acclvl;
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
        <div class="sidebar-brand-icon rotate-n-15 ">
          <i class="fas fa-cog fa-spin" style=" float:left;  "></i>
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
      <li class="nav-item active">
        <a class="nav-link" href="Admin-ManageAccount.php">
          <i class="fas fa-users"></i>
          <span>Manage Accounts</span></a>
      </li> 
                  <!-- Divider -->
      <hr class="sidebar-divider my-0">



            <!-- Nav Item - Records -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-book"></i>
          <span>Record</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Record</h6>
            <a class="collapse-item" href="Admin-Record-JOS.php">JOS Record</a>
            <a class="collapse-item" href="Admin-Record-Materials.php">Materials Record</a>

          </div>
        </div>
      </li>

            <!-- Divider -->
      <hr class="sidebar-divider my-0">


            <!-- Nav Item - Reports -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-file-signature"></i>
          <span>Request</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Request</h6>
            <a class="collapse-item" href="Admin-Proghead.php">Heads Request </a>
            <a class="collapse-item" href="Admin-Engineer.php">Engineer Request</a>

          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">


      <!-- Heading -->
      <div class="sidebar-heading">
        Good day
      </div>

      
     <!-- Log out -->
      <li class="nav-item " style="cursor: pointer;">
          <a class="nav-link"  data-toggle="modal" data-target="#logoutModal">
               <i class="fas fa-sign-out-alt"></i>
          <span>Logout</span>
          </a>
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
                      <span class="mr-2 d-none d-lg-inline margin" ><h3 style="color:white;font-weight:bold; font-family:times; margin-right:10px;margin-top:15px;"> <?php echo "Welcome"." ".$fname; ?></h3></span>
                   </div>

                </div>

          

              </nav>
          </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
               <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center; margin-left:23%; font-weight:bold;">Account Manager</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              
                <style type="text/css">label{color: black;} th, td{color:black;}</style>
                               
              <button class="btn addi" data-toggle="modal" data-target="#AddModal" style="float:right; font-weight:bold;  color:white; background-color:green;"> <i class="fas fa-user-plus"></i> ADD TEMPORARY ACCOUNT</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Department</th>
                      <th>Access level</th>
                      <th>Username</th>
                      <th>Edit</th>
                      <th>Delete</th>
                      
                    </tr>
                  </thead>
                 
                  <tbody>
                     <?php
                        $table = mysqli_query($conn,'SELECT * FROM account WHERE department<>"admin"');

                        if(mysqli_num_rows($table) > 0)
                          { 
                            
                             while ($row = mysqli_fetch_assoc($table)) 
                                {  
                                    
                                  ?>
                            
                    <tr>

                      
                                  <td><?php echo $row["ID"]; ?></td>
                                  <td><?php echo $row["firstname"]; ?></td>
                                  <td><?php echo $row["lastname"]; ?></td>
                                  <td><?php echo $row["department"]; ?></td>
                                  <td><?php echo $row["access_level"]; ?></td>
                                 <td><?php echo $row["username"]; ?></td>
                                 
                                  
                      <td>
                        <button class="btn-success editbtn" style="font-weight:bold; border-radius:10px 10px 10px 10px;"><i class="fas fa-user-edit"></i>EDIT</button>
                      </td>
                      <td>
                        <button class="btn-danger deletebtn" style="font-weight:bold; border-radius:10px 10px 10px 10px;"><i class="fas fa-user-minus"></i> DELETE</button>
                      </td>
                          
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document" >
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
          <form method="POST" action="Admin-ManageAccount.php">
          <button class="btn btn-danger" type="submit" name="logout_btn">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>


          <!-- The style of the add Account -->
          <style type="text/css">   .back{background-color: rgba(0,100,0,.9); border-radius:10px 10px 10px 10px;} .modal-title{color:white; font-weight: bold;} ::placeholder{font-weight: bold; color:white; text-align: center;} .username,.password{border:none; color:white; background-color: transparent; margin-left:5px; border-bottom: 2px solid white; font-weight: bold; text-align: center; width: 40%;}  .username:focus,.password:focus{outline: none;} .username{margin-right: 20px;} #note{color:white; } .username,.password,.fa-user-tie,.fa-unlock-alt{margin-top: 30px;} .fa-user-tie,.fa-unlock-alt{color:white;}    #x{color:white;} </style>
          <!-- End of the style of the add Account -->

    <!-- Add Account Modal-->
  <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Create Temporary Account</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>

        <form method="POST" action="Admin-ManageAccount.php">

          <div class="modal-body">

                <h6 id="note">Note: You must enter temporarily the user's ID number!</h6>
              <i class="fas fa-user-tie fa-2x"></i><input type="text"  id="exampleInputEmail" placeholder="Enter Username" class="username" name="temp_uname">
              <i class="fas fa-unlock-alt fa-2x"></i><input type="text"  id="exampleInputEmail" placeholder="Enter Password" class="password" name="temp_pass">

              <i class="fas fa-key fa-2x" style="color: white; margin-left: 51%;" ></i><select style="width: 40%; border-radius: 10px; margin-top: 20px; " name="acclvl_reg">
                <option value="" disabled selected hidden style="color :gray;">Access Level</option>
                <option value="admin">Admin</option>
                <option value="engineer">Engineer</option>
                <option value="head">Head</option>
              </select>
          </div>
        

        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn-primary btn" name="temp_acc">Add Temporary Account</button>

          </form>
        </div>
      </div>
    </div>
  </div>
    <!-- End Add Account Modal-->
 

        <!-- Edit Account Modal-->
  <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>
                <style type="text/css">.lbl {color:white; font-weight: bold;} #fname, #lname, #dept, #acclvl, #uname{color: black; font-weight: bold; }</style>

        <form method="POST" action="Admin-ManageAccount.php">

          <div class="modal-body">

            <input type="hidden" name="update_id" id="update_id">
               
             <div class="form-group">
              <label class="lbl"> Firstname</label>
               <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Firstname" >
             </div>
      
             <div class="form-group">
              <label class="lbl"> Lastname</label>
               <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Lastname">
             </div>
                         
             <div class="form-group">
              <label class="lbl"> Department</label>
               <input type="text" name="dept" id="dept" class="form-control" placeholder="Enter Department">
             </div>
                         

             <div class="form-group">
              <label class="lbl"> Access Level</label>
               
               <select name="acclvl" id="acclvl" class="form-control">
                 <option value="" disabled selected hidden>Select Access level</option>
                 <option value="admin" id="acclvl">admin</option>
                 <option value="engineer" id="acclvl" >engineer</option>
                 <option value="head" id="acclvl" >head</option>
               </select>
             </div>

              <div class="form-group">
              <label class="lbl"> Username</label>
               <input type="text" name="uname" id="uname" class="form-control" placeholder="Enter Username">
             </div>
                         
           
     

          </div>


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          <button class="btn btn-success" type="submit" name="updatedata">Update data</button>
        </div>
       </form>

      </div>
    </div>
  </div>
    <!-- End Edit Account Modal-->




    <!-- Delete Modal -->

    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Are you sure for "Deletion" of Data?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>

        <form method="POST" action="Admin-ManageAccount.php">

          <input type="hidden" name="delete_id" id="delete_id">

          <div class="modal-body">
                <h6 id="note">Click "Confirm" if you want to. </h6>

          </div>


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-danger" type="submit" name="deletedata"> Delete</button>

          </form>
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

   <script src="js/popper.min.js"></script>
   
 


     <script>
       
        $('.editbtn').on('click', function(){

          $('#EditModal').modal('show');


          $tr = $(this).closest('tr');

            var data = $tr.children("td").map( function(){
              return $(this).text();
            }).get();

            console.log(data);
            $('#update_id').val(data[0]);
            $('#fname').val(data[1]);
            $('#lname').val(data[2]);
            $('#dept').val(data[3]);
            $('#acclvl').val(data[4]);
            $('#uname').val(data[5]);
        });
      
     </script>





          <script>
      
        $('.deletebtn').on('click',function(){

          $('#DeleteModal').modal('show');


          $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
              return $(this).text();
            }).get();

            console.log(data);
            $('#delete_id').val(data[0]);

        });
       
     </script>
  

</body>

</html>
