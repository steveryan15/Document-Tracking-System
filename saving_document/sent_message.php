<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

   if (isset($_POST['btn-send-message'])) {

    $receiver = $_POST['reciever'];
    $sender = $_POST['sender'];
      $senders_office = $_POST['senders_office'];
    $message_content = $_POST['message_content'];
    $notify = $_POST['notify'];
    $Date_sent = $_POST['Date_sent'];

    
$query="INSERT INTO message_box(sender,senders_office,receiver,comment,Date_sent,notify) VALUES('$sender','$senders_office','$receiver','$message_content','$Date_sent','$notify')";
       $results = mysqli_query($db, $query);
   
  
      header('location:../Home.php');
     
     

    
 
}

  

?>


  
 


