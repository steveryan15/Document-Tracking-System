<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

   if (isset($_POST['btn-delete_message'])) {
    $id = $_POST['id'];

    

        $query = "DELETE FROM message_box WHERE id='$id'";
       $results = mysqli_query($db, $query);

     ?>
    <script>
    alert('Message has been deleted.');
        window.location.href='index.php?success';
        </script>
    <?php
      exit();
}

  
   

?>


  
 


