<?php
include 'conn.php';

if($conn)
{
  echo "connected succesfully";
}
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$name =  $_POST['name'];
$email = $_POST['email'];
$password =  $_POST['pass'];
$cpassword = $_POST['cpass'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO user(username , password , email,usertype)  VALUES ('$name', '$password','$email','1')";
         
		if ($conn->query($sql) === TRUE) {
			echo "Record created successfully";
		  } else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		  }
} 
         
        // Close connection
        mysqli_close($conn);
        ?>




<!doctype html>
<html lang="en">
  <head>
  	<title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style2.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(img/service-5.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">SIGN UP</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?<a href="login.php"><br>Login now!</a></h3>
                 
		      	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" name="name" class="form-control" placeholder="Username" required>
		      		</div>
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div>
                    
	            <div class="form-group">
	              <input id="password-field" name="pass" type="password" class="form-control" placeholder="Password" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
	            </div>
                <div class="form-group">
                    <input id="password-field" name="cpass" type="password" class="form-control" placeholder="Confirm Password" required>
                    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                  </div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	         
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

