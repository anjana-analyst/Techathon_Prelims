<?php 

include("includes/connection.php");

$output = "";

if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$uname = $_POST['uname'];
	$gender = $_POST['gender'];
	$role = $_POST['role'];
	$pass = $_POST['pass'];
	$email= $_POST['email'];
	$c_pass = $_POST['c_pass'];

	$error = array();

	if (empty($fname)) {
		$error['error'] = "Firstname is Empty";
	}else if(empty($lname)){
		$error['error'] = "Lastname is empty";
	}else if(empty($uname)){
		$error['error'] = "username is empty";
	}else if(empty($gender)){
		$error['error'] = "Select Gender";
	}else if(empty($role)){
		$error['error'] = "Select role";
	}else if(empty($pass)){
		$error['error'] = "Enter Password";
	}else if(empty($c_pass)){
		$error['error'] = "Confirm Password";
	}else if($pass != $c_pass){
		$error['error'] = "Both password do not match";
	}
	else if(empty($email)){
		$error['error'] = "Enter Email ID";
	}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
		
		$query = "INSERT INTO users(firstname,lastname,username,gender,role,password,email) VALUES('$fname','$lname','$uname','$gender','$role','$pass','$email')";
		$res = mysqli_query($connect,$query);

		if ($res) {
			$output .= "You have successfully registered";
			header("Location:index.php");
		}else{
			$output .= "Failed to register";
		}
	}
}



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multilogin System</title>
</head>
<style>
.divider:after,
.divider:before {
  content: "";
  flex: 1;
  height: 1px;
  background: #eee;
}
</style>
<body>

	<?php include("includes/header.php"); ?>
	<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-5 col-lg-5 col-xl-4">
        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-6 col-lg-5 col-xl-5 offset-xl-1">
					<form method="post">
						<div class="form-outline-mb4">
						<div class="text-center"><?php echo $output; ?></div>
						<h3 class="text-center">Register for the Portal</h3>
						<input type="text" name="fname" class="form-control my-1" placeholder="Enter Firstname" autocomplete="off">
						<input type="text" name="lname" class="form-control my-2" placeholder="Enter Lastname" autocomplete="off">
						<input type="text" name="uname" class="form-control my-2" placeholder="Enter Username" autocomplete="off">
						<input type="text" name="email" class="form-control my-2" placeholder="Enter Email ID" autocomplete="off">

                      
						<select class="form-control my-2" name="gender">
							<option value="">Select Gender</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
                       
						<select name="role" class="form-control my-2">
							<option value="">Selete Role</option>
							<option value="Student">Student</option>
							<option value="Teacher">Teacher</option>
						</select>

				
						<input type="password" name="pass" class="form-control my-2" placeholder="Enter Password">

						
						<input type="password" name="c_pass" class="form-control my-2" placeholder="Enter Confirm Password">

						<input type="submit" name="register" class="btn btn-success" value="Register">
					</form>
				</div>
</div>
	<div class="" style="margin-top: 30px;"></div>

</body>
</html>