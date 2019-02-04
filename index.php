<?php include('Phplogin/functions.php') ?>

<!DOCTYPE html>
<html>
<head>
	 <head>
    <meta charset="utf-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>villianueva/doc.gov</title>
    
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
 
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">  

  </head>
</head>
<body onload="javascript:setTimeout(“location.reload(true);”,10000);">

<center>
	<?php if (count($errors) > 0): ?>
       
<div class="alert alert-danger" style=" max-width: 320px;margin-top:5px;border:solid 2px;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 

 

     <?php foreach ($errors as $error):  ?>
       <p> <?php echo $error;  ?> </p>
   <?php endforeach ?>
    
     </div>


<?php endif ?>
	<form class = "login wow fadeInDown  delay-03s" role = "form" 
            action = "index.php" method = "post">

         
           <img src="img/villa_logo.png" width="200">

		 <input type = "text" class="input" maxlength="10" minlength="2"
               name = "username" placeholder = "Enter username" 
               required autofocus style="width:280px;margin-top:10px;"/>   <i class="fa fa-user" ></i> 

            <input type = "password" class="input" maxlength="8" id="myInput" minlength="5" 
               name = "password" placeholder = "Enter password" required style="width:280px;" > <i class="fa fa-key"></i> 
               <input type="checkbox" style="background:RGBA(13, 70, 83, 0.65);" name="" onclick="myFunction()">Show password
		<br> <a href="www.facebook.com">Forgot your password?</a> <i class="spinner" ></i> <br><br>
		 <button type="submit" class="btn btn btn-primary href="" data-modal-id="modal-register" name="login_btn" style="color:white;font-size:15px;width:100px;"> <span class="fa fa-unlock-alt" ></span> LOG IN </button>
		
	</form>
</center>

</body>

</html>
<!-- Javascript -->
        <script src="animate/js/jquery-1.11.1.min.js"></script>
        <script src="animate/js/scripts.js"></script>
         <script src="animate/js/wow.js"></script>
         <script src="animate/js/custom.js"></script> 
 <!-- Modal  -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>        
 </html>
  <style>
    

@keyframes spinner {
  0% {
    transform: rotateZ(0deg);
  }
  100% {
    transform: rotateZ(359deg);
  }
}
* {
  box-sizing: border-box;
}
body {
  background-color:  #cce7ff;
}
.login {

  border-radius: 10px 10px 10px 10px;
  padding: 10px 20px 20px 20px;
  width: 100%;
  
  max-width: 320px;
   height:500px;
  background-color: white;

  padding-bottom: 80px;
  margin-top: 20px;
  box-shadow: 0px 0px 5px 5px black;
}
.login.loading button {
  max-height: 100%;
  padding-top: 50px;
  width: 500px;

}
.login.loading button .spinner {
  opacity: 1;
  top: 40%;
}
.login.ok button {
  background-color:   #080808 ;
  border-radius: 10px;
}
.login.ok button .spinner {
  border-radius: 10px;
  border-top-color: transparent;
  border-right-color: transparent;
  height: 20px;
  animation: none;
  transform: rotateZ(-45deg);
}
.input {
  display: block;
  padding: 15px 10px;
  margin-bottom: 10px;
  width: 100%;
  height:50px;

  border: 1px solid RGBA(13, 70, 83, 0.65);
  transition: border-width 0.2s ease;
  border-radius: 2px;
  color: black;
}
.input + i.fa {
  color: #fff;
  font-size: 1em;
  position: absolute;
  margin-top: -47px;
  opacity: 0;
  left: 0;
  transition: all 0.1s ease-in;
}
.input:focus {
  outline: none;
  color: #444;
  border-color:   RGBA(13, 70, 83, 0.65);
  border-left-width: 35px;
}
.input:focus + i.fa {
  opacity: 1;
  left: 30px;
  transition: all 0.25s ease-out;
}
.login a {
  font-size: 0.8em;
  color: #2196F3;
  text-decoration: none;
}
.login .title {
  color: #444;
  font-size: 1.2em;
  font-weight: bold;
  margin: 10px 0 30px 0;
  border-bottom: 1px solid #eee;
  padding-bottom: 20px;
}

}
.login button .spinner {
  display: block;
  width: 40px;
  height: 40px;
  position: absolute;
  border: 4px solid #ffffff;
  border-top-color: rgba(255, 255, 255, 0.3);
  border-radius: 100%;
  left: 50%;
  top: 0;
  opacity: 0;
  margin-left: -20px;
  margin-top: -20px;
  animation: spinner 0.6s infinite linear;
  transition: top 0.3s 0.3s ease, opacity 0.3s 0.3s ease, border-radius 0.3s ease;
  box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.2);
}
.login:not(.loading) button:hover {
  box-shadow: 0px 1px 3px #2196F3;
}
.login:not(.loading) button:focus {
  border-bottom-width: 4px;
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.2);
  font-size: 0.8em;
}
footer a, footer a:link {
  color: #fff;
  text-decoration: none;
}
.img-responsive {
  max-width: 150px;
  max-height: 200px;
}

  .error {
    background:  #ff6666; 
    border: none;
    color: white;
    height: 30px;
 
    border-radius: 7px;
    width: 100%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}
.error:hover {
   box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 10px 20px 0 rgba(0,0,0,0.19);
}


  </style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

<script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
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
                  alert('New user is saved!');  
                }
           }  
      });  
 });  
 </script>  

<!-- Show password ni siya -->
 <script type="text/javascript">
  
  function myFunction() {
    var x = 
    document.getElementById("myInput");

    if (x.type == "password")
    {
      x.type = "text";
    }else {
      x.type = "password";
    }
  }
</script>


