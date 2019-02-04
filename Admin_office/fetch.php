 <?php  
 
if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM history_log_default WHERE id = '".$_POST["employee_id"]."' ORDER BY Date_Time DESC";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
     
        <div class="card-header" style="padding-bottom:10px;">
          <i class="fa fa-table"></i> History Log
         </div>

        <div class="card-body">
          <div class="table-responsive"  style="height:265px;">
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