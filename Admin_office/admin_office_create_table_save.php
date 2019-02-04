<?php 

  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  
   if (isset($_POST['forward'])) {
   $id = $_POST['id'];
   $doc_type = $_POST['doc_type'];
   $doc_content = $_POST['doc_content'];
   $doc_from = $_POST['doc_from'];
   $doc_status = $_POST['document_forward'];
   $Date_sent = $_POST['Date_sent'];
   $doc_msg = $_POST['doc_msg'];
      $doc_title = $_POST['doc_title'];
   $admin_msg = $_POST['admin_msg'];
   $document_sent_status = $_POST['document_sent_status'];
     
   $query = "UPDATE  tbl_documents SET Document_type ='$doc_type', Content ='$doc_content', Froms ='$doc_from', Status ='$doc_status', Date_sent ='$Date_sent', Document_sent_status='$document_sent_status', msg_stat ='$doc_msg', admin_notify ='$admin_msg' WHERE id = '$id' ";
   $results = mysqli_query($db, $query);


   header('location:admin_create_document_table.php');
   exit();

  
    
   
   }

   
  

?>


  
 



     