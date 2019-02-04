<?php 

  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

  
   if (isset($_POST['btn-sent_create_document'])) {
   $id = $_POST['id'];
   $doc_from = $_POST['doc_from'];
   $doc_status = $_POST['sent_document'];
   $doc_sent_status = $_POST['doc_sent_status'];
   $doc_date_sent = $_POST['doc_date_sent'];
   $doc_msg_stat = $_POST['doc_msg_stat'];
      $doc_admin_notify = $_POST['doc_admin_notify'];


      if ($doc_status == '') {
        ?>
    <script>
    alert('Please select a reciever.');
        window.location.href='admin_create_document_table.php?fail';
        </script>
    <?php
     
  }else {

   $query = "UPDATE  tbl_documents SET Froms ='$doc_from', Status ='$doc_status',msg_stat ='$doc_msg_stat',Date_sent ='$doc_date_sent', Document_sent_status ='$doc_sent_status',Admin_notify ='$doc_admin_notify' WHERE id = '$id' ";
   $results = mysqli_query($db, $query); 

   ?>
    <script>
    alert('Document has been forwarded.');
        window.location.href='admin_create_document_table.php?success';
        </script>
    <?php
     
   }
  }

?>


  
 



     