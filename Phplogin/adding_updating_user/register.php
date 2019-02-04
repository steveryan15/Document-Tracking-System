<?php include('../functions.php') ?>

<html>
<head>

  <link rel="stylesheet" type="text/css" href="eror_style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.js">
  <script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
    $(function () {
        $("#btn-upload").click(function () {
            var password = $("#txtPassword").val();
            var confirmPassword = $("#txtConfirmPassword").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        });
    });
</script>
  
</head>

<body>
 <?php if (isset($_SESSION["Fullname"])): ?>

              <?php  
              $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
              $query = "SELECT * FROM users WHERE Fullname = '".$_SESSION["Fullname"]."'  ";  
              $result = mysqli_query($connect, $query);  
              ?> 
               <?php  
                               while($row = mysqli_fetch_array($result))  
                               { 
                      
                               ?>  
            
                                  
                         




<?php include('register_save.php') ?>
  <form action="register.php" method="post" enctype="multipart/form-data">
<div class="form-group">  
 <span  style="color:black;margin-left:0;"> User_profile:</span><br>
 <input type="file" id="fileToUpload"  class="btn btn-info" required="" name="file" /> <br>

</div>

  <span  style="color:black;margin-left:0;"> Fullname:</span>
   <div <?php if (isset($fullname_error)): ?> class="form_error" <?php endif ?> class="form-group" >
      <input type="text" required="" class="form-control" placeholder="First name"  name="first_name" value="<?php echo $fullname; ?>"   class="form-control">
 
    </div>

    <span  style="color:black;margin-left:0;"> Last name:</span>
   <div class="form_error" class="form-group" >
      <input type="text" required="" class="form-control" placeholder="Enter last name"  name="fullname" class="form-control">
 
    </div>
    <span  style="color:black;margin-left:0;"> Fullname:</span>
   <div <?php if (isset($fullname_error)): ?> class="form_error" <?php endif ?> class="form-group" >
      <input type="text" required="" class="form-control" placeholder="LeBron James"  name="fullname" value="<?php echo $fullname; ?>"   class="form-control">
 
    </div>


 
 

 
    <div <?php if (isset($username_error)): ?> class="form_error" <?php endif ?> class="form-group">
       <span  style="color:black;margin-left:0;"> Username:</span>
    <input type="text" required="" class="form-control" name="username" placeholder="King James" maxlength="8" minlength="2"  value="<?php echo $username; ?>"  class="form-control">
  
    </div>

    <span  style="color:black;margin-left:0;"> Email:</span>
    <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> class="form-group">
      <input type="email" name="email" class="form-control" placeholder="lbj23@gmail.com" required="" placeholder="Email" value="<?php echo $email; ?>"  class="form-control">
      <?php if (isset($email_error)): ?>
        <span style="margin-left:0;"><?php echo $email_error; ?></span>
      <?php endif ?>
    </div>

<span  style="color:black;"> Position:</span>
                          <div class="form-group">
                          <select required="" class="form-control" name="position"   type="text" style="height:40px;color:black;" > 
                  <option value="Mayor">Mayor</option>  
                  <option value="Manager">Manager</option>
                  <option value="Secretary">Secretary</option>  
                  <option value="Admin">Admin</option>
                  </select>
                            
                          </div>
                
 <input type="hidden" name="office" value="<?php echo $row["office"];?>">

  <span  style="color:black;"> Password:</span>
 <div  <?php if (isset($password_error)): ?> class="form_error" <?php endif ?> class="form-group" >

      <input type="password"  required="" class="form-control" maxlength="8" minlength="5" name="password"  id="txtPassword" value="<?php echo $password; ?>"  class="form-control" >
   <?php if (isset($password_error)): ?>
        <span style="margin-left:0;"><?php echo $password_error; ?></span>
   <?php endif ?>
    </div>
    <span  style="color:black;"> Confirm password:</span>
    <div class="form-group">
      <input type="password" class="form-control"  required="" maxlength="8" minlength="5"  id="txtConfirmPassword" value="<?php echo $password; ?>"  class="form-control" >
      
    </div>
      

      
 <button type="submit" id="btn-upload" class="btn btn-primary"  name="btn-upload">REGISTER</button>
 </form>
  
                               <?php  
                               }  
                               ?>  
        <?php endif ?> 
  
  </body>
</html>

<style type="text/css">
  .form-control {
    width:400px;
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
</style>

<script>  
 $(document).ready(function(){  
      $('#btn-upload').click(function(){  
           var image_name = $('#fileToUpload').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#fileToUpload').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#fileToUpload').val('');  
                     return false;  
                }  
                else {
                 
                }
           }
          
          
      });  

 });  
 </script>  

