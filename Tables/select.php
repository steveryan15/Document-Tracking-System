 <?php include('sent_create_table.php') ?>
 <?php  
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
      $query = "SELECT * FROM tbl_documents WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
               <div class="modal-body table-responsive" style="height:300px;color:black;"> 

                   <form method="post" action="select.php">

                       <div class="form-group">  
                    
                        <span style="color:black;">Document ID:</span>
                          <input type="text" style="background:white;"  readonly="" name="id" value="'.$row["id"].'" class="form-control" />  
                       </div> 

                       <div class="form-group">  
                      

                         <span style="color:black;">Document Type:</span>
                          <input type="text" style="background:white;"  readonly=""  name="doc_type" value="'.$row["Document_type"].'" class="form-control" />  
                       </div>  

                       <div class="form-group">
                 
                         <span style="color:black;">Document Content:</span>  
                            <input type="text" value="'.$row["Content"].'" style="background:white;"  readonly="" name="doc_content" class="form-control" />
                       </div>
                     
                          

                    
                        
              
                          <input type="hidden" value="0" style="background:white;"  readonly="" name="doc_msg" id="doc_msg" class="form-control" />


                       <div class="form-group"> 

                   
                        <span style="color:black;">Document From:</span>  
                          <input type="text" style="background:white;"  readonly="" name="doc_from" Value="Mayor Office" class="form-control" />  
                       </div>


                       <div class="form-group"> 
                        <span style="color:black;">Date Registered:</span> 
                          <input type="text" style="background:white;"  readonly="" name="date_create" value="'.$row["Date_created"].'"  class="form-control" />  
                       </div>  

                       <div class="form-group"> 
                        <span style="color:black;">Forward To:</span> 
                          <select required="" class="form-control" name="doc_status"  id="send"  type="text" style="height:40px;color:black;" > 
                
                         
                          <option value="Assestment Office">Assestment Office</option>
                          <option value="Billing Office">Billing Office</option>
                            </select> 
                        </div> 
                         <input type="hidden" name="Date_sent" value="' . date("Y/m/d-h:i:sa").'">
                       
                          <input type="hidden" name="employee_id" id="employee_id" /> 
          

                      <input type="submit"  class="btn btn-primary" value="Forward" id="btn-upload" name="forward">
     
                      </form>    
                             
                     </div> 
                 
           ';  
      }  
      $output .= '  
       
   
      ';  
      echo $output;  
 }  
 ?>
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
             alert("Document has been send.");  
           }
          
          
      });  

 });  
 </script>    
 