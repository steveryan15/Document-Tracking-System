<?php 
session_start();
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $errors = array();
  


   if (isset($_POST['update_fullname'])) {
    $Fullname = $_POST['Fullname'];
    $fullname_hidden = $_POST['fullname_hidden'];
    $id = $_POST['id'];
    

    $sql_u = "SELECT * FROM users WHERE Fullname='$Fullname' AND id!='$id'";
   
    $res_u = mysqli_query($db, $sql_u);

     if ($Fullname == $fullname_hidden  ) {
      $name_success = ""; 
     } else {


   if(mysqli_num_rows($res_u) > 0) {
     $name_error = "ds"; 
      ?>
  <script>
  alert('Invalid name.');
     
        </script>
  <?php
    }  
    else {
       $name_success = ""; 
        ?>
       <script>
        alert('Name has been updated.');
     
        </script>
  <?php
       $query = "UPDATE  users SET Fullname = '$Fullname' WHERE id='$id'";
      $results = mysqli_query($db, $query);
      $query = "UPDATE  user_encrypt_passsword SET Fullname ='$Fullname' WHERE id = '$id' ";
      $results = mysqli_query($db, $query);

     
    
    } 
    
   }

  }

   if (isset($_POST['update_username'])) {
    $username = $_POST['username'];
    $username_hidden = $_POST['username_hidden'];
    $id = $_POST['id'];
    $sql_r = "SELECT * FROM users WHERE username='$username' AND id!='$id'";
   
    $res_r = mysqli_query($db, $sql_r);

     if ($username == $username_hidden  ) {
      $username_success = ""; 
     } else {


   if(mysqli_num_rows($res_r) > 0) {
       $username_error = "ds"; 
   ?>
  <script>
  alert('Invalid Username');
     
        </script>
  <?php
    }   else {
       $username_success = "ds"; 
        ?>
  <script>
  alert('Username has been updated.');
     
        </script>
  <?php
          $query = "UPDATE  users SET username = '$username' WHERE id='$id'";
      $results = mysqli_query($db, $query);
       $_SESSION['username'] = $username;
           $query = "UPDATE  user_encrypt_passsword SET username ='$username' WHERE id = '$id' ";
      $results = mysqli_query($db, $query);
       $_SESSION['username'] = $username;
    }

   }
 }


   if (isset($_POST['update_email'])) {
    $email = $_POST['email'];
    $email_hidden = $_POST['email_hidden'];
    $id = $_POST['id'];
    $sql_e = "SELECT * FROM users WHERE email='$email' AND id!='$id'";
   
    $res_e = mysqli_query($db, $sql_e);
      if ($email == $email_hidden  ) {
      $email_success = ""; 
     } else {

   if(mysqli_num_rows($res_e) > 0) {
 $email_error = "ds"; 
      ?>
  <script>
  alert('Invalid Email');
     
        </script>
  <?php
    }   else {
       $email_success = "ds";
       ?>
  <script>
  alert('Email has been updated.');
     
        </script>
  <?php 
          $query = "UPDATE  users SET email = '$email' WHERE id='$id'";
      $results = mysqli_query($db, $query);

  
     
    }

   }
  }


if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];

 $folder="uploads/";
 $id = $_POST['id'];

   
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
     ?>
  <script>
  alert('User profile has been updated.');
     
        </script>
  <?php 
    $query = "UPDATE  users SET file = '$final_file' WHERE id='$id'";
       $results = mysqli_query($db, $query);
 }
  
 
}










 if (isset($_POST['update_password'])) {
    $change =  $_POST['password'];
     $password = md5($change);
    $password_hidden =  $_POST['password_hidden'];

    if ($password == $password_hidden) {
      ?>
    <script>
    alert('Password match.');
        window.location.href='change_password.php?success';
        </script>
    <?php
    }else {
         $password_error = "ds"; 
      ?>
  <script>

  alert('Password do not match.');
     
        </script>
  <?php 
    }
   
   }
  


if (isset($_POST['change_password'])) {
   $id = $_POST['id'];
    $change =  $_POST['password_save'];
        $password_hidden =  $_POST['password_hidden'];
    $password = md5($change);
  

   $sql_r = "SELECT * FROM users WHERE password='$password ' AND id!='$id'";
   
    $res_r = mysqli_query($db, $sql_r);

     if ($change == $password_hidden  ) {
      $password_success = ""; 
     } else {


   if(mysqli_num_rows($res_r) > 0) {
       $password_error = ""; 
   ?>
  <script>
  alert('Invalid password.');
     
        </script>
  <?php
    }   else {
       $password_success = ""; 
        ?>
  <script>
  alert('Username has been updated.');
     
        </script>
  <?php
          $query = "UPDATE  users SET password = '$password' WHERE id='$id'";
      $results = mysqli_query($db, $query);

    }

   }

   }
  

?>


  
 



     