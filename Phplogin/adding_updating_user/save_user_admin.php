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





<?php include('register_save.php') ?>
  <form action="save_user_admin.php" method="post" enctype="multipart/form-data">
<div class="form-group">  
 <span  style="color:black;margin-left:0;"> User_profile:</span><br>
 <input type="file" id="fileToUpload"  class="btn btn-default" required="" style="height:40px;color:  black;border:1px solid;width:400px;"  name="file" /> <br>

</div>

  <span  style="color:black;margin-left:0;"> First name:</span>
   <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>  class="form-group"  >
      <input type="text"  value="<?php echo $first_name; ?>" required="" class="form-control" placeholder="First name"  name="first_name"   class="form-control" >
 
    </div>

     <span  style="color:black;margin-left:0;"> Middle initial:</span>
   <div class="form-group" <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
      <select  required="" class="form-control" name="middle_name" type="text" style="height:40px;color:  black;border:1px solid" > 

                <option value="A">A</option>  
                <option value="B">B</option>
                <option value="C">C</option>  
                <option value="D">D</option>
                <option value="E">E</option>  
                <option value="F">F</option>
                <option value="G">G</option>  
                <option value="H">H</option>
                <option value="I">I</option>  
                <option value="J">J</option>
                <option value="K">K</option>  
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
                <option value="Q">Q</option>
                <option value="R">R</option>
                <option value="S">S</option>
                <option value="T">T</option>
                <option value="U">U</option>
                <option value="V">V</option>
                <option value="W">W</option>
                <option value="X">X</option>
                <option value="Y">Y</option>
                <option value="Z">Z</option>         
               </select>
 
    </div>
    <span  style="color:black;margin-left:0;"> Last name:</span>
   <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?>  class="form-group" >
      <input type="text" value="<?php echo $last_name; ?>"  required="" class="form-control" placeholder="Last name"  name="last_name" class="form-control">
 
    </div>
 
 
 

 
    <div <?php if (isset($username_error)): ?> class="form_error" <?php endif ?> class="form-group">
       <span  style="color:black;margin-left:0;"> Username:</span>
    <input type="text" required="" class="form-control" name="username" placeholder="Username" maxlength="8" minlength="2"  value="<?php echo $username; ?>"  class="form-control">
  
    </div>

    <span  style="color:black;margin-left:0;"> Email:</span>
    <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> class="form-group">
      <input type="email" name="email" class="form-control" placeholder="Email" required="" placeholder="Email" value="<?php echo $email; ?>"  class="form-control">
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
       <span  style="color:black;"> Office:</span>
                          <div class="form-group">
                         <?php
                      
                          # diri mag pili sa document type     
                          mysql_connect('localhost', 'root', '', 'villa_dblgu');
                          mysql_select_db('villa_dblgu');

                          $sql = "SELECT * FROM tbl_offices";
                          $result = mysql_query($sql);

                          echo "<select name='office' class='form-control' id=''  style='color:black;'>";
                            echo " <option value=''></option>";
                          while ($row = mysql_fetch_array($result)) {
                              echo "<option value='" . $row['Offices'] ."'>" . $row['Offices'] ." </option>";

                          }
                          echo "</select>";
                            ?>
                            
                          </div>
                


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
                alert("Please select user profile.");  
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

