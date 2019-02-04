<?php
$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $email = "";
  $username = "";
  $image= "";
  $fullname = "";
  $middle_name = "";
  $first_name = "";
  $last_name = "";
  $password = "";
  $password_save = "";
if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];

 $folder="uploads/";
 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $middle_name = $_POST['middle_name'];
 $username = $_POST['username'];
 $email = $_POST['email'];

 $office = $_POST['office'];
 $position = $_POST['position'];
 $password = $_POST['password'];
 $md5_password = md5($password);

 $sql_f = "SELECT * FROM users WHERE Fullname='$first_name $middle_name $last_name'";
 $sql_u = "SELECT * FROM users WHERE username='$username'";
 $sql_e = "SELECT * FROM users WHERE email='$email'";
 $sql_p = "SELECT * FROM users WHERE password='".md5($password)."'";
 $res_f = mysqli_query($db, $sql_f);
 $res_u = mysqli_query($db, $sql_u);
 $res_e = mysqli_query($db, $sql_e);
 $res_p = mysqli_query($db, $sql_p);

 if (mysqli_num_rows($res_f) > 0){
 $name_error = ""; 
     ?>
  <script>
  alert('Name is invalid');
     
        </script>
  <?php
    }
 
  else if (mysqli_num_rows($res_u) > 0){
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
  else if (mysqli_num_rows($res_p) > 0){
      $password_error = "";  

   ?>
  <script>
  alert('Invalid Password');
     
        </script>
  <?php
    }

  else {
   
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 $query ="INSERT INTO users(file,Fullname,username,email,office,position,password) VALUES('$final_file','$first_name $middle_name $last_name','$username','$email','$office','$position','".md5($password)."')";
   $results = mysqli_query($db, $query);
    $query = "INSERT INTO   user_encrypt_passsword (fullname, username, password) 
                VALUES ('$fullname', '$username', '$password')";
           $results = mysqli_query($db, $query);

  ?>
    <script>
    alert('Success! User is registered.');
        window.location.href='save_user_admin.php?fail';
        </script>
    <?php
    exit();
 }
  }  
 
}
?>