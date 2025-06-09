<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="css/style.css"></head>
<body>
<form action="process.php" method="post">
  <h1>Signup</h1>
  <input type="text" name="username" placeholder="Username" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <input type="password" name="confirm_password" placeholder="Confirm Password" required><br>
  <button type="submit" name="signup">Register</button>
</form>
 
<div style="text-align: center; margin-top: 20px;">
        <p>Already signed up? <a href="index.php">Click here to Login</a></p>
</div>

</body>
</html>
