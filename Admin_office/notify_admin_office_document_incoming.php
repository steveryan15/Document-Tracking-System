<?php include('../Phplogin/functions.php') ?>
<?php
 
include('connect.php');
 
if(isset($_POST['view'])){
 
// $con = mysqli_connect("localhost", "root", "", "notif");
 
if($_POST["view"] != '')
 
{
   $update_query = "UPDATE tbl_documents SET admin_notify = 1 WHERE admin_notify=0";
   mysqli_query($con, $update_query);

  $update_query = "UPDATE tbl_documents SET msg_stat = 1 WHERE msg_stat=0 AND Status = '".$_SESSION["Fullname"]."' (Admin Office)";
   mysqli_query($con, $update_query);
}
 
$query = "SELECT * FROM tbl_documents ORDER BY id DESC LIMIT 4";
$result = mysqli_query($con, $query);
$output = '';
 
if(mysqli_num_rows($result) > 0)
{
 
while($row = mysqli_fetch_array($result))
 
{
 
  $output .= '

    <h6 class="dropdown-header" style="color:black;">New Notification:</h6>
   <a class="dropdown-item" href="#" style="width:270px;">
  <strong style="font-size:13px;font-style:bold;">'.$row["Froms"].'</strong><br />
   <strong style="font-size:13px;font-style:bold;">'.$row["Status"].'</strong><br />

  <small><em> <strong>'.$row["Document_type"].' </strong></em></small><br>
      <small><em>'.$row["Document_sent_status"].'</em></small>
  <br>
 <small><em> <span class="small float-right text-muted">'.$row["Date_sent"].'</span> </em></small>
  </a>
 
 
  ';
}
}
 
else{
    $output .= '<li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
}
 
 
$status_query = "SELECT * FROM tbl_documents WHERE msg_stat=0 AND Status='".$_SESSION["Fullname"]."' AND Froms!='".$_SESSION["Fullname"]."'";
$result_query = mysqli_query($con, $status_query);
$count_billing_office = mysqli_num_rows($result_query);
 
$data = array(
   'notification' => $output,
   'unseen_notification'  => $count_billing_office
);
 
echo json_encode($data);
}
?>