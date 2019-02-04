<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

   if (isset($_POST['btn-reply-message'])) {
   
    $id = $_POST['id'];
    $receiver = $_POST['receiver'];
    $sender = $_POST['sender'];
     $office = $_POST['office'];
    $message_content = $_POST['reply_message'];
    $notify = $_POST['notify'];
    $Date_sent = $_POST['reply_date_sent'];


$senders_comment_date_sent = $_POST['senders_comment_date_sent'];
$senders_comment = $_POST['senders_comment'];
$senders_office = $_POST['senders_office'];


   $query="UPDATE message_box SET sender = '$sender', senders_office = '$office', comment = '$message_content', receiver = '$receiver', Date_sent = '$Date_sent',notify = '$notify' WHERE id = '$id'";
       $results = mysqli_query($db, $query);

    $query="INSERT INTO message_box_convo(id,sender,senders_office,receiver,comment,Date_sent) VALUES('$id','$receiver','$senders_office','$sender','$senders_comment','$senders_comment_date_sent')";
       $results = mysqli_query($db, $query);

    $query="INSERT INTO message_box_convo(id,sender,senders_office,receiver,comment,Date_sent) VALUES('$id','$sender','$senders_office','$receiver','$message_content','$Date_sent')";
       $results = mysqli_query($db, $query);

 
      header('location:../Home.php');
   

}

  

?>


  
 


