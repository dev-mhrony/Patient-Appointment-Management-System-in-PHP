<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login'])) 
  {
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $sql ="SELECT ID,Email FROM tbldoctor WHERE Email=:email and Password=:password";
    $query=$dbh->prepare($sql);
    $query->bindParam(':email',$email,PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query-> execute();
    $results=$query->fetchAll(PDO::FETCH_OBJ);
    if($query->rowCount() > 0)
{
foreach ($results as $result) {
$_SESSION['damsid']=$result->ID;
$_SESSION['damsemailid']=$result->Email;

}
$_SESSION['login']=$_POST['email'];
echo "<script type='text/javascript'> document.location ='dashboard.php'; </script>";
} else{
echo "<script>alert('Invalid Details');</script>";
}
}

?>
<!doctype html>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>DAMS - Login Page</title>
	

	<link rel="stylesheet" href="libs/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="libs/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="libs/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/core.css">
	<link rel="stylesheet" href="assets/css/misc-pages.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
	<div id="back-to-home">
		<a href="../index.php" class="btn btn-outline btn-default"><i class="fa fa-home animated zoomIn"></i></a>
	</div>
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			
				<span style="color: white"><i class="fa fa-gg"></i></span>
				<span style="color: white">DAMS</span>
			
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Sign In With Your DAMS Account</h4>
	<form method="post" name="login">
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter Registered Email ID" required="true" name="email">
		</div>

		<div class="form-group">
			<input type="password" class="form-control" placeholder="Password" name="password" required="true">
		</div>

		
		<input type="submit" class="btn btn-primary" name="login" value="Sign IN">
	</form>
	<hr />
	<a href="signup.php">Signup/Registration</a>
</div><!-- #login-form -->

<div class="simple-page-footer">
	<p><a href="forgot-password.php">FORGOT YOUR PASSWORD ?</a></p>
	
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
</html>