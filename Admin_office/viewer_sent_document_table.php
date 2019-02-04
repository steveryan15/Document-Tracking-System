 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM tbl_documents WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive" style="height:270px;">  
           <table class="table table-bordered table-hover">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="40%"><strong><label>Document ID</label></strong></td>  
                     <td width="60%">'.$row["id"].'</td>  
                </tr>  
                 <tr>  
                     <td width="40%"><strong><label>Document Type</label></strong></td>  
                     <td width="60%">'.$row["Document_type"].'</td>  
                </tr>
                 <tr>  
                     <td width="40%"><strong><label>Document Title</label></strong></td>  
                     <td width="60%">'.$row["Document_title"].'</td>  
                </tr>
                
                <tr>  
                     <td width="40%"><strong><label>Forwarded To</label></strong></td>  
                     <td width="60%">'.$row["Status"].'</td>  
                </tr> 
                <tr>  
                     <td width="40%"><strong><label>Document Status</label></strong></td>  
                     <td width="60%">'.$row["Document_sent_status"].'</td>  
                </tr> 
               
                <tr>  
                     <td width="30%"><strong><label>Date Sent</label></strong></td>  
                     <td width="70%">'.$row["Date_sent"].'</td>  
                </tr>   
               
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>