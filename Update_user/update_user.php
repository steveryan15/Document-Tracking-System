<?php
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("dbusers",$con);
?>
<?php
mysql_query("update tbl_user set username='".$_POST["txtlname"]."',
                position='".$_POST["txtfname"]."',
                  email='".$_POST["txtemail"]."',
               office='".$_POST["txtmname"]."'
               
                where password='".$_POST["txtid"]."';",$con);
header("location:../index.php")
?>

