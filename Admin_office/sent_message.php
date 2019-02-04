<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

   if (isset($_POST['btn-send-message'])) {

    $reciever = $_POST['reciever'];
    $sender = $_POST['sender'];
      $senders_office = $_POST['senders_office'];
    $message_content = $_POST['message_content'];
    $notify = $_POST['notify'];
    $Date_sent = $_POST['Date_sent'];
     $create_refresh = $_POST['create_refresh'];

    
$query="INSERT INTO message_box(sender,senders_office,receiver,comment,Date_sent,notify) VALUES('$sender','$senders_office','$reciever','$message_content','$Date_sent','$notify')";
       $results = mysqli_query($db, $query);

   if ($create_refresh == 'Index')   { 
   
?>
    <script>
    alert('Message has been sent.');
        window.location.href='index.php?success';
        </script>
    <?php
      exit();
     } else if ($create_refresh == 'view_all_users') {
        ?>
    <script>
    alert('Message has been sent.');
        window.location.href='view_all_users.php?success';
        </script>
    <?php
      exit();
     }else {

     }
    
 
}

  

?>


  
 


