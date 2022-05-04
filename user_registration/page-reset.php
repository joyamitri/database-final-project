
<html>
<head>
	<title> Company Project Management - Reset Password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Reset Password</h2>
			<form action="reset.php" method="POST">
				<div class="form-group">
					<label>Email</label>
					<br />
					<input type="email" name="email" class="form-control" required placeholder="email"> 
				</div>
				<div class="form-group">
					<label>New Password</label>
					<br />
					<input type="password" name="password" class="form-control" required placeholder="new password"> 
				</div>
				<br />
				<button type="submit" class="btn btn-primary btn-flat m-b-15">Submit</button>
				<br /><br />
                 <div class="pull-left">
                    <p>Back to <a href="../startup/index.html"> Home</a></p>
                </div>
			</form>
		</div>	
		</div>
		</div>
	</div>
</body>
</html>