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
     <link rel="stylesheet" href="assets/css/course-profile.css">
     <link rel="stylesheet" href="assets/css/reviews.css">
    <title>Web Development</title>
</head>
<body>
    <!-- Navbar -->

    <?php include "navbar.php" ?>

    <div class="container-fluid mt-5">
        <div class="header">
            <h2>Web Development</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 mt-5 colum1">
                <div class="card">
                    <img class="card-img-top" src="assets/images/web-laptop.jpg" alt="Title" />
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-text">
                            <div class="course-detail">
                                <div class="icon"><i class="fa fa-square" aria-hidden="true"></i></div>
                                <div class="type">Categories :</div>
                                <div class="topic"><b>Backend</b></div>
                            </div>
                            <div class="course-detail">
                                <div class="icon"><i class="fas fa-square    "></i></div>
                                <div class="type">Lessons :</div>
                                <div class="topic"><b>3</b></div>
                            </div>
                            <div class="course-detail">
                                <div class="icon"><i class="fas fa-square    "></i></div>
                                <div class="type">Quizzes :</div>
                                <div class="topic"><b>1</b></div>
                            </div>
                            <div class="course-detail">
                                <div class="icon"><i class="fas fa-square    "></i></div>
                                <div class="type">Duration :</div>
                                <div class="topic"><b>3 months 4hours</b></div>
                            </div>
                        </p>
                    </div>
                </div>

                <div class="social-share">
                    <h4><strong>SOCIAL SHARE</strong></h4>
                    <div class="social-icon p-2">
                        <i class="fab fa-facebook bg-light text-primary fa-3x"></i>
                        <i class="fab fa-linkedin bg-light text-primary fa-3x"></i>
                        <i class="fab fa-youtube bg-light text-danger fa-3x"></i>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 column2">
                <div class="instructor-course">
                    <h4>Web Development</h4>
                    <img src="assets/images/teachermale.jpg" width="100px" height="100px" alt="">
                    <div class="profile">
                      <!-- <img src="assets/images/teachermale.jpg" width="100px" height="100px" alt=""> -->
                      <div class="">
                         JIM MORRISON  <i class="fas fa-square    "></i> 7 Curriculum
                      </div>
                      <div class="star d-flex">
                        <i class="fas fa-star text-warning    "></i>
                        <i class="fas fa-star text-warning    "></i>
                        <i class="fas fa-star text-warning    "></i>
                        <i class="fas fa-star text-warning    "></i>
                        <i class="fas fa-star text-warning    "></i>
                      </div>
                      (2 Reviews)
                    </div>
                    <div class="amount">$760</div>
                    <button class="login-to-take-course-button">Login To Take Course</button>
                </div>

                <div class="select mt-3">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-reviews" aria-selected="true">Reviews</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Instructors</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <div class="container-fluid">
                        <h3>Reviews</h3>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <h5>Average Rating</h5>
                                    <div class="rating-number">
                                        5.0
                                    </div>
                                    <div class="star">
                                        <i class="fas fa-star    "></i>
                                        <i class="fas fa-star    "></i>
                                        <i class="fas fa-star    "></i>
                                        <i class="fas fa-star    "></i>
                                        <i class="fas fa-star    "></i>
                                    </div>
                                    <div class="reviews">
                                        2 Reviews
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="details">
                                        <h5>Details</h5>
                
                                        <div class="rate">
                                            <div class="star-number">1 Star</div>
                                            <div class="graph"></div>
                                            <div class="star-number">0</div>
                                        </div>
                                        <div class="rate">
                                            <div class="star-number">2 Stars</div>
                                            <div class="graph"></div>
                                            <div class="star-number">0</div>
                                        </div><div class="rate">
                                            <div class="star-number">3 Stars</div>
                                            <div class="graph"></div>
                                            <div class="star-number">0</div>
                                        </div><div class="rate">
                                            <div class="star-number">4 Stars</div>
                                            <div class="graph"></div>
                                            <div class="star-number">0</div>
                                        </div><div class="rate">
                                            <div class="star-number">5 Stars</div>
                                            <div class="graph"><div class="rank"></div></div>
                                            <div class="star-number">2</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="comment">
                                <div class="col-12">
                                    <div class="student-card p-3">
                                      <div class="align-items-center">
                                        <div class="col-12 student-img bg-light d-flex align-items-center justify-content-center me-3">
                                          <i class="fas fa-user text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                          <h5 class="mb-1"><b>John Doe</b> Says:</h5>
                                          <div class="time">22 Wed at 10:23 am</div>
                                          <div class="stars text-warning">
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                          </div>
                                          <div class="flex-wrap align-items-center student-info">
                                            <span class="me-3">
                                                Mabsuc is one of the best e-learning website i have ever use and still using,
                                                Friendly to use and still offer free courses.
                                            </span>
                                          </div>
                                          <hr>
                                        </div>
                                      </div>
                                    </div>
                                    <button class="btn btn-success btn-sm" id="reply-btn">
                                        Reply
                                    </button>
                                </div>
                
                
                                <div class="col-12">
                                    <div class="student-card p-3">
                                      <div class="align-items-center">
                                        <div class="col-12 student-img bg-light d-flex align-items-center justify-content-center me-3">
                                          <i class="fas fa-user text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                          <h5 class="mb-1"><b>John Doe</b> Says:</h5>
                                          <div class="time">22 Wed at 10:23 am</div>
                                          <div class="stars text-warning">
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                          </div>
                                          <div class="flex-wrap align-items-center student-info">
                                            <span class="me-3">
                                                Mabsuc is one of the best e-learning website i have ever use and still using,
                                                Friendly to use and still offer free courses.
                                            </span>
                                          </div>
                                          <hr>
                                        </div>
                                      </div>
                                    </div>
                                    <button class="btn btn-success btn-sm" id="reply-btn">
                                        Reply
                                    </button>
                                </div>
                
                
                                <div class="col-12">
                                    <div class="student-card p-3">
                                      <div class="align-items-center">
                                        <div class="col-12 student-img bg-light d-flex align-items-center justify-content-center me-3">
                                          <i class="fas fa-user text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1">
                                          <h5 class="mb-1"><b>John Doe</b> Says:</h5>
                                          <div class="time">22 Wed at 10:23 am</div>
                                          <div class="stars text-warning">
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                            <i class="fas fa-star    "></i>
                                          </div>
                                          <div class="flex-wrap align-items-center student-info">
                                            <span class="me-3">
                                                Mabsuc is one of the best e-learning website i have ever use and still using,
                                                Friendly to use and still offer free courses.
                                            </span>
                                          </div>
                                          <hr>
                                        </div>
                                      </div>
                                    </div>
                                    <button class="btn btn-success btn-sm" id="reply-btn">
                                        Reply
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade d-flex rate" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                      <img src="assets/images/teachermale.jpg" alt="">
                      <div class="name">
                        JIM MORRISON <br>
                        Chef Programmers
                        <div class="icon">
                          <i class="fab fa-facebook"></i>
                          <i class="fab fa-twitter"></i>
                          <i class="fab fa-instagram"></i>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include "footer.php" ?>

    <script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>