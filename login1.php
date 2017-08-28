<html>
<head>
<title>
LOGIN
</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
.warning {
    background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;
    font-size: 20px;
}
</style>
</head>
<body>
<?php
$value=$_GET['uid'];
?>
<header>
<nav>
<ul>
<li><a href="signup1.php">New User? SIGN UP</a></li>
 <form name="register" action="login_check.php" method="Post">
	  
	    <input name="uid" type="text" placeholder="UID" value = "<?php echo($value) ?>" required>
        
        
		 <input name="pass" type="password" placeholder="Password" required>
		 
		 <button type="submit">Submit</button>
</ul>
</nav>
</header>
</form>
<div class="warning">
  <p><strong>WRONG CREDENTIALS! </strong>Please login again !! </p>
</div>


</body>
</html>

