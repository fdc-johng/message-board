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
		<h2>Register</h1>
		<form action="verify.php" method="post" accept-charset="utf-8">
			<div class="form-group">
				<label for="inputEmail">Name <span>*</span></label>
				<input type="name" class="form-control" name="name" value="" required>	
			</div>
			<div class="form-group">
				<label for="inputEmail">Email <span>*</span></label>
				<input type="email" class="form-control" name="email" value="" required>	
			</div>
			<div class="form-group">
				<label for="inputEmail">Password <span>*</span></label>
				<input type="password" class="form-control" name="password" value="" required>	
			</div>
			<div class="form-group">
				<label for="inputPassword">Confirm Password <span>*</span></label>
				<input type="password" class="form-control" name="password" value="" placeholder="" required>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" name="submit" value="Register">
			</div>
		</form>
	</div>
</body>
</html>