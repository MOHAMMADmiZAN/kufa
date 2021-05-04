<?php require_once 'includes/header.php';
$slug = $_GET['slug'];
$currentUrl = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (isset($kufaDataBase)) {
    $slugSel = "SELECT * FROM `portfolios` WHERE `slug` = '$slug'";
    $slugSelQuery = $kufaDataBase->Query($slugSel);
    $slugSelAssoc = $slugSelQuery->fetch_assoc();
//    if ($slugSelQuery === True) {
//        print_r('done');
//    } else {
//        echo 'not';
//    }


}

?>
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
                            <a href="index.php" class="navbar-brand s-logo-none"><img
                                        src="assets/img/logo/s_logo.png"
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

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="breadcrumb-content text-center">
                        <h2>Portfolio Single POST</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">PORTFOLIO DETAILS</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- portfolio-details-area -->
    <section class="portfolio-details-area pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="single-blog-list">
                        <div class="blog-list-thumb mb-35">
                            <img src="dashboard/upload/portfolio/feature/<?= $slugSelAssoc['feature'] ?>" alt="img">
                        </div>
                        <div class="blog-list-content blog-details-content portfolio-details-content">
                            <span><?= $slugSelAssoc['name'] ?></span>
                            <h2>Consectetur neque elit quis nunc cras elementum</h2>
                            <p><?= nl2br($slugSelAssoc['body']) ?></p>
                            <blockquote>
                                Elementum pretiumi Nullam justo efficitur trist ligula pellentesqe ipsum quisque
                                augue psum
                                vehicula tellus tellus vitae
                                condimem maximus.
                            </blockquote>
                            <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                condimem egestliberos dolor auctor
                                tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo
                                efficitur, trist ligula pellentesque
                                ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.Express dolor sit amet,
                                consectetur adipiscing elit. Cras
                                sollicitudin, tellus vitae condimem egestliberos dolor auctor tellus, eu consectetur
                                neque elit quis nunc.</p>
                            <div class="portfolio-details-img">
                                <div class="row">
                                    <div class="col-md-6">
                                        <img src="assets/img/images/portfolio_details01.jpg" alt="img">
                                    </div>
                                    <div class="col-md-6">
                                        <img src="assets/img/images/portfolio_details02.jpg" alt="img">
                                    </div>
                                </div>
                            </div>
                            <p>Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                condimem
                                egestliberos dolor auctor
                                tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo
                                efficitur,
                                trist ligula pellentesque
                                ipsum. Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the
                                1960s withs
                                the release of Letraset
                                sheets containing Lorem Ipsum passags, and more recently with desktop publishing
                                software
                                like Aldus PageMaker including
                                versions.</p>
                            <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin, tellus vitae
                                condimem
                                egestliberos dolor auctor
                                tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo
                                efficitur,
                                trist ligula pellentesque
                                ipsum. Quisque thsr augue ipsum, vehicula tellus maximus.</p>
                            <div class="blog-list-meta">
                                <ul>
                                    <li class="blog-post-date">
                                        <div class="blog-details-tag">
                                            <i class="fas fa-tags"></i>
                                            <a href="#">Warehouse</a>
                                            <a href="#">Ocean</a>
                                            <a href="#">Freight</a>
                                            <a href="#">Railway</a>
                                        </div>
                                    </li>
                                    <li class="blog-post-share">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $currentUrl ?>" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="avatar-post mt-70 mb-60">
                            <ul>
                                <li>
                                    <div class="post-avatar-img">
                                        <img src="assets/img/blog/post_avatar_img.png" alt="img">
                                    </div>
                                    <div class="post-avatar-content">
                                        <h5>Thomas Herlihy</h5>
                                        <p>Vehicula dolor amet consectetur adipiscing elit. Cras sollicitudin,
                                            tellus vitae
                                            condimem
                                            egestliberos dolor auctor
                                            tellus.</p>
                                        <div class="post-avatar-social mt-15">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $currentUrl ?>"><i
                                                        class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="blog-next-prev">
                            <ul>
                                <li class="blog-prev">
                                    <a href="#"><img src="assets/img/icon/left_arrow.png" alt="img">Previous
                                        Post</a>
                                </li>
                                <li class="blog-next">
                                    <a href="#">Next Post<img src="assets/img/icon/right_arrow.png" alt="img"></a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio-details-area-end -->

</main>
<!-- main-area-end -->

<?php require_once 'includes/footer.php' ?>