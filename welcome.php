<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
.success {
	background-color: #ddffdd;
    border-left: 6px solid #4CAF50;
    font-size: 20px;
}
</style>
<body>
<header>
<nav>
<ul>
<li><a href="login.php">LOG OUT</a></li>
</ul>
</nav>
</header>
<div class="success">
<p><strong> Login Successful! </strong> <?php
$uid=$_GET['uid'];
echo(" Welcome, ".$uid);
?> </p>
</div>
</body>
</html>
