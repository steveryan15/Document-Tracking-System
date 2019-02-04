<?php
$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $email = "";
  $username = "";

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];

 $folder="uploads/";
 $id = $_POST['id'];
 $username = $_POST['username'];
 $email = $_POST['email'];
  $file_hidden = $_POST['file_hidden'];
 $sql_u = "SELECT * FROM users WHERE username='$username' AND id!='$id'";
 $sql_e = "SELECT * FROM users WHERE email='$email' AND id!='$id'";

 $res_u = mysqli_query($db, $sql_u);
 $res_e = mysqli_query($db, $sql_e);

 
 if (mysqli_num_rows($res_u) > 0){
 $username_error = ""; 
     ?>
  <script>
  alert('Invalid Username');
     
        </script>
  <?php
    }

  else if (mysqli_num_rows($res_e) > 0){
      $email_error = "";  

   ?>
  <script>
  alert('Invalid Email');
     
        </script>
  <?php
    }
 

  else {

    if ($file == '')  {  
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $query = "UPDATE  users SET file = '$file_hidden', username = '$username', email = '$email' WHERE id='$id'";
   $results = mysqli_query($db, $query);
    $_SESSION['username'] = $username;

   header('location:home.php');
   exit();
  
   }
   }else {
     // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $query = "UPDATE  users SET file = '$final_file', username = '$username', email = '$email' WHERE id='$id'";
   $results = mysqli_query($db, $query);
    $_SESSION['username'] = $username;

   header('location:home.php');
   exit();
  
   }
   }
  }  
 
}
?>