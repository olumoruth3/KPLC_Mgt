<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- ===== Iconscout CSS ===== -->
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="custom.css" />
  <title>Login Form</title>
</head>

<body>
  <main class="container">
    <div class="forms">
      <!-- login section -->
      <div class="form login">
        <span class="title">Login</span>

        <form action="#">
          <div class="input-field">
            <input type="text" placeholder="Enter your email" required />
            <i class="uil uil-envelope icon"></i>
          </div>
          <div class="input-field">
            <input type="password" class="password" placeholder="Enter your password" required />
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>

          <div class="checkbox-text">
            <div class="checkbox-content">
              <input type="checkbox" id="logCheck" />
              <label for="logCheck" class="text">Remember me</label>
            </div>

            <a href="#" class="text">Forgot password?</a>
          </div>

          <div class="input-field button">
            <!-- <input type="button" value="Login" href="./home.html" />   -->
            <input type="button" value="Login" onclick="window.location.href='./home.html';" />
          </div>
        </form>

        <div class="login-signup">
          <span class="text">Not a member?<a href="./registration.html" class="text signup-link">Signup Now</a>
          </span>
        </div>
      </div>
    </div>
  </main>

  <script src="script.js"></script>
</body>

</html>
