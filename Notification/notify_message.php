<?php include('../Phplogin/functions.php') ?>
<?php
 
include('connect.php');
 
if(isset($_POST['view'])){
 
// $con = mysqli_connect("localhost", "root", "", "notif");
 

 
$query = "SELECT * FROM message_box ORDER BY id";
$result = mysqli_query($con, $query);
$output = '';
 
if(mysqli_num_rows($result) > 0)
{
 
while($row = mysqli_fetch_array($result))
 
{
 
  $output .= '

  <li >
  <a href="">
  <strong style="font-size:15px;font-style:bold;">'.$row["receiver"].'</strong><br />
  <small><em>'.$row["sender"].'</em></small>
  </a>
  </li>
 
  ';
}
}
 
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
 
$status_query = "SELECT * FROM message_box WHERE notify=0 AND receiver='".$_SESSION["Fullname"]."' AND sender!='".$_SESSION["Fullname"]."'";
$result_query = mysqli_query($con, $status_query);
$count_billing_office = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count_billing_office
);
 
echo json_encode($data);
}
?>