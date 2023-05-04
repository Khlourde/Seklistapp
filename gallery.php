<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Gallery - Seklistapp</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- For Font style -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800" rel="stylesheet">
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="shortcut icon" type="logo/png" href="assets/images/seklistapp-logo.png">

</head>

<body>
    <?php require('header2.php');?>
    
    
    
    <section class="gallery">
        <div class="container">
            <h3>
                Welcome to Seklistapp: Cyclist Partner App
            </h3>
            <h4>
                Here are the sample contents and features of the application.
            </h4>
            <div id="images">
                <div class="row">
                    <div class="col-md-3">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/splashss.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/loginss.jpg" alt="" />
                        </a>
                    </div><br><br>
                    <div class="col-md-3 need">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/registerss.jpg" alt="" />
                        </a>
                    </div>
                    
                    <div class="col-md-3 need">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/verificationss.jpg" alt="" />
                        </a>
                    </div>
                    
                </div>
            </div>
            <div id="images">
                <div class="row">
                    <div class="col-md-3">
                        <a href="assets/images/banner-2.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/forgotss.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="assets/images/banner-2.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/internetss.jpg" alt="" />
                        </a>
                    </div><br><br>
                    <div class="col-md-3 need">
                        <a href="assets/images/banner-2.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/dashboard.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-3 need">
                        <a href="assets/images/banner-2.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/permit.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <div id="images">
                <div class="row">
                    <div class="col-md-3">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/mapss.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/profiless.jpg" alt="" />
                        </a>
                    </div><br><br>
                    <div class="col-md-3 need">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/settings.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-3 need">
                        <a href="assets/images/banner.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/blogss.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
            <!--div id="images">
                <div class="row">
                    <div class="col-md-4">
                        <a href="assets/images/banner-2.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/banner-2.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/images/banner-2.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/banner-2.jpg" alt="" />
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/images/banner-2.jpg" data-fancybox data-caption="My caption">
                            <img src="assets/images/banner-2.jpg" alt="" />
                        </a>


                    </div>
                </div-->
            </div>
        </div>
    </section>
    <?php require('footer.php'); ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/owl-carousel/highlight.js"></script>
    <script src="assets/js/owl-carousel/app.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        })
    </script>
    <script type="text/javascript">
        $("[data-fancybox]").fancybox({
            // Options will go here
        });
    </script>
</body>

</html>