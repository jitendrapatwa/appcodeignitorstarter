<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<?php echo $header; ?>
<form action="login/auth" method="post">
	<input type="text" name="name" placeholder="enter name">
	<input type="password" name="age" placeholder="enter age">
	<input type="submit" value="Take a look">
	<?php
	if(isset($error)){
		echo $error;
	}
	?>
</form>
</body>
</html>