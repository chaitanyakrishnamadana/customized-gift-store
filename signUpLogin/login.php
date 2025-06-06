<?php
session_start();

// If user is already logged in, redirect to welcome page
if (isset($_SESSION['user_id'])) {
    header("Location: welcome.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<!-- Add this right after the <body> tag and before the container div -->
<body>
    
    
    <div class="container" id="container">
        <div class="form-container sign-in">
            <form action="processLogin.php" method="POST">
                <h1>Log In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button>Log In</button>
                <p class="redirect-text">Don't have an account? <a href="signup.html">Sign Up</a></p>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <a href="signup.html"><button class="hidden">Sign Up</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>