<?php
include 'include/connect.php'; 
session_start();
include 'include/security.php';
include 'include/isset-Head.php';
$user = $_SESSION['USERNAME'];

$fname = "";
$dept = "";


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
      <li class="nav-item">
        <a class="nav-link" href="Head-Record-JOS.php">
          <i class="fas fa-book"></i>
          <span>Record</span></a>
      </li> 
                  <!-- Divider -->
      <hr class="sidebar-divider my-0">


       <!-- Nav Item - Manage Accounts -->
      <li class="nav-item active">
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
                      <span class="mr-2 d-none d-lg-inline margin" ><h3 style="color:white;font-weight:bold; font-family:times; margin-right:10px; margin-top:15px;"><?php echo "Welcome"." ".$fname; ?></h3></span>
                   </div>

                </div>

          

              </nav>
          </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
               <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center; margin-left:23%; font-weight:bold;">Request Job</h1>
          

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <button class="btn addi" data-toggle="modal" data-target="#AddModal" style="float:right; font-weight:bold;  color:white; background-color:green;"> <i class="fas fa-pen-square"></i> Job Request</button>
             
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                
                    <tr>
                      
                      <th>ID</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Job</th>
                      <th>Certified</th>
                      <th>Date</th>

                      
                    </tr>
                  </thead>
                 
                  <tbody>
                        <?php
                        $head = "pending";
                        $finished ="Finish";
                        $table = mysqli_query($conn,'SELECT * FROM jos_record WHERE department="'.$dept.'" AND head="'.$head.'" AND engineer="'.$finished.'" ');
                        

                        if(mysqli_num_rows($table) > 0)
                          {  while ($row = mysqli_fetch_assoc($table)) 
                                {  
                                  
                                  

                                   
                                    
                                  ?>
                    <tr>
                      <td><?php echo $row["id"]; ?></td>
                      <td><?php echo $row["name"]; ?></td>
                      <td><?php echo $row["department"]; ?></td>
                      <td><?php echo $row["engineer"]; ?></td>

                      <td> <button class="btn-primary butt certify_btn" style="font-weight:bold; border-radius:10px 10px 10px 10px;"><i class="fas fa-certificate "></i> Action</button></th></th>
                      <td><?php echo $row["petsa"]; ?></td>

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
          <style type="text/css">   .back{background-color: rgba(0,100,0,.9); border-radius:10px 10px 10px 10px;} .modal-title{color:white; font-weight: bold;} ::placeholder{font-weight: bold; color:darkgray; } .username,.password{border:none; color:white; background-color: transparent; margin-left:5px; border-bottom: 2px solid white; font-weight: bold; text-align: center; width: 40%;}  .username:focus,.password:focus{outline: none;} .username{margin-right: 20px;}.username,.password,.fa-user-tie,.fa-unlock-alt{margin-top: 30px;} .fa-user-tie,.fa-unlock-alt{color:white;}    #x{color:white;}  .fa-pen{color:white;} .f-col,.s-col,.t-col{  float: left; color: white; font-size: 20px; margin-left: 2%}.f-col{width: 33%}.s-col{width: 40%} .t-col{width: 18%} #title{font-weight: bold; font-size: 20px;} #mat{width: 100%; height: 30px; margin-bottom: 2px} #matn{width: 100%; height: 30px; margin-bottom: 2px}

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
        <div class="modal-body"> <h6 style="color: white;">Click "Logout" below if you want to.</h6></div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form method="POST" action="Head-Request.php">
          <button class="btn btn-danger" type="submit" name="logout_btn">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>


        <!-- Message Modal-->
  <div class="modal fade" id="MessageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Have you seen the Finished Job?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>
          <form method="POST" action="Head-Request.php">

          <div class="modal-body">

            <input type="hidden" name="certified_id" id="certified_id">
          <h4 style="color:white; font-size: 20px;">If you already seen the finished Job just click "Certified button" Thank you!</h4>
          <label style="color: white; font-weight: bold;">DATE:</label>
            <style type="text/css">::placeholder{ text-align: left;}</style>
          <input style="background-color: transparent; border: none;  width:33%; outline: none; color: white;" type="DATE" name="petsa" placeholder="DD/MM/YYYY">

 
                
                

          </div>


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success" name="certifiedbtn">Certified</button>
          </form>
        </div>
      </div>
    </div>
  </div>


    <!-- End Message Modal-->


     <!-- Profile Modal-->
  <div class="modal fade" id="ProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content back">
        <div class="modal-header">


          <h5 class="modal-title" id="exampleModalLabel">Profile Card</h5>



          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>


          <div class="modal-body">

              <style type="text/css">
                .fir-col,.sec-col,.thi-col,.fou-col{
                  float: left;
                  
                }
                
                .fir-col{
                    width: 24.5%;
                }
                .sec-col{
                    width: 24.5%;
                }
                .thi-col{
                    width: 24.5%;
                }
                .fou-col{
                    width: 24.5%;
                }
                #info{
                  font-size: 20px;
                  color:white;
                }
                .bott{
                  background-color: blue;
                  color: white;
                }
              </style>

          <div class="all-col">
            
            <div class="fir-col">
              <h3 id="info">Firstname: </h3>
              <h3 id="info">Department: </h3>
              
              
            </div>

              <div class="sec-col">
               <h3 id="info" style=" font-weight: bold;">Sebastian</h3>
               <h3 id="info" style=" font-weight: bold;">CCS</h3>
               
             
              </div>

                 <div class="thi-col">
                    <h3 id="info">Lastname:</h3>
                    <h3 id="info">Position: </h3>
                                    
                 </div>

                     <div class="fou-col">
                       <h3 id="info" style=" font-weight: bold;">Jabson</h3>
                       <h3 id="info" style=" font-weight: bold;">Student</h3>
                       
                        
                     </div>
            
          </div>

 
                
                

          </div>


        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Ok</button>
          
          
        </div>
      </div>
    </div>
  </div>

  <!-- End of Profile Card -->


      <!-- Message Modal-->
  <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content back">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Job Request </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><h5 id="x">×</h5></span>
          </button>
        </div>
<form method="POST" action="Head-Request.php" >

        
          <div class="modal-body">
            <div class="1st-division" style="margin-bottom: 2%;">

              <style type="text/css">

                #ful, #loc{
                  margin-left: 2%;
                }
                  #ful, #dept{
                    width: 46.5%;

                  }
                   .up-1st-div{
                       margin-bottom: 2px;
                   }
                      #loc{
                        width: 93.9%;
                      }
                        
              </style>

              <div class="up-1st-div">
                <input type="text" name="name" placeholder="Fullname" id="ful" required>
                <input type="text" name="department" placeholder="Department" id="dept" required>
              </div>
              <div class="down-1st-div">
                <input type="text" name="location" placeholder="Location" id="loc" required>
              </div>
            </div>

            <div class="2nd-division"> 
                <div class="f-col" >
                  <h4 id="title">Needs</h4>
                  <select id="matn nd1" placeholder="required" name="need1" required/>
                    <option value="" disabled selected > Select needs</option>
                    <option value="REPAIR">Repair</option>
                    <option value="PRODUCE">Produce</option>
                    <option value="REPLACEMENT">Replacement</option>
                  </select>

                  <select id="matn nd2" name="need2">
                    <option disabled selected> Select needs</option>
                   <option value="REPAIR">Repair</option>
                    <option value="PRODUCE">Produce</option>
                    <option value="REPLACEMENT">Replacement</option>
                    
                  </select>

                  <select id="matn nd3" name="need3">
                    <option value="" disabled selected> Select needs</option>
                    <option value="REPAIR">Repair</option>
                    <option value="PRODUCE">Produce</option>
                    <option value="REPLACEMENT">Replacement</option>
                  
                  </select>
                

                <select id="matn nd4" name="need4">
                    <option value="" disabled selected> Select needs</option>
                    <option value="REPAIR">Repair</option>
                    <option value="PRODUCE">Produce</option>
                    <option value="REPLACEMENT">Replacement</option>
                   
                  </select>

                  <select id="matn nd5" name="need5">
                    <option value="" disabled selected> Select needs</option>
                    <option value="REPAIR">Repair</option>
                    <option value="PRODUCE">Produce</option>
                    <option value="REPLACEMENT">Replacement</option>
                    
                  </select>

          </div>
                <div class="s-col">
                  <h4 id="title">Materials</h4>

                  <input type="text" name="object1" id="mat" title="Materials" placeholder="1. eg. Fluorescent" required>
                  <input type="text" name="object2" id="mat" title="Materials" placeholder="2.(optional)">
                  <input type="text" name="object3" id="mat" title="Materials" placeholder="3.(optional)">
                  <input type="text" name="object4" id="mat" title="Materials" placeholder="4.(optional)">
                  <input type="text" name="object5" id="mat" title="Materials" placeholder="5.(optional)">
                </div>

                <div class="t-col">
                  <h4 id="title" style="text-align: center;">Quantity</h4>

                   <div class="quan"><input type="number" step="1" min="1" max="" name="quantity1" value="" title="Quantity" class="input-text qty text" size="4" pattern="" inputmode="" required></div>

                   <div class="quan"><input type="number" step="1" min="1" max="" name="quantity2" value="" title="Quantity" class="input-text qty text" size="4" pattern="" inputmode=""></div>

                   <div class="quan"><input type="number" step="1" min="1" max="" name="quantity3" value="" title="Quantity" class="input-text qty text" size="4" pattern="" inputmode=""></div>

                   <div class="quan"><input type="number" step="1" min="1" max="" name="quantity4" value="" title="Quantity" class="input-text qty text" size="4" pattern="" inputmode=""></div>

                   <div class="quan"><input type="number" step="1" min="1" max="" name="quantity5" value="" title="Quantity" class="input-text qty text" size="4" pattern="" inputmode=""></div>
               
                </div>

             </div>   

          </div>

          <?php 
          $mes = ""
          ?>
          <div class="3rd-division" style="margin-left:5%;">
              <h4 style="color: White; "> <?php echo "$mes"; ?> </h4>
          </div>


        <div class="modal-footer">
          
          <input class="btn-secondary" type="button" data-dismiss="modal" value="Cancel">
          <input class="btn-success" type="submit" name="jobreq_btn">
        </div>
    </form>
       
      </div>
    </div>
  </div>

  <style type="text/css"> .input-text{width: 70px; text-align: center; height: 30px; margin-bottom: 2px;} .quan{text-align: center; height: 30px; margin-bottom: 2px;}</style>

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
      
        $('.certify_btn').on('click',function(){

          $('#MessageModal').modal('show');


          $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
              return $(this).text();
            }).get();

            console.log(data);
            $('#certified_id').val(data[0]);

        });
       
     </script>


</body>

</html>
