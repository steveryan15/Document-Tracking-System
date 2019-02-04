<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>
<?php include('Phplogin/functions.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>villanueva/doc.gov</title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style_2.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css"> 

 
    
  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >
    <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
    <nav class="navbar navbar-inverse navbar-fixed-top" style=" background-color: RGBA(13, 70, 83, 0.65);">
  <div class="container-fluid">

   <ul class="nav navbar-nav navbar-right" style="margin-top:4px;">

 <img src="img/doc.png" data-toggle="tooltip" data-placement="left" title="List of Documents" class="launch-modal"   style="width:40px;margin-right:5px;" data-modal-id="modal-register_5"></li>

 <div class="btn-group pull-right">
            

 <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
 <i class="label label-pill label-danger count"></i><span class="hidden-sm hidden-xs"> 
      <span class="fa fa-user" style="font-size:20px;"></span>
                    
                     <?php  
                        $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                         $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                      $result = mysqli_query($connect, $query);  
                     ?> 
                      <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?> 
                                <?php echo $row["Fullname"]; ?>
                                <?php  
                               }  
                               ?> 
                    </span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" style="background:#e6ffff;">
                   <h6 class="dropdown-header">Click below:</h6>
            <div class="dropdown-divider"></div>
                    <li>
                       <a href="Document_incoming.php"> <span class="fa fa-bell" style="color: #00ffff;"><span style="color:black;"> Notification </span></span><span style="margin-left:2px;" class="label label-pill label-danger count" ></span>   </a>
                    </li>
                    <li class="divider"></li>
                      <style type="text/css">
                        
.dropdown-menu li:hover {background-color: #b3ffff;}
                      </style>
                    <li>
                      <a href="" onClick="window.location.href=window.location.href"> <span class="fa fa-refresh" style="color: #00ffff;font-size:15px;"><span style="color:black;"> Refresh </span></span>  </a>
                    </li>
                     <li class="divider"></li>
                     <li>
                       <a href=""> <span class="fa fa-gear launch-modal" data-modal-id="modal-register_1"  style="color: #00ffff;"><span style="color:black;"> Menu </span></span>  </a>
                     </li>
                      <li class="divider"></li>
                        <li>
                       <a href=""> <span class="fa fa-power-off launch-modal" data-modal-id="exampleModal"  style="color: #00ffff;font-size:15px;"><span style="color:black;"> Logout </span></span>  </a>
                     </li>

                </ul>

            </div>           
                   
      
     


            <div class="btn-group pull-right" style="margin-right:10px;">

 <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">
 <i class="label label-pill label-danger count_message"></i><span class="hidden-sm hidden-xs"> 
   
                     <img src="img/media.png" class="img-circle" width="23" height="23"  style="">
                     <span class="hidden-sm hidden-xs"> Messenger</span>
                     
                    </span>
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-left" style="background:#e6ffff;">
                   <h6 class="dropdown-header">Click below:</h6>
            <div class="dropdown-divider"></div>
                    <li>
                       <a href="view_message_content.php"> <span class="fa fa-envelope-o" style="color:#00ffff;"><span style="color:black;"> View Message </span></span><span class="label label-pill label-danger count_message" ></span>   </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                      <a href="" class="launch-modal" data-modal-id="chat_box_modal"> <span class="fa fa-edit" style="color: #00ffff;font-size:15px;"><span style="color:black;"> Create Message </span></span>  </a>
                    </li>
                    

                </ul>

            </div>           
                   
      
    </ul>


  </div>
</nav>
    <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center wow bounceIn delay-03s" >
              <img src="img/logo.jpg" class="img-circle" width="240">
            </div>
            <div class="banner-text text-center"> 
              <h2 class="white">Local Government Unit</h2>
              <h4 class="white">Villanueva Misamis Oriental</h4>
              

              <div class="footer-doc">
                              <a class="btn btn-link-1 launch-modal" href="" data-modal-id="modal-register"> <span class="fa fa-pencil-square-o"></span> CREATE DOCUMENT</a>
                             
                            </div>
                       
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->

<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true" class="fa fa-remove" style="font-size:30px;"></span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-register-label" style="height:10px;font-size:25px;">Ready to leave?</h3>

                
                
              </div>
              
          <div class="modal-body">
          <div class="alert alert-info" style="color:black;">
           Click "Logout" below if you are ready to end your current session.
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger" href="index.php">Logout</a>
          </div>
        </div>
      </div>
    </div>


   



<!-- Chat_box Modal-->
    <div class="modal fade" id="chat_box_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true" class="fa fa-remove" style="font-size:30px;"></span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-register-label" style="height:10px;font-size:25px;">Create Message</h3>

                
                
              </div>
              
          <div class="modal-body">
   
           <form method="post" action="saving_document/sent_message.php">
           <!-- send ni -->
                        <div class="form-group">  
                        <span style="color:black;">Send To:</span> 
                        <?php
                      
                          # diri mag pili sa sender     
                          mysql_connect('localhost', 'root', '', 'villa_dblgu');
                          mysql_select_db('villa_dblgu');

                          $sql = "SELECT * FROM users  WHERE Fullname!='".$_SESSION["Fullname"]."'";
                          $result = mysql_query($sql);

                          echo "<select name='reciever' class='form-control' id='sent_message' style='color:black;'>";
                           echo " <option value=''></option>";
                          while ($row = mysql_fetch_array($result)) {
                              echo "<option value='" . $row['Fullname'] ."'>" . $row['Fullname'] ." (" . $row['office'] .")</option>";

                          }
                          echo "</select>";

                          ?>
                        </div>   
                        <div class="form-group">
          <span style="color:black;"> Comment Box:</span> 
                            <textarea required="" id="message_content" name="message_content" placeholder="Content" 
                            class="form-control"  style="color:black;height:170px;font-size:15px;border:1px solid"></textarea>
                      </div>
                            
                          <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?> 
                                <input type="hidden"  style="background:white;color:black;" name="sender" value="<?php echo $row["Fullname"]; ?>" id="" class="form-control" /> 

                                 <input type="hidden"  style="background:white;color:black;" name="senders_office" value="<?php echo $row["office"]; ?>" id="" class="form-control" /> 
                                <?php  
                               }  
                               ?> 

                         
                            <input type="hidden" name="notify" value="0">
                        <div class="form-group"> 
                        
                             <input type="hidden" readonly=""  name="Date_sent" value=" <?php echo "" . date("Y-m-d") . "";
date_default_timezone_set("Singapore");
echo " - " . date("h:i:sa");
?>" class=" form-control" style="height:40px;font-size:15px;background:#424d57;color:white;">
                        </div>    


          </div>
            <div class="modal-footer">
           <button class="btn btn-primary" type="submit"  name="btn-send-message" id="refresh-send">Send</button>
            <button class="btn btn-danger" type="button"  data-dismiss="modal">Cancel</button>
           
          </div>
       </form>   
        </div>
      </div>
    </div>






   <!-- MODAL sa pag add sa document -->
        <div class="modal fade wow fadeInLeftBig  delay-03s" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:434px;">
            <div class="modal-content" style="width:500px;min-height:570px;background:white;">
              
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true" class="fa fa-remove" style="font-size:30px;"></span><span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="modal-register-label" style="height:10px;font-size:25px;">Add Document</h3>

                
                
              </div>
              
          <div class="modal-body table-responsive" style="height:440px;background:white;padding-left:40px;">
                
                    
                    <form action="saving_document/save_and_send_document.php" method="post" enctype="multipart/form-data">
                         
                       
                          <!-- Doc Type -->
                          <span style="color:black;"> Document Type:</span>
                          <div class="form-group">
                           <?php
                      
                          # diri mag pili sa document type     
                          mysql_connect('localhost', 'root', '', 'villa_dblgu');
                          mysql_select_db('villa_dblgu');

                          $sql = "SELECT * FROM offices_document_type";
                          $result = mysql_query($sql);

                          echo "<select name='Document_type' class='form-control' id=''  style='color:black;'>";
                            echo " <option value=''></option>";
                          while ($row = mysql_fetch_array($result)) {
                              echo "<option value='" . $row['Document_type'] ."'>" . $row['Document_type'] ." </option>";

                          }
                          echo "</select>";

                          ?>
                            
                            </div>
                             <div class="form-group">  

                          <span style="color:black;">Document Title:</span>
                          <input  type="text" required="" id="Document_title" placeholder="Enter document title" name="Document_title" class=" form-control" style="height:40px;color:  black;border:1px solid" >
                          </div> 

                            <span style="color:black;"> Purpose:</span> 
                            <textarea required="" name="Content" placeholder="Enter document purpose" 
                            class="form-control"  style="color:black;height:150px;font-size:15px;border:1px solid"></textarea>

                            <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?> 
                                <input type="hidden"  style="background:white;color:black;" name="Froms" value="<?php echo $row["Fullname"]; ?>" id="" class="form-control" /> 

                                              <!-- Who create the document -->
                                 <input required="" readonly="" value="<?php echo $row["Fullname"]; ?>"  type="hidden" name="Document_create"  class=" form-control" >

                                   <!-- Para ma save sa History Log sa asa na personnel -->

                                <input type="hidden" value="<?php echo $row["Fullname"]; ?>"  name="personnel_para_history">
                                <!-- Para ma save sa History Log sa asa na office -->

                            <input type="hidden" value="<?php echo $row["office"]; ?>"    name="office_para_history">


                                <?php  
                               }  
                               ?>


                           <input type="hidden" value="Draft"  name="Status">
                          


                              <input type="hidden" value="1"  name="notify_user">
   
   
                          <div class="form-group">  

                        
                            <input readonly="" value=" <?php echo "" . date("Y-m-d") . "";
                          date_default_timezone_set("Singapore");
                          echo " - " . date("h:i:sa");
                          ?>" type="hidden"  name="Date_created"  class=" form-control" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;" >
                          </div> 

                          <input type="hidden" value="0" name="msg_stat">

                           <input type="hidden" value="Draft"  name="Document_sent_status">

                              <input type="hidden" value="Forwarded"  name="Document_sent_status_dayun">
                            <input type="hidden" value="Not sent"  name="Date_sent">
                             <!-- Forward ni -->
                        <div class="form-group">  
                        <span style="color:black;">Forward To:</span> 
                        
                          <?php
                      
                          # diri mag pili sa sender     
                          mysql_connect('localhost', 'root', '', 'villa_dblgu');
                          mysql_select_db('villa_dblgu');

                          $sql = "SELECT * FROM users WHERE Fullname!='".$_SESSION["Fullname"]."'";
                          $result = mysql_query($sql);

                          echo "<select name='document_forward' class='form-control' id='input_send'  style='color:black;'>";
                            echo " <option value=''></option>";
                          while ($row = mysql_fetch_array($result)) {
                              echo "<option value='" . $row['Fullname'] ."'>" . $row['Fullname'] ." (" . $row['office'] .")</option>";

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

                      <button type="submit" data-toggle="tooltip" data-placement="top" title="Send document" id="send" class="btn btn-success btn-md" name="btn-send" >Send</button>

                    
                    </div>
                  </form>
             
              
            </div>
          </div>
        </div>      

 
 


  



        <!-- MODAL VIEW SA USER INFORMATION-->

        <div class="modal fade" id="modal-register_1" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="width:420px;margin-left:130px;margin-top:20px;">
              
              <div class="modal-header">
            
                  <button type="button" class="close" data-dismiss="modal"  onClick="window.location.href=window.location.href">
                  <span aria-hidden="true" class="fa fa-remove" style="font-size:30px;"></span><span class="sr-only">Close</span>
                </button>
            
                <h3 class="modal-title" id="modal-register-label"> <span class="fa fa-user"> </span> User Information </h3>
                <h3 class="modal-title" id="modal-register-label"></h3>
                
              </div>
              
          <div class="modal-body" style="background:  #ffffff;">
           

          <?php if (isset($_SESSION["Fullname"])): ?>

              <?php  
              $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
              $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."'  ";  
              $result = mysqli_query($connect, $query);  
              ?> 
               <?php  
                               while($row = mysqli_fetch_array($result))  
                               { 
                      
                               ?>  
                            <div class="table-responsive" style="color:black;">  
                                <table class="table table-bordered">
                                    <tr>  
                                       <td width="30%"><label>Name</label></td>  
                                       <td width="70%"> <?php echo $row["Fullname"]; ?> 
                                      
                                       </td>  
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
                      <td width="70%">  <img src='Phplogin/adding_updating_user/uploads/<?php echo $row["file"];?>' class="img-thumbnail" width="100" height="80"> </td>  
             
                </tr> 
              
              
                                </table>    
                            </div>      
                          
                           



                               <?php  
                               }  
                               ?>  
        <?php endif ?>
                  

              </div>
              <div class="modal-footer">
                  <button type="submit" data-modal-id="modal-register_confirm " data-dismiss="modal"  name="update" value="Update" class="btn btn-primary launch-modal ">Update Information</button> 

                  <button style="margin-right:15px;" type="submit" data-modal-id="modal-register_passsword_update " data-dismiss="modal"  name="update" value="Update" class="btn btn-primary launch-modal ">Update Password</button> 
                    <button onClick="window.location.href=window.location.href" class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
           
          </div>
            </div>
          </div>
        </div>





 <!-- MODAL UPDATE SA USER INFORMATION-->

        <div class="modal fade" id="modal-register_confirm" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content" style="width:460px;margin-left:130px;margin-top:20px;">
              
              <div class="modal-header">
            
             <button type="button" class="close" data-dismiss="modal"  onClick="window.location.href=window.location.href">
                  <span aria-hidden="true" class="fa fa-remove" style="font-size:30px;"></span><span class="sr-only">Close</span>
                </button>
            
                <h3 class="modal-title" id="modal-register-label"> <span class="fa fa-user"> </span> Update Information </h3>
                <h3 class="modal-title" id="modal-register-label"></h3>
                
              </div>
              
          <div class="modal-body" style="background:  #ffffff;height:400px;">
           
                <iframe src="Phplogin/adding_updating_user/update_user.php" style="border:none;float:left;background:white;margin-left:0;" width="430" height="350" ></iframe> 

          
              </div>
              <div class="modal-footer" style="background:#d9d9d9;">
                
                    <button class="btn btn-warning launch-modal" type="button"  data-dismiss="modal" data-modal-id="modal-register_1">Cancel</button>
           
          </div>
            </div>
          </div>
        </div>







     
 <!-- MODAL SA PAG UPDATE SA USER PASSWORD -->
        <div class="modal love fade" id="modal-register_passsword_update" tabindex="-1" role="dialog" aria-labelledby="modal-register_passsword_update-label" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content" style="width:400px;margin-left:130px;margin-top:20px;">
              
              <div class="modal-header">
            
             <button type="button" class="close" data-dismiss="modal"  onClick="window.location.href=window.location.href">
                  <span aria-hidden="true" class="fa fa-remove" style="font-size:30px;"></span><span class="sr-only">Close</span>
                </button>
            
                <h3 class="modal-title" id="modal-register-label"> <span class="fa fa-user"> </span> Update Password </h3>
                <h3 class="modal-title" id="modal-register-label"></h3>
                
              </div>
              
             <div class="modal-body" style="background:#ffffff;height:300px;">
              <iframe src="Phplogin/adding_updating_user/update_password.php" style="border:none;float:left;background:white;margin-left:0;border-radius:5px;" width="100%" height="260" ></iframe>  
             
      
              </div>
              <div class="modal-footer" style="background:#d9d9d9;">
                
                    <button  class="btn btn-warning launch-modal" type="button"  data-dismiss="modal" data-modal-id="modal-register_1">Cancel</button>
           
             </div>
            </div>
          </div>
        </div>

  






<!-- MODAL SA PAG VIEW SA ALL DOCUMENT SA OFFICE NIMO -->
        <div class="modal wow pulse delay-03s" id="modal-register_5" tabindex="-1" role="dialog" aria-labelledby="modal-register_5-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:115px;margin-top:20px;" >
            <div class="modal-content" style="width:1100px;height:500px;padding-top:0;">
                <div class="modal-header" style="height:60px; background:  rgba(12, 184, 182, 0.91);color:white;">
               
              <span class="launch-modal fa fa-archive"  data-toggle="tooltip" title="Document Archive" data-placement="left" data-dismiss="modal"   style="float:right;color:white;font-size:30px;"  data-modal-id="modal-register_history"> </span> 
               


                                  <?php  
                         $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                        $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                         $result = mysqli_query($connect, $query);  
                         ?> 
                         <?php  
                                       while($row = mysqli_fetch_array($result))  
                                       {  
                                          
                                       ?> 

                                        <h3 class="modal-title fa fa-table" id="modal-register-label" style="height:10px;font-size:25px;"> <span>
                                        <?php echo $row["office"]; ?></span></h3>

                                        <?php  
                                       }  
                                       ?> 


                
                
                </div>
              
                <div class="modal-body" style="height:500px;background:#C8C8C8;;padding:0 0 0 0;">
                
                 <iframe src="Tables/document_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>   
                      
              </div>
              <div class="modal-footer" style="background:#d9d9d9;">
            
          
               <span class="launch-modal fa fa-edit" data-toggle="tooltip" title="Created documents in your office"  data-dismiss="modal"   style="font-size:45px;float:left;margin-left:10px;color: #008080;" data-modal-id="modal-register_10"> </span> 
                <span > 
              

                 <span >
                   <img data-toggle="tooltip" data-dismiss="modal"  data-modal-id="modal-register_recieve"  class="launch-modal" title="Received Documents"  src="img/1.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span>

                 <span class="launch-modal fa fa-paper-plane"  data-toggle="tooltip" title="Sent Documents" data-dismiss="modal"   style="font-size:30px;float:left;color: #008080;margin-left:10px" data-modal-id="modal-register_sent"> </span> 
               
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
            </div>
          </div>
        </div>      


<!-- MODAL SA PAG VIEW SA DOCUMENT SA IMONG GE CREATE -->
        <div class="modal wow pulse delay-03s" id="modal-register_10" tabindex="-1" role="dialog" aria-labelledby="modal-register_10-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:115px;margin-top:20px;" >
            <div class="modal-content" style="width:1100px;height:500px;padding-top:0;">
                <div class="modal-header" style="height:60px; background:  rgba(12, 184, 182, 0.91);color:white;">
              <span class="launch-modal fa fa-archive"  data-toggle="tooltip" title="Document Archive" data-placement="left" data-dismiss="modal"   style="float:right;color:white;font-size:30px;"  data-modal-id="modal-register_history"> </span> 
                 <?php  
                         $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                        $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                         $result = mysqli_query($connect, $query);  
                         ?> 
                         <?php  
                                       while($row = mysqli_fetch_array($result))  
                                       {  
                                          
                                       ?> 

                                        <h3 class="modal-title fa fa-table" id="modal-register-label" style="height:10px;font-size:25px;"> <span>
                                        <?php echo $row["office"]; ?></span></h3>

                                        <?php  
                                       }  
                                       ?> 

                
                
                </div>
              
                <div class="modal-body" style="height:500px;background:#C8C8C8;;padding:0 0 0 0;">
                
                 <iframe src="Tables/document_create_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>   
                      
              </div>
              <div class="modal-footer" style="background:#d9d9d9;">

             <span >
                   <img data-toggle="tooltip" data-dismiss="modal"  data-modal-id="modal-register_5"  class="launch-modal" title="All Documents" ata-modal-id="modal-register_5"  src="img/doc.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span>
                   <img data-toggle="tooltip" data-dismiss="modal"  data-modal-id="modal-register_recieve"  class="launch-modal" title="Recieve Documents"  src="img/1.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span>

                <span class="launch-modal fa fa-paper-plane"  data-toggle="tooltip" title="Sent Documents" class="launch-modal" data-dismiss="modal"   style="font-size:30px;float:left;color: #008080;margin-left:10px" data-modal-id="modal-register_sent"> </span> 
          
              
                    

                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
            </div>
          </div>
        </div>      





<!-- MODAL SA PAG VIEW SA DOCUMENT NA RECIEVE -->

        <div class="modal wow pulse delay-03s" id="modal-register_recieve" tabindex="-1" role="dialog" aria-labelledby="modal-register_10-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:115px;margin-top:20px;" >
            <div class="modal-content" style="width:1100px;height:500px;padding-top:0;">
                <div class="modal-header" style="height:60px; background:  rgba(12, 184, 182, 0.91);color:white;">
                 <span class="launch-modal fa fa-archive"  data-toggle="tooltip" title="Document Archive" data-placement="left" data-dismiss="modal"   style="float:right;color:white;font-size:30px;"  data-modal-id="modal-register_history"> </span> 
                
                 <?php  
                         $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                        $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                         $result = mysqli_query($connect, $query);  
                         ?> 
                         <?php  
                                       while($row = mysqli_fetch_array($result))  
                                       {  
                                          
                                       ?> 

                                        <h3 class="modal-title fa fa-table" id="modal-register-label" style="height:10px;font-size:25px;"> <span>
                                        <?php echo $row["office"]; ?></span></h3>

                                        <?php  
                                       }  
                                       ?> 

                
                
                </div>
              
                <div class="modal-body" style="height:500px;background:#C8C8C8;;padding:0 0 0 0;">
                
                 <iframe src="Tables/document_recieve_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>   
                      
              </div>
              <div class="modal-footer" style="background:#d9d9d9;">
               <span class="launch-modal fa fa-edit" data-toggle="tooltip" title="Created documents in your office"  data-dismiss="modal"   style="font-size:45px;float:left;margin-left:10px;color: #008080;" data-modal-id="modal-register_10"> </span> 
                <span >

                  <img data-toggle="tooltip" data-dismiss="modal"  data-modal-id="modal-register_5"  class="launch-modal" title="All Documents"  src="img/doc.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span>

           <span class="launch-modal fa fa-paper-plane"  data-toggle="tooltip" title="Sent Documents" data-dismiss="modal"   style="font-size:30px;float:left;color: #008080;margin-left:10px" data-modal-id="modal-register_sent"> </span> 
          
              
                    

                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
            </div>
          </div>
        </div>      





<!-- MODAL SA PAG VIEW SA DOCUMENT NA SENT NIMO -->

        <div class="modal wow pulse delay-03s" id="modal-register_sent" tabindex="-1" role="dialog" aria-labelledby="modal-register_sent-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:115px;margin-top:20px;" >
            <div class="modal-content" style="width:1100px;height:500px;padding-top:0;">
                <div class="modal-header" style="height:60px; background:  rgba(12, 184, 182, 0.91);color:white;">
                <span class="launch-modal fa fa-archive"  data-toggle="tooltip" title="Document Archive" data-placement="left" data-dismiss="modal"   style="float:right;color:white;font-size:30px;"  data-modal-id="modal-register_history"> </span> 
               
                  <?php  
                         $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                        $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                         $result = mysqli_query($connect, $query);  
                         ?> 
                         <?php  
                                       while($row = mysqli_fetch_array($result))  
                                       {  
                                          
                                       ?> 

                                        <h3 class="modal-title fa fa-table" id="modal-register-label" style="height:10px;font-size:25px;"> <span>
                                        <?php echo $row["office"]; ?></span></h3>

                                        <?php  
                                       }  
                                       ?> 

                
                
                </div>
              
                <div class="modal-body" style="height:500px;background:#C8C8C8;;padding:0 0 0 0;">
                
                 <iframe src="Tables/document_sent_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>   
                      
              </div>
              <div class="modal-footer" style="background:#d9d9d9;">
             <span class="launch-modal fa fa-edit" data-toggle="tooltip" title="Created documents in your office"  data-dismiss="modal"   style="font-size:45px;float:left;margin-left:10px;color: #008080;" data-modal-id="modal-register_10"> </span> 
               <span >
                   <img data-toggle="tooltip"  data-modal-id="modal-register_recieve" data-dismiss="modal"  class="launch-modal" title="Recieve Documents"  src="img/1.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span> 

              <span >
                   <img data-toggle="tooltip" data-dismiss="modal" class="launch-modal" title="All Documents" data-modal-id="modal-register_5"  src="img/doc.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span>
          

          
              
                    

                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
            </div>
          </div>
        </div>      




<!-- MODAL SA PAG VIEW SA HISTORY LOG NIMO -->

        <div class="modal wow pulse delay-03s" id="modal-register_history" tabindex="-1" role="dialog" aria-labelledby="modal-register_sent-label" aria-hidden="true">
          <div class="modal-dialog" style="margin-left:115px;margin-top:20px;" >
            <div class="modal-content" style="width:1100px;height:500px;padding-top:0;">
                <div class="modal-header" style="height:60px; background:  rgba(12, 184, 182, 0.91);color:white;">
                   <button type="button" class="close" data-dismiss="modal">
                  <span aria-hidden="true" class="fa fa-remove" style="font-size:30px;"></span><span class="sr-only">Close</span>
                </button>
              

                 <?php  
                         $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                        $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                         $result = mysqli_query($connect, $query);  
                         ?> 
                         <?php  
                                       while($row = mysqli_fetch_array($result))  
                                       {  
                                          
                                       ?> 

                                        <h3 class="modal-title fa fa-table" id="modal-register-label" style="height:10px;font-size:25px;"> <span>
                                        <?php echo $row["office"]; ?></span></h3>

                                        <?php  
                                       }  
                                       ?> 

                
                
                </div>
              
                <div class="modal-body" style="height:500px;background:#C8C8C8;;padding:0 0 0 0;">
                
                 <iframe src="Tables/document_history-log_table.php" style="border:none;float:left;background:#C8C8C8;margin-left:0;" width="100%" height="500" ></iframe>   
                      
              </div>
              <div class="modal-footer" style="background:#d9d9d9;">
              <span class="launch-modal fa fa-edit" data-toggle="tooltip" title="Created documents in your office"  data-dismiss="modal"   style="font-size:45px;float:left;margin-left:10px;color: #008080;" data-modal-id="modal-register_10"> </span> 
             <span >
                   <img data-toggle="tooltip" data-dismiss="modal"  data-modal-id="modal-register_recieve"  class="launch-modal" title="Recieve Documents"  src="img/1.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span> 

              <span class="launch-modal fa fa-paper-plane"  data-toggle="tooltip" title="Sent Documents" data-dismiss="modal"   style="font-size:30px;float:left;color: #008080;margin-left:10px" data-modal-id="modal-register_sent"> </span> 
                <span >
                   <img data-toggle="tooltip" data-dismiss="modal" class="launch-modal" title="All Documents" data-modal-id="modal-register_5"  src="img/doc.png"  style="font-size:30px;float:left;color:green;margin-left:10px" width="40" >
                 </span> 
          
              
                    

                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
            </div>
          </div>
        </div>      








 
  
<!-- END!!!!! MODAL Notification sa mga document-->


     <!-- Animate -->
        <script src="animate/js/jquery-1.11.1.min.js"></script>
        <script src="animate/js/scripts.js"></script>
         <script src="animate/js/wow.js"></script>
         <script src="animate/js/custom.js"></script> 
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
 
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
  <!-- Modal  -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    
 </html>   
    
  </body>
</html>
<script>
 
$(document).ready(function(){
 
// updating the view with notifications using ajax
 
function load_unseen_notification(view = '')
 
{
 
 $.ajax({
 
  url:"Notification/notify_mayor_office.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
 
  {
 
   $('.dropdown').html(data.notification);
 
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
 
// updating the view with notifications using ajax
 
function load_unseen_notification(view = '')
 
{
 
 $.ajax({
 
  url:"Notification/notify_message.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
 
  {
 
   $('.dropdown').html(data.notification);
 
   if(data.unseen_notification > 0)
   {
    $('.count_message').html(data.unseen_notification);
   }
 
  }
 
 });
 
}
 
load_unseen_notification();
 

// load new notifications
 
$(document).on('click', '.dropdown-toggle', function(){
 
 $('.count_message').html('');
 
 load_unseen_notification('yes');
 
});
 
setInterval(function(){
 
 load_unseen_notification();;
 
}, 5000);
 
});
 
</script>



<style>
.dropdown {
    position: relative;
    display: inline-block;
    color: white;
    margin-top: 12px;

}

.dropdown-content {
   

    min-width: 150px;
    height: 140px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    background-color: rgba(12, 184, 182, 0.91);
    z-index: 1;
    color: white;
    border-radius: 8px;
    text-align: left;
}

.dropdown:hover .dropdown-content {
    
}
.userpass {
  height: 50px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background:white;
    border: 1px solid #333;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: black;
    width: 200px;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}
.userpass:focus {
  outline: 0;
  background: white;
    border: 1px solid lightblue;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
}
.data-toggle {

}

 .error {
    background:  #ff3333; 
    border: none;
    color: white;
    height: 30px;
    padding-bottom:20px; 
    border-radius: 2px;
    width: 100%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
}
.error:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 10px 20px 0 rgba(0,0,0,0.19);
}
#myInput {
  background-image: url('search.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  background-color: #e6e6ff;
   height: 40px;
  font-size: 15px;
  padding: 12px 10px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}


</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
 
   <!-- Sa pag add sa document -->


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
      $('#send').click(function(){  
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
      $('#closed').click(function(){  
         alert('Document has been closed transaction.'); 
      });  

 });  
 </script>  


<script>  
 $(document).ready(function(){  
      $('#btn-delete_message').click(function(){  
         alert('Message has been deleted.'); 
      });  

 });  
 </script> 
 <script>  
 $(document).ready(function(){  
      $('#btn-reply-message').click(function(){  
         alert('Message has been sent.'); 
      });  

 });  
 </script>  



<script>  
 $(document).ready(function(){  
      $('#refresh-send').click(function(){  
           var image_name = $('#sent_message').val(); 
              var message_content = $('#message_content').val();   
           if(image_name == '')  
           {  
                alert("Please select a recipient.");  
                return false;  
           }else if (message_content == '') {
           alert("Please input the message box.") 
           } else {
                alert("Message has been sent.");  
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
                url:"view_message.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#id').val(data.id);  
                     $('#sender').val(data.sender);
                     $('#reply_id').val(data.id);  
                     $('#reply_sender').val(data.sender);
                       $('#senders_comment').val(data.comment); 
                        $('#senders_comment_date_sent').val(data.Date_sent);
                         $('#senders_office').val(data.senders_office);  
                     $('#reason').val(data.comment);    
                     $('#Date_sent').val(data.Date_sent);    
                        
                     $('#employee_id').val(data.id); 
               
                     $('#show_message_box_modal').modal('show');

                     $('#reply_message_box_modal').modal('hide');   

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
                url:"view_message.php",  
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
    
  



        <script type="text/javascript">
function s(){
var i=document.getElementById("doc_sent_status");
if(i.value=="Declined")
    {
      alert("Document can't be accepted.");
    document.getElementById("accept_and_closed").disabled=true;
    document.getElementById("accept").disabled=true;
    document.getElementById("Decline").disabled=true;
    
     document.getElementById("rejected").disabled=true;
     document.getElementById("decline_message").disabled=true;
    }
else
    document.getElementById("accept_and_closed").disabled=false;}</script>
      