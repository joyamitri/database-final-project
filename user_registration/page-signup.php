<html>
<head>
	<title> Fuego | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="login-box">
		<div class="row">
		<div class="col-md-6 login-right">
			<h2> Sign Up Here</h2>
			<form action="connection.php" method="POST">
				<div class="form-group">
					<label>First Name*</label>
					<input type="text" name="first_name" class="form-control" required placeholder="first name"> 
				</div>
				<div class="form-group">
					<label>Last Name*</label>
					<input type="text" name="last_name" class="form-control" required placeholder="last name"> 
				</div>
				<div class="form-group">
					<label>Username*</label>
					<input type="text" name="username" class="form-control" required placeholder="username"> 
				</div>
				<div class="form-group">
					<label>Email*</label>
					<input type="email" name="email" class="form-control" required placeholder="email"> 
				</div>
				<div class="form-group">
					<label>Company*</label>
					<input type="text" name="company_name" class="form-control" required placeholder="company name"> 
				</div>
				<div class="form-group">
					<label>Location*</label>
					<input type="text" name="location" class="form-control" required placeholder="company location"> 
				</div>
				
				<div class="form-group">
					<label>Password*</label>
					<input type="password" name="password" class="form-control" required placeholder="password"> 
				</div>
				<br />
				<div class="checkbox">
                     <label>
						<input type="checkbox" required> Agree the terms and policy 
					</label>
                </div>
				<br />
				<button type="submit" class="btn btn-primary">Register</button>
				<br /><br />
				<div class="pull-left">
                    <p>Already have account ? <a href="page-login.php"> Login</a></p>
                </div>
			</form>
		</div>	
		</div>
	    </div>
	</div>
</body>
</html>