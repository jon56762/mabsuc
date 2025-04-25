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
   <link rel="stylesheet" href="assets/css/courses.css">
  <title>Courses</title>
</head>

<body>
  <!-- Navbar -->

  <?php include "navbar.php" ?>

  <div class="container-fluid parent-div">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div id="carouselId" class="carousel slide mt-5" data-bs-ride="carousel">
            <ol class="carousel-indicators">
              <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="First slide"></li>
              <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
              <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="carousel-caption text-dark">
                  <p>We have the largest collection of</p>
                  <h3>ONLINE COURSE</h3>
                  <button class="btn btn-success"><b>SEE COURSES</b></button>
                </div>
                <img src="assets/images/womanbackground.jpg" class="w-100 d-block" alt="First slide" />
              </div>
              <div class="carousel-item">
                <img src="assets/images/secondlaptop.jpg" class="w-100 d-block" alt="Third slide" />
                <div class="carousel-caption text-dark">
                  <div class="row">
                    <div class="col-12">
                      <h3>LEARN FROM THE BEST</h3>
                      <p><i>Courses from the Best Professionals</i></p>
                      <button class="btn btn-success"><b>START LEARNING</b></button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </div>


    <div class="search">
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

    <div class="course mt-5">
      <h2>OUR POPULAR COURSES</h2>
      <div class="line"></div>

      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card border-0">
              <img class="card-img-top" src="assets/images/web-laptop.jpg" alt="Title" />
            </div>
          </div>

          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card border-0" style="background-color: palegoldenrod;">
              <div class="card-body">
                <h4 class="card-title">
                  <span class="text-warning">$760</span> <br>
                  Web Development
                </h4>
                <p class="card-text">
                  Coding | Backend

                  We offer you our best lesson on backend. Programming language such as:
                  Python, php (Laravel) and Javascript.

                  <hr>

                  <i class="fas fa-tablet-alt    "></i>3m 22d 22h <br>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <p>(223 votes, average: <b>4.80</b> out of 5)</p>
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card border-0">
              <img class="card-img-top" src="assets/images/ui.jpg" alt="Title" />
            </div>
          </div>

          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card border-0" style="background-color: palegoldenrod;">
              <div class="card-body">
                <h4 class="card-title">
                  <span class="text-warning">$530</span> <br>
                  Web Design (UI/UX)
                </h4>
                <p class="card-text">
                  Coding | Frontend


                  Learn one of the global tech work. Join our master class design
                  Professionals, responsive and stunning website using; HTML, CSS 
                  and Boostrap (framework).

                  <hr>

                  <i class="fas fa-tablet-alt    "></i>3m 22d 22h <br>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fas fa-star-half-alt text-warning    "></i>
                  <p>(223 votes, average: <b>4.45</b> out of 5)</p>
                </p>
              </div>
            </div>

          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card border-0">
              <img class="card-img-top" src="assets/images/laptop-image.jpg" alt="Title" />
            </div>
          </div>

          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card border-0" style="background-color: palegoldenrod;">
              <div class="card-body">
                <h4 class="card-title">
                  <span class="text-warning">$760</span> <br>
                  Graphic Design
                </h4>
                <p class="card-text">
                  Basic Training

                  Join our basic class: corel draw, microsoft word and powerpoint for presentation

                  <hr>

                  <i class="fas fa-tablet-alt    "></i>3m 22d 22h <br>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fa fa-star text-warning" aria-hidden="true"></i>
                  <i class="fas fa-star-half-alt text-warning    "></i>
                  <i class="fas fa-star-half-alt text-warning    "></i>
                  <p>(223 votes, average: <b>3.80</b> out of 5)</p>
                </p>
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