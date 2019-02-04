 <?php include('../Phplogin/functions.php') ?>
 <?php include('processs.php') ?>
 <?php  
 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
 $query = "SELECT * FROM tbl_documents WHERE Froms='".$_SESSION["Fullname"]."' AND Document_sent_status='Forwarded'  ORDER BY Date_created DESC ";  
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
           <span class="fa fa-table" style="font-size:20px;"> Sent Document</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Document Details</h5>
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
      $(document).on('click', '.view', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"viewer_sent_document_table.php",  
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
                alert("Please select a reciever.");  
                return false;  
           }  
           else  
           {  
             alert("Document has been send.");  
           }
          
          
      });  

 });  
 </script>

 <script>
        $(document).ready(function() {
            $('#btnReload').click(function() {
                location.reload();
            });
        });
        </script>
 