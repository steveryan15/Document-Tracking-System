 <?php include('../Phplogin/functions.php') ?>
<?php include('processs.php') ?>
<?php  
  $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");
$query ="SELECT * FROM tbl_documents WHERE (Status= '".$_SESSION["Fullname"]."') AND (Document_sent_status = 'Received' OR Document_sent_status = 'Received and Closed' OR Document_sent_status = 'Closed') ORDER BY id DESC";  
 $result = mysqli_query($connect, $query);  
?> 
<!DOCTYPE html>
<html lang="en">

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

<body >

  <div class="content-wrapper" style="margin-top:10px;">
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header" style="background-color: RGBA(13, 70, 83, 0.65);color:white;">
        <span class="fa fa-table" style="font-size:20px;"> All Document</span>
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
                                    echo "<tr>"; 
                              echo " <td style='background-color:#bef4f1;'>" . $row['id'] . "</td>"; 
                               echo " <td>" . $row['Document_type'] . "</td>"; 
                               echo " <td>" . $row['Document_title'] . "</td>"; 
                               if($row['Document_sent_status']=='Received'){ 
                             echo "<td style='color: green;'>".$row['Document_sent_status']."</td>"; 
                             }else if($row['Document_sent_status']=='Declined'){ 
                             echo "<td style='color: red;'>".$row['Document_sent_status']."</td>"; 
                              
                              }else if($row['Document_sent_status']=='Received and Closed'){  
                               
                             echo "<td style='color: orange;'>".$row['Document_sent_status']."</td>"; 
                              }else if($row['Document_sent_status']=='Closed'){  
                               
                             echo "<td style='color: orange;'>".$row['Document_sent_status']."</td>"; 
                              
                               }else{
                                echo "<td style='color: black;'>".$row['Document_sent_status']."</td>"; 
                               }
                               echo " <td>" . $row['Date_created'] . "</td>"; 
                               ?>  
                              
                                    <td> 
                                     <input type="button" data-toggle="tooltip" data-placement="top" title="Document details"  style="background:#09568d;color:white;font-size:11px;padding:4px 5px 4px 4px;"  name="view" value="View" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view" />

                               
                             
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
 
 <div id="dataModal" class="modal fade">  
      <div class="modal-dialog" style="margin-left:140px;height:700px;">  
           <div class="modal-content" style="width:800px;">  
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Document Details</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
          </div>
                <div class="modal-body" id="employee_detail" style="height:700px;">  
                </div>  
                 <div class="modal-footer" style="background:#d9d9d9;">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div> 
           
                
           </div>  
      </div>  
    </div>
  </div>
</div>
<div id="add_data_Modal" class="modal fade">  
     <div class="modal-dialog">  
           <div class="modal-content">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Forward Document</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
            </div>
                <div class="modal-body table-responsive" style="height:300px;"> 



                     <form method="post" action="document_table.php">  
                       <div class="form-group">  
                         <!-- id ni -->
                        <span><strong> Document ID: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;"  readonly="" name="id" id="id" />  
                       </div> 

                       <div class="form-group">  
                         <!--Document_type ni -->
                         <span><strong> Document Type: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;"  readonly=""  name="doc_type" id="doc_type"  />  
                       </div>  

                      <div class="form-group">  
                         <!--Document_type ni -->
                         <span><strong> Document Title: </strong></span>
                          <input class="form-control" type="text" style="background:white;color:black;"  readonly=""  name="doc_title" id="doc_title"  />  
                       </div>  

                       <div class="form-group">
                         <!-- Document_content ni -->
                         <span><strong> Document Content: </strong></span>   
                          
                           <textarea id="doc_content" style="background:white;height:70px;color:black;"  readonly=""  name="doc_content"
                            class="form-control" /></textarea>
                     
                       </div>
                         <!-- file ni -->
                          <input type="hidden" style="background:white;"  readonly="" name="doc_file" id="doc_file" class="form-control" />

                     
                          

                       <!-- Document_create ni -->
                          <input type="hidden" style="background:white;"  readonly="" name="doc_create" id="doc_created" class="form-control" />

                       <!-- msg_stat ni -->
                          <input type="hidden" value="0" style="background:white;"  readonly="" name="doc_msg" id="doc_msg" />

                          <!-- for admin ni -->
                          <input type="hidden" value="0" style="background:white;"  readonly="" name="admin_msg" id="admin_msg" />


                       <div class="form-group"> 
                         <!-- Froms ni -->
                        <span><strong> Document From: </strong></span>  
                          <input class="form-control" type="text" style="background:white;"  readonly="" name="doc_from" Value="Mayor Office"  />  
                       </div>
                       <div class="form-group"> 


                         <!-- Date_sent ni -->
                      <input readonly="" value="<?php echo date("y-m-d"); echo " - ";
                            echo date("h:i:sa"); ?>" type="hidden"  name="Date_sent"  class=" form-control" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;color:black;" >
                       </div>  
                       <div class="form-group"> 


                         <!-- Status ni -->
                        <span><strong> Forward To: </strong></span> 
                          <select required="" class="form-control" name="doc_status"  id="send"  type="text" style="height:40px;color:black;" > 
                
                               <option value=""></option>
                          <option value="Assestment Office">Assestment Office</option>
                          <option value="Billing Office">Billing Office</option>
                            </select> 
                        </div>  
                         <input type="hidden" name="document_sent_status" value="Forwarded"/> 
                           
                       
                          <input type="hidden" name="employee_id" id="employee_id" /> 
                   
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;">  
                       <button type="submit" id="btn-upload" class="btn btn-primary"  name="forward">Forward</button>    
                             
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
</body>

</html>

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
                     $('#file').val(data.file);  
                     $('#employee_id').val(data.id);  
                     $('#add_data_Modal').modal('show');  
                }  
           });  
      });  
      $(document).on('click', '.view', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"viewer_all_document_table.php",  
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
        $(document).ready(function() {
            $('#btn-upload').click(function() {
                location.reload();
            });
        });
        </script>

 <script>  
 $(document).ready(function(){  
      $('#btn-upload').click(function(){  
           var image_name = $('#send').val();  
           if(image_name == '')  
           {  
                alert("Please select a reciever");  
                return false;  
           }  else {
             alert('Document has been forwarded'); 
           }
          
          
          
      });  

 });  
 </script>  