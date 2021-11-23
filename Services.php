<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Primary Meta Tags -->
    <title>Services</title>
    <meta name="title" content="Services">
    <meta name="description" content="Browse through our wide range of paints, textures,
        patterns and styles to find the one that accentuates your home's beauty">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://natureblunt.com/">
    <meta property="og:title" content="Services">
    <meta property="og:description" content="Browse through our wide range of paints, textures,
        patterns and styles to find the one that accentuates your home's beauty">
    <meta property="og:image" content="https://natureblunt.com/img/logo.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://natureblunt.com/">
    <meta property="twitter:title" content="Services">
    <meta property="twitter:description" content="Browse through our wide range of paints, textures,
        patterns and styles to find the one that accentuates your home's beauty">
    <meta property="twitter:image" content="https://natureblunt.com/img/logo.webp">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/style.css" rel="stylesheet">

    <style>
    .gallery-wrap .img-big-wrap img {
        height: 450px;
        width: auto;
        display: inline-block;
        cursor: zoom-in;
    }


    .gallery-wrap .img-small-wrap .item-gallery {
        width: 60px;
        height: 60px;
        border: 1px solid #ddd;
        margin: 7px 2px;
        display: inline-block;
        overflow: hidden;
    }

    .gallery-wrap .img-small-wrap {
        text-align: center;
    }

    .gallery-wrap .img-small-wrap img {
        max-width: 100%;
        max-height: 100%;
        object-fit: cover;
        border-radius: 4px;
        cursor: zoom-in;
    }
    </style>
</head>

<body>
    <!-- Top Bar Start -->

    <?php
        include_once('PHP_Inc/topHeader.php');
        ?>
    <!-- Top Bar End -->

    <!-- Nav Bar Start -->
    <?php
        include_once('PHP_Inc/pnavBar.php');
        ?>
    <!-- Nav Bar End -->

    <div style="margin-top:8%;">

        <?php
        include_once('PHP_Inc/service.php');
        ?>



        <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/landscape/1.jpeg" alt="Los Angeles" width="100%">
                </div>
                <div class="carousel-item">
                    <img src="img/landscape/2.jpeg" alt="Chicago" width="100%">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

        <!-- Product Start -->
        <?php
            include_once('PHP_Inc/blog.php');
            ?>
        <!-- Product End -->
        <br />
        <br />
        <br />
        <center>
            <a href="Contact.php" class="btn btn-danger"> Contact Now </a>
        </center>

    </div>

    <!-- Footer Start -->
    <?php
        include_once('PHP_Inc/footer.php');
        ?>
    <!-- Footer End -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="/lib/wow/wow.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/mail/jqBootstrapValidation.min.js"></script>
    <script src="/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>