<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="./style/login.css">
    <link rel="icon" type="image/logo" href="./assets/bg.jpg">
</head>
<body> 
  <div class="center">
    <h1>Admin</h1><br>
    <form action="admin.php" onsubmit="return loginBtn()">
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
        <input type="submit" value="Login">
        <div class="signup-link">
           <a href=""></a>
        </div>
    </form>
</div>
    <script src="./js/login.js"></script>
</body>
</html>



