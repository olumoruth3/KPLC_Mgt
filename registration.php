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
  <title>Registration Form</title>
</head>

<body>
  <main class="container">
    <div class="forms">
      <!-- Registration Section-->
      <div class="form signup">
        <span class="title">Registration</span>

        <form action="#">
          <div class="input-field">
            <input type="text" placeholder="Enter your name" required />
            <i class="uil uil-user"></i>
          </div>

          <div class="input-field">
            <input type="text" placeholder="Enter your email" required />
            <i class="uil uil-envelope icon"></i>
          </div>

          <div class="input-field">
            <input type="password" class="password" placeholder="Create a password" required />
            <i class="uil uil-lock icon"></i>
          </div>

          <div class="input-field">
            <input type="password" class="password" placeholder="Confirm a password" required />
            <i class="uil uil-lock icon"></i>
            <i class="uil uil-eye-slash showHidePw"></i>
          </div>

          <div class="checkbox-text">
            <div class="checkbox-content">
              <input type="checkbox" id="termCon" />
              <label for="termCon" class="text">I accepted all terms and conditions</label>
            </div>
          </div>

          <div class="input-field button">
            <input type="button" value="Signup" />
          </div>
        </form>

        <div class="login-signup">
          <span class="text">Already a member?
            <a href="./index.html" class="text login-link">Login Now</a>
          </span>
        </div>
      </div>
    </div>
  </main>

  <script src="script.js"></script>
</body>

</html>
