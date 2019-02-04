 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM users WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive" style="color:black;">  
           <table class="table table-hover">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                  
                 <tr>  
                     <td width="30%"><strong><label>Name:</label></strong></td>  
                     <td width="70%">'.$row["Fullname"].'</td>  
                </tr>
                 <tr>  
                     <td width="30%"><strong><label>Email:</label></strong></strong></td>  
                     <td width="70%">'.$row["email"].'</td>  
                </tr> 
                 <tr>  
                     <td width="30%"><strong><label>Position:</label></strong></td>  
                     <td width="70%">'.$row["position"].'</td>  
                </tr> 
                <tr>  
                     <td width="30%"><strong><label>Office:</label></strong></td>  
                     <td width="70%">'.$row["office"].'</td>  
                </tr> 

                <tr>  
                     <td width="30%"><strong><label>Profile</label></strong></td>  
                     <td width="70%"> <img src="../Phplogin/adding_updating_user/uploads/'.$row["file"].'" width="150"> </td>  
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