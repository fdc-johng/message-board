<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="login">
		<h2>Login</h1>
		<form action="login.php" method="post" accept-charset="utf-8">
			<div class="form-group">
				<label for="inputEmail">Email</label>
				<input type="email" class="form-control" name="email" value="" required>	
			</div>
			<div class="form-group">
				<label for="inputPassword">Password</label>
				<input type="password" class="form-control" name="" value="" placeholder="" required>
			</div>
			<div class="login-group">
				<input type="submit" class="btn btn-primary" name="submit" value="Login">
				<a href="register.php" class="btn btn-success">Register</a>
			</div>
		</form>
	</div>
</body>
</html>