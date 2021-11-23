<?php 
session_start();
  include("includes/connection.php");
  include("includes/header.php");
   
   $output = "";

  if (isset($_POST['login'])) {
  	   
  	   $uname = $_POST['uname'];
  	   $role = $_POST['role'];
  	   $pass = $_POST['pass'];

  	   if (empty($uname)) {
  	   	
  	   }else if(empty($role)){

  	   }else if(empty($pass)){

  	   }else{

         $query = "SELECT * FROM users WHERE username='$uname' AND role='$role' AND password='$pass'";
         $res = mysqli_query($connect,$query);

         if (mysqli_num_rows($res) == 1) {

         	  if ($role == "Student") {

         	  	$_SESSION['student'] = $uname;
         	  	header("Location: student.php");
         	  	
         	  }else if($role == "Teacher"){
                
                $_SESSION['teacher'] = $uname;
                header("Location: teacher.php");


         	  }
         	 $output .= "you have logged-In";
         }else{
             $output .= "Failed to login";
         }

  	   }
  }
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Techathon Prelims</title>
</head>
<style>
.sidenav {
	height: 50%;
	overflow-x: hidden;
	padding-top: 0px;
	background-image: url('images/side.jpg');
}
.main {
	padding: 0px 10px;
}

</style>
<body>
	<div class="sidenav">
    <div class="text-white m-5">
        <h1>
            User Login<br />Authentication
        </h1>
        <p>
            Enter your login details<br /> to get into the portal.
        </p>
    </div>
</div>

<div class="main">
        <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <form  method="post" >
			    <div class="text-center"><?php echo $output;?></div>
				<br>
                    <div class="form-group">
                        <label>User Name</label> <input type="text"
                            class="form-control mt-1 mb-3"
                            placeholder="User Name" name="uname">
                    </div>
					<div class="form-group  mb-3">
					<label>Select Role</label>
						<select name="role" class="form-control my-2">
							<option value="">Selete Role</option>
							<option value="Student">Student</option>
							<option value="Teacher">Teacher</option>
						</select>
                    </div>
					<div class="form-group  mb-3">
                        <label>Password</label> <input type="password"
                            class="form-control mt-1"
                            placeholder="Password" name="pass">
                    </div>
                    <input type="submit"
                        class="btn text-white bg-dark  w-25 login"
                        value="Login" name="login">
					<a href="forgot.php">&nbsp;&nbsp;&nbsp;Forgot password?</a>
            </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>