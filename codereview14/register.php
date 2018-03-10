<?php 
include_once 'actions/db_connect.php';
if(isset($_POST['register']) ){
$username = $_POST['username'];
$email 	 = 	$_POST['email'];
$password = $_POST['password'];
$password = hash('sha256', $password); 
 $sql = "INSERT INTO usermanagment (username,email,password) VALUES ('$username','$email', '$password') ";
 $result = mysqli_query($connect, $sql);
   if($result) { 
    $report = "you have successfully registerd ";
  } else{
    $report= "some thing went wrong";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>registeration</title>

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
      <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
        <h2 class="form-signin-heading">Please Register</h2>
        <div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">@</span>
	  <input type="text" name="username" class="form-control" placeholder="Username" required>
	     </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" name="register" type="submit">Register</button>
        <a href="login.php">have account? login here</a>
      </form>
      <p><?php if(isset($_POST['register']) ){echo $report;} ?></p>
  </div>
</body>
</html>