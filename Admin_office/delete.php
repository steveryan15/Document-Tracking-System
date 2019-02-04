<?php 
session_start();
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $errors = array();
  


   if (isset($_POST['btn-delete'])) {
     $id = $_POST['id'];
         $fullname = $_POST['fullname'];
    
    $query = "DELETE FROM  users WHERE id='$id' AND fullname='$fullname'";
       $results = mysqli_query($db, $query);
       header('location:view_all_users.php');
       ?>
  <script>
  alert('User has been deleted');
     
        </script>
  <?php
     }
?>