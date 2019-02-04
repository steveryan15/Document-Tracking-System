<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

   if (isset($_POST['btn-delete_message'])) {
    $id = $_POST['id'];
    $refresh_delete = $_POST['refresh_delete'];
    

        $query = "DELETE FROM message_box WHERE id='$id'";
       $results = mysqli_query($db, $query);



        
        header('location:../Home.php');

     


 
}

  
   

?>


  
 


