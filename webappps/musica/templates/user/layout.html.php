<?php
  $products = new Database('product_0117');


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title><?=$title?></title>

    <!-- Favicon -->
    <link rel="img" href="../img/core-img/compact-disc.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="../style.css">

</head>

<body>
    <!-- ##### Preloader ##### -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="circle-preloader">
            <img src="../img/core-img/compact-disc.png" alt="">
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">

                        <!-- Nav brand -->
                        <a href="index.php" class="nav-brand"><img src="../img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">HOME</a>
                                      <ul class="dropdown">
                                        <li><a href="term">TERMS</a></li>
                                        <li><a href="http://maps.google.com/maps?q=27.6958807,85.3294043" target="_blank">LOCATION</a></li>
                                      </ul>
                                    </li>



                                    <li><a href="Services">SERVICES</a>
                                        <ul class="dropdown">
                                            <li><a href="#">CAMERAS &amp; LENS</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Camera</a>
                                                        <ul class="dropdown">
                                                            <?php $cameras = $products->find('p_type', 3);
                                                                    foreach ( $cameras as $camera) {?>
                                                            <li><a href="productview?pid=<?php echo $camera['pid'];?>"><?php echo $camera['pname']; ?></a></li>
                                                              <?php }?>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"> LENS</a>
                                                        <ul class="dropdown">
                                                          <?php $lenses = $products->find('p_type', 5);
                                                                  foreach ( $lenses as $lens) {?>
                                                          <li><a href="productview?pid=<?php echo $lens['pid'];?>"><?php echo $lens['pname']; ?></a></li>
                                                            <?php }?>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><a href="#">LIGHTS &amp; GRIPS</a>
                                                <ul class="dropdown">
                                                  <li><a href="#"> LIGHTS</a>
                                                      <ul class="dropdown">
                                                        <?php $lights = $products->find('p_type', 1);
                                                                foreach ( $lights as $light) {?>
                                                        <li><a href="productview?pid=<?php echo $light['pid'];?>"><?php echo $light['pname']; ?></a></li>
                                                          <?php }?>
                                                      </ul>
                                                  </li>
                                                  <li><a href="#"> GRIPS</a>
                                                      <ul class="dropdown">
                                                        <?php $grips = $products->find('p_type', 2);
                                                                foreach ( $grips as $grip) {?>
                                                        <li><a href="productview?pid=<?php echo $grip['pid'];?>"><?php echo $grip['pname']; ?></a></li>
                                                          <?php }?>
                                                      </ul>
                                                  </li>
                                                </ul>
                                            </li>
                                                <li>
                                                    <a href="#">POST PRODUCTION</a>
                                                        <ul class="dropdown">
                                                          <li><a href="color">COLOR CORRECTION</a></li>
                                                          <li><a href="multiedit">MULTI-EDITING SUIT</a></li>
                                                          <li><a href="dubbing">DUBBING</a></li>
                                                        </ul>
                                                </li>
                                        </ul>

                                    </li>


                                    <li><a href="rent">OREDER RENT</a></li>
                                    <li><a href="about-us">ABOUT US</a></li>
                                    <li><a href="contact">CONTACT</a></li>
                                </ul>

                                <!-- Social Button -->
                                <div class="top-social-info">

                                    <a href="https://www.facebook.com/multimatte/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>


                                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                </div>

                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->

    <!-- ##### Hero Area End ##### -->

    <!-- ##### About Us Area Start ##### -->

    <!-- ##### About Us Area End ##### -->
    <?=$output?>
    <!-- ##### Upcoming Shows Area Start ##### -->

    <!-- ##### Upcoming Shows Area End ##### -->

    <!-- ##### Music Player Area Start ##### -->

    <!-- ##### Featured Album Area End ##### -->

    <!-- ##### Music Artists Area Start ##### -->

    <!-- ##### Music Artists Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">

                <!-- Footer Widget Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-widget-area mb-100">
                        <a href="#"><img src="../img/core-img/logo2.png" alt=""></a>
                        <p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |  <a href="https://colorlib.com" target="_blank"></a><a href="htpp://www.camerarental.com">MULTI MATTE</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>About</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Terms &amp; Policy</a></li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Social</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href="https://www.facebook.com/multimatte/">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Snapchat</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Mail</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li>multimatte@gmail.com</li>

                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-4 col-xl-2">
                    <div class="footer-widget-area mb-100">
                        <div class="widget-title">
                            <h4>Location</h4>
                        </div>
                        <nav>
                            <ul class="footer-nav">
                                <li><a href=" http://maps.google.com/maps?q=27.6958807,85.3294043">Anamnagar-31, Kathmandu</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
</div>
</div>
                <!-- Footer Widget Area -->
                   </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
</body>

</html>
