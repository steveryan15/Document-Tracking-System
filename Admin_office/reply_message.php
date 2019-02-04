<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

   if (isset($_POST['btn-reply-message'])) {
   
    $id = $_POST['id'];
    $reciever = $_POST['reciever'];
    $sender = $_POST['sender'];
    $senders_office = $_POST['senders_office'];
    $message_content = $_POST['reply_message'];
    $notify = $_POST['notify'];
    $Date_sent = $_POST['reply_date_sent'];
    $reply_refresh = $_POST['reply_refresh'];

    
$query="UPDATE message_box SET  sender = '$sender', senders_office = '$senders_office', receiver = '$reciever', comment = '$message_content', Date_sent = '$Date_sent',notify = '$notify' WHERE id = '$id'";
  $results = mysqli_query($db, $query);
   
  if ($reply_refresh == 'Index') {
    ?>
    <script>
    alert('Message has been sent.');
        window.location.href='index.php?success';
        </script>
    <?php
      exit(); 
   }else if ($reply_refresh == 'view_all_users') {
    ?>
    <script>
    alert('Message has been sent.');
        window.location.href='view_all_users.php?success';
        </script>
    <?php
      exit(); 
   } else {

   }  
 
}

  

?>


  
 


