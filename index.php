<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Boostrap -->
   <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css">
  <!-- font awesome  -->
   <link rel="stylesheet" href="assets/css/font-awasome/css/all.css">
  <!-- css  -->
   <link rel="stylesheet" href="assets/css/style.css">
  <title>Mabsuc</title>
</head>

<body>
  <!-- Navbar -->

  <?php include "navbar.php" ?>


  <div class="container-fluid">
    <div class="row mt-5">
      <div class="col-12 first-contant">

        <div class="card border-0 animate-scale" style="background-color: palegoldenrod;">
          <div class="card-body">
            <h4 class="card-title">Find your preferred <br>
              <span>Courses</span> & Develop your <br>
              Skills in a new and<span>unique</span> way
            </h4>
            <p class="card-text bg-default">
              Explore in skill Development on our online learning platfrom <br>
              Uncover a new ream of learning experiences and Skills-up, <br>
              in a new way
            </p>
            <button class="btn btn-success">See Courses</button>
          </div>
        </div>

        <div class="card border-0 animate-scale">
          <img class="card-img-top" src="assets/images/womanwithlabtop.jpg" alt="">
        </div>
      </div>
    </div>

    <div class="search animate-slide-up delay2">
      <h2>COURSES SEARCH</h2>
      <div class="line"></div>

      <form action="">
        <div class="container search-background">
          <div class="header">
            <i class="fa fa-search" aria-hidden="true"></i>
            <input class="search-input" type="text" placeholder="Search Course">
          </div>

          <div class="container search-area">
            <div class="row mt-5">
              <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label"></label>
                <select
                  class="form-select form-select-lg" name="" id="">
                  <option selected>Web Development</option>
                  <option value="">Web Design</option>
                  <option value="">Graphic Design</option>
                </select>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label"></label>
                <select
                  class="form-select form-select-lg" name="" id="">
                  <option selected>All</option>
                  <option value="">Free</option>
                  <option value="">Paid</option>
                </select>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label"></label>
                <select
                  class="form-select form-select-lg" name="" id="">
                  <option selected>Recent Courses</option>
                  <option value="">Highest Rated</option>
                  <option value="">Alphabetical</option>
                  <option value="">Most Member</option>
                </select>
              </div>

              <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="" class="form-label"></label>
                <textarea class="form-control" name=""  id="" rows="" placeholder="Keypoint"></textarea>
              </div>
              
              <div class="col-lg-3 col-md-3 col-sm-12 mx-auto mt-5">
                <input class="bg-success border-0 text-light search-btn" type="submit" value="SEARCH COURSES">

              </div>
            </div>
          </div>

      </form>
    </div>


    <div class="course animate-fade">
      <h2>OUR POPULAR COURSES</h2>
      <div class="line"></div>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="web-development.html">
              <div class="card mt-5 border-0 popular-course text-start">
                <img class="card-img-top" src="assets/images/web-laptop.jpg" alt="">
                <div class="card-body">
                  <h4 class="card-title">
                    Web Development
                  </h4>
                  <p>Coding | Backend</p>
                  <hr>
                  <p class="card-text">
                    <i class="fas fa-tablet-alt    "></i>
                    3m 22d 22h <br>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    (223 votes, average: <b>4.80</b> out of 5 )
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="web-design.html">
              <div class="card mt-5 border-0 popular-course text-start">
                <img class="card-img-top" src="assets/images/ui.jpg" alt="">
                <div class="card-body">
                  <h4 class="card-title">
                    Web Design (UI/UX)
                  </h4>
                  <p>Coding | Frontend</p>
                  <hr>
                  <p class="card-text">
                    <i class="fas fa-tablet-alt    "></i>
                    2m 22d 22h <br>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fas fa-star-half-alt text-warning    "></i>
                    (94 votes, average: <b>4.48</b> out of 5 )
                  </p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-lg-4 col-md-6 col-sm-12">
            <a href="graphic-design.html">
              <div class="card mt-5 border-0 popular-course text-start">
                <img class="card-img-top" src="assets/images/laptop-image.jpg" alt="">
                <div class="card-body">
                  <h4 class="card-title">
                    Graphic Design
                  </h4>
                  <p>Basic Training</p>
                  <hr>
                  <p class="card-text">
                    <i class="fas fa-tablet-alt    "></i>
                    1m 22d 22h <br>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fa fa-star text-warning" aria-hidden="true"></i>
                    <i class="fas fa-star-half-alt text-warning    "></i>
                    <i class="fas fa-star-half-alt text-warning    "></i>
                    (126 votes, average: <b>3.89</b> out of 5 )
                  </p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="feature animate-scale">
      <h2>SOME GREAT FEATURES OF MABSUC THEME</h2>
      <div class="line"></div>

      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
          <div class="card border-0" style="background-color: palegoldenrod;">
            <div class="card-img-top">
              <div class="icon bg-success">
                <i class="fas fa-lightbulb    "></i>
              </div>
            </div>
            <div class="card-body feature-writeup">
              <h5 class="card-title">Advanced Topics</h5>
              <p class="card-text">Join our Master class: <br> HTML5, CSS3.</p>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
          <div class="card border-0" style="background-color: palegoldenrod;">
            <div class="card-img-top">
              <div class="icon bg-primary">
                <i class="fas fa-chalkboard-teacher    "></i>
              </div>
            </div>
            <div class="card-body feature-writeup">
              <h5 class="card-title">Expert Teachers</h5>
              <p class="card-text">Join our Master class: <br> HTML5, CSS3.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
          <div class="card border-0" style="background-color: palegoldenrod;">
            <div class="card-img-top">
              <div class="icon bg-warning">
                <i class="fa fa-play-circle" aria-hidden="true"></i>
              </div>
            </div>
            <div class="card-body feature-writeup">
              <h5 class="card-title">Video Courses</h5>
              <p class="card-text">Join our Master class: <br> HTML5, CSS3.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 mt-5">
          <div class="card border-0" style="background-color: palegoldenrod;">
            <div class="card-img-top">
              <div class="icon bg-danger">
                <i class="fa fa-volume-up" aria-hidden="true"></i>
              </div>
            </div>
            <div class="card-body feature-writeup">
              <h5 class="card-title">Audio Courses</h5>
              <p class="card-text">Join our Master class: <br> HTML5, CSS3.</p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="teacher">
      <h2>OUR EXPERT TEACHERS</h2>
      <div class="line"></div>

      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
            <div class="card border-0 popular-course">
              <img class="card-img-top" src="assets/images/woman1.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-warning">DAMIE GLENDELL</h4>
                <p class="card-text">
                  Co-Director
                  <div class="line mb-2"></div>
                  <i class="fab fa-facebook "></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                  
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
            <div class="card border-0 popular-course">
              <img class="card-img-top" src="assets/images/teachermale2.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-warning">JAMES CATWIN</h4>
                <p class="card-text">
                  Art Director
                  <div class="line mb-2"></div>
                  <i class="fab fa-facebook "></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
            <div class="card border-0 popular-course">
              <img class="card-img-top" src="assets/images/woman2.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title text-warning">JENNY SHEEN</h4>
                <p class="card-text">
                  Digital Media Programming
                  <div class="line mb-2"></div>
                  <i class="fab fa-facebook "></i>
                  <i class="fab fa-twitter"></i>
                  <i class="fab fa-instagram"></i>
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 mt-5">
            <a href="instructor-profile.html">
              <div class="card border-0 popular-course">
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
            </a>
          </div>

        </div>
      </div>
    </div>


    <div class="process">
      <h2>OUR PROCESS</h2>
      <div class="line"></div>

      <div class="container">
        <div class="section1">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mb-5">
              <div class="card border-0" style="background-color: palegoldenrod;">
                <div class="card-body">
                  <h3 class="card-title text-warning">Step 01</h3>
                  <h5 class="card-title">Search for your course</h5>
                  <hr> <i class="fa fa-search text-warning" aria-hidden="true"></i>
                  <p class="card-text">Pick a course of your choice</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-2">
              <div class="card border-0" style="background-color: palegoldenrod;">
                <div class="card-body">
                  <h3 class="card-title text-warning">Step 02</h3>
                  <h5 class="card-title">Take a Sample Lesson</h5>
                  <hr><i class="fa fa-desktop text-warning" aria-hidden="true"></i>
                  <p class="card-text">You study the lesson</p>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="section2">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5 mb-5">
              <div class="card border-0" style="background-color: palegoldenrod;">
                <div class="card-body">
                  <h3 class="card-title text-warning">Step 03</h3>
                  <h5 class="card-title">Preview the syllabus</h5>
                  <hr><i class="fas fa-clipboard-list text-warning   "></i>
                  <p class="card-text">Read the course and summary</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
              <div class="card border-0" style="background-color: palegoldenrod;">
                <div class="card-body">
                  <h3 class="card-title text-warning">Step 04</h3>
                  <h5 class="card-title">Purchase the Couses</h5>
                  <hr> <i class="fas fa-donate text-warning    "></i>
                  <p class="card-text">Your lesson begin</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    


  </div>

  <!-- Footer -->
   <?php include "footer.php" ?>

  <!-- js -->
  <script src="assets/js/bootstrap.bundle.js"></script>

</body>

</html>