<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/login.css">
    <link rel="icon" type="image/logo" href="./assets/logo.png">
</head>
<body> 
  <div class="center">
    <h1>Login</h1><br>
    <form action="index.php" onsubmit="return loginBtn()">
        <div class="txt-field">
            <input id="username" type="username" required>
            <span></span>
            <label>E-mail</label>
        </div>
        <div class="txt-field">
            <input id="password" type="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login">
        <div class="signup-link">
            Not a Member? <a href="register.php">Register now</a>
        </div>
        <div class="signup-link">
           <a href="admin_login.php">Administrator here</a>
        </div>
    </form>
</div>
    <script src="./js/login.js"></script>
</body>
</html>



