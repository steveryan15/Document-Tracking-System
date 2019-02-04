<?php
$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $doc_type = "";
  $id = "";
  $doc_title= "";
  $doc_content = "";
  $doc_file = "";


if(isset($_POST['btn-sent_create_document']))
{        

 $id = $_POST['id_hidden'];
  $msg_stat = $_POST['msg_stat'];
 $doc_type  = $_POST['doc_type'];

  $doc_content = $_POST['doc_content'];
  $sent_document = $_POST['document_sent'];
  $from = $_POST['doc_from'];
   $Document_sent_status = $_POST['Document_sent_status'];
    $Date_send = $_POST['Date_send'];
   
    $sender_office = $_POST['sender_office'];
    $sender_name = $_POST['sender_name'];
   
  
      $query = "UPDATE  tbl_documents SET Document_type = '$doc_type', Content = '$doc_content', Froms = '$from', Status = '$sent_document', msg_stat = '$msg_stat', Date_sent = '$Date_send', Document_sent_status = '$Document_sent_status', personnel_para_history_log = '$sender_name', office_para_history_log = '$sender_office', notify_user = 1 WHERE id='$id'";
        $results = mysqli_query($db, $query);
         

        $query="INSERT INTO history(id,Document_type,Document_title,Date_sent,Froms,Status,Document_sent_status) VALUES('$id','$doc_type','$doc_title','$Date_send','$from','$sent_document','$Document_sent_status')";
         $results = mysqli_query($db, $query);

           $query="DELETE FROM history WHERE id = '$id' AND Status = 'Draft'";
         $results = mysqli_query($db, $query);
         
          header('location:document_create_table.php');
        
       
       
 }       
       
   if(isset($_POST['btn-delete_document']))
{        

 $id = $_POST['delete_id_hidden'];

           $query="DELETE FROM tbl_documents WHERE id = '$id' AND Status = 'Draft'";
         $results = mysqli_query($db, $query);


           header('location:document_create_table.php');
        
       
       
 }       
       

?>
