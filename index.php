<?php
require_once 'dashboard/inc/dbconfig.php';
$social = "SELECT * FROM `socials` WHERE `status` LIKE 1 LIMIT 5";
$services = "SELECT * FROM `services` WHERE `status` LIKE 1 LIMIT 6";
$counters = "SELECT * FROM `counters`  LIMIT 4 ";
$brands = "SELECT * FROM `brands`";
$feedback = "SELECT * FROM `testimonials`";
if (isset($kufaDataBase)) {
    $socialQuery = $kufaDataBase->Query($social);
    $servicesQuery = $kufaDataBase->Query($services);
    $countQuery = $kufaDataBase->Query($counters);
    $brandQuery = $kufaDataBase->Query($brands);
    $feedbackQuery = $kufaDataBase->Query($feedback);
    $kufaDataBase->close();
}

?>


<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .l-46 {
            line-height: 46px;
        }

        .h-fix {
            height: fit-content;
        }
    </style>
</head>
<body class="theme-bg">

<!-- preloader -->
<div id="preloader">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="object" id="object_one"></div>
            <div class="object" id="object_two"></div>
            <div class="object" id="object_three"></div>
        </div>
    </div>
</div>
<!-- preloader-end -->

<!-- header-start -->
<header>
    <div id="header-sticky" class="transparent-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg">
                            <a href="index.php" class="navbar-brand logo-sticky-none"><img
                                        src="assets/img/logo/logo.png" alt="Logo"></a>
                            <a href="index.php" class="navbar-brand s-logo-none"><img src="assets/img/logo/s_logo.png"
                                                                                      alt="Logo"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                <span class="navbar-icon"></span>
                                <span class="navbar-icon"></span>
                                <span class="navbar-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                </ul>
                            </div>
                            <div class="header-search">
                                <a href="#"><i class="fas fa-search"></i></a>
                            </div>
                            <div class="header-btn">
                                <a href="#" class="btn">HIRE <span>NOW</span></a>
                                <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas-start -->
    <div class="extra-info">
        <div class="close-icon menu-close">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <a href="index.php">
                <img src="assets/img/logo/logo.png" alt=""/>
            </a>
        </div>
        <div class="side-info mb-30">
            <div class="contact-list mb-30">
                <h4>Office Address</h4>
                <p>123/A, Miranda City Likaoli
                    Prikano, Dope</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Phone Number</h4>
                <p>+0989 7876 9865 9</p>
                <p>+(090) 8765 86543 85</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Email Address</h4>
                <p><a href="#" class="__cf_email__" data-cfemail="81e8efe7eec1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</a>
                </p>
                <p><a href="#" class="__cf_email__" data-cfemail="204558414d504c450e4d41494c6048554d0e434f4d">[email&#160;protected]</a>
                </p>
            </div>
        </div>
        <div class="side-instagram">
            <a href="#"><img src="assets/img/project/p1.jpg" alt="img"></a>
            <a href="#"><img src="assets/img/project/p2.jpg" alt="img"></a>
            <a href="#"><img src="assets/img/project/p3.jpg" alt="img"></a>
            <a href="#"><img src="assets/img/project/p4.jpg" alt="img"></a>
            <a href="#"><img src="assets/img/project/p5.jpg" alt="img"></a>
            <a href="#"><img src="assets/img/project/p1.jpg" alt="img"></a>
        </div>
        <div class="social-icon-right mt-20">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- offcanvas-end -->
</header>
<!-- header-end -->

<!-- main-area -->
<main>

    <!-- banner-area -->
    <section id="home" class="banner-area banner-bg fix">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6">
                    <div class="banner-content">
                        <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                        <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will Smith</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.6s">I'm Will Smith, professional web developer with
                            long time experience in this field​.</p>
                        <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                            <ul>
                                <?php
                                if (isset($socialQuery)):
                                    foreach ($socialQuery as $index => $social) { ?>
                                        <li><a href="//<?= $social['link'] ?>" target="_blank"><i
                                                        class="<?= $social['icon'] ?> l-46"></i></a>
                                        </li>

                                    <?php } endif; ?>
                            </ul>
                        </div>
                        <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                    <div class="banner-img text-right">
                        <img src="assets/img/banner/banner_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape"><img src="assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
    </section>
    <!-- banner-area-end -->

    <!-- about-area-->
    <section id="about" class="about-area primary-bg pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/banner/banner_img2.png" title="me-01" alt="me-01">
                    </div>
                </div>
                <div class="col-lg-6 pr-90">
                    <div class="section-title mb-25">
                        <span>Introduction</span>
                        <h2>About Me</h2>
                    </div>
                    <div class="about-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, sed repudiandae odit
                            deserunt, quas
                            quibusdam necessitatibus nesciunt eligendi esse sit non reprehenderit quisquam asperiores
                            maxime
                            blanditiis culpa vitae velit. Numquam!</p>
                        <h3>Education:</h3>
                    </div>
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2020</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>PHD of Interaction Design &amp; Animation</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s"
                                         data-wow-duration="2s" role="progressbar" style="width: 65%;"
                                         aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2016</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>Master of Database Administration</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s"
                                         data-wow-duration="2s" role="progressbar" style="width: 75%;"
                                         aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2010</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>Bachelor of Computer Engineering</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s"
                                         data-wow-duration="2s" role="progressbar" style="width: 85%;"
                                         aria-valuenow="85" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                    <!-- Education Item -->
                    <div class="education">
                        <div class="year">2005</div>
                        <div class="line"></div>
                        <div class="location">
                            <span>Diploma of Computer</span>
                            <div class="progressWrapper">
                                <div class="progress">
                                    <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s"
                                         data-wow-duration="2s" role="progressbar" style="width: 90%;"
                                         aria-valuenow="90" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Education Item -->
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- Services-area -->
    <section id="service" class="services-area pt-120 pb-50">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-70">
                        <span>WHAT WE DO</span>
                        <h2>Services and Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php if (isset($servicesQuery)):
                    foreach ($servicesQuery as $index => $service):?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="<?= $service['icon'] ?>"></i>
                                <h3><?= $service['title'] ?></h3>
                                <p>
                                    <?= $service['details'] ?>
                                </p>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <!-- Services-area-end -->

    <!-- Portfolios-area -->
    <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-70">
                        <span>Portfolio Showcase</span>
                        <h2>My Recent Best Works</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 pitem">
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <img src="assets/img/images/1.jpg" alt="img">
                        </div>
                        <div class="speaker-overlay">
                            <span>Design</span>
                            <h4><a href="portfolio-single.php">Hamble Triangle</a></h4>
                            <a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pitem">
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <img src="assets/img/images/2.jpg" alt="img">
                        </div>
                        <div class="speaker-overlay">
                            <span>Video</span>
                            <h4><a href="portfolio-single.php">Dark Beauty</a></h4>
                            <a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pitem">
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <img src="assets/img/images/3.jpg" alt="img">
                        </div>
                        <div class="speaker-overlay">
                            <span>Audio</span>
                            <h4><a href="portfolio-single.php">Gilroy Limbo.</a></h4>
                            <a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pitem">
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <img src="assets/img/images/4.jpg" alt="img">
                        </div>
                        <div class="speaker-overlay">
                            <span>Design</span>
                            <h4><a href="portfolio-single.php">Ipsum which</a></h4>
                            <a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pitem">
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <img src="assets/img/images/5.jpg" alt="img">
                        </div>
                        <div class="speaker-overlay">
                            <span>Creative</span>
                            <h4><a href="portfolio-single.php">Eiusmod tempor</a></h4>
                            <a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pitem">
                    <div class="speaker-box">
                        <div class="speaker-thumb">
                            <img src="assets/img/images/6.jpg" alt="img">
                        </div>
                        <div class="speaker-overlay">
                            <span>UX/UI</span>
                            <h4><a href="portfolio-single.php">again there</a></h4>
                            <a href="portfolio-single.php" class="arrow-btn">More information <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-area-end -->


    <!-- fact-area -->
    <section class="fact-area">
        <div class="container">
            <div class="fact-wrap">
                <div class="row justify-content-between">
                    <?php if (isset($countQuery)):
                        foreach ($countQuery as $index => $value):
                            ?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                                <div class="fact-box text-center mb-50">
                                    <div class="fact-icon">
                                        <i class="<?= $value['icon'] ?>"></i>
                                    </div>
                                    <div class="fact-content">
                                        <h2><span class="count"><?= $value['number'] ?></span></h2>
                                        <span><?= $value['title'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial-area primary-bg pt-115 pb-115">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section-title text-center mb-70">
                        <span>testimonial</span>
                        <h2>happy customer quotes</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="testimonial-active">
                        <?php if (isset($feedbackQuery)):
                            foreach ($feedbackQuery as $index => $feedback):
                                ?>
                                <div class="single-testimonial text-center">
                                    <div class="testi-avatar">
                                        <img src="dashboard/upload/feedback/<?= $feedback['image']?>"
                                             alt="<?= $feedback['image'] ?>">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?= $feedback['feedback'] ?> <span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5> <?= $feedback['name'] ?></h5>
                                            <span> <?= $feedback['designation'] ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->
    <!-- testimonial-area-end -->

    <!-- brand-area -->
    <div class="barnd-area pt-100 pb-100">
        <div class="container">
            <div class="row brand-active h-fix">
                <?php
                if (isset($brandQuery)):
                    foreach ($brandQuery as $index => $brand):
                        ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="dashboard/upload/brand/<?= $brand['images'] ?>" alt="img">
                            </div>
                        </div>
                    <?php endforeach; endif; ?>

            </div>
        </div>
    </div>
    <!-- brand-area-end -->

    <!-- contact-area -->
    <section id="contact" class="contact-area primary-bg pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title mb-20">
                        <span>information</span>
                        <h2>Contact Information</h2>
                    </div>
                    <div class="contact-content">
                        <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an
                            unknown printer took a galley.</p>
                        <h5>OFFICE IN <span>NEW YORK</span></h5>
                        <div class="contact-list">
                            <ul>
                                <li><i class="fas fa-map-marker"></i><span>Address :</span>Event Center park WT 22 New
                                    York
                                </li>
                                <li><i class="fas fa-headphones"></i><span>Phone :</span>+9 125 645 8654</li>
                                <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><a href="#"
                                                                                             class="__cf_email__"
                                                                                             data-cfemail="036a6d656c43667b666e736f662d606c6e">[email&#160;protected]</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-form">
                        <form action="./dashboard/inboxResponse.php" method="POST">
                            <input type="text" placeholder="your name *" name="name" required>
                            <input type="email" placeholder="your email *" name="email" required>
                            <textarea name="message" id="message" placeholder="your message *"></textarea>
                            <button class="btn" type="submit">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->

</main>
<!-- main-area-end -->

<!-- footer -->
<footer>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="copyright-text text-center">
                        <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer-end -->


<!-- JS here -->
<script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/one-page-nav-min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/ajax-form.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/aos.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/jquery.scrollUp.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
</body>


</html>
