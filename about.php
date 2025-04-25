<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boostrap -->
    <link rel="stylesheet" href="assets/css/boostrap/bootstrap.css" />
    <!-- font awesome  -->
    <link rel="stylesheet" href="assets/css/font-awasome/css/all.css" />
    <!-- css  -->
    <link rel="stylesheet" href="assets/css/about.css" />
    <title>About Us</title>
  </head>
  <body>
    <!-- Navbar -->

  <?php include "navbar.php" ?>

    <div class="container-fluid mt-5">
      <div class="header mt-5">
        <h1 class="text-light">ABOUT US</h1>
        <p>
          <a class="text-light" href="index.html">HOME /</a>
          <a class="text-light" href="about.html">ABOUT US</a>
        </p>
      </div>
      <div class="container p-3">
        <div class="row mt-5">
          <div class="col-8 d-none d-md-block d-lg-block">
            <div class="capture-homepage">
              <h3>100%</h3>
              <p>Certified Courses</p>
              <button class="btn btn-success">
                <b>Subscribe to Mabsuc</b>
              </button>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 plan-course">
            <p class="text-light">
              <i class="fas fa-clock"></i>
              Plan a Visit
            </p>

            <div class="mb-3">
              <label for="" class="form-label"></label>
              <select class="form-select form-select-lg" name="" id="">
                <option selected>All</option>
                <option value="">Free</option>
                <option value="">Paid</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="" class="form-label"></label>
              <select class="form-select form-select-lg" name="" id="">
                <option selected>Recent Courses</option>
                <option value="">Highest Rated</option>
                <option value="">Alphabetical</option>
                <option value="">Most Member</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="" class="form-label"></label>
              <select class="form-select form-select-lg" name="" id="">
                <option value="Web Development">Web Development</option>
                <option value="Web Design">Web Design</option>
                <option value="Graphic Design">Graphic Design</option>
              </select>
            </div>

            <div class="mt-5">
              <button class="btn btn-success search-button">
                <b>Search Courses</b>
              </button>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <h3>Give Us A Message</h3>
            <div class="line"></div>

            <div class="input-group mb-3 mt-3">
              <span class="input-group-text" id="basic-addon1">
                <i
                  class="fa fa-user feature-icon text-success"
                  aria-hidden="true"
                ></i>
              </span>
              <input
                type="text"
                class="form-control"
                placeholder="Your Name"
                aria-label="Username"
                aria-describedby="basic-addon1"
              />
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i
                  class="fa fa-envelope feature-icon text-success"
                  aria-hidden="true"
                ></i>
              </span>
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                aria-label="Recipient's username"
                aria-describedby="basic-addon2"
              />
              <span class="input-group-text" id="basic-addon2"
                >@example.com</span
              >
            </div>

            <div class="input-group mb-3">
              <span class="input-group-text" id="basic-addon1">
                <i
                  class="fa fa-mobile feature-icon text-success"
                  aria-hidden="true"
                ></i>
              </span>
              <input
                type="number"
                class="form-control"
                placeholder="Phone Number"
                aria-label="Recipient's username"
                aria-describedby="basic-addon2"
              />
            </div>

            <div class="input-group">
              <span class="input-group-text">
                <i
                  class="fa fa-file feature-icon text-success"
                  aria-hidden="true"
                ></i>
              </span>
              <textarea
                class="form-control"
                aria-label="With textarea"
                placeholder="Message"
              ></textarea>
            </div>

            <div class="input-group mt-2 mb-5">
              <input
                class="btn btn-success"
                type="submit"
                value="SEND EMAIL"
                id="send-email"
              />
            </div>
          </div>
          <div class="col-lg-6 col-md-12 d-none d-lg-block d-md-block">
            <h3>Contact Info</h3>
            <div class="line"></div>
            <div class="mt-2">
              <div class="info d-flex">
                <div class="icon">
                  <i
                    class="fa fa-location-arrow text-success p-3"
                    aria-hidden="true"
                  ></i>
                  <div class="orange-line"></div>
                </div>
                <div class="details p-4">
                  Mabsuc. Agbor, Delta State, Nigeria.
                  <div class="white-line"></div>
                </div>
              </div>

              <div class="info d-flex mt-3">
                <div class="icon">
                  <i
                    class="fa fa-phone text-success p-3"
                    aria-hidden="true"
                  ></i>
                  <div class="orange-line"></div>
                </div>
                <div class="details p-4">
                  09114906106
                  <div class="white-line"></div>
                </div>
              </div>

              <div class="info d-flex mt-3">
                <div class="icon">
                  <i
                    class="fa fa-tablet-alt text-success p-3"
                    aria-hidden="true"
                  ></i>
                  <div class="orange-line"></div>
                </div>
                <div class="details p-4">
                  +234 911 490 6106
                  <div class="white-line"></div>
                </div>
              </div>

              <div class="info d-flex mt-3">
                <div class="icon">
                  <i
                    class="fa fa-envelope text-success p-3"
                    aria-hidden="true"
                  ></i>
                  <div class="orange-line"></div>
                </div>
                <div class="details p-4">
                  <a href="mailto:successjonathan567@gmail.com"
                    >successjonathan567@gmail.com</a
                  >
                  <div class="white-line"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="who-we-are">
        <h3>WHO WE ARE</h3>
        <div class="line"></div>

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12">
            At Mabsuc, we believe learning has the power to transform lives. <br>
            Born from a passion for innovation a commitment to accessible <br>
            education, Mabsuc is your gateway to a world of knowledge, <br>
            designed to empower learner of all ages, background and aspirations
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12">
            <p>Print Design 50<sup>%</sup></p>
            <div class="range">
              <div class="color1"></div>
            </div>

            <p>Creative Team 70<sup>%</sup></p>
            <div class="range">
              <div class="color2"></div>
            </div>

            <p>Programmers 60<sup>%</sup></p>
            <div class="range">
              <div class="color3"></div>
            </div>

            <p>SEO 45<sup>%</sup></p>
            <div class="range">
              <div class="color4"></div>
            </div>

            <p>Content Development 35<sup>%</sup></p>
            <div class="range">
              <div class="color5"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="gallery mt-5">
          <h3 class="text-center">OUR GALLERY</h3>
          <div class="line mx-auto"></div>

          <div class="row mt-5">
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
              <img src="assets/images/womanwithlabtop.jpg" class="img-fluid rounded-top" alt=""/>      
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
              <img src="assets/images/womanbackground.jpg" class="img-fluid rounded-top" alt=""/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-7 col-md-8 col-sm-12 mt-5">
              <img src="assets/images/keyboard-bg.jpg" class="img-fluid rounded-top" alt=""/>
            </div>
            <div class="col-lg-5 col-md-4 col-sm-12 mt-5">
              <img src="assets/images/laptop-image.jpg" class="img-fluid rounded-top" alt=""/>          
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid row">
          <div class="col-12 mx-auto position-relative mt-5" style="height: 500px !important;">
              <iframe class="w-100 h-100" loading="lazy" allowfullscreen src="https://maps.google.com/maps?q=SANTA+MONICA+PLAZA%2C+ABGOR&output=embed">
              </iframe>
          </div>
        </div>
      

      <!-- Footer -->
       <?php include "footer.php" ?>

    <!-- Boostrap js -->
    <script src="assets/js/bootstrap.bundle.js"></script>
  </body>
</html>
