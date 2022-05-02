
<html>
<head>
	<title> Fuego | Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Login Here</h2>
			<form action="validation.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required placeholder="username"> 
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required placeholder="password"> 
				</div>
				<div>
                	<label class="pull-left"> <a href="page-reset.php">Forgotten Password?</a> </label>
                </div>
				<br />
				<div class="checkbox">
                    <label>
                    	<input type="checkbox"> Remember Me
					</label>

                </div>
				<br />
				<button type="submit" class="btn btn-primary">Login</button>
				<br /><br />
				<div class="pull-left">
                    <p>Don't have account ? <a href="page-signup.php"> Sign Up Here</a></p>
                </div>
			</form>
		</div>	
		</div>
		</div>
	</div>
</body>
</html>