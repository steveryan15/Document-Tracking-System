 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM users WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
               <div class="modal-body"> 

                   <form method="post" action="delete.php">

                       <div class="form-group">  
                    
                      
                          <input type="hidden" style="background:white;"  readonly="" name="id" value="'.$row["id"].'" class="form-control" />  

                          <input type="hidden" style="background:white;"  readonly="" name="fullname" value="'.$row["Fullname"].'" class="form-control" />  
                     
                         <label style="font-size:18px;"> Are you sure you want to delete '.$row["Fullname"].'?  </label> <br><br>
                       
          
                        <button style="float:right;color:white;" class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
                        <button style="float:right;margin-right:5px;" class="btn btn-danger" name="btn-delete">Delete</button>
                          
     
                      </form>    
                             
                     </div> 
                 
           ';  
      }  
      $output .= '  
       
   
      ';  
      echo $output;  
 }  
 ?>