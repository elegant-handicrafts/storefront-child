<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' ?>" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/style.css' ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Lalita's - Home</title>
</head>

<body>

    <!-- Header section -->
    <!-- <header class="header-section">
        <div class="container-fluid">
            <div class="site-logo">
                <h3>Loulou</h3>
            </div>
            <div class="nav-switch">
                <i class="fa fa-bars"></i>
            </div>
            <div class="header-right">
                <a href="#" class="search"><i class="bi bi-search"></i></a>
                <a href="#" class="card-bag"><i class="bi bi-bag"></i></a>
                <a href="#" class="user"><i class="bi bi-person"></i></a>
            </div>
            <ul class="main-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Collection</a></li>
                <li><a href="#" class="border-bottom">LookBook</a></li>
                <li><a href="#">About</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </header> -->
    <!-- Header section end -->


    <!-- Hero section -->

    <section class="hero-section set-bg section-gap-bottom"
        data-setbg="<?php echo get_stylesheet_directory_uri() . '/assets/img/slider-img-tmp-2.jpg' ?>">
        <div class="hero-item">
            <div class="hero-content">
                <!-- <div class="logo-wrapper mb-4">
                    <img class="img-fluid" src="img/logo-head-removed-bg.png" />
                </div> -->
                <h2>WEAR THE BEST</h2>
                <h4>Handmade & High Quality</h4>

                <!-- <div class="p-relative">
                    <div class="play-btn">
                        <h6 id="demo3">Check out the collection•</h6>
                    </div>
                    <i class="bi bi-play-fill"></i>
                </div> -->
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- About section -->
    <section class="about-section section-gap">
        <div class="container">
            <div class="about-title">
                <h2 class="main-title">When casual <span>and</span><br /> comfort <span>become</span> one
                    <br />
                    <span>for</span> you
                </h2>
            </div>

            <div class="about-images">
                <div class="d-flex row justify-content-center">
                    <div class="col-md-3 child">
                        <img class="img-fluid"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-1.jpg' ?>"
                            alt="image" />
                    </div>
                    <div class="col-md-5 child">
                        <img class="img-fluid"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-3-3.jpg' ?>"
                            alt="image" />
                    </div>
                    <div class="col-md-3 child">
                        <img class="img-fluid"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-2.jpeg' ?>"
                            alt="image" />
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- About section end -->

    <!-- Video section -->
    <section class="video-section section-gap">
        <div class="container">
            <div class="video-section-div">
                <div class="row">
                    <div class="col-lg-9">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/discount.jpg' ?>"
                            alt="video" />
                        <!-- <div class="p-relative">
                            <div class="play-btn">
                                <h6 id="video_text">Brand Collection Summer'23 Movie•</h6>
                            </div>
                            <i class="bi bi-play-fill"></i>
                        </div> -->
                    </div>

                    <div class="col-lg-3">
                        <div class="video-title mt-5">
                            <h2 class="main-title">From Fleece <br /> to <span>Fashion</span> </h2>
                            <p class="small-title text-right mt-3">
                                Cozy Journey of Woolen Clothes Production
                            </p>
                            <p class="small-title text-right mt-3">
                                Skillfully knitted by local women artisans
                            </p>
                            <!-- <p class="content">
                                Skillfully knitted and produced by women artisan; high-quality, beautifully crafted product.
                            </p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video section end -->

    <!-- What's New section -->
    <section class="what-new-section section-gap">
        <div class="container p-0">
            <div class="what-new-div">
                <div class="row">
                    <div class="col-5">
                        <div class="what-new-title">
                            <h6 class="small-title">What's new ?</h6>
                            <h2 class="main-title">New <br />Normal, <br /><span>New Style</span></h2>
                            <p class="content">
                                Introducing our latest collection of woolen beanies! Made from the softest,
                                highest-quality wool,
                                these beanies are the perfect accessory for any cold-weather outfit. With a
                                range of
                                colors and styles to choose from,
                                you're sure to find the perfect beanie to suit your unique taste and
                                personality.
                            </p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="big-img-wrapper">
                            <img class="big-img img-fluid"
                                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-3-2.jpg' ?>"
                                alt="big" />
                        </div>
                        <div class="small-img-wrapper">
                            <img class="small-img img-fluid"
                                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/product-2.jpeg' ?>"
                                alt="small" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What's New section end -->

    <!-- Featured section -->
    <section class="featured-section section-gap">
        <div class="container">
            <div class="featured-div">
                <div class="row align-items-center">
                    <div class="col-sm-7">
                        <div class="featured-img-section">
                            <img class="featured-img img-fluid"
                                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-1.jpg' ?>"
                                alt="big" />
                            <!-- <img class="featured-img" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/product-04.jpg' ?>" alt="big" /> -->
                            <i class="bi bi-plus-circle-fill"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="featured-title">
                            <img class="img-fluid"
                                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-2.jpeg' ?>"
                                alt="small" />
                            <!-- <img class="" src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/product-5.jpg' ?>" alt="big" /> -->
                            <p class="content mb-0">
                                Mix and match with any outfits. Build your style with our premium quality
                                handmade
                                beanie.
                                <br /><span class="arrow"> Simplicity and comfort</span> never went out of
                                trend anyway.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Featured section end -->

    <!-- Featured Item section -->
    <section class="featured-item-section section-gap">
        <div class="featured-item-div">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="featured-item-img-section">
                        <img class="featured-item-img"
                            src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/slider-img-tmp.jpg' ?>"
                            alt="big" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="featured-content">
                        <h6 class="small-title">Stylish Hats & Beanies</h6>
                        <h2 class="main-title">Grey <span>Beanie <br /> Set</span> 2023</h2>
                        <p class="content mb-0">
                            Introducing our hand-knitted woolen beanie, the perfect accessory for keeping
                            warm and
                            stylish during the colder months. Each beanie is made with high-quality wool
                            yarn, carefully
                            hand-selected for its softness and durability.
                        </p>
                        <p class="content mb-0">
                            Crafted by skilled artisans, our beanies are knitted with meticulous attention
                            to detail,
                            resulting in a cozy and comfortable fit that will last for years to come. The
                            thick,
                            double-layered design ensures maximum warmth, while the classic beanie style
                            provides a
                            timeless look that never goes out of fashion.
                            <!-- So why settle for an ordinary beanie when you can have a handcrafted masterpiece? Order your hand-knitted woolen beanie today and experience the comfort, quality, and style that only a handmade product can provide. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Featured Item section end -->

    <!-- Newsletter Item section -->
    <section class="newsletter-item-section section-gap">
        <div class="container">
            <div class="newsletter-content">
                <h6 class="small-title">shop now</h6>
                <h2 class="main-title">Visit our shop for <br />the <span>Latest releases</span></h2>
                <h6 class="small-title"><b>_</b></h6>
            </div>
        </div>
    </section>
    <!--Subscribe Item section end -->

    <!-- Footer top section -->
    <section class="footer-top-section home-footer pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-12 mb-md-5">
                    <div class="footer-widget about-widget">
                        <div class="footer-logo d-flex flex-column align-items-center">
                            <div class="logo-wrapper mb-4">
                                <img class="img-fluid"
                                    src="<?php echo get_stylesheet_directory_uri() . '/assets/img/logo-head-removed-bg.png' ?>" />
                            </div>
                            <h3>Lalita Handmade Collections</h3>
                            <h4>Wear The Best</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 offset-lg-2">
                    <div class="footer-widget">
                        <h6 class="fw-title">useful Links</h6>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Shop</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h6 class="fw-title">Contact</h6>
                        <div class="text-box">
                            <p>Lalita Handmade Collections Pvt. Ltd.</p>
                            <p>Khauma, Bhaktapur, Nepal</p>
                            <p>9840252557</p>
                            <p>eleganthandicreafts02@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer top section end -->

    <!-- Footer section -->
    <footer class="footer-section">
        <div class="container d-flex justify-content-center">
            <p class="copyright">
                Copyright &copy;
                <script>document.write(new Date().getFullYear());</script> All rights reserved</a>
            </p>
        </div>
    </footer>
    <!-- Footer section end -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/main.js' ?>"></script>
</body>

</html>