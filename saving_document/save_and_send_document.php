<!DOCTYPE html>
<html>
<head>
 <title>villianueva/doc.gov</title>
  <link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style_2.css">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css"> 
</head>
<body>


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

 

  ?>
    <script>
    alert('Document has been saved.');
        window.location.href='../Home.php?success';
        </script>
    <?php
      exit();
  
 }
 else
  {
    ?>
    <script>
    alert('Invalid file size.');
        window.location.href='../Home.php?fail';
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
  
  // make file name in lower caseHome
  $new_file_name = strtolower($file);
  // make file name in lower case
  
  $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
  $query="INSERT INTO tbl_documents(file,Document_type,Document_title,Content,Froms,Status,Document_create,Date_created,msg_stat,Date_sent,Document_sent_status,size,personnel_para_history_log,office_para_history_log) VALUES('$final_file','$Document_type','$Document_title','$Content','$Froms','$document_forward','$Document_create','$Date_created','$msg_stat','$Date_created','$Document_sent_status_dayun','$new_size','$personnel_para_history','$office_para_history')";
   $results = mysqli_query($db, $query);

 


  ?>
    <script>
    alert('Document has been sent.');
   
        window.location.href='../Home.php?success';
        </script>
    <?php
      exit();
  
 }
 else
  {
    ?>
    <script>
    alert('Invalid file size.');
        window.location.href='../Home.php?fail';
        </script>
    <?php
    exit();
  }

 
}
?>

<!-- MODAL UPDATE SA USER INFORMATION-->

        <div class="modal fade" id="modal-register_alert" tabindex="-1" role="dialog" aria-labelledby="modal-register-label" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content" style="width:460px;margin-left:130px;margin-top:20px;">
              
              <div class="modal-header">
            
              
          <div class="modal-body" style="background:  #ffffff;height:400px;">
           
           
          </div>
            </div>
          </div>
        </div>

</body>
</html>


<!-- END!!!!! MODAL Notification sa mga document-->


     <!-- Animate -->
        <script src="../animate/js/jquery-1.11.1.min.js"></script>
        <script src="../animate/js/scripts.js"></script>
         <script src="../animate/js/wow.js"></script>
         <script src="../animate/js/custom.js"></script> 
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery.easing.min.js"></script>
 
    <script src="../js/custom.js"></script>
    <script src="../contactform/contactform.js"></script>
  <!-- Modal  -->
    <script src="../assets/js/jquery-1.11.1.min.js"></script>
        <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/jquery.backstretch.min.js"></script>
        <script src="../assets/js/scripts.js"></script>
