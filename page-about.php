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
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' ?> " />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/font-awesome.min.css' ?> " />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/style.css' ?> " />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/assets/css/navbar.css' ?>" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Lalita's - About Us</title>
</head>

<body>
    <!-- Hero section -->
    <section class="hero-section set-bg section-gap-bottom"
        data-setbg="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-4.jpg' ?> ">
        <?php get_template_part('template-parts/navbar') ?>
        <div class="hero-item">
            <div class="hero-content">
                <!-- <div class="logo-wrapper mb-4">
                    <img class="img-fluid" src="img/logo-head-removed-bg.png" />
                </div> -->
                <h2>About Us</h2>
                <h4>Know more about our values</h4>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <section class="what-new-section section-gap">
        <div class="container-fluid">
            <div class="what-new-div">
                <div class="row">
                    <div class="col-md-5">
                        <div class="what-new-title">
                            <h6 class="small-title">Who are we ?</h6>
                            <h2 class="main-title">New <br />in town, <br /><span>Re-defining
                                    Style,</span><br />Empowering women</h2>
                            <p class="content">
                                A group of creative women who were passionate about knitting came together to create our
                                business with the goal of producing lovely, long-lasting garments.
                                <br />Every woman, in our opinion, has the capacity to produce something unique, and we
                                want to provide them with the means to do so.
                                Our hand-knitted clothing line is designed to be both stylish and functional, perfect
                                for women who appreciate the finer things in life.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-2" style="position:relative">
                        <div class="big-who-img-wrapper">
                            <img class="img-fluid"
                                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/featured-3.jpg' ?>"
                                alt="big" />
                        </div>
                        <div class="small-who-img-wrapper">
                            <img class="img-fluid"
                                src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/beanie.jpg' ?>"
                                alt="big" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video section -->
    <section class="video-section section-gap">
        <div class="container">
            <div class="video-section-div">
                <div class="row">
                    <div class="col-lg-8" style="filter: grayscale(60%)">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/work.jpg' ?>"
                            alt="video" />
                    </div>

                    <div class="col-lg-4">
                        <div class="video-title mt-5">
                            <h2 class="main-title">What we <br /> do <span>Here</span> </h2>
                            <p class="content mt-4">
                                Produce unique, high-quality clothing made from natural materials that are both
                                sustainable and comfortable to wear.
                                <br />Promote local culture and tradition along with the use of local resources. Support
                                the people and the community.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video section end -->

    <section class="featured-item-section section-gap">
        <div class="featured-item-div py-5">
            <div class="container ">
                <div class="about-title d-flex justify-content-center align-items-center">
                    <div class="d-flex flex-column justify-content-center align-items-start">
                        <h6 class="small-title mb-4">Our Values</h6>
                        <h2 class="main-title">What we <span>Believe</span> in</h2>
                    </div>
                </div>

                <blockquote class="blockquote d-flex flex-column mx-5 mt-5">
                    <p class="lead mx-5">
                        We believe that there is a growing demand for artisanal products that are not mass-produced, and
                        we aim to cater to this demand by producing handmade woolen garments that are both stylish and
                        practical.
                    </p>

                    <p class="lead mx-5">
                        Our focus is on using only the finest quality wool, sourced from sustainable farms and produced
                        using environmentally friendly methods. By using natural materials, we can create clothing that
                        is breathable, insulating, and durable, making it ideal for a wide range of climates and
                        conditions.
                    </p>

                    <p class="lead mx-5">
                        We also aim to promote traditional craft skills by training and employing local artisans to
                        create our garments. This not only helps to support local communities but also ensures that our
                        clothing is produced to the highest standards of quality and craftsmanship.
                    </p>
                </blockquote>
            </div>
        </div>
    </section>

    <!-- Featured Item section -->
    <section class="featured-item-section section-gap">
        <!-- <div class="featured-item-div"> -->
        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="featured-item-img-section">
                    <img class="featured-item-img"
                        src="<?php echo get_stylesheet_directory_uri() . '/assets/img/featured/discount.jpg' ?>"
                        alt="team" />
                </div>
            </div>
            <div class="col-md-5">
                <div class="featured-content">
                    <h6 class="small-title mb-4">Our Team</h6>
                    <h2 class="main-title">
                        How <span> we roll</span>
                    </h2>
                    <p class="content"> </p>
                    <p class="content mb-0">
                        Our team is made up of a diverse group of women, from the artisans who hand-knit our clothing to
                        the leadership team that runs the business. We are proud to have a team that is predominantly
                        female, and we believe that this helps us to better understand and serve our customers, who are
                        primarily women.
                        <br /><br />
                        Our artisans are the backbone of our business. These skilled women local communities in Nepal,
                        where they have learned the art of hand-knitting from their mothers and grandmothers. We work
                        with these artisans to create beautiful, high-quality clothing that reflects their traditional
                        techniques and designs
                    </p>
                </div>
            </div>
        </div>
        <!-- </div> -->
    </section>
    <!--Featured Item section end -->

    <section class="newsletter-item-section section-gap py-4">
        <div class="container">
            <div class="newsletter-content">
                <h6 class="small-title">Contact Us</h6>
                <h2 class="main-title">Send an Email <br />or<span> Call Us</span>.</h2>
                <h6 class="small-title"><b>_</b></h6>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/footer') ?>

    <!--====== Javascripts & Jquery ======-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/navbar.js' ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri() . '/assets/js/main.js' ?>"></script>

</body>

</html>