<?php
$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
  $doc_type = "";
  $id = "";
  $doc_title= "";
  $doc_content = "";
  $doc_file = "";


if(isset($_POST['update_attachment']))
{        
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $id = $_POST['id_choose'];

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
?>
