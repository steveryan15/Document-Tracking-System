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
  
<!-- Logout Modal-->
 

    <!-- Message Table-->

      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
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

                                        <label style="color:white;font-size:20px;"> <span>
                                        <?php echo $row["office"]; ?></span></label>

                                        <?php  
                                       }  
                                       ?> </div>
              
          <div class="modal-body" style="background:white;height:300px;">

            <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM message_box WHERE receiver = '".$_SESSION["Fullname"]."' ORDER BY Date_sent DESC ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
               <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" style="width:559px;">
                         <div class="panel-heading">
                          <span class="fa fa-table"></span> List of message
                           <buton style="float:right;" type="button" class="btn btn-info" onClick="window.location.href=window.location.href"> <span class="fa fa-refresh" style="font-size:15px;"> Refresh Table  </span> </button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="width:560px;">
                            <div class="table-responsive" style="width:530px;height:180px;">
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
                                   echo "<tr>";
                                   if($row['notify']== 0){  
                                 
                                   echo " <td style='color:green;'>" . $row['sender'] . "</td>";
                                   echo " <td style='color:green;'>" . $row['senders_office'] . "</td>"; 
                                   echo " <td style='color:green;'>" . $row['comment'] . "</td>"; 
                                   
                                   }else {
                                    echo "<td>" . $row['sender'] . "</td>"; 
                                     echo " <td>" . $row['senders_office'] . "</td>"; 
                                   echo " <td>" . $row['comment'] . "</td>";
                                   }
                                   
                            
                               ?>  
                              
                                  
                                    
                                    
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
               <form action="update_message.php" method="post">
          <div class="modal-footer">
          <button class="btn btn-primary launch-modal" type="button" data-modal-id="chat_box_modal" data-dismiss="modal">Create Message</button>
   
            <button class="btn btn-danger" type="submit" data-dismiss="modal">Close</button>
          </</form> 
          </div>
        </div>
      </div>


<!-- View Message details Modal-->
<div id="show_message_box_modal" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.65);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:620px;">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h3 class="modal-title">Message Details</h3>  
                </div>  
                <div class="modal-body table-responsive">     
                     <form method="post" id="insert_form" action="">  
                       <div class="form-group">  
                       
                          <input type="hidden" style="background:white;" name="id" id="id" class="form-control" />

                       </div> 
                       <div class="form-group">  
                        <span style="color:black;"><strong> Sender:</strong></span>
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
                    <button type="button" class="btn btn-success launch-modal" data-dismiss="modal" style="float:left;" href="" data-modal-id="reply_message_box_modal"><span class="fa fa-reply"> Reply</span> </button> 
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  

                     </form>  
           </div>  
      </div>  
 </div>  


<!-- View all coversation-->
<div id="view_all_conversation" class="modal fade" style=" background-color: RGBA(13, 70, 83, 0.65);">  
      <div class="modal-dialog">  
           <div class="modal-content" style="background:white;width:620px;">  
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h3 class="modal-title">Message Details</h3>  
                </div>  
                <div class="modal-body table-responsive">     
                    
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" style="width:565px;">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body" style="width:560px;">
                            <div class="table-responsive" style="width:540px;height:250px;">
                              <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM message_box_convo WHERE receiver = '".$_SESSION["Fullname"]."' OR sender = '".$_SESSION["Fullname"]."' ORDER BY Date_sent DESC ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
                                <table class="table table-hover table-striped">
                                    <thead style="color:black;">
                                        <tr>
                                            <th >Date/Time</th>
                                            <th>Message</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?>  
                               <tr>  
                                  <td><?php echo $row["Date_sent"]; ?>
                                    
                                  </td> 
                                    <td><?php echo $row["comment"]; ?></td> 
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
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h3 class="modal-title">Delete Message</h3>  
                </div>  
                <div class="modal-body table-responsive" style="height:160px;">     
                     <form method="post" id="insert_form" action="saving_document/delete_message.php">  
                          <input type="hidden" style="background:white;" name="id" id="delete_id" class="form-control" />

                          <input type="hidden" name="employee_id" id="employee_id" /> 
                         <!--Refresh delete para mo balik ra dri na form-->
                         
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
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                     <h3 class="modal-title">Reply Message</h3>  
                </div>  
                <div class="modal-body table-responsive">     
                     <form method="post" id="insert_form" action="saving_document/reply_message.php">  
                       <div class="form-group">  
                       
                          <input type="hidden" style="background:white;" name="id" id="reply_id" class="form-control" />

                       </div> 
                       <div class="form-group">  
                        <span style="color:black;"><strong> Send to:</strong></span>
                          <input type="text" readonly="" style="background:white;color:black;" name="receiver" id="reply_sender" class="form-control" />

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

                                 <input type="hidden"  style="background:white;color:black;" name="office" value="<?php echo $row["office"]; ?>" id="" class="form-control" /> 
                                <?php  
                               }  
                               ?> 

                           <!-- Ang iyang gi comment nimo-->
                           <input type="hidden"  style="background:white;color:black;" name="senders_comment" id="senders_comment" class="form-control" />

                              <input type="hidden"  style="background:white;color:black;" name="senders_comment_date_sent" id="senders_comment_date_sent" class="form-control" />

                           

                         
                                <input type="hidden" name="notify" value="0" id="" class="form-control" />

                       </div> 
                        <span style="color:black;"> Message:</span> 
                            <textarea required="" name="reply_message" placeholder="Content" 
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
                 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
                        <button type="submit" name="btn-reply-message" id="btn-reply-message" class="btn btn-primary">Send</button> 
                     
                </div> 
             </form>  
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
            <button class="btn btn-danger launch-modal" type="button" data-modal-id="modal-register_chat_box" data-dismiss="modal">Cancel</button>
           
          </div>
       </form>   
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
      