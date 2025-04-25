<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
     <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
    <!-- css  -->
     <link rel="stylesheet" href="assets/css/resgistration.css">
    <!-- Font Awesome  -->
     <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
    <title>Registration</title> 
</head>
<body>
    <!-- Navbar -->

    <?php include "navbar.php" ?>

    <div class="split-container mt-2">
        <div class="form-section">
            <div class="form-wrapper animate-slide-in">
                <h2 class="mb-4 fw-bold">Create Account</h2>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="First Name" required>
                                <i class="fas fa-user"></i>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-icon">
                                <input type="text" class="form-control" placeholder="Last Name" required>
                                <i class="fas fa-user"></i>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-icon">
                                <input type="email" class="form-control" placeholder="Email Address" required>
                                <i class="fas fa-envelope"></i>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-icon">
                                <input type="password" class="form-control" placeholder="Password" id="password" required>
                                <i class="fas fa-lock"></i>
                            </div>
                           
                        </div>

                        <div class="col-12">
                            <div class="input-icon">
                                <input type="password" class="form-control" placeholder="Confirm Password" required>
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms">
                                <label class="form-check-label" for="terms">
                                    I agree to the <a href="#" class="text-primary">Terms & Conditions</a>
                                </label>
                            </div>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-register">Create Account</button>
                        </div>

                        <div class="col-12 text-center">
                            <p class="text-muted my-3">or sign up with</p>
                            <div class="social-login">
                                <button type="button" class="btn btn-light w-100 mb-2">
                                    <i class="fab fa-google text-success me-2"></i> Google
                                </button>
                                <button type="button" class="btn btn-light w-100">
                                    <i class="fab fa-facebook text-primary me-2"></i> Facebook
                                </button>
                            </div>
                        </div>

                        <div class="col-12">
                          Already Have a Account <a href="login.html">Login</a>
                      </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Image Section -->
        <div class="image-section">
            <div class="content">
                <h1 class="display-5 fw-bold mb-4">Start Learning Today</h1>
                <p class="lead mb-4">Join thousands of students advancing their careers with our courses</p>
                <div class="features text-start">
                    <p><i class="fas fa-check-circle me-2"></i> 1000+ Online Courses</p>
                    <p><i class="fas fa-check-circle me-2"></i> Expert Instructors</p>
                    <p><i class="fas fa-check-circle me-2"></i> Lifetime Access</p>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>