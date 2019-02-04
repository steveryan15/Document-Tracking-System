<?php  
 //view_message.php  
 $connect = mysqli_connect("localhost", "root", "", "villa_dblgu");  
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM message_box WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>