 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM tbl_documents WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-hover">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td ><strong><label>Document ID</label></strong></td>  
                     <td>'.$row["id"].'</td>  
                     <td ><strong><label>Document Type</label></strong></td>  
                     <td>'.$row["Document_type"].'</td>  
                </tr>  
                <tr>  
                     <td ><strong><label>Document Title</label></strong></td>  
                     <td>'.$row["Document_title"].'</td>  
                     <td ><strong><label>Date Created</label></strong></td>  
                     <td>'.$row["Date_created"].'</td>  
                </tr>  
                       <input type="hidden" id="decline" value='.$row["Document_sent_status"].'>
                 
                 </table> 
                  <div class="card-footer small text-muted">
                 <form method="post" action="admin_office_recieve_table_save.php">
                 <input type="hidden" name="id_close_transaction" value='.$row["id"].'>
                  <input type="hidden" name="closed_document" value="Closed">

                 <button type="submit" " class="btn btn-danger"  name="closed">Close Transaction </button> 
                 </form>

                  </div>  
           ';  
      }  
      $output .= '  
         
           <br>

     
      ';  
      echo $output;  

 }  

if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM history_log_default WHERE id = '".$_POST["employee_id"]."' ORDER BY Date_Time ASC";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
     
        <div class="card-header" style="padding-bottom:20px;">
          <i class="fa fa-table"></i> History Log
            </div>

        <div class="card-body">
          <div class="table-responsive"  style="height:450px;">
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
       
      ';  
      echo $output;  
 }  

 ?>