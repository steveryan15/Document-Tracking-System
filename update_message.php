<?php include('Phplogin/functions.php') ?>
<?php 
 $db = mysqli_connect('localhost', 'root', '', 'villa_dblgu');
$update_nibay = $_SESSION["Fullname"];

if ($update_nibay == $update_nibay) {
    $query = "UPDATE  message_box SET notify = 1 WHERE notify=0 AND receiver = '$update_nibay'";
    $results = mysqli_query($db, $query); 
    header('location:Home.php');
}

?>