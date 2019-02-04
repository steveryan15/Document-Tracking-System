<?php
$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $doc_type = "";
  $id = "";
  $doc_title= "";
  $doc_content = "";
  $doc_file = "";
  if(isset($_POST['btn-update_create_document']))
{        
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $id = $_POST['id_hidden'];
  $doc_type  = $_POST['doc_type'];
  $doc_title = $_POST['doc_title'];
  $doc_content = $_POST['doc_content'];

 $folder="../DOCUMENT_FILE_CONTENT/";
  // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
  if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 
      $query = "UPDATE  tbl_documents SET file = '$final_file', Document_type = '$doc_type', Document_title = '$doc_title', Content = '$doc_content' WHERE id='$id'";
        $results = mysqli_query($db, $query);
         header('location:admin_create_document_table.php');
        exit();

     
       
  
 
}

if(isset($_POST['btn-update_create_document']))
{  

 
 $id = $_POST['id_hidden'];
 $doc_type  = $_POST['doc_type'];
  $doc_title = $_POST['doc_title'];
  $doc_content = $_POST['doc_content'];
   $file = $_POST['file'];


      $query = "UPDATE  tbl_documents SET Document_type = '$doc_type', Document_title = '$doc_title', Content = '$doc_content' WHERE id='$id'";
        $results = mysqli_query($db, $query);
         header('location:admin_create_document_table.php');
        exit();

    
}


}
 if(isset($_POST['btn-delete_document']))
{        

 $id = $_POST['delete_id_hidden'];

           $query="DELETE FROM tbl_documents WHERE id = '$id' AND Status = 'Draft'";
         $results = mysqli_query($db, $query);



        if ($refresh = 'mayor_refresh') {
          header('location:admin_create_document_table.php');
       }
        
       
       
 }       
       

?>
