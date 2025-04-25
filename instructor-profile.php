<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boostrap -->
     <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
    <!-- Font awesome  -->
     <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
    <!-- Css  -->
     <link rel="stylesheet" href="assets/css/instructor-profile.css">
    <title>JIM MORRISON</title>
</head>
<body>
    <!-- Navbar -->

    <?php include "navbar.php" ?>

    <div class="container-fluid mt-5">
        <div class="header sticky-top">
           <h2>Instructor: JIM MORRISON</h2> 
           <p>
              <a class="text-light" href="index.html">HOME /</a>
              <a class="text-light" href="">JIM MORRISON</a>
           </p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card border-0 instructor-profile">
                    <img class="card-img-top" src="assets/images/teachermale.jpg" alt="">
                    <div class="card-body">
                      <h4 class="card-title text-warning">JIM MORRISON</h4>
                      <p class="card-text">
                        Chef Programmer
                        <div class="line mb-2"></div>
                        <i class="fab fa-facebook "></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        
                      </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="instructor-profession mt-5">
                    <ul>
                        <li>Education: Artifical Intelligence</li>
                        <hr>
                        <li>Website:</li>
                        <hr>
                        <li>Experience: 5 Years</li>
                        <hr>
                        <li>Role: Chef Programmer</li>
                    </ul>
                </div>

                <div class="instructor-classes mt-5">
                    <p>
                        <b>Classes Handling</b>
                    </p>
                    <table border="1">
                        <tr class="bg-success text-light ">
                            <th colspan="4">Class Name</th>
                            <th colspan="4">Class Type</th>
                        </tr>

                        <tr>
                            <td colspan="4">Programmimg</td>
                            <td colspan="2">onsite</td>
                        </tr>
                    </table>

                    <p class="mt-5">
                        <b>Courses Handling</b>
                    </p>
                    <table border="1">
                        <tr class="bg-success text-light">
                            <th colspan="4">Courses Name</th>
                            <th colspan="4">Curriculum(s)</th>
                        </tr>

                        <tr>
                            <td colspan="4">Php</td>
                            <td colspan="2">7</td>
                        </tr>

                        <tr>
                            <td colspan="4">Python</td>
                            <td colspan="2">7</td>
                        </tr>

                        <tr>
                            <td colspan="4">javescript</td>
                            <td colspan="2">8</td>
                        </tr>
                    </table>
                </div>

                <div class="about-instructor mt-5">
                    <h3>About Me</h3>

                    <p>
                        JIM MORRISON
                    </p>
                </div>
            </div>
      </div>
  </div>

  <!-- Footer -->
  <?php include "footer.php" ?>

  <script src="assets/js/boostrap.bundle.js"></script>
</body>
</html>