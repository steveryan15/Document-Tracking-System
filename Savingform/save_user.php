<?php
$con=mysql_connect("127.0.0.1","root","");
mysql_select_db("villa_dblgu",$con);
?>

<?php
if(isset($_POST["save"]))
{
mysql_query("Insert into users values('".$_POST["txtid"]."',
			'".$_POST["txtcyname"]."',
				'".$_POST["txtctname"]."',
				     '".$_POST["txtfrom"]."',
				        '".$_POST["txtstatus"]."',
				              '".$_POST["txtdate"]."',

						      '".$_POST["stat"]."');",$con);

}
header("location:Phplogin/refresh.php")


?>