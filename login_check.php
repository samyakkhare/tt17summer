<?php
function redirect_to($new_location,$value)
{
	header("Location: ".$new_location."?"."uid=".$value);
	exit;
}

$uid=$_POST['uid'];
$pswd=$_POST['pass'];
$conn = new mysqli("localhost","root","","tut17");
$query = "select * from login WHERE uid='$uid' and pass='$pswd'";
$query1 = "select * from login WHERE uid='$uid' and pass!='$pswd'";
$query2 = "select * from login WHERE uid!='$uid' and pass!='$pswd'";
$result = mysqli_query($conn,$query) or die(mysqli($conn));
$result1 = mysqli_query($conn,$query1) or die(mysqli($conn));
$result2 = mysqli_query($conn,$query2) or die(mysqli($conn));
$count = mysqli_num_rows($result);
$count1 = mysqli_num_rows($result1);
$count2 = mysqli_num_rows($result2);
if($count == 1)
{
	redirect_to("welcome.php","$uid");
}
else if($count1 == 1)
{
	redirect_to("login1.php","$uid");
} 
else
{
	redirect_to("login1.php");
}

?>
