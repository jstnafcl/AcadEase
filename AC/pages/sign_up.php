<!-- TODO: include config/db_connect.php when ready -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AcadEase - Sign Up</title>
  <link rel="stylesheet" href="\AC\assets\css\sign_up.css">
</head>
<body>

  <div class="signup-container">
    <!-- Logo -->
    <div class="logo">
      <img src="\AC\assets\images\acadease_logo.svg" alt="AcadEase Logo">
      <h2>AcadEase</h2>
      <p>Create a new account</p>
    </div>

    <!-- Tabs -->
    <div class="tabs">
      <button><a href="sign_in.php" class="login">Login</a></button>
      <button class="active">Sign Up</button>
    </div>

    <!-- Form -->
    <form>
      <div class="form-group icon-input">
        <i class="fa-solid fa-user"></i>
        <input type="text" placeholder="Full Name" required>
      </div>

      <div class="form-group icon-input">
        <i class="fa-solid fa-envelope"></i>
        <input type="email" placeholder="Email" required>
      </div>

      <div class="form-group icon-input">
        <i class="fa-solid fa-lock"></i>
        <input type="password" placeholder="Password" required>
      </div>

      <div class="form-group icon-input">
        <i class="fa-solid fa-lock"></i>
        <input type="password" placeholder="Confirm Password" required>
      </div>
      
      <div class="roles">
        <label class="role-label">Select Role</label>
        <div class="role-options">
            <label><input type="radio" name="role" checked> Student</label>
            <label><input type="radio" name="role"> Professor</label>
            <label><input type="radio" name="role"> Administrator</label>
        </div>
      </div>

      <button cls="create-account">Create Account</button>
    </form>

    <div class="footer">
      Already have an account? <a href="#">Sign in</a>
    </div>
  </div>

</body>
</html>


