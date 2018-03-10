<?php
ob_start();
session_start();
if (isset($_SESSION['customerId']) != "") {
    header("Location: admin.php");
    exit;
}
include_once 'actions/db_connect.php';

$error = false;
if (isset($_POST['Login'])) {
  // prevent sql injections/ clear user invalid inputs
    
    $email = trim($_POST['email']);
    $email = strip_tags($email);
    $email = htmlspecialchars($email);
    $password = trim($_POST['password']);
    $password = strip_tags($password);
    $password = htmlspecialchars($password);
  // prevent sql injections / clear user invalid inputs
    if (empty($email)) {
        $error = true;
        $emailError = "Please enter your email address.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter valid email address.";
    }
    if (empty($password)) {
        $error = true;
        $passwordError = "Please enter your password.";
    }
  // if there's no error, continue to login
    if (!$error) {
        $password = hash('sha256', $password); // password hashing using SHA256
        $res = mysqli_query($connect, "SELECT    * FROM usermanagment WHERE email='$email'");
        $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
        $count = mysqli_num_rows($res); // if uname/pass correct its return must be 1 row
        if ($count == 1 && $row['password'] == $password) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            
            
            header("Location: admin.php");
        } else {
            $signErrMSG = "Incorrect Credentials, Try again...";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

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
        <h2 class="form-signin-heading">Please Login</h2>
        <div class="input-group">
      
      
         </div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" name="Login" type="submit">Login</button>
       <?php
                    if ( isset($signErrMSG) ) {
                        echo "<div class='alert alert-danger small'> $signErrMSG </div>";
                    }?>
                <p class="pt-2 w-100">
                    No account? 
                    <a href="register.php" class="link">Register</a>
                </p>
      </form>
  </div>
</body>
</html>