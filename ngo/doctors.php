<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sih";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
    die("can't connect to database" . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $tick = $_POST['tick'];
    $a = 1;
    $query2 = "SELECT `applied` FROM `help` WHERE `sr.no` = '$tick'";
    $result2 = mysqli_query($conn, $query2);
    if(!$result2){
        die("Error" . mysqli_error($conn));
    }
    else{
        $row1 = mysqli_fetch_assoc($result2);
        $string_version = implode(',', $row1);
        //echo $string_version;
        $a = $a + (int)$string_version;
        $query3 = "UPDATE help SET applied = '$a' WHERE `sr.no` = '$tick'";
        $result3 = mysqli_query($conn, $query3);
        if(!$result3){
            die("Error" . mysqli_error($conn));
        }
    }
    
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>ESIC</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">ESIC</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_1.jpg);">
        <div class="container">
            <div class="row align-items-center site-hero-inner justify-content-center">
                <div class="col-md-8 text-center">

                    <div class="mb-5 element-animate">
                        <h1>Treat the patients who are in need of your help.</h1>
                        <p>Discover &amp; connect with great places around the world.</p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- END section -->

    <section class="slider-wrap site-section">
        <div class="container">
            <h3>Here's the list of locations where medical facilities are required.</h3>
            <br>
            <form action="" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary" name="submit" value="Select desired options below and click here">
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Discription</th>
                        <th>Dt. of requiremrnt</th>
                        <th>Applied</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM help WHERE type = 2";
                        $result = mysqli_query($conn, $query);
                        if(!$result){
                            die("Someting went wrong!".mysqli_error($conn));
                        }
                        else{
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    $count = $row['sr.no'];
                                    echo "<tr>";
                                    echo "<td>" . $row['location'] . "</td>";
                                    echo "<td>" . $row['disc'] . "</td>";
                                    echo "<td>" . $row['date'] . "</td>";
                                    echo "<td>" . $row['applied'] . "</td>>";
                                    echo "<td><input type='checkbox' class='form-group' name='tick' value = '" . $count . "'></td>";
                                    echo "</tr>";
                                }
                            }
                        }
                     ?>
                </tbody>
            </table>
            </form>
        </div>
    </section>
    <!-- END section -->


    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="mb-4">About</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quod!</p>
                    <ul class="list-unstyled ">
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span class="">34 Street Name, City Name Here, United States</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span class="">+1 242 4942 290</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span class="">info@yourdomain.com</span></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3 class="mb-4">Links</h3>
                    <ul class="list-unstyled ">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Destination</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="mb-4">Latest Blog</h3>
                    <ul class="list-unstyled blog-entry-footer">
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>7 Best Destination in The World</h3>
                            </a>
                        </li>
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>4 Hour Work Week And The Rest Is Travel</h3>
                            </a>
                        </li>
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>Why You Should Travel Today</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Connect</h3>
                    <p>
                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>

    <!-- END footer -->

    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    <script src="js/main.js"></script>
</body>

</html>
