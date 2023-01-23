<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Signup Form</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="center">
      <h1>Sign Up</h1>

      <form action="registration.php" method="post">

        <div class="txt_field">
          <input type="text" name="firstname" required>
          <span></span>
          <label>First Name</label>
        </div>
        <div class="txt_field">
            <input type="text" name="lastname" required>
            <span></span>
            <label>Last Name</label>
          </div>
          <div class="txt_field">
            <input type="text" name="username" required>
            <span></span>
            <label>Username</label>
          </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <button type="submit" id="login">Create account</button>
        <div class="signup_link">
          Already have an account? <a href="">Login</a>
        </div>
        
      </form>

    </div>

  </body>
</html>
