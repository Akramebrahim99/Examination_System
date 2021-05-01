<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <!-- Bootstrap -->
    <!-- Hover CSS library -->
    <link rel="stylesheet" href="../../css/library/hover.css">
    <!-- Hover CSS library -->
    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Permanent+Marker&family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <!-- Google fonts -->
    <!-- fonts Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- fonts Awesome -->
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS -->
    <link rel="stylesheet" href="../../css/style.css">
    <title>Add Admin</title>
</head>
<body>

    <!-- Start navbar -->

    <nav class="navbar smart-scroll navbar-expand-lg navbar-light bg-light" dir="auto">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="logo-nav">ONLINE</span>exam</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./teacher-navbar.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./exam-links.html">Exam</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./teacher-courses.html">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <!-- use "javascript:void(0)" to make link do nothing at all -->
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown">
                            Services
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Add Exam</a>
                            <a class="dropdown-item" href="./exam-links.html">Monitor Exam</a>
                            <a class="dropdown-item" href="./student-requests.html">Student Requests</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <span class="nav-switch" href="#">
                            <span class="language" id="ar">EG</span>
                            <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                            </label>
                            <span  class="language" id="eg">AR</span>
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">sing out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End navbar -->

    <!-- Model Form Add Courses -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"><!--"modal-dialog" -> make model take small size "modal-dialog-centered" -> Make model center in the page-->
            <div class="modal-content" id="box-body"><!--contain the model contact-->
                <div class="modal-header"><!--contain only X button to close the model-->
                    <h5 class="modal-title" id="staticBackdropLabel">Add admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span><!--the 'X' shape-->
                    </button>
                </div>
                <div class="modal-body"><!--contain only the input fields-->

                    <form action="" method="" class="add-admin-model">
                        <label for="admin-name"><span>Admin Name</span>
                            <input type="text" name="adminName" class="admin-name" id="admin-name" placeholder="admin name" />
                        </label>
                        <label for="admin-email"><span>Email</span>
                            <input type="email" name="adminEmail" class="admin-email" id="admin-email" placeholder="example@gmail.com" />
                        </label>
                        <label for="admin-password"><span>Password</span>
                            <input type="password" name="adminPassword" class="admin-password"  id="admin-password" placeholder="Password" />
                        </label>

                        <div class="modal-footer">
                            <button type="button" class="add-button">Add</button>
                            <button type="button" class="close-button" data-dismiss="modal">Close</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Model Form Add Courses -->

    <!-- Start Student Courses Section -->

    <section class="add-admin">

        <div class="container">
            <div class="row content" id="page-body">

                    <div  class="col-12">
                        <h4 class="page-header">Admins</h4>
                        <button class="add-admin-button"  data-toggle="modal" data-target="#staticBackdrop">Add Admin</button>
                    </div>

                    <span class="admin-info text-md-center col-8" id="admin-link">
                        <span class="admin admin-email"><a href="mailto:AhmedRadi@gmail.com"> AhmedRadi@gmail.com</a></span>
                        <span class="admin admin-password">*********</span><!-- Name of Course will print from database -->
                        <i class="fa fa-times remove" value="remove"></i>
                    </span>

                    <span class="admin-info text-md-center col-8" id="admin-link">
                        <span class="admin admin-email"><a href="mailto:AhmedRadi@gmail.com"> AhmedRadi@gmail.com</a></span>
                        <span class="admin admin-password">*********</span><!-- Name of Course will print from database -->
                        <i class="fa fa-times remove" value="remove"></i>
                    </span>

                    <span class="admin-info text-md-center col-8" id="admin-link">
                        <span class="admin admin-email"><a href="mailto:AhmedRadi@gmail.com">AhmedRadi@gmail.com</a></span>
                        <span class="admin admin-password">*********</span><!-- Name of Course will print from database -->
                        <i class="fa fa-times remove" value="remove"></i>
                    </span>

                </div>
            </div>

    </section>
    <!-- End Student Courses Section -->

    <!-- Scripts -->
        <!-- Bootstrap -->
        <script src="../../JQuery/JQuery.js"></script>
        <script src="../../javascript/bootstrap.js"></script>
        <!-- Bootstrap -->
        <!-- AOS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <!-- AOS -->
        <script src="../../JQuery/jq.js"></script>
        <script src="../../javascript/javascript.js" defer></script>
    <!-- Scripts -->
</body>
</html>