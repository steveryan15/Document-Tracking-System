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
  <title>villanueva/doc.gov</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <link href="css/sb-admin.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="../css/animate.css"> 
</head>

<body class="fixed-nav wow flash delay-03s " id="page-top" style="margin:0;background:rgba(12, 184, 182, 0.40);">
  

 <!-- Message Table-->

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
                $query = "SELECT * FROM message_box WHERE receiver = '".$_SESSION["Fullname"]."' ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
               <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" style="width:540px;">
                        <div class="card-header" style="background-color: RGBA(13, 70, 83, 0.65);color:white;border:1px;">

                        <i class="fa fa-table" ></i> Admin's Office 
                     <span class="fa fa-refresh" onClick="window.location.href=window.location.href" data-toggle="tooltip" data-placement="top" title="Click to refresh" style="float:right;color:#00e6e6;font-size:20px;"></span>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="width:560px;">
                            <div class="table-responsive" style="width:540px;height:220px;">
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
                                    <td><?php echo $row["comment"]; ?></td> 
                                    
                                    
                                    <td><input data-toggle="tooltip" data-placement="top" title="View document details" type="button" name="edit" style="background:#09568d;color:white;font-size:11px;padding:4px 5px 4px 4px;" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_message" />

                                   

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
          <a href="index.php">
            <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
            </a>
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
                <div class="modal-body table-responsive">     
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
                       
                          <input type="hidden" disabled="" readonly="" style="height:40px;font-size:15px;background:#424d57;color:white;" name="Date_sent" id="Date_sent" class="form-control" />

                       </div> 
                     
                          <input type="hidden" name="employee_id" id="employee_id" />  
      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                  <button type="button" class="btn btn-success" data-dismiss="modal" style="margin-right:435px;" data-toggle="modal" data-target="#reply_message_box_modal"><span class="fa fa-reply"> Reply</span> </button> 
                       
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
  Are you sure you want delete this message?
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
                <div class="modal-body table-responsive">     
                     <form method="post" id="insert_form" action="reply_message.php">  
                       <div class="form-group">  
                       
                          <input type="hidden" style="background:white;" name="id" id="reply_id" class="form-control" />

                           <input type="hidden" style="background:white;" name="reply_refresh" value="Index" class="form-control" />

                       </div> 
                       <div class="form-group">  
                        <span style="color:black;"> Send to:</span>
                          <input type="text" readonly="" style="background:white;color:black;" name="reciever" id="reply_sender" class="form-control" />

                          <input type="hidden"  style="background:white;color:black;" name="senders_office" value="Admin Office" id="" class="form-control" />
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
                                <?php  
                               }  
                               ?> 
                                <input type="hidden" name="notify" value="0" id="" class="form-control" />

                       </div> 
                        <span style="color:black;"> Message:</span> 
                            <textarea required="" name="reply_message" id="reason" placeholder="Content" 
                            class="form-control"  style="color:black;height:150px;font-size:15px;border:1px solid"></textarea>
                             <div class="form-group">  
                       

                             <input type="hidden" readonly=""  name="reply_date_sent" value=" <?php echo "" . date("Y-m-d") . "";
date_default_timezone_set("Singapore");
echo " - " . date("h:i:sa");
?>" class=" form-control" style="height:40px;font-size:15px;background:#424d57;color:white;">
                  

                       </div> 
                     
                          <input type="hidden" name="employee_id" id="employee_id" />  
      
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                        <button type="submit" name="btn-reply-message" id="btn-reply-message" class="btn btn-primary">Send</button> 
                     <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>  
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

                          $sql = "SELECT * FROM users WHERE Fullname!='".$_SESSION["Fullname"]."'";
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
          <span style="color:black;"> Content:</span> 
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
                                <?php  
                               }  
                               ?> 

                             <input type="hidden" name="senders_office" value="Admin Office">
                                     <input type="hidden" name="create_refresh" value="Index">
                            <input type="hidden" name="notify" value="0">
                        <div class="form-group"> 
                         
                           
                             <input type="hidden" readonly=""  name="Date_sent" value=" <?php echo "" . date("Y-m-d") . "";
date_default_timezone_set("Singapore");
echo " - " . date("h:i:sa");
?>" class=" form-control" style="height:40px;font-size:15px;background:#424d57;color:white;">
                        </div>    


          </div>
            <div class="modal-footer">
          
            <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
             <button class="btn btn-primary" type="submit"  name="btn-send-message" id="refresh-send">Send</button>
           
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
 
   $('.dropdown-menu_count').html(data.notification);
 
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
 
  url:"notify_admin_office_document_incoming.php",
  method:"POST",
  data:{view:view},
  dataType:"json",
  success:function(data)
 
  {
 
   $('.dropdown-menu_count').html(data.notification);
 
   if(data.unseen_notification > 0)
   {
    $('.count_document').html(data.unseen_notification);
   }
 
  }
 
 });
 
}
 
load_unseen_notification();
 

// load new notifications
 
$(document).on('click', '.dropdown-toggle', function(){
 
 $('.count_document').html('');
 
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