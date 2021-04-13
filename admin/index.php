<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8" />
    <title>Best eCommerce Platform </title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Droid+Sans"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/normalize.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <section class="login-regestration">
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx"><img style="object-fit: contain;" src="assets/img/ecommerce-reg.png" alt="" /></div>
          <div class="formBx">
            <form action="" onsubmit="return false;">
              <h2>Sign In</h2>
              <input type="text" name="" placeholder="Username" />
              <input type="password" name="" placeholder="Password" />
              <input type="submit" name="" value="Login" />
              <p class="signup">
                Don't have an account ?
                <a href="#" onclick="toggleForm();">Sign Up.</a>
                <a class="d-block text-danger" href="dashboard.php">go to Dashboard</a>
              </p>
            </form>
          </div>
        </div>
        <div class="user signupBx">
          <div class="formBx">
            <form action="" onsubmit="return false;">
              <h2>Create an account</h2>
              <input type="text" name="" placeholder="Username" />
              <input type="email" name="" placeholder="Email Address" />
              <input type="password" name="" placeholder="Create Password" />
              <input type="password" name="" placeholder="Confirm Password" />
              <input type="submit" name="" value="Sign Up" />
              <p class="signup">
                Already have an account ?
                <a href="#" onclick="toggleForm();">Sign in.</a>
              </p>
            </form>
          </div>
          <div class="imgBx"><img style="object-fit: contain;" src="assets/img/ecommerce-login.png" alt="" /></div>
        </div>
      </div>
    </section>

    <script>
      const toggleForm = () => {
        const container = document.querySelector('.container');
        container.classList.toggle('active');
      };
    </script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/custom.js"></script>
  </body>
</html>
