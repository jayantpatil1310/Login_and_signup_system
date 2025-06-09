<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="css/style.css"></head>
<body>
<form action="process.php" method="post">
  <h1>Login</h1>
  <input type="text" name="username_email" placeholder="Username or Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit" name="login">Login</button>
</form>

<div style="text-align: center; margin-top: 20px;">
        <p>New user?<a href="register.php">Click here to register</a></p>
</div>

</body>
</html>
