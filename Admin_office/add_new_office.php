<?php

$db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
if (isset($_POST['btn-add'])) {
    $Offices = $_POST['Offices'];
   

     $sql_offices = "SELECT * FROM tbl_offices WHERE Offices='$Offices'";
     $res_offices = mysqli_query($db, $sql_offices);
      if (mysqli_num_rows($res_offices) > 0){

     ?>
         <script>
         alert('<?php echo $_POST["Offices"]; ?> is already exist.');
         window.location.href='index.php?success';
         </script>
         <?php
         exit();
    }
     else {

   
  
  $query="INSERT INTO tbl_offices(Offices) VALUES('$Offices')";
   $results = mysqli_query($db, $query);

?>
    <script>
    alert('<?php echo $_POST["Offices"]; ?> is now added.');
        window.location.href='index.php?success';
           
        </script>
    <?php
      exit();
 
 }

 
}
?>