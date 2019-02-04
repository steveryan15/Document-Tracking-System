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
<body>
      <div class="card mb-3">
        <div class="card-header" style="background-color: RGBA(13, 70, 83, 0.65);color:white;">
            <span class="fa fa-table" style="font-size:20px;"> Document Archive</span>
       
       <buton style="float:right;" type="button" class="btn btn-info" onClick="window.location.href=window.location.href"> <span class="fa fa-refresh" style="font-size:15px;"> Refresh Table  </span> </button>
         </div>
        <div class="card-body">
       <?php if (isset($_SESSION["Fullname"])): ?>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");

$query ="SELECT * FROM all_documents_history_log_default WHERE personnel= '".$_SESSION["Fullname"]."' AND Office = 'Admin Office' GROUP BY id";  
 $result = mysqli_query($connect, $query);   
 ?> 
 <?php endif ?>
          <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                   <th style="background:#8c8c8c;color:white;">Document ID</th>
                  <th style="background:#8c8c8c;color:white;">Document Type</th>
                  <th style="background:#8c8c8c;color:white;">Document Title</th>
                  
                   <th style="background:#8c8c8c;color:white;">Status</th>
                        <th style="background:#8c8c8c;color:white;">Date & Time</th>
                 
                    <th style="background:#8c8c8c;color:white;">Action</th>

                </tr>
              </thead>
              
              <tbody>
                 <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               
                               ?>  
                               <tr>  
                                    <td style="background-color:#bef4f1;"><?php echo $row["id"]; ?></td>   <td><?php echo $row["Document_type"]; ?> </td>
                                    <td><?php echo $row["Document_title"]; ?> </td>

                                
                                    <td><?php echo $row["Status"]; ?></td> 
                                    <td><?php echo $row["Date_Time"]; ?> </td>
                                   
                                         
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
   
<div id="dataModal" class="modal fade">  
      <div class="modal-dialog" style="margin-left:120px;">  
           <div class="modal-content" style="width:800px;">  
            <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;width:800px;">
            <h5 class="modal-title" id="exampleModalLabel">Document Details</h5>
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


    <div id="add_data_Modal" class="modal fade">  
     <div class="modal-dialog">  
           <div class="modal-content">  
               <div class="modal-header" style="  background:  rgba(12, 184, 182, 0.91);color:white;">
            <h5 class="modal-title" id="exampleModalLabel">Send Document</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">×</span>
            </button>
            </div>  
                <div class="modal-body table-responsive" style="height:300px;"> 



                     <form method="post" action="admin_office_create_table_save.php">  
                       <div class="form-group">  
                         <!-- id ni -->
                        <span><strong>Document ID: </strong></span>
                          <input type="text" style="background:white;color:black;"  readonly="" name="id" id="id" class="form-control" />  
                       </div> 

                       <div class="form-group">  
                         <!--Document_type ni -->
                         <span><strong>Document Type:</strong></span>
                          <input type="text" style="background:white;color:black;"  readonly=""  name="doc_type" id="doc_type" class="form-control" />  
                       </div>  

                       <div class="form-group">
                         <!-- Document_content ni -->
                         <span><strong>Document Content:</strong></span>   
                          
                           <textarea id="doc_content" style="background:white;color:black;height:70px;"  readonly=""  name="doc_content"
                            class="form-control" /></textarea>
                     
                       </div>
                         <!-- file ni -->
                          <input type="hidden" style="background:white;"  readonly="" name="doc_file" id="doc_file" class="form-control" />

                     

                       <!-- Document_create ni -->
                          <input type="hidden" style="background:white;"  readonly="" name="doc_create" id="doc_created" class="form-control" />

                       <!-- msg_stat ni -->
                          <input type="hidden" value="0" style="background:white;"  readonly="" name="doc_msg" id="doc_msg" class="form-control" />
                          
                            <!-- for admin ni -->
                          <input type="hidden" value="0" style="background:white;"  readonly="" name="admin_msg" id="admin_msg" />
                            <!-- title ni -->
                          <input type="hidden" value="0" style="background:white;"  readonly="" name="doc_title" id="doc_title" />



                       <div class="form-group"> 
                         <!-- Froms ni -->
                        <span><strong>Document From:</strong></span>  
                          <input type="text" style="background:white;color:black;"  readonly="" name="doc_from" Value="Admin Office" class="form-control" />  
                       </div>
                       <div class="form-group"> 
                   


                         <!-- Date_sent ni -->
                      <input readonly="" value="<?php echo date("y-m-d"); echo "-";
                            echo date("h:i:sa"); ?>" type="hidden"  name="Date_sent"  class=" form-control" style="height:40px;font-size:15px;width:400px;background:#424d57;color:white;color:black;" >
                       </div>  
                           <div class="form-group"> 

                         <!-- Date_created ni -->
                        <span><strong>Date Registered:</strong></span> 
                          <input type="text" style="background:white;color:black;"  readonly="" name="date_create" id="date_create" class="form-control" />  
                       </div>  

                       <div class="form-group"> 


                         <!-- Status ni -->
                        <span><strong>Forward To:</strong></span> 
                           <?php
                      
# diri mag pili sa sender     
mysql_connect('localhost', 'root', '', 'villa_dblgu');
mysql_select_db('villa_dblgu');

$sql = "SELECT * FROM users";
$result = mysql_query($sql);

echo "<select name='document_forward' class='form-control' style='color:black;'>";
while ($row = mysql_fetch_array($result)) {
    echo "<option value='" . $row['username'] ." ( " . $row['office'] .")'>" . $row['username'] ." ( " . $row['office'] .")</option>";

}
echo "</select>";

?>

                        </div>  

                        <input type="hidden" name="document_sent_status" value="Forwarded"/> 

                          <input type="hidden" name="employee_id" id="employee_id" /> 

                   
                             
                </div>  
                <div class="modal-footer" style="background:#d9d9d9;">  
                       <button type="button" data-dismiss="modal" class="btn btn-warning">Cancel</button> 

                       <button type="submit" id="btn-upload" class="btn btn-primary"  name="forward">Send</button> 
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
                     url:"viewer_document_history_table.php",  
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
 

 

