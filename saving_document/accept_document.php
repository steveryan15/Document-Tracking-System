<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

   if (isset($_POST['accept'])) {
    $id = $_POST['id'];
     $doc_from = $_POST['doc_from'];
      $doc_title = $_POST['doc_title'];
      $doc_type = $_POST['doc_type'];
      $date_send = $_POST['date_send'];
      $Document_create = $_POST['Document_create'];
      $doc_sent_status = $_POST['doc_sent_status'];

    $Document_sent_status = $_POST['accept_document'];
    $doc_status = $_POST['doc_status'];
   
    $Date_time= $_POST['Date_time'];
    $personnel_para_history = $_POST['personnel_para_history'];
    $office_para_history = $_POST['office_para_history'];
     $sender_office = $_POST['sender_office'];
     $sender_personnel = $_POST['sender_personnel'];
      $date_sent = $_POST['date_sent'];
    
  

      // para ma receive saimong office

    $query = "UPDATE  tbl_documents SET Document_sent_status='$Document_sent_status', notify_user = 0 WHERE id='$id'";
       $results = mysqli_query($db, $query);

         // para ma received sa history log saimong office


   $query="INSERT INTO history_log_default(id,Date_Time,Office,Personnel,Action) VALUES('$id','$Date_time','$office_para_history','$personnel_para_history','$Document_sent_status')";
   $results = mysqli_query($db, $query);

     // para ma save sa history sa sender ani na document


      $query="INSERT INTO history_log_default(id,Date_Time,Office,Personnel,Action) VALUES('$id','$date_send','$sender_office','$sender_personnel','$doc_sent_status')";
   $results = mysqli_query($db, $query);



  // para ma butang na receive saimong tanan history sa office nimo

   $query="INSERT INTO all_documents_history_log_default(id,Document_type,Document_title,Status,Date_Time,office,personnel) VALUES('$id','$doc_type','$doc_title','$Document_sent_status','$Date_time','$office_para_history','$personnel_para_history')";
   $results = mysqli_query($db, $query);


// para ma butang na forwarded sa nag send saimong tanan history sa office niya
   
    $query="INSERT INTO all_documents_history_log_default(id,Document_type,Document_title,Status,Date_Time,office,personnel) VALUES('$id','$doc_type','$doc_title','$doc_sent_status','$date_send','$sender_office','$sender_personnel')";
   $results = mysqli_query($db, $query);


       ?>
    <script>
    alert('Document has been accepted.');
        window.location.href='../Home.php?success';
        </script>
    <?php
    exit();

    


}


if (isset($_POST['accept_and_closed'])) {
    $id = $_POST['id'];
     $doc_title = $_POST['doc_title'];
      $doc_type = $_POST['doc_type'];
    $accept_and_closed_document = $_POST['accept_and_closed_document'];
    $doc_status = $_POST['doc_status'];
   
       $Date_time= $_POST['Date_time'];
    $personnel_para_history = $_POST['personnel_para_history'];
    $office_para_history = $_POST['office_para_history'];
    $sender_office = $_POST['sender_office'];
     $sender_personnel = $_POST['sender_personnel'];
      $date_sent = $_POST['date_sent'];
          $doc_sent_status = $_POST['doc_sent_status'];

$query = "SELECT * FROM tbl_documents WHERE id = '$id'";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$prob_qty = $row['Document_sent_status'];
if ($prob_qty == 'Declined') {
    
        if ($accept_refresh == 'Mayor Office') {
            ?>
              <script>
              alert('Document is declined.');
                  window.location.href='../Home.php?success';
                  </script>
              <?php
                exit();
        }

}else {

    

    $query = "UPDATE  tbl_documents SET Document_sent_status='$accept_and_closed_document', notify_user = 0  WHERE id='$id'";
       $results = mysqli_query($db, $query);

         // para ma received sa history log saimong office


   $query="INSERT INTO history_log_default(id,Date_Time,Office,Personnel,Action) VALUES('$id','$Date_time','$office_para_history','$personnel_para_history','$accept_and_closed_document')";
   $results = mysqli_query($db, $query);

     // para ma save sa history sa sender ani na document


      $query="INSERT INTO history_log_default(id,Date_Time,Office,Personnel,Action) VALUES('$id','$Date_time','$sender_office','$sender_personnel','$doc_sent_status')";
   $results = mysqli_query($db, $query);



  // para ma butang na receive saimong tanan history sa office nimo

   $query="INSERT INTO all_documents_history_log_default(id,Document_type,Document_title,Status,Date_Time,office,personnel) VALUES('$id','$doc_type','$doc_title','$accept_and_closed_document','$Date_time','$office_para_history','$personnel_para_history')";
   $results = mysqli_query($db, $query);


// para ma butang na forwarded sa nag send saimong tanan history sa office niya
   
    $query="INSERT INTO all_documents_history_log_default(id,Document_type,Document_title,Status,Date_Time,office,personnel) VALUES('$id','$doc_type','$doc_title','$doc_sent_status','$date_sent','$sender_office','$sender_personnel')";
   $results = mysqli_query($db, $query);


       ?>
              <script>
              alert('Document transaction is now closed.');
                  window.location.href='../Home.php?success';
                  </script>
              <?php
                exit();

     

   }
 
}





if (isset($_POST['closed'])) {
    $id = $_POST['id'];
    $closed_document = $_POST['closed_document'];
    $doc_status = $_POST['doc_status'];
      $accept_refresh= $_POST['accept_refresh'];
       $Date_time= $_POST['Date_time'];
    $personnel_para_history = $_POST['personnel_para_history'];
    $office_para_history = $_POST['office_para_history'];

    

    $query = "UPDATE  tbl_documents SET Document_sent_status='$closed_document' WHERE id='$id'";
       $results = mysqli_query($db, $query);
       
         $query="INSERT INTO history_log_default(id,Date_Time,Office,Personnel,Action) VALUES('$id','$Date_time','$office_para_history','$personnel_para_history','$closed_document')";
   $results = mysqli_query($db, $query);




      if ($accept_refresh == 'Billing Office') {
        header('location:../Billing_office.php');

      }else if ($accept_refresh == 'Mayor Office') {
        header('location:../Mayor_office.php');

      }else {

      }


 
}




















  
   if (isset($_POST['rejected'])) {
    $id = $_POST['id'];
    $reply_date_sent = $_POST['reply_date_sent'];
    $sender = $_POST['sender'];
    $senders_office = $_POST['senders_office'];
    $doc_type = $_POST['doc_type'];
       $doc_title = $_POST['doc_title'];
 
   $decline_message = $_POST['decline_message'];    
   



    $name_sanag_send = $_POST['name_sanag_send'];
    $office_sanag_send = $_POST['office_sanag_send'];
    $sender_sent_document = $_POST['sender_sent_document'];
    $sender_document_status = $_POST['sender_document_status']; 
    $sender_decline = $_POST['sender_decline'];
    $msg_stat = $_POST['msg_stat'];
    $receiver = $_POST['receiver'];

    $Document_sent_status = $_POST['pending_document'];

    $query = "SELECT * FROM tbl_documents WHERE id = '$id'";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$prob_qty = $row['Document_sent_status'];
if ($prob_qty == 'Declined') {
    
        
            ?>
              <script>
              alert('Document is already declined.');
                  window.location.href='../Home.php?fail';
                  </script>
              <?php
                exit();
        

}else {
  

    


    $query = "UPDATE  tbl_documents SET Froms = '$sender_decline', Status = '$receiver', personnel_para_history_log = '$sender', office_para_history_log = '$senders_office', Document_sent_status='$Document_sent_status', msg_stat = '$msg_stat', admin_notify= 0, decline_message = '$decline_message' WHERE id='$id'";

       $results = mysqli_query($db, $query);

         // para ma received sa history log saimong office

   $query="INSERT INTO history_log_default(id,Date_Time,Office,Personnel,Action) VALUES('$id','$reply_date_sent','$senders_office','$sender','$Document_sent_status')";
   $results = mysqli_query($db, $query);

// para ma save sa history sa sender ani na document

   $query="INSERT INTO history_log_default(id,Date_Time,Office,Personnel,Action) VALUES('$id','$sender_sent_document','$office_sanag_send','$name_sanag_send','$sender_document_status')";
   $results = mysqli_query($db, $query);

   // para ma butang na receive saimong tanan history sa office nimo

   $query="INSERT INTO all_documents_history_log_default(id,Document_type,Document_title,Status,Date_Time,office,personnel) VALUES('$id','$doc_type','$doc_title','$Document_sent_status','$reply_date_sent','$senders_office','$sender')";
   $results = mysqli_query($db, $query);

   // para ma butang na forwarded sa nag send saimong tanan history sa office niya
   
    $query="INSERT INTO all_documents_history_log_default(id,Document_type,Document_title,Status,Date_Time,office,personnel) VALUES('$id','$doc_type','$doc_title','$sender_document_status','$sender_sent_document','$office_sanag_send','$name_sanag_send')";
   $results = mysqli_query($db, $query);


   $query="INSERT INTO message_box(sender,senders_office,receiver,comment,Date_sent,notify) VALUES('$sender','$senders_office','$name_sanag_send','$decline_message','$reply_date_sent',0)";
       $results = mysqli_query($db, $query);
   

         ?>
              <script>
              alert('Document has been declined.');
                  window.location.href='../Home.php?success';
                  </script>
              <?php
                exit();

     

 
       


    }
 
}

  

?>


  
 


