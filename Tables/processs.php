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
      $personnel_para_history = $_POST['personnel_para_history'];
       $office_para_history = $_POST['office_para_history'];

       $query = "SELECT * FROM tbl_documents WHERE id = '$id'";
       $results = mysqli_query($db, $query);
      $row = mysqli_fetch_assoc($results);
      $prob_qty = $row['Document_sent_status'];
     if ($prob_qty == 'Received and Closed') {
    
      
            
            ?>
              <script>
              alert('Document is already closed.');
                  window.location.href='document_recieve_table.php?fail';
                  </script>
              <?php
                exit();
      
       
      
}else {

   $query = "UPDATE  tbl_documents SET Document_type ='$doc_type', Content ='$doc_content', Froms ='$doc_from', Status ='$doc_status', msg_stat ='$doc_msg', Date_sent ='$Date_sent', Document_sent_status='$document_sent_status', personnel_para_history_log = '$personnel_para_history',office_para_history_log='$office_para_history', admin_notify ='$admin_msg' WHERE id = '$id' ";
   $results = mysqli_query($db, $query);

   

            ?>
              <script>
               alert('Document has been forwarded.');
                  window.location.href='document_recieve_table.php?success';
                  </script>
              <?php
                exit();
        

        }

    

   }


















   if (isset($_POST['closed'])) {
    $id = $_POST['id_close_transaction'];
    $closed_document = $_POST['closed_document'];
  

   $query = "SELECT * FROM tbl_documents WHERE id = '$id'";
$results = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($results);
$prob_qty = $row['Document_sent_status'];
if ($prob_qty == 'Received and Closed' OR $prob_qty == 'Closed') {
    
            ?>
              <script>
              alert('Document is already closed or declined.');
                  window.location.href='document_recieve_table.php?fail';
                  </script>
              <?php
                exit();
}else if ($prob_qty == 'Declined')
{
      ?>
              <script>
              alert('Warning! Document was declined.');
                  window.location.href='document_recieve_table.php?fail';
                  </script>
              <?php
                exit();  

}else {
  

  
    $query = "UPDATE  tbl_documents SET Document_sent_status='$closed_document' WHERE id='$id'";
       $results = mysqli_query($db, $query);


        
            ?>
              <script>
              alert('Document transaction is now closed.');
                  window.location.href='document_recieve_table.php?success';
                  </script>
              <?php
                exit();
       

       

    }
 
}
  

?>


  
 



     