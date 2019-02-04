<?php
    if(!isset($_SERVER['HTTP_REFERER'])){
    // redirect them to your desired location
    header('location:index.php');
    exit;
}
?>
<?php include('../Phplogin/functions.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>villianueva/doc.gov</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <link href="css/sb-admin.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../css/animate.css"> 
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()" style="margin:0;background:  rgba(12, 184, 182, 0.40);">
  <div id="loader"></div>
<div style="display:none;" id="myDiv" class="animate-bottom">


<!-- MODAL Notification sa tanan mga document na ma receive nimo!-->
  
            <div class="modal-content" style="width:650px;background: #C8C8C8;margin-left:400px;margin-top:10px;">
              
              <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document Incoming</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>  

              
             <div class="modal-body" style="background:white;height:500px;">
             
        <div class="card-header" style="background-color: RGBA(13, 70, 83, 0.65);color:white;border:1px;padding-right:380px;">
          <i class="fa fa-table" ></i> Documents in all offices</div>
        <div class="card-body" style="width:600px;">
       <?php  
$connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
 $query = "SELECT * FROM tbl_documents WHERE Status= '".$_SESSION["Fullname"]."' AND (Document_sent_status = 'Forwarded' OR Document_sent_status = 'Declined') ORDER BY Date_created DESC ";  
 $result = mysqli_query($connect, $query);   
 ?> 
               
          <div class="table-responsive" style="width:600px;height:180px;">
            <table class="table table-bordered table-striped table-hover" width="100%" cellspacing="0" >
              <thead>
                <tr>
                  <th style="color:black;">Document ID</th>
                                            <th style="color:black;">Document Type</th>
                                            <th style="color:black;">Document Title</th>
                                              <th style="color:black;">Status</th>
                                            <th style="color:black;">Action</th>
                
                </tr>
              </thead>
              
              <tbody>
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                   $id=$row['file']; 
                                    echo "<tr>"; 
                              echo " <td style='background-color:#bef4f1;'>" . $row['id'] . "</td>"; 
                               echo " <td>" . $row['Document_type'] . "</td>"; 
                               echo " <td>" . $row['Document_title'] . "</td>"; 

                            if($row['Document_sent_status']=='Received'){ 
                             echo "<td style='color: green;'>".$row['Document_sent_status']."</td>"; 
                             }else if($row['Document_sent_status']=='Declined'){ 
                             echo "<td style='color: red;'>".$row['Document_sent_status']."</td>"; 
                               ?>
                               <script>
                                 alert('Please see the pending');
                              
                               </script>
                               <?php
                              }else if($row['Document_sent_status']=='Received and Closed'){  
                               ?>
                               <script>

                                 document.getElementById("closed_transaction").disabled=true;
                               </script>
                               <?php
                             echo "<td style='color: orange;'>".$row['Document_sent_status']."</td>"; 
                              }else if($row['Document_sent_status']=='Closed'){  
                               ?>
                               <script>

                                 document.getElementById("closed_transaction").disabled=true;
                               </script>
                               <?php
                             echo "<td style='color: orange;'>".$row['Document_sent_status']."</td>"; 
                              
                               }else{
                                echo "<td style='color: black;'>".$row['Document_sent_status']."</td>"; 
                               }
                            
                          
                               ?>  
                               
                                   
                                    
                                    <td><input data-toggle="tooltip" data-placement="top" title="View document details" type="button" name="edit" style="background:#09568d;color:white;font-size:11px;padding:4px 5px 4px 4px;" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /> 
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
            <a href="index.php">
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
            </a>         
                </div>  
          </div>
      </div>
  

 <div id="data_modal_sa_documents_decline" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.65);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:647px;">  
                <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Decline Reason</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>    
                <div class="modal-body table-responsive" style="height:320px;">  
                     <form method="post" id="insert_form" action="accept_document.php">          
                          <input type="hidden" style="background:white;" name="id" id="decline_id" class="form-control" />

                          <input type="hidden" style="background:white;" name="doc_type" id="decline_doc_type" class="form-control" />

                          <input type="hidden" style="background:white;" name="doc_title" id="decline_doc_title" class="form-control" />

            
                           <!-- ebalik nimo sa sender and document-->
                            <input type="hidden" readonly="" style="background:white;" name="receiver" id="receiver_doc_from" class="form-control" />

                               <!-- sender name-->
                            <input type="hidden" readonly="" style="background:white;" name="name_sanag_send" id="name_sanag_send" class="form-control" />
                            <!-- sender office-->

                            <input type="hidden" readonly="" style="background:white;" name="office_sanag_send" id="office_sanag_send" class="form-control" />
                             <!-- sender document status ni-->

                            <input type="hidden" readonly="" style="background:white;" name="sender_document_status" id="sender_document_status" class="form-control" />

                            <!-- oras/petsa gi send ni-->

                            <input type="hidden" readonly="" style="background:white;" name="sender_sent_document" id="sender_sent_document" class="form-control" />


                       <div class="form-group">  
                       <span style="color:black;"> Comment box:</span> 
                            <textarea  name="decline_message" id="decline_message" placeholder="Content" 
                            class="form-control"  style="color:black;height:200px;font-size:15px;border:1px solid"></textarea>
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

                                           <!-- Kinsa and nag Declaine sa  document-->

                                <input type="hidden"  style="background:white;color:black;" name="sender_decline" value="<?php echo $row["Fullname"];?> (Mayor Office)" id="" class="form-control" /> 
                                  <input type="hidden" name="senders_office" value="<?php echo $row["office"];?> (Mayor Office)">
                                <?php  
                               }  
                               ?> 

                          

                            <input type="hidden" name="notify" value="0">

                             <input type="hidden" name="msg_stat" value="0">

                             <div class="form-group">  
                    
                             <input type="hidden" readonly=""  name="reply_date_sent" value=" <?php echo "" . date("Y/m/d") . "";
date_default_timezone_set("Singapore");
echo "-" . date("h:i:sa");
?>" class=" form-control" style="height:40px;font-size:15px;background:#424d57;color:white;">

                       </div> 
                  
                          <!-- Declaine document-->
                        <input type="hidden" value="Declined" name="pending_document" id="pending_document" /> 

                          <input type="hidden" name="employee_id" id="decline_employee_id" /> 
                          <!-- Refresh balik diri sa office pag decline-->
                        <input type="hidden" value="Index" name="accept_refresh"/> 
      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                  
                     <button type="submit" class="btn btn-primary" id="rejected" name="rejected">Submit</button>   

                     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>  
                </div>  

                     </form>  
           </div>  
      </div>  
 </div>  


   <div id="data_modal_sa_documents" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.95);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:650px;">  
                <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>    
                <div class="modal-body table-responsive" style="height:440px;">  
              
                     <form method="post" id="insert_form" action="accept_document.php">  

                       <div class="form-group">  
                        <span style="color:black;"><strong> Document ID:</strong></span>
                          <input type="text" readonly="" style="background:white;color:black;" name="id" id="accept_id" class="form-control" />

                       </div> 
                       <div class="form-group">  
                         <span style="color:black;"><strong>Document Type:</strong></span>
                          <input type="text" style="background:white;" readonly="" name="doc_type" id="doc_type" class="form-control" />  
                       </div>    
                        <div class="form-group">  
                         <span style="color:black;"><strong>Document Tittle:</strong></span>
                          <input type="text" style="background:white;" readonly="" name="doc_title" id="doc_title" class="form-control" />  
                       </div>    
                       <div class="form-group">
                         <span style="color:black;"><strong>Document Content:</strong></span>   
                          
                           <textarea id="doc_content" readonly="" style="background:white;"  name="doc_content"
                            class="form-control" style="height:50px;" /></textarea>
                     
                       </div>
                          
                       <div class="form-group"> 
                        <span style="color:black;"><strong>Document From:</strong></span>  
                          <input type="text" style="background:white;" readonly="" name="doc_from" id="doc_from" class="form-control" />  
                       </div>
                       <div class="form-group"> 
                        <span style="color:black;"><strong>Document Status:</strong></span>  
                          <input type="text" style="background:white;" readonly="" name="doc_sent_status" id="doc_sent_status" class="form-control" />  
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
                                <input type="hidden"  style="background:white;color:black;" name="Froms" value="<?php echo $row["Fullname"]; ?>" id="" class="form-control" /> 
                                              <!-- Who create the document -->
                                 <input required="" readonly="" value="<?php echo $row["Fullname"]; ?>"  type="hidden" name="Document_create"  class=" form-control" >

                                   <!-- Para ma save sa History Log sa asa na personnel -->

                                <input type="hidden" value="<?php echo $row["Fullname"]; ?>"  name="personnel_para_history">
                                         <!-- Para ma save sa History Log sa asa na office -->

                            <input type="hidden"  value="<?php echo $row["office"]; ?>"    name="office_para_history">


                                <?php  
                               }  
                               ?>

                       
   
   
                          <div class="form-group">  
                          <input readonly="" value=" <?php echo "" . date("Y/m/d") . "";
date_default_timezone_set("Singapore");
echo "-" . date("h:i:sa");
?>" type="hidden"  name="Date_time"  class=" form-control" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;" >
                          </div> 

                       
                            <!-- Document Status-->
                          <input type="hidden" style="background:white;" name="doc_status" id="doc_status" class="form-control" />  
                       
                       <div class="form-group"> 
                        <span style="color:black;"><strong>Date Registered:</strong></span> 
                          <input type="text" style="background:white;" readonly="" name="date_create" id="date_create" class="form-control" />  
                       </div> <!-- Refresh balik diri sa admin office pag accept-->
                        <input type="hidden" value="Admin Office" name="accept_refresh"/> 

                       <!-- Accept and closed document-->
                        <input type="hidden" value="Received and Closed" name="accept_and_closed_document" id="accept_and_closed_document" /> 
                        <!-- closed document-->

                        <input type="hidden" value="Closed" name="closed_document" id="accept_document" /> 
                        <!-- Accept document-->

                        <input type="hidden" value="Received" name="accept_document" id="accept_document" /> 
                          <!-- Declaine document-->
                        <input type="hidden" value="Decline" name="pending_document" id="pending_document" /> 
                         <!-- Date send-->
                        <input type="hidden" name="date_send" id="date_send" /> 

                         <!-- para ni sa nag send sa document saiyang history log (Personnel)-->
                        <input type="hidden" name="sender_personnel" id="sender_personnel" /> 
                         <!-- para ni sa nag send sa document saiyang history log (Office)-->

                          <input type="hidden" name="sender_office" id="sender_office" />

                          <!-- para ni sa nag send sa document saiyang history log (Date sent)-->

                          <input type="hidden" name="date_sent" id="date_sent" />

                           <input type="hidden" value="Index" name="accept_refresh" />

                          <input type="hidden" name="employee_id" id="employee_id" /> 
                            <span>Decline reason:</span> 
                          <textarea  readonly="" name="decline_message" id="comment" placeholder="Content" 
                            class="form-control"  style="color:black;height:100px;font-size:15px;border:1px solid"></textarea>  
      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                    <button onclick="s()" type="submit" class="btn btn-success" id="accept" name="accept" style="float:left;">Accept</button>  
                     <button onclick="s()" type="submit" class="btn btn-info" id="accept_and_closed" name="accept_and_closed" style="float:left;">Accept & Close Transaction</button>  
                    
                     <button onclick="s()" type="button" class="btn btn-warning" data-dismiss="modal" style="margin-right:152px;" data-toggle="modal" data-target="#data_modal_sa_documents_decline" id="Decline" >Decline</button>   
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  

                     </form>  
           </div>  
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
<style>
/* Center the loader */
#loader {
  position: absolute;
  left: 50%;
  top: 50%;
  z-index: 1;
  width: 200px;
  height: 200px;
  margin: -75px 0 0 -75px;
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 170px;
  height: 170px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/* Add animation to "page content" */
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}

#myDiv {
  display: none;
  text-align: center;
}
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<script>
var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1500);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
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
                     $('#reply_id').val(data.id);  
                     $('#reply_sender').val(data.sender);
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
                      $('#name_sanag_send').val(data.personnel_para_history_log);  
                      $('#office_sanag_send').val(data.office_para_history_log); 
                      $('#sender_document_status').val(data.Document_sent_status); 
                       $('#sender_sent_document').val(data.Date_sent); 
                       $('#comment').val(data.decline_message); 
                     $('#doc_type').val(data.Document_type);  
                     $('#doc_title').val(data.Document_title);
                      $('#decline_doc_type').val(data.Document_type);  
                     $('#decline_doc_title').val(data.Document_title);  
                     $('#doc_content').val(data.Content);  
                     $('#doc_from').val(data.Froms);  
                          $('#receiver_doc_from').val(data.Froms);  
                          $('#date_send').val(data.Date_sent);  
                     $('#date_create').val(data.Date_created);  
                     $('#file').val(data.file);  
                     $('#doc_sent_status').val(data.Document_sent_status);
                     $('#sender_personnel').val(data.personnel_para_history_log);  
                     $('#sender_office').val(data.office_para_history_log); 
                       $('#date_sent').val(data.Date_sent);  
                     $('#doc_status').val(data.Status);  
                     $('#employee_id').val(data.id); 
                      $('#data_modal_sa_documents_decline').modal('hide');  
                     $('#data_modal_sa_documents').modal('show');  


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