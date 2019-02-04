<?php

$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
if (isset($_POST['btn-add'])) {
    $Document_type = $_POST['Document_type'];
   
   $sql_Document_type = "SELECT * FROM offices_document_type WHERE Document_type='$Document_type'";
     $res_Document_type = mysqli_query($db, $sql_Document_type);
      if (mysqli_num_rows($res_Document_type) > 0){

     ?>
         <script>
         alert('<?php echo $_POST["Document_type"]; ?> is already exist.');
         window.location.href='index.php?success';
         </script>
         <?php
    }
     else {

  $query="INSERT INTO offices_document_type(Document_type) VALUES('$Document_type')";
   $results = mysqli_query($db, $query);

?>
    <script>
    alert('<?php echo $_POST["Document_type"]; ?> is now added.');
        window.location.href='index.php?success';
        $('#ModalSaPagAddOfficesDetails').modal('show');
        </script>
    <?php
      exit();
 
   }

 
}
?>