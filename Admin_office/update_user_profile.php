<?php
$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $email = "";
  $username = "";
  $image= "";
  $fullname = "";
  $password = "";
  $password_save = "";

if(isset($_POST['btn-update']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
  $id = $_POST['id'];

 $folder="../Phplogin/adding_updating_user/uploads/";
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
$query = "UPDATE users SET file = '$final_file' WHERE id='$id'";
        $results = mysqli_query($db, $query);
       ?>
  <script>
        window.location.href='view_all_users.php?success';
        </script>
  <?php
      exit();
  
 }
 else {
  
 }
 
}
if(isset($_POST['btn-update']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
  $id = $_POST['id'];

 $folder="../Phplogin/adding_updating_user/uploads/";
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
$query = "UPDATE users SET file = '$final_file' WHERE id='$id'";
        $results = mysqli_query($db, $query);
        ?>
    <script>
    alert('User information has been updated.');
        window.location.href='view_all_users.php?success';
        </script>
    <?php
      exit();
  
 }
 
}

if(isset($_POST['btn-update']))
{        

 $id = $_POST['id'];
 $Fullname = $_POST['Fullname'];
 $username = $_POST['username'];
 $email = $_POST['email'];
 $office = $_POST['office'];
 $position = $_POST['position'];
 $password = $_POST['password'];
 $md5_password = md5($password);
 $file_hidden = $_POST['password'];
 
 if ($password == '') {
 $sql_r = "SELECT * FROM users WHERE Fullname='$Fullname' AND id!='$id'";
 $sql_u = "SELECT * FROM users WHERE username='$username' AND id!='$id'";
 $sql_e = "SELECT * FROM users WHERE email='$email' AND id!='$id'";

 $res_r = mysqli_query($db, $sql_r);
 $res_u = mysqli_query($db, $sql_u);
 $res_e = mysqli_query($db, $sql_e);

 
  if (mysqli_num_rows($res_r) > 0){
 $fullname_error = ""; 
    $query = "UPDATE  users SET username = '$username', email = '$email', position = '$position', office = '$office', password = '".md5($password)."' WHERE id='$id'";
        $results = mysqli_query($db, $query);
     ?>
  <script>
  alert('Invalid Name');
        window.location.href='view_all_users.php?success';
        </script>
  <?php
    }
  else if (mysqli_num_rows($res_u) > 0){
 $username_error = ""; 
     $query = "UPDATE  users SET Fullname = '$Fullname', email = '$email', position = '$position', office = '$office', password = '".md5($password)."' WHERE id='$id'";
        $results = mysqli_query($db, $query); 
     ?>
  <script>
  alert('Invalid Username');
        window.location.href='view_all_users.php?success';
        </script>
  <?php
    }

  else if (mysqli_num_rows($res_e) > 0){
     $email_error = ""; 
       $query = "UPDATE  users SET Fullname = '$Fullname', username = '$username', position = '$position', office = '$office', password = '".md5($password)."' WHERE id='$id'";
        $results = mysqli_query($db, $query); 

   ?>
  <script>
  alert('Invalid Email');
        window.location.href='view_all_users.php?success';
        </script>
  <?php
    }
 

  else {

      $query = "UPDATE  users SET Fullname = '$Fullname', username = '$username', email = '$email', position = '$position', office = '$office' WHERE id='$id'";
        $results = mysqli_query($db, $query);
         ?>
    <script>
    alert('User information has been updated.');
        window.location.href='view_all_users.php?success';
        </script>
    <?php
      exit();
  
  }
 }else {
   $sql_r = "SELECT * FROM users WHERE fullname='$fullname' AND id!='$id'";
 $sql_u = "SELECT * FROM users WHERE username='$username' AND id!='$id'";
 $sql_e = "SELECT * FROM users WHERE email='$email' AND id!='$id'";
 $sql_p = "SELECT * FROM users WHERE password='$md5_password' AND id!='$id'";
 $res_r = mysqli_query($db, $sql_r);
 $res_u = mysqli_query($db, $sql_u);
 $res_e = mysqli_query($db, $sql_e);
 $res_p = mysqli_query($db, $sql_p);
 
  if (mysqli_num_rows($res_r) > 0){
 $fullname_error = ""; 
  $query = "UPDATE  users SET username = '$username', email = '$email', position = '$position', office = '$office', password = '".md5($password)."' WHERE id='$id'";
        $results = mysqli_query($db, $query);
     ?>
  <script>
  alert('Invalid Name');
        window.location.href='view_all_users.php?success';
        </script>
  <?php
    }
  else if (mysqli_num_rows($res_u) > 0){
 $username_error = "";
  $query = "UPDATE  users SET Fullname = '$Fullname', email = '$email', position = '$position', office = '$office', password = '".md5($password)."' WHERE id='$id'";
        $results = mysqli_query($db, $query); 
     ?>
  <script>
  alert('Invalid Username');
        window.location.href='view_all_users.php?success';
        </script>
  <?php
    }

  else if (mysqli_num_rows($res_e) > 0){
      $email_error = ""; 
       $query = "UPDATE  users SET Fullname = '$Fullname', username = '$username', position = '$position', office = '$office', password = '".md5($password)."' WHERE id='$id'";
        $results = mysqli_query($db, $query); 

   ?>
  <script>
  alert('Invalid Email');
        window.location.href='view_all_users.php?success';
        </script>
  <?php
    }
  else if (mysqli_num_rows($res_p) > 0){
      $password_error = "";  
       $query = "UPDATE  users SET Fullname = '$Fullname', username = '$username', email = '$email', position = '$position', office = '$office' WHERE id='$id'";
        $results = mysqli_query($db, $query);

   ?>
  <script>
  alert('Invalid Password');
        window.location.href='view_all_users.php?success';
        </script>
  <?php
    }

  else {

      $query = "UPDATE  users SET Fullname = '$Fullname', username = '$username', email = '$email', position = '$position', office = '$office', password = '".md5($password)."' WHERE id='$id'";
        $results = mysqli_query($db, $query);

          ?>
    <script>
    alert('User information has been updated.');
        window.location.href='view_all_users.php?success';
        </script>
    <?php
      exit();
       
  
  }
 }
}



?>