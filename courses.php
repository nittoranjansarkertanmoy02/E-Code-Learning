<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E-Code LEARNING </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function addToDashboard(courseId) {
            // Perform the necessary steps to add the course to the dashboard
            // You can use AJAX or any other method to communicate with the server and update the dashboard
            // Example: Send an AJAX request to a server-side script to add the course to the user's dashboard
            // Here's a basic example using jQuery AJAX:
            $.ajax({
    url: 'purchase.php',
    method: 'POST',
    data: { courseId: courseId },
    success: function(response) {
        console.log('Purchase data saved to the database');
        // Optionally, you can display a success message to the user
    },
    error: function(xhr, status, error) {
        console.log('Error saving purchase data:', error);
        // Optionally, you can display an error message to the user
    }
});
            // Redirect to the dashboard page
            window.location.href = 'dashboard.php';
        }
    </script>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i></h1>E-Code LEARNING</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="courses.php" class="nav-item nav-link active">Courses</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="registration.php" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                <h1 class="mb-5">Popular Courses</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/web.jpeg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="course_details.php" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3" onclick="addToDashboard('course_id')">Purchase</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$49.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(23)</small>
                            </div>
                            <h5 class="mb-4">C programming</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>Sayem Hossain</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/web.jpeg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Purchase</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$49.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(23)</small>
                            </div>
                            <h5 class="mb-4">C++ programming</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>Tanmoy Sarker</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/web.jpeg" alt="">
                            <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                    style="border-radius: 30px 0 0 30px;">Read More</a>
                                <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                    style="border-radius: 0 30px 30px 0;">Purchase</a>
                            </div>
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0">$49.00</h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(23)</small>
                            </div>
                            <h5 class="mb-4">Python programming</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-user-tie text-primary me-2"></i>Tanmoy Sarker</small>
                            <small class="flex-fill text-center border-end py-2"><i
                                    class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20
                                Students</small>
                        </div>
                    </div>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/web.jpeg" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Purchase</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$49.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(23)</small>
                                </div>
                                <h5 class="mb-4">Web Developmnent</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>Sayem Hossain</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20
                                    Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/web.jpeg" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Purchase</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$49.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(23)</small>
                                </div>
                                <h5 class="mb-4">Swift programming</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>Tanmoy Sarker</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20
                                    Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="course-item bg-light">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" src="img/web.jpeg" alt="">
                                <div
                                    class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Read More</a>
                                    <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                        style="border-radius: 0 30px 30px 0;">Purchase</a>
                                </div>
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h3 class="mb-0">$49.00</h3>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small>(23)</small>
                                </div>
                                <h5 class="mb-4">Native Android Developmnent</h5>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-user-tie text-primary me-2"></i>Tanmoy Sarker</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                                <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>20
                                    Students</small>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/web.jpeg" alt="">
                                    <div
                                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                            style="border-radius: 0 30px 30px 0;">Join Now</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">$49.00</h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(23)</small>
                                    </div>
                                    <h5 class="mb-4">Android Developmnent</h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-user-tie text-primary me-2"></i>Sayem Hossain</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-user text-primary me-2"></i>20
                                        Students</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/web.jpeg" alt="">
                                    <div
                                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                            style="border-radius: 0 30px 30px 0;">Purchase</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">$49.00</h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(23)</small>
                                    </div>
                                    <h5 class="mb-4">Backend Developmnent</h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-user-tie text-primary me-2"></i>Tanmoy Sarker</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-user text-primary me-2"></i>20
                                        Students</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/web.jpeg" alt="">
                                    <div
                                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Read More</a>
                                        <a href="#" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                            style="border-radius: 0 30px 30px 0;">Purchase</a>
                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h3 class="mb-0">$49.00</h3>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small>(23)</small>
                                    </div>
                                    <h5 class="mb-4">Learn mySql, php</h5>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-user-tie text-primary me-2"></i>Tanmoy Sarker</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>1.45 Hrs</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-user text-primary me-2"></i>20
                                        Students</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Courses End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">

                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">Ecode LEARNING</a>, All Right Reserved.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>

            <<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>

</html>