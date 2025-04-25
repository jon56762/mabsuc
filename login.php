<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
    <!-- css  -->
     <link rel="stylesheet" href="assets/css/login.css">
    <!-- Font Awesome  -->
     <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
    <title>Login</title>
</head>
<body>
    <!-- Navbar -->

    <?php include "navbar.php" ?>

    <div class="form-section">
      <div class="form-wrapper animate-slide-in">
          <h2 class="fw-bold">Create Account</h2>
          <form>
              <div class="row g-3">
                  <div class="col-12">
                      <div class="input-icon">
                          <input type="text" class="form-control" placeholder="Username" required>
                          <i class="fas fa-user"></i>
                      </div>
                  </div>
                
                  <div class="col-12">
                      <div class="input-icon">
                          <input type="password" class="form-control" placeholder="Password" id="password" required>
                          <i class="fas fa-lock"></i>
                      </div>
                      <div class="col-12">
                         <a href="resgistration.html">Forgotten password</a>
                      </div>
                     
                  </div>

                  <div class="col-12">
                      <button type="submit" class="btn btn-login">Login</button>
                  </div>

                  <div class="col-12">
                      Don't Have a Account <a href="resgistration.html">Resigter</a>
                  </div>
              </div>
          </form>
      </div>

      
     <!-- js    -->
      <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>