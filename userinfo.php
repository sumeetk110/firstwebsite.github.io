<?php
$con=mysqli_connect('localhost','root');
if ($con) {
	echo "Connection successful";

} else {
	echo "No Connection";
}


mysqli_select_db($con,'userdata');

$user = $_post['user'];
$email= $_post['email'];
$mobile= $_post['mobile'];
$comments=$_post['comments'];
$query="insert into userinfo (user,Email,mobile,comments)
values ('$user','$email','$mobile','$Comments') ";
mysqli_query($con,$query);
header('location:index.php');	

?>
