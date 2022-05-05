
<html>
<head>
	<title> Fuego | Delete</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Delete User</h2>
			<form action="delete.php" method="POST">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required placeholder="username"> 
				</div>
				
				<br />
				<button type="submit" class="btn btn-primary">Delete</button>
			</form>
		</div>	
		</div>
		</div>
	</div>
</body>
</html>