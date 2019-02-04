
<?php include('processs.php') ?>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="eror_style.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.min.js">
  <script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
    $(function () {
        $("#reg_btn").click(function () {
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
  <form method="post" action="" >
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

      
   
                        
    <form method="post" action="" >
   
         <div <?php if (isset($password_error)): ?> class="form_error" <?php endif ?> class="form-group" > 
    <div <?php if (isset($password_success)): ?> class="form_success" <?php endif ?> class="form-group" >   
  <input type="hidden" name="password_hidden" id="txtid" value='<?php echo $row["password"];?>' > 
   <input type="hidden" name="id" id="txtid" value='<?php echo $row["id"];?>' >  
  

    <span  style="color:black;"> New password:</span>                  
    <div  class="form-group" >
      <input type="password"  id="txtPassword"  name="password_save" required="" maxlength="8" minlength="5"  class="form-control">
  
    </div>
   

    <span  style="color:black;"> Confirm password:</span>
    <div class="form-group">
      <input type="password"  id="txtConfirmPassword" name="password_save"  required="" maxlength="8" minlength="5" class="form-control"  >
      
    </div>
       <div class="form-group">

    <input type="checkbox" style="background:RGBA(13, 70, 83, 0.65);" name="" onclick="myFunction()">Show password
        </div>
    <div>
      <button type="submit" name="change_password" id="reg_btn" class="btn btn-primary" >UPDATE</button>

    </div>
  </form>
                            

                       
 

 

                         

                         
                 
                      </form>

                               <?php  
                               }  
                               ?>  
                       
                
       
           <?php endif ?>
  </form>
  
  </body>
</html>

<style type="text/css">
body {
  padding-left:20px;
}
  .form-control {
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

  font-size: 1.1em;
  color: #D83D5A;
}
.form_error input {
  border: 1px solid #D83D5A;
}
.form_success span {
  width: 80%;
  height: 35px;
 font-size: 1.1em;
  color: green;
}
.form_success input {
  border: 1px solid green;
}
</style>

<!-- Show password ni siya -->
 <script type="text/javascript">
  
  function myFunction() {
    var x = 
    document.getElementById("txtPassword");

    if (x.type == "password")
    {
      x.type = "text";
    }else {
      x.type = "password";
    }
      var y = 
    document.getElementById("txtConfirmPassword");

    if (y.type == "password")
    {
      y.type = "text";
    }else {
      y.type = "password";
    }
  }
</script>

