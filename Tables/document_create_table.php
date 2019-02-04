 <?php include('../Phplogin/functions.php') ?>
 <?php include('update_docu.php') ?>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
 $query = "SELECT * FROM tbl_documents WHERE Status='Draft' AND Document_create = '".$_SESSION["Fullname"]."'  ORDER BY Date_created ";  
 $result = mysqli_query($connect, $query);   
 ?> 


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS-->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="datatables/dataTables.bootstrap4.css" rel="stylesheet">
  
</head>

  

 

<body>
<div class="content-wrapper" style="margin-top:10px;">
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header" style="background-color: RGBA(13, 70, 83, 0.65);color:white;">
                         <span class="fa fa-table" style="font-size:20px;"> Document created in your office</span>
       
       <buton style="float:right;" type="button" class="btn btn-info" onClick="window.location.href=window.location.href"> <span class="fa fa-refresh" style="font-size:15px;"> Refresh Table  </span> </button></div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th style="background:#8c8c8c;color:white;">Document ID</th>
                  <th style="background:#8c8c8c;color:white;">Document Type</th>
                  <th style="background:#8c8c8c;color:white;">Document Title</th>
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
                                    <td style="background-color:#bef4f1;"><?php echo $row["id"]; ?></td>   <td><?php echo $row["Document_type"]; ?> </td>
                                    <td><?php echo $row["Document_title"]; ?></td> 
                                    <td><?php echo $row["Document_sent_status"]; ?></td> 
                                        <td><?php echo $row["Date_created"]; ?></td> 
                                    <td> 
                                     <input type="button" data-toggle="tooltip" data-placement="top" title="Document details"  style="background:#09568d;color:white;font-size:11px;padding:4px 5px 4px 4px;"  name="view" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view" />

                                  <button type="button" data-toggle="tooltip" data-placement="top" title="Edit document" name="edit" style="color:white;font-size:11px;padding:4px 5px 4px 4px;"  value="View" id="<?php echo $row["id"]; ?>" class="btn btn-success btn-xs edit_data" /> <span class="fa fa-edit"> </span>  </button>
                             <button type="button" data-toggle="tooltip" data-placement="top" title="View Attachment" name="edit" style="color:white;font-size:11px;padding:4px 5px 4px 4px;color:white;" class="btn btn-secondary btn-xs edit_data" /><a href="../Action/open.php?filename=<?php echo $id;?>" target="_blank"> <span class="fa fa-folder-open" style="color:white;"> </span> </a> </button>
                             <button type="button" data-toggle="tooltip" data-placement="top" title="Delete document" name="delete" style="color:white;font-size:11px;padding:4px 5px 4px 4px;"  value="View" id="<?php echo $row["id"]; ?>" class="btn btn-danger btn-xs delete" /> <span class="fa fa-trash"> </span>  </button>
                                         <button type="button" data-toggle="tooltip" data-placement="top" title="Send document" name="edit" style="color:white;font-size:11px;padding:4px 5px 4px 4px;"  value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs sent" /> <span class="fa fa-send"> </span>  </button>
                                    </td>
                                    </tr>
                                      
                <?php  
                               }  
                               ?>  
               
                
              </tbody>
            </table>
          </div>
        </div>
    </div>
 
</body>
</html>

<div id="dataModal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Forward Document</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
            </div> 
                <div class="modal-body" id="employee_detail">  
                </div>  
                 <div class="modal-footer" style="background:#d9d9d9;">  
                     <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>  
                </div> 
                
           </div>  
      </div>  
 </div>


 <div id="add_data_Modal" class="modal fade">  
     <div class="modal-dialog">  
           <div class="modal-content">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
           </div>
                <div class="modal-body table-responsive" style="height:300px;"> 



                     <form method="post" action="document_create_table.php" enctype="multipart/form-data">  
                       <div class="form-group">  
                         <!-- id ni -->
                        <span><strong> Document ID: </strong></span>
                          <input type="text" readonly="" style="height:40px;font-size:15px;background:#424d57;color:white;"   name="id" id="id" class="form-control" />  
                       </div> 

                       <div class="form-group">  
                         <!--Document_type ni -->
                         <span><strong>Document Type:</strong></span>
                          <input type="text" style="background:white;color:black;"   name="doc_type" id="doc_type" class="form-control" />  
                       </div>  

                           <div class="form-group">  
                         <!--Document_type ni -->
                         <span><strong>Document Title:</strong></span>
                          <input type="text" style="background:white;color:black;"   name="doc_title" id="doc_title" class="form-control" />  
                       </div>  

                       <div class="form-group">
                         <!-- Document_content ni -->
                         <span><strong> Document Content:</strong></span>   
                          
                           <textarea id="doc_content" style="background:white;color:black;height:90px;"  name="doc_content"
                            class="form-control"  /></textarea>
                     
                       </div>
                        <div class="form-group">  
                       <!-- file ni -->
                         <span><strong>Add Attatchment:</strong></span>  
                          <input type="file" style="background:white;" id="file"  name="file"  class="form-control" />
                          
                       </div>    
                       
                            <!-- Document_create ni -->
                          <input type="hidden" style="background:white;" name="doc_file_hidden" id="doc_file" class="form-control" />

                 

                       <!-- Document_create ni -->
                          <input type="hidden" style="background:white;" name="doc_create" id="doc_created" class="form-control" />

                 

                       <div class="form-group"> 
                         <!-- Froms ni -->
                         
                          <input type="hidden" style="background:white;"  name="doc_from" Value="Mayor Office" class="form-control" />  
                       </div>
                       <div class="form-group"> 


                         <!-- Date_created ni -->
                    
                          <input type="hidden" readonly="" style="background:white;"   name="date_create" id="date_create" class="form-control" />  
                       </div>  
                           
                       
                          <input type="hidden" name="employee_id" id="employee_id" /> 
                         
                             
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;"> 
                  <button type="buttton"  class="btn btn-warning"  data-dismiss="modal">Cancel</button>
                    <button type="submit" id="btn-upload" class="btn btn-primary"  name="forward">Update</button>
                </div> 
           
            </form> 
           </div>  
      </div>  
 </div>  



  <!--Send document ni -->
<div id="add_data_Modal_sent" class="modal fade">  
     <div class="modal-dialog">  
           <div class="modal-content">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
           </div>
                <div class="modal-body table-responsive" style="height:300px;"> 

                    <?php include('sent_create_document.php') ?>
                 
                     <form method="post" action="document_create_table.php">  
                       <div class="form-group">  
                         <!-- id ni -->
                        <span><strong> Document ID: </strong></span>
                          <input type="text" disabled="" style="height:40px;font-size:15px;background:#424d57;color:white;" name="id" id="sent_id" class="form-control" /> 
                           <input type="hidden"  name="id_hidden" id="sent_id_hidden" class="form-control" />  
                          
                       </div> 

                       <div class="form-group">  
                         <!--Document_type ni -->
                         <span><strong>Document Type:</strong></span>
                          <input type="text" readonly="" style="background:white;color:black;"   name="doc_type" id="sent_doc_type" class="form-control" />  
                       </div>  

                           <div class="form-group">  
                         <!--Document_type ni -->
                         <span><strong>Document Title:</strong></span>
                          <input type="text" readonly="" style="background:white;color:black;"   name="doc_title" id="sent_doc_title" class="form-control" />  
                       </div>  

                       <div class="form-group">
                         <!-- Document_content ni -->
                         <span><strong> Document Content:</strong></span>   
                          
                           <textarea id="sent_doc_content" readonly="" style="background:white;color:black;height:90px;"  name="doc_content"
                            class="form-control"  /></textarea>
                     
                       </div>
                       <div class="form-group"> 
                        <span style="color:black;">Forward To:</span> 
                         <?php
                      
                          # diri mag pili sa sender     
                          mysql_connect('localhost', 'root', '', 'villa_dblgu');
                          mysql_select_db('villa_dblgu');

                          $sql = "SELECT * FROM users  WHERE Fullname!='".$_SESSION["Fullname"]."'";
                          $result = mysql_query($sql);

                          echo "<select name='document_sent' class='form-control'  id='input_send' style='color:black;'>";
                           echo " <option value=''></option>";
                          while ($row = mysql_fetch_array($result)) {
                              echo "<option value='" . $row['Fullname'] ."'>" . $row['Fullname'] ." (" . $row['office'] .")</option>";

                          }
                          echo "</select>";

                          ?>
                                                  </div>     

                          <!-- Document_create ni -->
                          <input type="hidden" style="background:white;" name="doc_title" id="sent_doc_title" class="form-control" />


                            <!-- file ni -->
                          <input type="hidden" style="background:white;" name="doc_file_hidden" id="sent_doc_file" class="form-control" />

                             <!-- Document_create ni -->
                          <input type="hidden" style="background:white;" name="msg_stat" id="" value="0" class="form-control" />

                             <!-- Document_create ni -->
                          <input type="hidden" style="background:white;" name="Document_sent_status" id="" value="Forwarded" class="form-control" />

                             <!-- Kalosa gi send ni -->
                          <input readonly="" value=" <?php echo "" . date("Y-m-d") .
                          date_default_timezone_set("Singapore");
                          echo " - " . date("h:i:sa");
                          ?>" type="hidden"  name="Date_send"  class=" form-control">

                 

                       <!-- Document_create ni -->
                          <input type="hidden" style="background:white;" name="doc_create" id="sent_doc_created" class="form-control" />

                  
                          

                   <!-- Froms -->
                     <?php  
                 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
                $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."' ";  
                 $result = mysqli_query($connect, $query);  
                 ?> 
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                                  
                               ?> 
                                <input type="hidden"  style="background:white;color:black;" name="doc_from" value="<?php echo $row["Fullname"]; ?>" id="" class="form-control" /> 

                                   <!-- senader name para sa history log -->

                                 <input type="hidden"  style="background:white;color:black;" name="sender_name" value="<?php echo $row["Fullname"]; ?>" id="" class="form-control" /> 

                                  <!-- senader office para sa history log -->

                          <input type="hidden" readonly="" style="background:white;" value="<?php echo $row["office"]; ?>"   name="sender_office"  class="form-control" />  

                                <?php  
                               }  
                               ?>

                                  


                       <div class="form-group"> 


                         <!-- Date_created ni -->
                    
                          <input type="hidden" readonly="" style="background:white;"   name="date_create" id="sent_date_create" class="form-control" />  
                       </div>  
                           
                       
                          <input type="hidden" name="employee_id" id="sent_employee_id" /> 
                         
                             
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;">  

                    <button  type="submit" id="btnReload" class="btn btn-primary"  name="btn-sent_create_document">Send</button>
                </div> 
           
            </form> 
           </div>  
      </div>  
 </div>  



 <!--Delete create document ni -->
<div id="add_data_Modal_delete" class="modal fade">  
     <div class="modal-dialog" >  
           <div class="modal-content">  
             
                <div class="modal-body table-responsive" style="height:125px;"> 
                 
                 <?php include('sent_create_document.php') ?>

                     <form method="post" action="document_create_table.php">  
                       <div class="form-group">  
                        <div class="alert alert-danger" style="font-size:17px;">
                        Are you sure you want to delete this document?
                      </div>

                       
                      
                           <input type="hidden"  name="delete_id_hidden" id="delete_id_hidden" class="form-control" />  
                          
                       </div>
                           
                   
                       
                          <input type="hidden" name="employee_id" id="delete_employee_id" /> 
                         
                             
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;">  

                    <button  type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>

                    <button  type="submit" id="delete" class="btn btn-danger"  name="btn-delete_document">Delete</button>
                </div> 
           
            </form> 
           </div>  
      </div>  
 </div>  

 

  <!-- Bootstrap core JavaScript-->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
   

    <script src="datatables/jquery.dataTables.js"></script>
    <script src="datatables/dataTables.bootstrap4.js"></script>
   
    <!-- Custom scripts for this page-->
    <script src="Function_datable/sb-admin-datatables.min.js"></script> 
 <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
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
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#id').val(data.id);  
                       $('#doc_file').val(data.file);  
                     $('#doc_type').val(data.Document_type);  
                     $('#doc_title').val(data.Document_title);  
                     $('#doc_content').val(data.Content);  
                     $('#doc_from').val(data.Froms);  
                     $('#doc_status').val(data.Status); 
                     $('#doc_created').val(data.Document_create); 
                     $('#date_create').val(data.Date_created);  
                     $('#doc_file').val(data.file);  
                     $('#employee_id').val(data.id);  
                     $('#add_data_Modal').modal('show');
                      $('#choose_id').val(data.id); 
                   
                }  
           });  
      });
      $(document).on('click', '.sent', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#sent_id').val(data.id);  
                     $('#sent_id_hidden').val(data.id);  
                       $('#sent_doc_file').val(data.file);  
                     $('#sent_doc_type').val(data.Document_type);  
                     $('#sent_doc_title').val(data.Document_title);  
                     $('#sent_doc_content').val(data.Content);  
                     $('#sent_doc_from').val(data.Froms);  
                     $('#sent_doc_status').val(data.Status); 
                     $('#sent_doc_created').val(data.Document_create); 
                     $('#sent_date_create').val(data.Date_created);  
                
                     $('#sent_employee_id').val(data.id);  
                     $('#add_data_Modal_sent').modal('show');  
                }  
           });  
      });
      $(document).on('click', '.delete', function(){  
           var employee_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{employee_id:employee_id},  
                dataType:"json",  
                success:function(data){  
                     $('#delete_id_hidden').val(data.id);  
                     
                     $('#delete_employee_id').val(data.id);  
                     $('#add_data_Modal_delete').modal('show');  
                }  
           });  
      });
       
       $(document).on('click', '.view', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"view_create_document_table.php",  
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



<script>  
 $(document).ready(function(){  
      $('#btn-upload').click(function(){  
           var image_name = $('#send').val();  
           if(image_name == '')  
           {  
                alert("Please complete the form.");  
                return false;  
           }  
           else  
           {  
             alert("Document has been updated.");  
           }
          
          
      });  

 });  
 </script>    
 <script>  
 $(document).ready(function(){  
      $('#btnReload').click(function(){  
           var image_name = $('#input_send').val();  
           if(image_name == '')  
           {  
                alert("Please select a recipient.");  
                return false;  
           }  
           else  
           {  
            alert('Document has been sent');    
           }
          
          
      });  

 });  
 </script>  
 <script>  
 $(document).ready(function(){  
      $('#delete').click(function(){  
           
            alert('Document has been deleted.');    
        
      });  

 });  
 </script>  