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



 // new file size in KB
  $new_size = $file_size/1200;  
  // new file size in KB
  
  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case
  
  $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 $query="INSERT INTO tbl_documents(file,Document_type,Document_title,Content,Froms,Status,Document_create,Date_created,msg_stat,Date_sent,Document_sent_status,size) VALUES('$final_file','$Document_type','$Document_title','$Content','$Froms','$Status','$Document_create','$Date_created','$msg_stat','$Date_sent','$Document_sent_status','$new_size')";
   $results = mysqli_query($db, $query);

   $query="INSERT INTO history(Document_type,Document_title,Date_sent,Froms,Status,Document_sent_status) VALUES('$Document_type','$Document_title','$Date_sent','$Froms','$Status','$Document_sent_status')";
   $results = mysqli_query($db, $query);

  ?>
    <script>
    alert('Document has been saved.');
        window.location.href='../Mayor_office.php?success';
        </script>
    <?php
      exit();
  
 }
 else
  {
    ?>
    <script>
    alert('Invalid file size.');
        window.location.href='../Mayor_office.php?fail';
        </script>
    <?php
    exit();
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

 // new file size in KB
  $new_size = $file_size/1200;  
  // new file size in KB
  
  // make file name in lower case
  $new_file_name = strtolower($file);
  // make file name in lower case
  
  $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $query="INSERT INTO tbl_documents(file,Document_type,Document_title,Content,Froms,Status,Document_create,Date_created,msg_stat,Date_sent,Document_sent_status,size,notify_user) VALUES('$final_file','$Document_type','$Document_title','$Content','$Froms','$document_forward','$Document_create','$Date_created','$msg_stat','$Date_created','$Document_sent_status_dayun','$new_size','$notify_user')";
   $results = mysqli_query($db, $query);

  $query="INSERT INTO history_log(Date_Time,Office,Personnel,Action) VALUES('$Date_created','$office_para_history','$personnel_para_history','$Document_sent_status_dayun')";
   $results = mysqli_query($db, $query);



  ?>
    <script>
    alert('Document has been sent.');
        window.location.href='../Mayor_office.php?success';
        </script>
    <?php
      exit();
  
 }
 else
  {
    ?>
    <script>
    alert('Invalid file size.');
        window.location.href='../Mayor_office.php?fail';
        </script>
    <?php
    exit();
  }

 
}
?>