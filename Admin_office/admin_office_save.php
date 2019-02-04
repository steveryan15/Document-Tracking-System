<?php

$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $Content = "";
  $Document_title = "";
  

if(isset($_POST['btn-upload']))
{    
     
$file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];

 $folder="../DOCUMENT_FILE_CONTENT/";

 $Document_type = $_POST['Document_type'];
 $Content = $_POST['Content'];
  $Froms = $_POST['Froms'];
  $Status = $_POST['Status'];
  $Document_create = $_POST['Document_create'];
  $Date_created = $_POST['Date_created'];
  $msg_stat= $_POST['msg_stat'];
  $Document_sent_status= $_POST['Document_sent_status'];
  $Date_sent= $_POST['Date_sent'];
  $Document_title= $_POST['Document_title'];
   $office_para_history= $_POST['office_para_history'];
  $personnel_para_history= $_POST['personnel_para_history'];
    $refresh_page= $_POST['refresh_page'];



 // new file size in KB
  $new_size = $file_size/1200;  
  // new file size in KB
  
  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case
  
  $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 $query="INSERT INTO tbl_documents(file,Document_type,Document_title,Content,Froms,Status,Document_create,Date_created,msg_stat,Date_sent,Document_sent_status,size,personnel_para_history_log,office_para_history_log) VALUES('$final_file','$Document_type','$Document_title','$Content','$Froms','$Status','$Document_create','$Date_created','$msg_stat','$Date_sent','$Document_sent_status','$new_size','$personnel_para_history','$office_para_history')";
   $results = mysqli_query($db, $query);

   if ($refresh_page == "Index") {

  ?>
    <script>
    alert('Document has been saved.');
        window.location.href='index.php?success';
        </script>
    <?php
      exit();
   }else if ($refresh_page == "view_all_users") {
     ?>
    <script>
    alert('Document has been saved.');
        window.location.href='view_all_users.php?success';
        </script>
    <?php
      exit();
   
   }  else {

   } 
  
 }


 else
  {
  if ($refresh_page == "Index") {
  ?>
    <script>
    alert('Invalid file size.');
        window.location.href='index.php?fail';
        </script>
    <?php
      exit();
   }else if ($refresh_page == "view_all_users") {
     ?>
    <script>
   alert('Invalid file size.');
        window.location.href='view_all_users.php?fails';
        </script>
    <?php
      exit();
   
   }  else {
    
   } 
  }
}





if(isset($_POST['btn-send']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];

 $folder="../DOCUMENT_FILE_CONTENT/";
 $Document_type = $_POST['Document_type'];
 $Content = $_POST['Content'];
  $Froms = $_POST['Froms'];
  $Status = $_POST['Status'];
  $Document_create = $_POST['Document_create'];
  $Date_created = $_POST['Date_created'];
  $msg_stat= $_POST['msg_stat'];
  $Document_sent_status_dayun= $_POST['Document_sent_status_dayun'];
  $Date_sent= $_POST['Date_sent'];
  $Document_title= $_POST['Document_title'];
  $document_forward= $_POST['document_forward'];
  $office_para_history= $_POST['office_para_history'];
  $personnel_para_history= $_POST['personnel_para_history'];
  $notify_user= $_POST['notify_user'];
      $refresh_page= $_POST['refresh_page'];

 // new file size in KB
  $new_size = $file_size/1200;  
  // new file size in KB
  
  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case
  
  $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $query="INSERT INTO tbl_documents(file,Document_type,Document_title,Content,Froms,Status,Document_create,Date_created,msg_stat,Date_sent,Document_sent_status,size,personnel_para_history_log,office_para_history_log) VALUES('$final_file','$Document_type','$Document_title','$Content','$Froms','$document_forward','$Document_create','$Date_created','$msg_stat','$Date_created','$Document_sent_status_dayun','$new_size','$personnel_para_history','$office_para_history')";
   $results = mysqli_query($db, $query);

 


  if ($refresh_page == "Index") {

  ?>
    <script>
    alert('Document has been send.');
        window.location.href='index.php?success';
        </script>
    <?php
      exit();
   }else if ($refresh_page == "view_all_users") {
     ?>
    <script>
    alert('Document has been send.');
        window.location.href='view_all_users.php?success';
        </script>
    <?php
      exit();
   
   }  else {

   } 
  
 }


 else
  {
  if ($refresh_page == "Index") {
  ?>
    <script>
    alert('Invalid file size.');
        window.location.href='index.php?fail';
        </script>
    <?php
      exit();
   }else if ($refresh_page == "view_all_users") {
     ?>
    <script>
   alert('Invalid file size.');
        window.location.href='view_all_users.php?fails';
        </script>
    <?php
      exit();
   
   }  else {
    
   } 
  }

 
}
?>