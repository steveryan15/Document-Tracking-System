<?php 
  $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');

 if(isset($_POST['forward']))
{        
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $id = $_POST['id'];

 $folder="../DOCUMENT_FILE_CONTENT/";
  // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
  if(move_uploaded_file($file_loc,$folder.$final_file))
 {
 
      $query = "UPDATE  tbl_documents SET file = '$final_file' WHERE id='$id'";
        $results = mysqli_query($db, $query);
         
     
       
  
 
} 
}
   if (isset($_POST['forward'])) {
   $id = $_POST['id'];
   $doc_type = $_POST['doc_type'];
   $doc_title = $_POST['doc_title'];
   $doc_content = $_POST['doc_content'];

   $doc_create = $_POST['doc_create'];

   $query = "UPDATE  tbl_documents SET Document_type ='$doc_type', Document_title ='$doc_title', Content ='$doc_content', Document_create ='$doc_create' WHERE id = '$id' ";
   $results = mysqli_query($db, $query); 
     
   }
  

?>


  
 



     