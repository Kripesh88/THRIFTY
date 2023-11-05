
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./loggIn.css">
    <title>Login</title>
</head>
<body>
<?php
include_once ("../Navbar/navbar.php");

?>

    
  <div class="wrapper">
  
    <h1>Login</h1>
    <br>

    <main>
        <?php
         if (isset($_GET['success'])) {
            echo "<div class='inserted'>Sucessfully Loggedin. </div>";
        }
        if (isset($_GET['login'])) {
            echo "<div class='error'>Username or Password Invalid.</div>";
        }
        ?> 

<form method="POST" action="checkUser.php">
<div class="input-box">
    <input type="text" placeholder="Username" name="uname" required/>
</div>

<div class="input-box">
    <input type="password" placeholder="Password" name="pwd" required/>
</div>
<div class="remember-forget">
    <label><input type="checkbox">Remember me</label>
    <a href="#">Forgot Password ?</a>
</div>
<div>
    <button type="submit" class="btn">Login</button>

</div>

<div class="register-link">
    <p>Don't have an account ?
    <a href="../SignUp/reg.php">Sign Up</a>
</p>
</div>

</form>
</main>

    
    </div>
    <script>
        

    </script>
</body>


</html>