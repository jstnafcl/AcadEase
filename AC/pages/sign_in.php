<!-- TODO: include config/db_connect.php when ready -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Connect with professors through our intelligent booking system. Schedule, consultations, manage appointments, and never miss an important meeting.">
    
    <title>AcadEase</title>
    
    <!-- Favicon -->
    <link href="acadease logo.svg" rel="icon">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="\AC\assets\css\sign_in.css">
</head>
<body>
<div class="container">
    <div class="form-box">
        <div class="logo">
        <img src="\AC\assets\images\acadease_logo.svg" alt="AcadEase Logo">
        <h2>AcadEase</h2>
        <p>Sign in to your account</p>
    </div>

    <div class="buttons">
        <button class="active">Sign In</button>
        <button><a href="sign_up.php" class="sign-up">Sign Up</a></button>
    </div>


    <form>
        <label>Email</label>
        <div class="input-box">
        <span class="icon"></span>
        <input type="email" placeholder="your@phinmaed.com" required>
        </div>

        <label>Password</label>
        <div class="input-box">
        <span class="icon"></span>
        <input type="password" placeholder="" required>
        <span class="eye"></span>
        </div>


        <button type="submit" class="create-btn">Sign In</button>
    </form>


    <p class="signup-text">Don’t have an account? <a href="sign_up.php">Sign Up</a></p>
    </div>
</div>
</body>
</html>