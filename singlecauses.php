<!DOCTYPE html>
<html lang="en">
<head>
    <title>Simple Trust</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="The Simple Trust, a youth organisation.We love to make the world the better place to live.Save Nature, Spread Humanity and Succour Education is our major goal.">
 <meta name="keywords" content="Simple Trust, NGO, education, environment, human rights">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page single-cause">
<style>
.hero-content-wrap img{
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: auto;
}
.mySlides {display:none;}
</style>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">contact@simpletrust.org</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span>9080461090 / 9677680380</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="https://www.payumoney.com/paybypayumoney/#/f4c0ffa331b34b22970d0018b9935208">Donate Now</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="/" rel="home"><img class="d-block" src="images/logo.jpeg" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li><a href="/">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="causes.html">Causes</a></li>
                                <li><a href="portfolio.html">Gallery</a></li>
                                <!--<li><a href="news.html">News</a></li>-->
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
    <!--<div class="row swiper-container hero-slider" style="padding-top:30px;">
        <div class="col-12 col-md-6 col-lg-4 swiper-wrapper">
            <div class="swiper-slide hero-content-wrap">
                <img src="images/SingleCauses/'.$querystring.'1.jpg" alt="" />
            </div>
            <div class="swiper-slide hero-content-wrap">
                <img src="images/SingleCauses/'.$querystring.'2.jpg" alt="" />
            </div>
            <div class="swiper-slide hero-content-wrap">
                <img src="images/SingleCauses/'.$querystring.'3.jpg" alt="" />
            </div>
        </div>
    </div>-->
    <?php
    header('Content-Type:text/html; Charset=UTF-8');
        $querystring = $_SERVER["QUERY_STRING"];
        
        //$servername = "166.62.28.104";
        $servername = "localhost";
        $username = "DBUser";
        $password = "18062019tn";
        $dbname = "SimpleTrust";
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $selectSQL = 'SELECT * FROM SingleCause where CauseName = "'.$querystring.'"';//. $querystring;
        $result = $conn->query($selectSQL);

        while($row = $result->fetch_assoc()){
            echo '
    <div class="row">
    <div class="col-12 col-md-6 col-lg-4" style="margin-left:auto;margin-right:auto;">
 <div class="w3-content w3-section hero-content-wrap">
  <img class="mySlides" src="images/SingleCauses/'.$querystring.'1.jpg" style="width:100%">
  <img class="mySlides" src="images/SingleCauses/'.$querystring.'2.jpg" style="width:100%">
  <img class="mySlides" src="images/SingleCauses/'.$querystring.'3.jpg" style="width:100%">
</div>
</div>
</div>
<div class="highlighted-cause">
                
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 order-2 order-lg-1">
                    <div class="section-heading">
                        <h2 class="entry-title">'.$row['Heading'].'</h2>
                    </div>

                    <div class="entry-content mt-3">
                        <p>'.$row['Content'].'</p>
                    </div>

                    <div class="fund-raised w-100 mt-5">
                        <div class="featured-fund-raised-bar barfiller">
                            <div class="tipWrap">
                                <span class="tip" style="margin-left:8%"></span>
                            </div>

                            <span class="fill" data-percentage="'.$row['Percentage'].'"></span>
                        </div>

                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                            <div class="fund-raised-total mt-4">
                                Raised: $'.$row['AmtRaised'].'
                            </div>

                            <div class="fund-raised-goal mt-4">
                                Goal: $'.$row['AmtGoal'].'
                            </div>
                        </div>
                    </div>

                    <div class="entry-footer mt-5">
                        <a href="https://www.payumoney.com/paybypayumoney/#/f4c0ffa331b34b22970d0018b9935208" class="btn gradient-bg">Donate Now</a>
                    </div>
                </div><!-- .col -->

            </div>
        </div>
    </div>

    <div class="short-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="short-content">
                        <h3 class="entry-title">Description</h3>

                        <p style="white-space:pre-line">'.$row['Description'].'</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6">
                    <div class="short-content">
                        <h3 class="entry-title">Additional Information</h3>

                        <p style="white-space:pre-line">'.$row['AdditionalInformation'].'</p>
                    </div>
                </div>

                <!--<div class="col-12 col-md-6 col-lg-4">
                    <div class="short-content">
                        <h3 class="entry-title">Our Goal</h3>

                        <p style="white-space:pre-line">'.$row['OurGoal'].'</p>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
';
            }
    ?>

    <!--<div class="highlighted-cause">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 order-2 order-lg-1">
                    <div class="section-heading">
                        <h2 class="entry-title">
                            
                        We love to help all the children that have problems in the world. After 15 years we have many goals achieved.
                        </h2>
                    </div>

                    <div class="entry-content mt-5">
                        <p>Dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris quis aliquam. Lorem ipsum dolor sit amet.</p>
                    </div>

                    <div class="fund-raised w-100 mt-5">
                        <div class="featured-fund-raised-bar barfiller">
                            <div class="tipWrap">
                                <span class="tip"></span>
                            </div>

                            <span class="fill" data-percentage="83"></span>
                        </div>

                        <div class="fund-raised-details d-flex flex-wrap justify-content-between align-items-center">
                            <div class="fund-raised-total mt-4">
                                Raised: $56 880
                            </div>

                            <div class="fund-raised-goal mt-4">
                                Goal: $70 000
                            </div>
                        </div>
                    </div>

                    <div class="entry-footer mt-5">
                        <a href="https://www.payumoney.com/paybypayumoney/#/f4c0ffa331b34b22970d0018b9935208" class="btn gradient-bg">Donate Now</a>
                    </div>
                </div>

                <div class="col-12 col-lg-5 order-1 order-lg-2">
                    <img src="images/oshomah.jpg" alt="">
                </div>
            </div>
        </div>
    </div>-->

    <!--<div class="short-content-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="short-content">
                        <h3 class="entry-title">Description</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestib ulum mauris. Lorem ipsum dolor sit amet, consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamc.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="short-content">
                        <h3 class="entry-title">Additional Information</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus.</p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">
                    <div class="short-content">
                        <h3 class="entry-title">Our Goal</h3>

                        <p>Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!--<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="donation-form-wrap">
                    <h2>Make a donation</h2>

                    <h4 class="mt-5">How much do you want to donate?</h4>

                    <form class="donation-form">
                        <div class="donate-amount-wrap d-flex flex-wrap align-items-center mt-5">
                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="10" />
                                <span class="donate-amount">$10</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="20" />
                                <span class="donate-amount">$20</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="25" checked="checked"/>
                                <span class="donate-amount">$25</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="50" />
                                <span class="donate-amount">$50</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="100" />
                                <span class="donate-amount">$100</span>
                            </label>

                            <label class="radio-label">
                                <input type="radio" name="donation_amount" value="custom" />
                                <span class="donate-amount">Other Amount</span>
                            </label>
                        </div>

                        <div class="payment-type d-flex flex-wrap align-items-center">
                            <h4 class="w-100 mt-5">Payment Type</h4>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_type" value="One time" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                One time
                            </label>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_type" value="Recurring" checked="checked" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                Recurring
                            </label>
                        </div>

                        <div class="billing-information  d-flex flex-wrap justify-content-between align-items-center">
                            <h4 class="w-100 mt-5 mb-3">Billing Information</h4>

                            <input type="text" placeholder="Name">
                            <input type="email" placeholder="E-mail">
                            <input type="text" placeholder="Address">
                            <input type="text" placeholder="City">
                            <input type="number" placeholder="Postcode">
                            <input type="text" placeholder="Country">
                        </div>

                        <div class="payment-type d-flex flex-wrap align-items-center">
                            <h4 class="w-100 mt-5">Payment Method</h4>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_method" value="Credit Card" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                Credit Card
                            </label>

                            <label class="d-flex align-items-center mt-4">
                                <input type="radio" name="payment_method" value="PayPal" checked="checked" />
                                <span class="payment-type-radio"></span>
                                <span class="centered-dot"></span>

                                PayPal
                            </label>
                        </div>

                        <input class="btn gradient-bg mt-5" type="submit" value="Donate Now">
                    </form>
                </div>
            </div>
        </div>
    </div>-->

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/foot-logo.jpeg" alt=""></a></h2>

                            <p>The Simple Trust, a youth organisation.We love to make the world the better place to live.Save Nature, Spread Humanity and Succour Education is our major goal.</p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <!-- <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                                <li><a href="www.facebook.com/SimpleTrustTN" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/simpletrust1" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/simpletrusttn/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                                <!-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> -->
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>
                    <ul>
                            <li>
                                <a href="volunteerForm.html">Become  a Volunteer</a>
                            </li>
                            <li>
                                <a href="https://www.payumoney.com/paybypayumoney/#/f4c0ffa331b34b22970d0018b9935208">Donate</a>
                            </li>
                            <li>
                                <a href="causes.html">Causes</a>
                            </li>
                            <li>
                                <a href="portfolio.html">Portfolio</a>
                            </li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>
                            <ul>
                                <li>
                                    <h3><a href="#">Trichy Tree plantation</a></h3>
                                    <div class="posted-date">Jul, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">Kerala Relief</a></h3>
                                    <div class="posted-date">Aug, 2019</div>
                                </li>

                                <li>
                                    <h3><a href="#">Chennai tree Plantation</a></h3>
                                    <div class="posted-date">Sep, 2019</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>9080461090 / 9677680380</span></li>
                                <li><i class="fa fa-envelope"></i><span>info@simpletrust.org</span></li>
                                <li><i class="fa fa-map-marker"></i><span>No.3, Amudham Nagar Extention, Peerkaranai, new Perungalathur, Chennai - 600063.</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>

</body>
</html>