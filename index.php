<!DOCTYPE html>
<html>
<head>
	<title></title>

	<title> Login Page </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css"/>
	
</head>

<body>
	<div class="container">
	<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<form name="loginForm" class="form-horizontal" >
				<h1 id="header" class="loginForm bg-success"  ><strong>MY PROJECT</strong></h1>
				<label class="loginForm text-center "> Email </label>
				<input type="text" id="email" class="loginForm form-control" /></br></br>
				<label class="loginForm text-center " > Password</label>
				<input type="password" id="password" class="loginForm form-control"/> </br>
				<input type="submit" class="loginForm btn btn-primary btn-lg btn-block " value="SUBMIT" /> </br></br>
				<label class="loginForm">Don't have account? </label> <a href="signup.php" class="loginForm">Signup!</a> </br>
				<div>
				<a class="loginForm">Forget password?</a>
				</div>
			</form>
		</div>
		<div class="col-md-4"></div>
</body>
</html>