<?php

session_start();

  include 'config.php';
  
  if(isset($_SESSION['username']))
  {
      header("location: welcome.php");
      exit;
  }

  error_reporting(0);

  if(isset($_POST['signup']))
  {
    $username = mysqli_real_escape_string($con, $_POST['signup_username']); 
    $email = mysqli_real_escape_string($con, $_POST['signup_email']); 
    $password = mysqli_real_escape_string($con, sha1($_POST['signup_password'])); 
    $cpassword = mysqli_real_escape_string($con, sha1($_POST['signup_cpassword']));
    
    $check_mail = mysqli_num_rows(mysqli_query($con, "SELECT email FROM users WHERE email='$email'"));
    
    if($password !== $cpassword)
    {
      echo "<script>alert('Password did not matched');</script>";
    }

    elseif($check_mail > 0)
    {
      echo "<script>alert('Email already exist');</script>";
    }

    else
    {
      $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

      $result = mysqli_query($con, $sql);

      if($result)
      {
        $_POST['signup_username'] = "";
        $_POST['signup_email'] = "";
        $_POST['signup_password'] = "";
        $_POST['signup_cpassword'] = "";

        echo "<script>alert('User registration successful');</script>";
      }

      else
      {
        echo "<script>alert('User registration failed');</script>";
      }
    }
  }

  if(isset($_POST['signin']))
  { 
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']); 
    $password = mysqli_real_escape_string($con, sha1($_POST['password'])); 
    
    $check_mail = mysqli_query($con, "SELECT id FROM users WHERE email='$email' AND password='$password'");

    if(mysqli_num_rows($check_mail) > 0)
    {

      $_SESSION['username'] = $username;
      header("location: welcome.php");
    }

    else
    {
      echo "<script>alert('Login details incorrect');</script>";
    }
  }

?>

<!DOCTYPE html>

<html lang="en">
  
  <head>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />

    <title>MediMinder</title>
  
  </head>

  <body>

    <div class="container">
      
      <div class="forms-container">
        
        <div class="signin-signup">

          <form action="" class="sign-in-form" method="post">
            <h2 class="title">Sign in</h2>

            <div class="input-field" hidden>
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" value="<?php echo $_POST['username']; ?>"/>
            </div>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Email" name="email" value="<?php echo $_POST['email']; ?>" required />
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" required />
            </div>

            <input type="submit" value="Login" name="signin" class="btn solid" />

          </form>
          
          <form action="" class="sign-up-form" method="post">
            <h2 class="title">Sign up</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="signup_username" value="<?php echo $_POST['signup_username']; ?>" required />
            </div>
            
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="signup_email" value="<?php echo $_POST['signup_email']; ?>" required/>
            </div>
            
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="signup_password" required />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="signup_cpassword"  required />
            </div>

            <input type="submit" class="btn" name="signup" value="Sign up" />

          </form>

        </div>

      </div>
      <!-- Sign up | Sign in div ends above-->
      <div class="panels-container">
        
        <div class="panel left-panel">
          
          <div class="content" style="position: relative; top: -30px;">
            <h3>New here ?</h3>
            
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>

          <img src="img/login.png" class="image" alt="" />
        
        </div>

        <div class="panel right-panel">
          
          <div class="content" style="position: relative; top: -30px;">
            <h3>Already Registered ?</h3>
            
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          
          </div>

          <img src="img/signup.png" class="image" alt="" />
        
        </div>
      
      </div>
    
    </div>

    <script src="app.js"></script>
    
    <script>
      if( window.history.replaceState ) 
      {
        window.history.replaceState( null, null, window.location.href );
      }
    </script>

  </body>

</html>