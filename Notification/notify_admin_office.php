<?php
 
include('connect.php');
 
if(isset($_POST['view'])){
 
// $con = mysqli_connect("localhost", "root", "", "notif");
 
if($_POST["view"] != '')
 
{
   $update_query = "UPDATE tbl_documents SET msg_stat = 1 WHERE msg_stat=0";
   mysqli_query($con, $update_query);
}
 
$query = "SELECT * FROM tbl_documents ORDER BY id DESC LIMIT 5";
$result = mysqli_query($con, $query);
$output = '';
 
if(mysqli_num_rows($result) > 0)
{
 
while($row = mysqli_fetch_array($result))
 
{
 
  $output .= '

  <li >
  <a href="">
  <strong style="font-size:15px;font-style:bold;">'.$row["Froms"].'</strong><br />
  <small><em>'.$row["Document_type"].'</em></small>
  </a>
  </li>
 
  ';
}
}
 
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
 
$status_query = "SELECT * FROM tbl_documents WHERE msg_stat=0 AND Status='Billing Office'";
$result_query = mysqli_query($con, $status_query);
$count_billing_office = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count_billing_office
);
 
echo json_encode($data);
}
?>