<?php
function redirect_to($new_location)
{
	header("Location: ".$new_location);
	exit;
}

$uid=$_POST['uid'];
$pswd=$_POST['pass'];
$conn = new mysqli("localhost","root","","tut17");
if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}
$query="INSERT INTO login(uid,pass) VALUES('$uid','$pswd')";
if(mysqli_query($conn,$query))
{
	echo "Succesfully registered";
?>
<a href = "login.php">LOGIN</a>
<?php
}
else
{	

	redirect_to("signup1.php");
}
?>
