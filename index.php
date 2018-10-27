<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
			<div class="container main-section">
				<div class="row">
					<div class="col-md-12 text-center user-login-header">
						
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-8 col-xs-12 col-md-offset-4 col-sm-offset-2 login-image-main text-center">
						<div class="row">
                            <strong><h1>Selamat Datang</h1></strong>
                                        <h3>Silahkan Login</h3>
							<div class="col-md-12 col-sm-12 col-xs-12 user-login-box">
							<form action="prosesLogin.php" method="POST">
								<div class="form-group">
							  		<input type="text" class="form-control" name="username" placeholder="User Name" id="">
								</div>
								<div class="form-group">
							  		<input type="password" name="password" class="form-control" placeholder="Password" id="">
								</div>
							
											
								<input type="submit" name="login" class="btn btn-primary btn-block" value="Login" /><br>

									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				
</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</html>