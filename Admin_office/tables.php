<?php include('../Phplogin/functions.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav  bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color:#004d4d;" id="mainNav">
 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color:#004d4d;color:white;" >
           <span class="nav-link-text"><img src="../img/logo.jpg" width="120" style="margin-left:55px;margin-top:0;"><br><strong> <span style="font-size:17px;margin-left:11px;"> Villianueva Misamis Oriental </span></strong><br><span style="font-size:15px;margin-left:40px;">Local Government Unit</span>
        </span><style>img {border-radius: 100%;}</style>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard" style="border:solid 1px;margin-top:20px;background: RGBA(13, 70, 83, 0.65);color:white;">
          <a class="nav-link" href="index.php">
            <i class="fa fa-fw fa-dashboard" style="color:white;"></i>
            <span class="nav-link-text" style="color:white;">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Profile" style="border:solid 1px;background: RGBA(13, 70, 83, 0.65);">
          <a class="nav-link" data-toggle="modal" data-target="#AdminModal">
            <i class="fa fa-fw fa-user" style="color:white;"></i>
            <span class="nav-link-text" style="color:white;">Profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables" style="border:solid 1px;background: RGBA(13, 70, 83, 0.65);">
          <a class="nav-link" href="tables.php">
            <i class="fa fa-fw fa-table" style="color:white;"></i>
            <span class="nav-link-text" style="color:white;">Documents in your office</span>
          </a>
        </li>
        
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add users" style="border:solid 1px;background: RGBA(13, 70, 83, 0.65);">
          <a class="nav-link"  data-toggle="modal" data-target="#CreateUserModal">
            <i class="fa fa-fw fa-edit" style="color:white;"></i>
            <span class="nav-link-text" style="color:white;">Add users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add users" style="border:solid 1px;background: RGBA(13, 70, 83, 0.65);">
          <a class="nav-link"  href="view_all_users.php">
            <i class="fa fa-fw fa-link" style="color:white;"></i>
            <span class="nav-link-text" style="color:white;">All users</span>
          </a>
        </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Create Document" style="border:solid 1px;background:RGBA(13, 70, 83, 0.65);">
          <a class="nav-link"  data-toggle="modal" data-target="#ModalSaPagAddDocument" >
            <i class="fa fa-fw fa-edit" style="color:white;"></i>
            <span class="nav-link-text" style="color:white;">Create Document</span>
          </a>
        </li>
     
      </ul>
      <ul class="navbar-nav sidenav-toggler" style="background-color: RGBA(13, 70, 83, 0.65);color:white">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left" style="color:white;"></i>
          </a>
        </li>
      </ul>

      <ul class="navbar-nav ml-auto">
       <li class="nav-item">
          <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Documents in your office"  data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-folder-open"></i></a>
        </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
     
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope" data-toggle="tooltip" data-placement="bottom" title="Notification"></i>
            <span class="label label-pill label-danger count" style="color:orange;"></span>
            <span class="indicator text-primary d-none d-lg-block ">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
             
              
            </a>
           
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
          
             <?php if (isset($_SESSION["username"])): ?>

              <?php  
              $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
              $query = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."'   ";  
              $result = mysqli_query($connect, $query);  
              ?> 
               <?php  
                               while($row = mysqli_fetch_array($result))  
                               { 
                               $id = $row["id"];
                               ?>  
            
                                 
                          <img src='../Phplogin/adding_updating_user/uploads/<?php echo $row["file"];?>' class="img-circle" width="35" height="35"> 

                               <?php  
                               }  
                               ?>  
        <?php endif ?>
              <span class="nav-link"><?php echo $_SESSION["username"]; ?></span>  
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="card mb-3">
        <div class="card-header" style="background-color: RGBA(13, 70, 83, 0.65);color:white;">
          <i class="fa fa-table" ></i> Document in all offices</div>
        <div class="card-body">
        <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM tbl_documents WHERE Status = 'Admin Office' ORDER BY Date_created  ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="background:#8c8c8c;color:white;">Document ID</th>
                  <th style="background:#8c8c8c;color:white;">Document Type</th>
                  <th style="background:#8c8c8c;color:white;">Document Tittle</th>
                  <th style="background:#8c8c8c;color:white;">Date Registered</th>
                   <th style="background:#8c8c8c;color:white;">Action</th>
                
                </tr>
              </thead>
              <tfoot>
                <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Document Tittle</th>
                <th>Date Registered</th>
                <th>Action</th>
                 
                </tr>
              </tfoot>
              <tbody>
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                   $id=$row['file']; 
                               ?>  
                               <tr>  
                                    <td><?php echo $row["id"]; ?></td>   <td><?php echo $row["Document_type"]; ?> </td>
                                    <td><?php echo $row["Document_type"]; ?></td> 
                                        <td><?php echo $row["Date_created"]; ?></td> 
                                    <td><input data-toggle="tooltip" data-placement="top" title="View document datails" type="button" name="edit" style="background:#09568d;color:white;font-size:11px;padding:4px 5px 4px 4px;" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view" /> 
                                     </td>
                                      
                <?php  
                               }  
                               ?>  
               
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
                <div class="modal-body" id="employee_detail">  
                </div>  
                
           </div>  
      </div>  
 </div>


     <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" >
      <i class="fa fa-angle-up"></i>
    </a>


 <!-- MODAL sa pag add sa document -->
        <div class="modal fade wow fadeInLeftBig  delay-03s" id="ModalSaPagAddDocument" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:430px;">
            <div class="modal-content" style="width:500px;min-height:570px;background:white;">
              
           <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Add Documents</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body table-responsive" style="height:440px;background:white;padding-left:40px;">
                
                    
                    <form action="admin_office_save.php" method="post" enctype="multipart/form-data">
                          <!-- Doc ID -->
                        <div class="form-group">
                        <span style="color:black;"> Document ID:</span> <br>
                         <input type="text" readonly="" class="form-control" name="id" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;"    value="<?php echo date("ym"); echo "-"; echo mt_rand(1000000, 9999999); ?>" />
                        </div> 
                          <!-- Doc Type -->
                          <span style="color:black;"> Document Type:</span>
                          <div class="form-group">
                          <select required="" class="form-control" name="Document_type" type="text" style="height:40px;color:  black;width:400px;border:1px solid" > 
                              <option value="Bussiness Letter">Bussiness Letter</option>  
                              <option value="Request Paper">Request Paper</option>
                  
                              </select>
                            
                            </div>
                            <span style="color:black;"> Content:</span> 
                            <textarea required="" name="Content" placeholder="Content" 
                            class="form-control"  style="color:black;height:150px;font-size:15px;width:400px;border:1px solid"></textarea>

                           <input required="" value="Admin Office" type="hidden" name="Froms"  class=" form-control" >
                           <input type="hidden" value="Admin Office"  name="Status">
   
                     <!-- Who create the document -->
                           <input required="" readonly="" value="Admin Office"  type="hidden" name="Document_create"  class=" form-control" >
                          <div class="form-group">  

                          <span style="color:black;">Date Registered:</span>
                          <input readonly="" value="<?php echo date("y/m/d"); echo "-";
                            echo date("h:i:sa"); ?>" type="text"  name="Date_created"  class=" form-control" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;" >
                          </div> 

                          <input type="hidden" value="0" name="msg_stat"> 

                           <!-- File attachment -->  
                           <span style="color:black;"> Document Attachment:</span>
                          <div class="form-group">  
                                <input required="" id="fileToUpload" type="file" name="file" class="form-control "  style="color:black;height:40px;font-size:15px;width:400px;" />
                          </div>      

              </div>                
                    <div class="modal-footer" style="background:#d9d9d9;">        
                        <button type="submit" id="insert" class="btn btn-primary btn-md" name="btn-upload">SAVE</button>
                    </div>
                  </form>
             
              
            </div>
          </div>
        </div>      


 <!-- MODAL edit sa user -->
        <div class="modal fade wow fadeInLeftBig  delay-03s" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:430px;">
            <div class="modal-content" style="width:500px;min-height:570px;background:white;">
              
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body table-responsive" style="height:470px;background:white;padding-left:40px;">
                  <iframe src="../Phplogin/adding_updating_user/update_user.php" style="border:none;float:left;background:white;margin-left:0;border-radius:5px;" width="430" height="430" ></iframe>    
          </div>
             <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
           
          </div>  
            </div>
          </div>
        </div>      


    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>



   <!--  Modal sa pag add og user-->
    <div class="modal fade" id="CreateUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="margin-left:405px;">
            <div class="modal-content" style="width:500px;min-height:550px;background:white;">
              
          <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" style="width:470px;padding-left:40px;">
            
               <iframe src="../Phplogin/adding_updating_user/save_user_admin.php" style="border:none;float:left;background:white;margin-left:0;border-radius:5px;" width="430" height="430" ></iframe>  
                  
 
          </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
           
          </div>
        </div>
      </div>
    </div>


    <!-- Admin Profile na Modal-->
    <div class="modal fade" id="AdminModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header" style="background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Admin Information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
         
    <div class="modal-body">  
           <?php if (isset($_SESSION["username"])): ?>

              <?php  
              $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
              $query = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."'  ";  
              $result = mysqli_query($connect, $query);  
              ?> 
               <?php  
                               while($row = mysqli_fetch_array($result))  
                               { 
                      
                               ?>  
                            <div class="table-responsive" style="color:black;">  
                                <table class="table table-bordered">
                                    <tr>  
                                       <td width="30%"><label>Fullname</label></td>  
                                       <td width="70%"> <?php echo $row["fullname"]; ?> </td>  
                                  </tr>  
                                   <tr>  
                                         <td width="30%"><label>Username</label></td>  
                                <td width="70%"> <?php echo $row["username"]; ?> </td>  
                                    </tr>
                                     <tr>  
                                         <td width="30%"><label>Email</label></td>  
                                      <td width="70%"> <?php echo $row["email"]; ?> </td>  
                                    </tr> 
                                    <tr>  
                     <td width="30%"><label>Position</label></td>  
                     <td width="70%"> <?php echo $row["position"]; ?> </td>  
                       </tr> 

                          <tr>  
                     <td width="30%"><label>Office</label></td>  
                      <td width="70%"> <?php echo $row["office"]; ?> </td>  
                   </tr> 
                      <tr>  
                     <td width="30%"><label>Profile</label></td>  
                      <td width="70%">  <img src='../Phplogin/adding_updating_user/uploads/<?php echo $row["file"];?>' class="img-thumbnail" width="130" height="80"> </td>  
                   </tr> 
               
                                </table>    
                            </div>      
                         



                               <?php  
                               }  
                               ?>  
        <?php endif ?>
                  
            <div class="modal-footer">
            <a class="btn btn-primary" style="color:white;" data-toggle="modal" data-target="#EditUser" data-dismiss="modal">Update</a>
            <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
            
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->

    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
  </div>
</body>

</html>
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.view', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"fetch.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#dataModal').modal('show');  
                     }  
                });  
           }            
      });      
     
 });  
 </script>

 <script type="text/javascript">
    $(function () {
        $("#btn-upload").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>

<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#fileToUpload').val();  
           if(image_name == '')  
           {  
                alert("Please select file attachment");  
                return false;  
           }  
           else  
           {  
                var extension = $('#fileToUpload').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['docz','pdf','gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Document File');  
                     $('#fileToUpload').val('');  
                     return false;  
                }  
                else {
                    
                }
           }
          
          
      });  

 });  
 </script>  

 <script>
 
$(document).ready(function(){
 
// updating the view with notifications using ajax
 
function load_unseen_notification(view = '')
 
{
 
 $.ajax({
 
  url:"notify_admin_office.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
 
  {
 
   $('.dropdown-menu').html(data.notification);
 
   if(data.unseen_notification > 0)
   {
    $('.count').html(data.unseen_notification);
   }
 
  }
 
 });
 
}
 
load_unseen_notification();
 

// load new notifications
 
$(document).on('click', '.dropdown-toggle', function(){
 
 $('.count').html('');
 
 load_unseen_notification('yes');
 
});
 
setInterval(function(){
 
 load_unseen_notification();;
 
}, 5000);
 
});
 
</script>



