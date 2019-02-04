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
   <link rel="stylesheet" type="text/css" href="../css/animate.css"> 
</head>

<body class="fixed-nav  bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color:#004d4d;" id="mainNav">
 
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion" style="background-color:#004d4d;color:white;" >
           <span class="nav-link-text"><img src="../img/logo.jpg" width="120" style="margin-left:55px;margin-top:0;" class="img"><br><strong> <span style="font-size:17px;margin-left:11px;"> Villianueva Misamis Oriental </span></strong><br><span style="font-size:15px;margin-left:40px;">Local Government Unit</span>
        </span><style>.img {border-radius: 100%;}</style>
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
        
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Add users" style="border:solid 1px;background: RGBA(13, 70, 83, 0.65);">
          <a class="nav-link"  data-toggle="modal" data-target="#CreateUserModal">
            <i class="fa fa-fw fa-edit" style="color:white;"></i>
            <span class="nav-link-text" style="color:white;">Add users</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="All offices user" style="border:solid 1px;background: RGBA(13, 70, 83, 0.65);">
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
          <a data-toggle="tooltip" data-placement="bottom" title="Message">
            <i data-toggle="modal" data-target="#modal-register_chat_box"><img src="../img/media.png" class="img-circle" width="30" height="30"></i>
            </a>
        </li> &nbsp&nbsp
        <li class="nav-item">
          <a data-toggle="tooltip" data-placement="bottom" title="Received Documents">
            <i data-toggle="modal" data-target="#modal-register_recieve"><img src="../img/1.png" class="img-circle" width="30" height="30"></i>
            </a>
        </li>
         <li class="nav-item">

          <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Created Documents"  data-toggle="modal" data-target="#exampleModal">
             <i data-toggle="modal" data-target="#modal-register_create" class="fa fa-fw fa-edit" style="font-size:20px;"></i>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="tooltip" data-placement="bottom" title="Sent Documents" >
             <i data-toggle="modal" data-target="#modal-register_sent" class="fa fa-fw fa-send" style="font-size:20px;"></i>
            </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="bottom" title="Document Incoming" >
          <a class="nav-link">
             <i data-toggle="modal" data-target="#modal-register_4" class="fa fa-fw fa-envelope" style="font-size:20px;"></i>
            
            </a>
        </li>
      <li class="nav-item dropdown" data-toggle="tooltip" data-placement="bottom" title="Notification" >
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="fa fa-fw fa-bell"></i>
             <span class="label label-pill label-danger count" style="color:orange;"></span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            
          </div>
     </li>
     
        
           
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
            
                                 
                          <img src='../Phplogin/adding_updating_user/uploads/<?php echo $row["file"];?>' class="img" width="35" height="35"> 

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
          <i class="fa fa-table" ></i> Documents in all offices</div>
        <div class="card-body">
        <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM tbl_documents ORDER BY Date_created  ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="background:#8c8c8c;color:white;">Document ID</th>
                  <th style="background:#8c8c8c;color:white;">Document Type</th>
                  <th style="background:#8c8c8c;color:white;">Document Tittle</th>
                  <th style="background:#8c8c8c;color:white;">Status</th>
                  <th style="background:#8c8c8c;color:white;">Date Registered</th>
                   <th style="background:#8c8c8c;color:white;">Action</th>
                
                </tr>
              </thead>
              
              <tbody>
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                   $id=$row['file']; 
                               ?>  
                               <tr>  
                                    <td><?php echo $row["id"]; ?></td>   <td><?php echo $row["Document_type"]; ?> </td>
                                    <td><?php echo $row["Document_title"]; ?></td> 
                                    <td><?php echo $row["Document_sent_status"]; ?></td> 
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
            <h5 class="modal-title" id="exampleModalLabel">User information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
                <div class="modal-body" id="employee_detail">  
                </div>  
                 <div class="modal-footer" style="background:#d9d9d9;">        
                       <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                    </div>
                
           </div>  
      </div>  
    </div>

    
    <div id="dataModalDelete" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
                <div class="modal-body" id="delete_modal">  
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
          
          <div class="modal-dialog" style="margin-left:434px;">
            <div class="modal-content" style="width:500px;min-height:570px;background:white;">
              <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Add Documents</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
              
          <div class="modal-body table-responsive" style="height:440px;background:white;padding-left:40px;">
                
                       
                    <form action="admin_office_view_all_user_table_save.php" method="post" enctype="multipart/form-data">
                         
                       
                          <!-- Doc Type -->
                          <span style="color:black;"> Document Type:</span>
                          <div class="form-group">
                          <select required="" class="form-control" name="Document_type" type="text" style="height:40px;color:  black;border:1px solid" > 

                <option value="Bussiness Letter">Bussiness Letter</option>  
                <option value="Request Letter">Request Letter</option>
                <option value="Memorandum Order">Memorandum Order</option>  
                <option value="Statement of Account">Statement of Account</option>
                <option value="Executive Order">Executive Order</option>  
                <option value="Purchase Request/Order">Purchase Request/Order</option>
                <option value="Voucher">Voucher</option>  
                <option value="Request Paper">Request Paper</option>
                <option value="Billing Statement">Billing Statement</option>  
                <option value="Application Letter and Resume">Application Letter and Resume (Job Orders)</option>
                <option value="Certificate of Employment">Certificate of Employment (Job order and Regular)</option>  
                <option value="Business Permit">Business Permit</option>
                  
                              </select>
                            
                            </div>
                             <div class="form-group">  

                          <span style="color:black;">Document Title:</span>
                          <input  type="text" required="" id="Document_title" placeholder="Enter document title" name="Document_title" class=" form-control" style="height:40px;color:  black;border:1px solid" >
                          </div> 

                            <span style="color:black;"> Content:</span> 

                            <textarea required="" name="Content" placeholder="Ennter document content" 
                            class="form-control"  style="color:black;height:150px;font-size:15px;border:1px solid"></textarea>

                           <input required="" value="Admin Office" type="hidden" name="Froms"  class=" form-control" >
                           <input type="hidden" value="Draft"  name="Status">
   
                     <!-- Who create the document -->
                           <input required="" readonly="" value="Admin Office"  type="hidden" name="Document_create"  class=" form-control" >
                          <div class="form-group">  

                        
                          <input readonly="" value="<?php echo date("y/m/d"); echo "-";
                            echo date("h:i:sa"); ?>" type="hidden"  name="Date_created"  class=" form-control" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;" >
                          </div> 

                          <input type="hidden" value="0" name="msg_stat">

                           <input type="hidden" value="Draft"  name="Document_sent_status">

                              <input type="hidden" value="Forwarded"  name="Document_sent_status_dayun">
                            <input type="hidden" value="Not sent already"  name="Date_sent">
                             <!-- Send ni -->
                        <div class="form-group">  
                        <span style="color:black;">Send To:</span> 

                        
                          <?php
                      
                          # diri mag pili sa sender     
                          mysql_connect('localhost', 'root', '', 'villa_dblgu');
                          mysql_select_db('villa_dblgu');

                          $sql = "SELECT * FROM users";
                          $result = mysql_query($sql);

                          echo "<select name='document_forward' class='form-control' id='input_send' style='color:black;'>";
                          echo " <option value=''></option>";
                          while ($row = mysql_fetch_array($result)) {
                              echo "<option value='" . $row['username'] ." ( " . $row['office'] .")'>" . $row['username'] ." ( " . $row['office'] .")</option>";

                          }
                          echo "</select>";

                          ?>
 



                        </div>         


                           <!-- File attachment -->  
                           <span style="color:black;"> Document Attachment:</span>
                          <div class="form-group">  
                                <input required="" id="fileToUpload" type="file" name="file" class="form-control "  style="color:black;height:40px;font-size:15px;" />
                          </div> 
                         
              </div>                
                    <div class="modal-footer" style="background:#d9d9d9;">  
                      <button type="submit" data-toggle="tooltip" data-placement="top" title="Save document" id="insert" class="btn btn-primary btn-md" name="btn-upload">Save</button>
                     <button type="submit" id="btn-send-direct" class="btn btn-success btn-md" name="btn-send" data-toggle="tooltip" data-placement="top" title="Send document">Send</button>        
                      
                    </div>
                  </form>
             
              
            </div>
          </div>
        </div>      



 <!-- MODAL edit sa information ni admin -->
        <div class="modal fade wow fadeInLeftBig  delay-03s" id="EditUser" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:430px;">
            <div class="modal-content" style="width:500px;min-height:570px;background:white;">
              
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Edit Information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#AdminModal">
             <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body table-responsive" style="height:470px;background:white;padding-left:40px;">
                  <iframe src="../Phplogin/adding_updating_user/update_user_information_admin.php" style="border:none;float:left;background:white;margin-left:0;border-radius:5px;" width="430" height="430" ></iframe>    
          </div>
             <div class="modal-footer" style="background:#d9d9d9;color:white;">
             <a class="btn btn-primary" data-toggle="modal" data-target="#UpdatePasswordModal" data-dismiss="modal">Update Password</a>
            <button class="btn btn-warning" type="button" data-dismiss="modal" data-toggle="modal" data-target="#AdminModal">Cancel</button>
           
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
          <div class="modal-body">
             <div class="alert alert-info" style="color:black;">
           Select "Logout" below if you are ready to end your current session.
            </div>
         
          </div>
          <div class="modal-footer" style="background:#d9d9d9;color:white;">
            <button class="btn btn-warning" type="button" data-dismiss="modal" style="color:white;">Cancel</button>
            <a href="../index.php"><button class="btn btn-danger" type="button" style="color:white;">Log out</button></a>
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
            <a href="refresh_table_user.php">
            <button class="close" type="button" \>
             <span aria-hidden="true">×</span>
            </button>
            </a>
          </div>
          <div class="modal-body" style="width:470px;padding-left:40px;">
            
               <iframe src="../Phplogin/adding_updating_user/save_user_admin.php" style="border:none;float:left;background:white;margin-left:0;border-radius:5px;" width="430" height="430" ></iframe>  
                  
 
          </div>
          <div class="modal-footer" style="background:#d9d9d9;color:white;">
           
            <button  data-dismiss="modal" class="btn btn-danger" type="button">Close</button>
           
           
          </div>
        </div>
      </div>
    </div>

<!--  Modal sa update og user password-->
    <div class="modal fade" id="UpdatePasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" style="margin-left:480px;height:300px;">
            <div class="modal-content" style="width:400px;height:420px;background:white;">
              
          <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Update password</h5>
            <a href="refresh_table_user.php">
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" data-toggle="modal" data-target="#EditUser">
             <span aria-hidden="true">×</span>
            </button>
            </a>
          </div>
          <div class="modal-body" style="width:470px;padding-left:40px;height:200px;">
            
               <iframe src="../Phplogin/adding_updating_user/update_password_admin.php" style="border:none;float:left;background:white;margin-left:0;border-radius:5px;" width="350" height="270" ></iframe>  
                  
 
          </div>
          <div class="modal-footer" style="background:#d9d9d9;color:white;">
          <button  class="btn btn-warning" type="button" data-dismiss="modal" data-toggle="modal" data-target="#EditUser">Cancel</button>
          
           
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
                                    <tr >  
                                       <td width="30%"><strong><label>Name</label></strong></td>  
                                       <td width="70%"> <?php echo $row["Fullname"]; ?>
                                       </td>  
                                  </tr>  
                                   <tr>  
                                         <td width="30%"><strong><label>Username</label></strong></td>  
                                <td width="70%"> <?php echo $row["username"]; ?> </td>  
                                    </tr>
                                     <tr>  
                                         <td width="30%"><strong><label>Email</label></strong></td>  
                                      <td width="70%"> <?php echo $row["email"]; ?> </td>  
                                    </tr> 
                                    <tr>  
                     <td width="30%"><strong><label>Position</label></strong></td>  
                     <td width="70%"> <?php echo $row["position"]; ?> </td>  
                       </tr> 

                          <tr>  
                     <td width="30%"><strong><label>Office</label></strong></td>  
                      <td width="70%"> <?php echo $row["office"]; ?> </td>  
                   </tr> 
                      <tr>  
                     <td width="30%"><strong><label>Profile</label></strong></td>  
                      <td width="70%">  <img src='../Phplogin/adding_updating_user/uploads/<?php echo $row["file"];?>' class="img-thumbnail" width="80" height="40"> </td>  
                   </tr> 
               
                                </table>    
                            </div>      
                         



                               <?php  
                               }  
                               ?>  
        <?php endif ?>
                  
        
            
          </div>
              <div class="modal-footer" style="background:#d9d9d9;color:white;">
            <a class="btn btn-primary" style="color:white;" data-toggle="modal" data-target="#EditUser" data-dismiss="modal">Update</a>
            <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="add_data_Modal" class="modal fade">  
     <div class="modal-dialog">  
           <div class="modal-content">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">User information</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
            </div>
                <div class="modal-body table-responsive" style="height:300px;"> 
                 <?php include('update_user_profile.php') ?>

                    <?php include('update_user.php') ?>
                  
                     <form method="post" action="" enctype="multipart/form-data">  
                      <div class="form-group">  
                               <span  style="color:black;margin-left:0;"> User_profile:</span><br>
                               <input type="file" id="fileToUpload"  class="btn btn-info"  name="file" /> <br>

                              </div>

                          <div class="form-group">  
                         <!-- id ni -->
                          <input class="form-control" type="hidden" style="background:white;color:black;" name="id" id="id" />  
                       </div> 

                      <div <?php if (isset($fullname_error)): ?> class="form_error" <?php endif ?> class="form-group">  
                         <!-- id ni -->
                        <span><strong> Fullname: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;" name="fullname" id="fullname" />  
                       </div>
                        <div class="form-group" <?php if (isset($username_error)): ?> class="form_error" <?php endif ?> class="form-group">  
                         <!-- id ni -->
                        <span><strong> Username: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;" name="username" id="username" />  
                       </div>  
                        <div class="form-group" <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> class="form-group">  
                         <!-- id ni -->
                        <span><strong>Email: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;" name="email" id="email" />  
                       </div>   
                        <div class="form-group">  
                         <!-- id ni -->
                        <span><strong> Position: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;" name="position" id="position" />  
                       </div> 
                        <div class="form-group">  
                         <!-- id ni -->

                        <span><strong> Office: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;" name="office" id="office" />  
                       </div> 
                        <span><strong>Password:</strong></span>
                           <div  <?php if (isset($password_error)): ?> class="form_error" <?php endif ?> class="form-group" >

                                <input type="password" class="form-control" maxlength="8" minlength="5" name="password"  id="txtPassword" value="<?php echo $password; ?>"  class="form-control" >
                             <?php if (isset($password_error)): ?>
                                  <span style="margin-left:0;"><?php echo $password_error; ?></span>
                             <?php endif ?>
                              </div>
                              <span><strong>Confirm password:</strong></span>
                              <div class="form-group">
                                <input type="password" class="form-control" maxlength="8" minlength="5"  id="txtConfirmPassword" value="<?php echo $password; ?>"  class="form-control" >
                                
                              </div>
      
                      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                  
                     <button type="submit" id="btn-update-user" name="btn-update" class="btn btn-primary">Update information</button>   
                     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>  
                </div> 
           
            </form> 
           </div>  
      </div>  
 </div> 


 <!-- MODAL SA PAG VIEW SA DOCUMENT NA RECIEVE -->


 <div id="modal-register_recieve" class="modal fade">  
     <div class="modal-dialog" style="margin-left:115px;margin-top:20px;">  
           <div class="modal-content"  style="width:1100px;height:620px;padding-top:0;">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-table"></span> Document Received</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
            </div>
                <div class="modal-body table-responsive" style="height:300px;"> 
                   <iframe src="admin_received_document_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>  
                
      
                      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                  
                    
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
           
            </form> 
           </div>  
      </div>  
 </div> 


 <!-- MODAL SA PAG VIEW SA DOCUMENT NA GI CREATE NIMO -->


 <div id="modal-register_create" class="modal fade">  
     <div class="modal-dialog" style="margin-left:115px;margin-top:20px;">  
           <div class="modal-content"  style="width:1100px;height:620px;padding-top:0;">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-table"></span> Document Created</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
            </div>
                <div class="modal-body table-responsive" style="height:300px;"> 
                   <iframe src="admin_create_document_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>  
                
      
                      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                  
                    
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
           
            </form> 
           </div>  
      </div>  
 </div> 

<!-- MODAL SA PAG VIEW SA DOCUMENT NA GI SENT NIMO -->
 <div id="modal-register_sent" class="modal fade">  
     <div class="modal-dialog" style="margin-left:115px;margin-top:20px;">  
           <div class="modal-content"  style="width:1100px;height:620px;padding-top:0;">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel"> <span class="fa fa-table"></span> Sent Document</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
            </div>
                <div class="modal-body table-responsive" style="height:300px;"> 
                   <iframe src="admin_sent_document_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>  
                
      
                      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                  
                    
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
           
            </form> 
           </div>  
      </div>  
 </div> 

 <!-- Message Table-->
    
    <div id="modal-register_chat_box" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content" style="width:570px;">  
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Message</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
                <div class="modal-body" style="background:white;height:300px;">
            <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM message_box";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
               <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" style="width:560px;">
                        <div class="panel-heading">
                          <span class="fa fa-table"></span> Admin's Office
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="width:560px;">
                            <div class="table-responsive" style="width:530px;height:220px;">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th style="color:black;">From</th>
                                            <th style="color:black;">Message</th>
                                           
                                            <th style="color:black;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?>  
                               <tr>  
                                  <td><?php echo $row["sender"]; ?>
                                    (<?php echo $row["senders_office"]; ?>)
                                  </td> 
                                    <td><?php echo $row["reason"]; ?></td> 
                                    
                                    
                                    <td><input data-toggle="tooltip" data-placement="top" title="View document datails" type="button" name="edit" style="background:#09568d;color:white;font-size:11px;padding:4px 5px 4px 4px;" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_message" />

                                     <button type="button" data-toggle="tooltip" data-placement="top" title="Reply Message" name="edit" style="color:white;font-size:11px;padding:5px 5px 5px 5px;" id="<?php echo $row["id"]; ?>" class="btn btn-success btn-xs reply_message" /> <span class="fa fa-reply"> </span>  </button>

                                    <button type="button" data-toggle="tooltip" data-placement="top" title="Delete Message" name="edit" style="color:white;font-size:11px;padding:5px 5px 5px 5px;" id="<?php echo $row["id"]; ?>" class="btn btn-danger btn-xs delete_message" /> <span class="fa fa-trash"> </span>  </button>
                                     
                                    
                                 
                                    </td>  
                               </tr>  
                               <?php  
                               }  
                               ?>  
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
              </div>  
          </div>  
                
                <div class="modal-footer">
          <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#chat_box_modal" data-dismiss="modal">Create Message</button>
            <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
          </div>
                
           </div>  
      </div>  
    </div>

    <!-- View Message details Modal-->
<div id="show_message_box_modal" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.65);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:620px;">  
                <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Message Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div> 
                <div class="modal-body table-responsive" style="height:440px;">     
                     <form method="post" id="insert_form" action="">  
                       <div class="form-group">  
                       
                          <input type="hidden" style="background:white;" name="id" id="id" class="form-control" />

                       </div> 
                       <div class="form-group">  
                        <span style="color:black;">Sender:</span>
                          <input type="text" disabled="" style="background:white;" name="sender" id="sender" class="form-control" />

                       </div> 
                        <span style="color:black;"> Message:</span> 
                            <textarea readonly="" name="message" id="reason" placeholder="Content" 
                            class="form-control"  style="color:black;height:150px;font-size:15px;border:1px solid"></textarea>
                             <div class="form-group">  
                        <span style="color:black;"> Date sent:</span>
                          <input type="text" disabled="" readonly="" style="height:40px;font-size:15px;background:#424d57;color:white;" name="Date_sent" id="Date_sent" class="form-control" />

                       </div> 
                     
                          <input type="hidden" name="employee_id" id="employee_id" />  
      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                       
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  

                     </form>  
           </div>  
      </div>  
 </div>  

 <!-- Delete Message details Modal-->
<div id="delete_message_box_modal" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.65);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:600px;">  
                <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Delete Message</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>  
                <div class="modal-body table-responsive" style="height:160px;">     
                     <form method="post" id="insert_form" action="delete_message.php">  
                          <input type="hidden" style="background:white;" name="id" id="delete_id" class="form-control" />

                          <input type="hidden" name="employee_id" id="employee_id" /> 
                         <!--Refresh delete para mo balik ra dri na form-->
                          <input type="hidden" name="refresh_delete" value="Mayor Office" /> 

                        <div class="alert alert-danger" style="font-size:17px;">
  <strong>Warning!</strong> Are you sure you want delete this message?
</div>
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                      <button type="submit" id="btn-delete_message" class="btn btn-danger" name="btn-delete_message"><span class="fa fa-trash"> Delete </span></button> 
                     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>  
                </div>  

                     </form>  
           </div>  
      </div>  
 </div>  

<!--Reply message-->
<div id="reply_message_box_modal" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.65);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:620px;">  
                 <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Reply Message</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>  
                <div class="modal-body table-responsive" style="height:440px;">     
                     <form method="post" id="insert_form" action="reply_message.php">  
                       <div class="form-group">  
                       
                          <input type="hidden" style="background:white;" name="id" id="reply_id" class="form-control" />

                       </div> 
                       <div class="form-group">  
                        <span style="color:black;"> Send to:</span>
                          <input type="text" readonly="" style="background:white;color:black;" name="reciever" id="reply_sender" class="form-control" />

                          <input type="hidden"  style="background:white;color:black;" name="senders_office" value="Admin Office" id="" class="form-control" />
                             <input type="hidden"  style="background:white;color:black;" name="sender" value="Admin Office" id="" class="form-control" />
                                <input type="hidden" name="notify" value="0" id="" class="form-control" />

                       </div> 
                        <span style="color:black;"> Message:</span> 
                            <textarea required="" name="reply_message" id="reason" placeholder="Content" 
                            class="form-control"  style="color:black;height:150px;font-size:15px;border:1px solid"></textarea>
                             <div class="form-group">  
                        <span style="color:black;"> Date sent:</span>

                 
                             <input type="text" readonly=""  name="reply_date_sent" value="<?php echo date("y/m/d"); echo "-";
                            echo date("h:i:sa"); ?>" class=" form-control" style="height:40px;font-size:15px;background:#424d57;color:white;">
                  

                       </div> 
                     
                          <input type="hidden" name="employee_id" id="employee_id" />  
      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                        <button type="submit" name="btn-reply-message" id="btn-reply-message" class="btn btn-primary">Send</button> 
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
             </form>  
           </div>  
      </div>  
 </div>  


<!-- Chat_box Modal-->
    <div class="modal fade" id="chat_box_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style=" background-color: RGBA(13, 70, 83, 0.65);">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="background:white;width:620px;">
         <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Create Message</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>  
              
          <div class="modal-body">
   
           <form method="post" action="sent_message.php">
           <!-- send ni -->
                        <div class="form-group">  
                        <span style="color:black;">Send To:</span> 
                        <?php
                      
                          # diri mag pili sa sender     
                          mysql_connect('localhost', 'root', '', 'villa_dblgu');
                          mysql_select_db('villa_dblgu');

                          $sql = "SELECT * FROM users";
                          $result = mysql_query($sql);

                          echo "<select name='reciever' class='form-control' id='sent_message' style='color:black;'>";
                           echo " <option value=''></option>";
                          while ($row = mysql_fetch_array($result)) {
                              echo "<option value='" . $row['username'] ."'>" . $row['username'] ." ( " . $row['office'] .")</option>";

                          }
                          echo "</select>";

                          ?>
                        </div>   
                        <div class="form-group">
          <span style="color:black;"> Content:</span> 
                            <textarea required="" id="message_content" name="message_content" placeholder="Content" 
                            class="form-control"  style="color:black;height:170px;font-size:15px;border:1px solid"></textarea>
                      </div>
                            <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."' ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?> 
                                <input type="hidden"  style="background:white;color:black;" name="sender" value="<?php echo $row["username"]; ?>" id="" class="form-control" /> 
                                <?php  
                               }  
                               ?> 

                             <input type="hidden" name="senders_office" value="Admin Office">
                            <input type="hidden" name="notify" value="0">
                        <div class="form-group">     
                             <input type="text" readonly=""  name="Date_sent" value="<?php echo date("y/m/d"); echo "-";
                            echo date("h:i:sa"); ?>" class=" form-control" style="height:40px;font-size:15px;background:#424d57;color:white;">
                        </div>    


          </div>
            <div class="modal-footer">
           <button class="btn btn-primary" type="submit"  name="btn-send-message" id="refresh-send">Send</button>
            <button class="btn btn-warning" type="button" data-toggle="modal" data-target="#modal-register_chat_box" data-dismiss="modal">Cancel</button>
           
          </div>
       </form>   
        </div>
      </div>
    </div>

<!-- MODAL Notification sa tanan mga document na ma receive nimo!-->
        <div class="modal fade" id="modal-register_4" tabindex="-1" role="dialog" aria-labelledby="modal-register_4-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="width:650px;background: #C8C8C8;">
              
              <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document Incoming</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>  

              
             <div class="modal-body" style="background:white;height:400px;">
             
        <div class="card-header" style="background-color: RGBA(13, 70, 83, 0.65);color:white;">
          <i class="fa fa-table" ></i> Documents in all offices</div>
        <div class="card-body" style="width:600px;">
       <?php  
 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
 $query = "SELECT * FROM tbl_documents WHERE Status= '".$_SESSION["username"]." (Admin Office)' AND Document_sent_status = 'Forwarded' ORDER BY Date_created ";  
 $result = mysqli_query($connect, $query);   
 ?> 
               
          <div class="table-responsive" style="width:600px;height:180px;">
            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0" >
              <thead>
                <tr>
                  <th style="color:black;">Document ID</th>
                                            <th style="color:black;">Document Type</th>
                                            <th style="color:black;">Document Title</th>
                                            <th style="color:black;">Action</th>
                
                </tr>
              </thead>
              
              <tbody>
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                   $id=$row['file']; 
                               ?>  
                               <tr>  
                                    <td><?php echo $row["id"]; ?></td> 
                                    <td><?php echo $row["Document_type"]; ?></td> 
                                    <td><?php echo $row["Document_title"]; ?></td> 
                                    
                                    <td><input data-toggle="tooltip" data-placement="top" title="View document datails" type="button" name="edit" style="background:#09568d;color:white;font-size:11px;padding:4px 5px 4px 4px;" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /> 
                                      <button type="button" data-toggle="tooltip" data-placement="top" title="Download Attachment" name="edit" style="color:white;font-size:11px;padding:4px 5px 4px 4px;"  value="View"  class="btn btn-warning btn-xs edit_data" /> <a href="../Action/download.php?filename=<?php echo $id;?>" > <span class="fa fa-download"  style="color:white;"> </span>  </button> </a>
                                     <button type="button" data-toggle="tooltip" data-placement="top" title="Open document attachment"  class="alert-success btn btn-primary btn-xs" style="background:#737373;color:white;font-size:11px;padding:4px 5px 4px 4px;border-radius:5px;"> <a href="../Action/open.php?filename=<?php echo $id;?>" target="_blank"><span class="fa fa-folder-open" style="color:white;"> </span> </a></button>
                                 
                                    </td>  
                                    
                               
                                </td>

                                      
                <?php  
                               }  
                               ?>  
               
                
              </tbody>
            </table>
          </div>
        
        </div>


            </div>
            <div class="modal-footer" style="background:#d9d9d9;">   
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  
          </div>
      </div>
   </div>

   <div id="data_modal_sa_documents" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.65);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:650px;">  
                <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>  
                <div class="modal-body table-responsive" style="height:440px;">  
              
                     <form method="post" id="insert_form" action="saving_document/accept_document.php">  

                       <div class="form-group">  
                        <span style="color:black;"><strong> Document ID:</strong></span>
                          <input type="text" readonly="" style="background:white;color:black;" name="id" id="accept_id" class="form-control" />

                       </div> 
                       <div class="form-group">  
                         <span style="color:black;"><strong>Document Type:</strong></span>
                          <input type="text" style="background:white;" disabled="" name="doc_type" id="doc_type" class="form-control" />  
                       </div>    
                        <div class="form-group">  
                         <span style="color:black;"><strong>Document Tittle:</strong></span>
                          <input type="text" style="background:white;" disabled="" name="doc_title" id="doc_title" class="form-control" />  
                       </div>    
                       <div class="form-group">
                         <span style="color:black;"><strong>Document Content:</strong></span>   
                          
                           <textarea id="doc_content" style="background:white;" disabled=""  name="doc_content"
                            class="form-control" style="height:50px;" /></textarea>
                     
                       </div>
                          
                       <div class="form-group"> 
                        <span style="color:black;"><strong>Document From:</strong></span>  
                          <input type="text" style="background:white;" disabled="" name="doc_from" id="doc_from" class="form-control" />  
                       </div>
                       <div class="form-group"> 
                        <span style="color:black;"><strong>Document Status:</strong></span>  
                          <input type="text" style="background:white;" disabled="" name="doc_sent_status" id="doc_sent_status" class="form-control" />  
                       </div>

                        <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."' ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?> 
                                <input type="hidden"  style="background:white;color:black;" name="Froms" value="<?php echo $row["username"]; ?> (Mayor Office)" id="" class="form-control" /> 
                                              <!-- Who create the document -->
                                 <input required="" readonly="" value="<?php echo $row["username"]; ?> (Mayor Office)"  type="hidden" name="Document_create"  class=" form-control" >

                                   <!-- Para ma save sa History Log sa asa na personnel -->

                                <input type="hidden" value="<?php echo $row["Fullname"]; ?>"  name="personnel_para_history">


                                <?php  
                               }  
                               ?>

                                <!-- Para ma save sa History Log sa asa na office -->

                            <input type="hidden" value="Mayor Office"  name="office_para_history">
   
   
                          <div class="form-group">  
                          <input readonly="" value="<?php echo date("y/m/d"); echo "-";
                            echo date("h:i:sa"); ?>" type="hidden"  name="Date_time"  class=" form-control" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;" >
                          </div> 

                       
                            <!-- Document Status-->
                          <input type="hidden" style="background:white;" name="doc_status" id="doc_status" class="form-control" />  
                       
                       <div class="form-group"> 
                        <span style="color:black;"><strong>Date Registered:</strong></span> 
                          <input type="text" style="background:white;" disabled="" name="date_create" id="date_create" class="form-control" />  
                       </div> <!-- Refresh balik diri sa billing office pag accept-->
                        <input type="hidden" value="Mayor Office" name="accept_refresh"/> 

                       <!-- Accept and closed document-->
                        <input type="hidden" value="Received and Closed" name="accept_and_closed_document" id="accept_and_closed_document" /> 
                        <!-- closed document-->

                        <input type="hidden" value="Closed" name="closed_document" id="accept_document" /> 
                        <!-- Accept document-->

                        <input type="hidden" value="Received" name="accept_document" id="accept_document" /> 
                          <!-- Declaine document-->
                        <input type="hidden" value="Decline" name="pending_document" id="pending_document" /> 

                          <input type="hidden" name="employee_id" id="employee_id" />  
      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                    <button type="submit" class="btn btn-success" id="accept" name="accept" style="float:left;">Accept</button>  
                     <button  type="submit" class="btn btn-info" id="accept_and_closed" name="accept_and_closed" style="float:left;">Accept & Close Transaction</button>  
              
                     <button type="button" class="btn btn-warning launch-modal" data-modal-id="data_modal_sa_documents_decline" data-dismiss="modal" style="float:left;" >Decline</button>   
                     <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-left:150px;">Close</button>  
                </div>  

                     </form>  
           </div>  
      </div>  
 </div>  



 
 <!-- Animate -->
        <script src="../animate/js/jquery-1.11.1.min.js"></script>
        <script src="../animate/js/scripts.js"></script>
         <script src="../animate/js/wow.js"></script>
         <script src="../animate/js/custom.js"></script> 
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




<script>  
 $(document).ready(function(){  
      $('#btn-send-direct').click(function(){  
           var image_name = $('#input_send').val();  
           if(image_name == '')  
           {  
                alert("Please select a recipient.");  
                return false;  
           }  else {
                 
           }
          
          
          
      });  

 });  
 </script> 

 <script>  
 $(document).ready(function(){  
      $('#refresh-send').click(function(){  
           var image_name = $('#sent_message').val();  
           if(image_name == '')  
           {  
                alert("Please select a recipient.");  
                return false;  
           }  else {
                 
           }
          
          
          
      });  

 });  
 </script> 



<script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.view_message', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"../view_message.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#id').val(data.id);  
                     $('#sender').val(data.sender);
                     $('#reason').val(data.reason);    
                     $('#Date_sent').val(data.Date_sent);    
                        
                     $('#employee_id').val(data.id); 
               
                     $('#show_message_box_modal').modal('show');  

                }  
           });  
      });  
     
 });  
 </script>
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.reply_message', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"../view_message.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#reply_id').val(data.id);  
                     $('#reply_sender').val(data.sender)
                     $('#employee_id').val(data.id); 
               
                     $('#reply_message_box_modal').modal('show');  

                }  
           });  
      });  
     
 });  
 </script>
    
 <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.delete_message', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"../view_message.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#delete_id').val(data.id);  
                     
                     $('#employee_id').val(data.id); 
               
                     $('#delete_message_box_modal').modal('show');  

                }  
           });  
      });  
     
 });  
 </script>
    
<script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
      $(document).on('click', '.edit_data', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch_table.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#accept_id').val(data.id);  
                     $('#decline_id').val(data.id);  
                     $('#doc_type').val(data.Document_type);  
                     $('#doc_title').val(data.Document_title);  
                     $('#doc_content').val(data.Content);  
                     $('#doc_from').val(data.Froms);  
                          $('#receiver_doc_from').val(data.Froms);  
                     $('#date_create').val(data.Date_created);  
                     $('#file').val(data.file);  
                     $('#doc_sent_status').val(data.Document_sent_status);  
                     $('#doc_status').val(data.Status);  
                     $('#employee_id').val(data.id); 
                      $('#data_modal_sa_documents_decline').modal('hide');  
                     $('#data_modal_sa_documents').modal('show');  

                }  
           });  
      });  
     
 });  
 </script>

 <script>  
 $(document).ready(function(){  
      $('#accept').click(function(){  
         alert('Document has been accepted'); 
      });  

 });  
 </script>  
 <script>  
 $(document).ready(function(){  
      $('#accept_and_closed').click(function(){  
         alert('Document has been accepted and closed transaction.'); 
      });  

 });  
 </script>  
 <script>  
 $(document).ready(function(){  
      $('#closed').click(function(){  
         alert('Document has been closed transaction.'); 
      });  

 });  
 </script>  


