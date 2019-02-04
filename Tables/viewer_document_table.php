 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM tbl_documents WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="">  
          ';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
              
                  <div class="card-footer small text-muted">
                 <form method="post" action="processs.php">
                 <input type="hidden" name="id_close_transaction" value='.$row["id"].'>
                  <input type="hidden" name="closed_document" value="Closed">

                 <button type="submit" id="closed_transaction" class="btn btn-danger"  name="closed">Close Transaction </button> 
                 </form>

                  </div>  
               
           ';  
      }  
      $output .= '  
          
      ';  
      echo $output;  

 }  

if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM history_log_default WHERE id = '".$_POST["employee_id"]."' ORDER BY Date_Time DESC";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
     <div class="content-wrapper" style="height:300px;">
    <div class="container-fluid">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> History Log
          
           </div>

        <div class="card-body">
          <div class="table-responsive"  style="height:430px;">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                  <th style="background:#8c8c8c;color:white;">Date</th>
                  <th style="background:#8c8c8c;color:white;">Office</th>
                  <th style="background:#8c8c8c;color:white;">Personnel</th>
                  <th style="background:#8c8c8c;color:white;">Action</th>
                
                </tr>
              </thead>';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
               
             
              <tbody>
              <tr>  
                   
                     <td>'.$row["Date_Time"].'</td>       
                     <td>'.$row["Office"].'</td>  
                     <td>'.$row["Personnel"].'</td>  
                     <td>'.$row["Action"].'</td>  
                </tr>  
                 
                 

              </tbody>  
                
           ';  
      }  
      $output .= '  
          </table>
          </div>
        </div>
       
      </div>
    </div>
      ';  
      echo $output;  
 }  

 ?>