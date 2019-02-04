<?php include('processs.php') ?>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.js">
  <script type="text/javascript" src="jquery.min.js"></script>


  
</head>
<body>
  
      <?php if (isset($_SESSION["password"])): ?>


            <?php  
              $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
              $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."'  ";  
              $result = mysqli_query($connect, $query);  
              ?> 
               <?php  
                               while($row = mysqli_fetch_array($result))  
                               { 
                      
                               ?>  
                         
             
                          

                      
                      
                   <form action="" class="registration-form" method="post">
                         <div class="form-group">
                          <input type="hidden" name="id"   class="form-last-name form-control" style="color:black;"  id="form-last-name" value="<?php echo $row["id"];?>">
                         </div> 
                        
                        <div class="form-group">
                        
                          <input type="hidden" name="password"   class="form-last-name form-control" style="color:black;"  id="form-last-name" value="<?php echo $row["password"];?>">

                      </div>  
                      
                          <span style="font-size:18px;"> <strong> Email: </strong>  </span> <br>
                      <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> class="form-group" >
                      
                      <div <?php if (isset($email_success)): ?> class="form_success" <?php endif ?> class="form-group" >
                        
                        <input type="hidden" maxlength="8" minlength="2"  name="email_hidden"  style="color:black;"   id="focusedInput" required="" value="<?php echo $row["email"];?>" >
                             <input type="text" name="email"  style="color:black;"   id="focusedInput" required="" value="<?php echo $row["email"];?>" >
                          <button type="submit" style=";margin-left:5px;" name="update_email"  class="btn btn-primary ">Update</button> 
                    
                      </div>
                      
                          
                      </div> 
                  </form>
 
               


                  <form action="update_user.php" method="post" enctype="multipart/form-data">
                   <div class="form-group">
                          <input type="hidden" name="id"   class="form-last-name form-control" style="color:black;"  value="<?php echo $row["id"];?>">
                         </div> 
                         
                        
                    <input type="file"  class="btn btn-info" name="file" style="color:black;width:300px;margin-right:5px;"  id="upload" required=""  />
            
                   <button type="submit"   name="btn-upload" id="GO" class="btn btn-primary ">Update</button>

                  <a href="uploads/<?php echo $row['file'] ?>" target="_blank">  
                   <img src="uploads/<?php echo $row["file"]; ?>"class="img-thumbnail" alt="User profile" width="254" height="186">
                    </a>

                               <?php  
                               }  
                               ?>  
                  </form>    
                       
                
       
           <?php endif ?>
  </body>
 <style type="text/css">
 .form-control {
  width: 50px;
 }
 input[type=text] {
    width:300px;
    font-size:15px;
    color:black;
    height: 40px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background:white;
    border: 1px solid #333;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: black;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;

}

.position {
   width:300px;
    font-size:15px;
    color:black;
    height: 40px;
    margin: 0;
    padding: 0 20px;
    vertical-align: middle;
    background:white;
    border: 1px solid #333;
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    font-weight: 300;
    line-height: 50px;
    color: black;
    -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;
    -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none;
    -o-transition: all .3s; -moz-transition: all .3s; -webkit-transition: all .3s; -ms-transition: all .3s; transition: all .3s;
}

.form_error span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}
.form_success span {
  width: 80%;
  height: 35px;
  margin: 3px 10%;
  font-size: 1.1em;
  color: green;
}
.form_success input {
  border: 1px solid green;
}
 </style> 
</html>


<script>  
 $(document).ready(function(){  
      $('#GO').click(function(){  
           var image_name = $('#upload').val();  
           if(image_name == '')  
           {  
                alert("Please select file attachment");  
                return false;  
           }  
           else  
           {  
                var extension = $('#upload').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid image file');  
                     $('#upload').val('');  
                     return false;  
                }  
                else {
                    
                }
           }
          
          
      });  

 });  
 </script>  