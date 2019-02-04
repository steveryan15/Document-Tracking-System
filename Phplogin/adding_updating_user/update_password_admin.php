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

        <input type="hidden" name="password_hidden" id="" value='<?php echo $row["password"];?>' > <br>     
    
    <span  style="color:black;"> Password:</span>                  
   <div <?php if (isset($password_error)): ?> class="form_error" <?php endif ?>  >

      <input type="password" placeholder="Enter password" id="" name="password" class="password" required="" maxlength="8" minlength="5">
       <button type="submit" name="update_password" id="reg_btn" class="btn btn-primary" >Submit</button>
  
    </div> 

  
     

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
  .password {
   width:250px;
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