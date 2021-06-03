<?php
require("include/head.php");
require("include/header.php");
$header = $home->webitepage("header");
$aboutus = $home->webitepage("About US");
$expets = $services->services1("experts");
// print_r($expets);
?>

<!-- banner-section start -->
<section class="banner-section">
    <div class="banner-element">
        <img src="assets/images/circle.png" alt="banner">
    </div>
    <!-- <div class="banner-element-two">
        <img src="assets/images/circle.png" alt="banner">
    </div> -->
    <!-- <div class="banner-element-three">
        <img src="assets/images/circle.png" alt="banner">
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="banner-content">
                    <h2 class="title"><?php echo $header[0]['Topic'] ?></h2>

                    <h4 style="color: white;"><?php echo $header[0]['Description'] ?></h4>

                    <?php if ($header[0]['Paragraph'] != "") {
                        echo $header[0]['Paragraph'];
                    } ?>
                    <?php if ($header[0]['Button_Title'] != "") { ?>
                        <div class="banner-btn">
                            <a href="<?php echo $header[0]['Buttonlink']; ?>" class="custome-button" style="color:black;"><?php echo $header[0]['Button_Title']; ?></a>

                        </div>
                    <?php } ?>


                </div>
            </div>
        </div>
    </div>
    <div id="particles"></div>
</section>
<!-- banner-section end -->


<a href="#" class="scrollToTop"><i class="fa fa-angle-double-up"></i></a>


<!-- about-section start -->
<section class="about-section pd-t-120" id="about">
    <div class="container">
        <div class="row justify-content-center ml-b-30">
            <div class="col-lg-5 mrb-30">
                <div class="about-thumb-area">
                    <div class="about-thumb div-white">
                        <?php if ($aboutus[0]['Image'] != '') { ?>
                            <img src="assets/images/<?php echo $aboutus[0]['Image']; ?>" alt="about">
                        <?php } else { ?>
                            <img src="assets/images/logofullsize.png" alt="about">
                        <?php } ?>

                    </div>
                </div>
            </div>
            <div class="col-lg-7 mrb-30">
                <div class="about-content-area">
                    <span class="sub-title">About US</span>
                    <h3 class="title"><?php echo $aboutus[0]['Topic'] ?></h3>
                    <div class="about-item-area ">

                        <div class="about-item d-flex flex-wrap align-items-center mrb-60">
                            <?php if ($aboutus[0]['Description'] != "") { ?>
                                <div class="about-item-content">

                                    <h3 class="item-title"><?php echo $aboutus[0]['Description'] ?></h3>
                                </div>
                            <?php   } ?>

                        </div>
                        <div class="about-item d-flex flex-wrap align-items-center ">
                            <div class="about-item-content">
                                <?php echo $aboutus[0]['Paragraph']; ?>
                            </div>
                        </div>

                        <?php if ($aboutus[0]['Button_Title'] != "") { ?>
                            <div class="about-item d-flex flex-wrap align-items-center mrb-60">
                                <div class="about-item-content">
                                    <a href="<?php echo $aboutus[0]['Buttonlink']; ?>" class="custome-button"><?php echo $aboutus[0]['Button_Title']; ?></a>

                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->


<!-- service-section start -->
<section class="service-section pd-t-120" id="symptoms">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title">Astrology Expects</h2>
                    <p></p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center ml-b-30">

            <?php foreach ($expets as $expert) { ?>

                <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
                    <a href="services.php">
                        <div class="service-item">
                            <div class="service-thumb">
                                <?php if ($expert["Image"] != "") { ?>
                                    <img src="assets/images/<?php echo $expert["Image"]; ?>" alt="zodaic">
                                <?php   } else { ?>
                                    <img src="assets/images/logofullsize.png" alt="zodaic">
                                <?php  } ?>

                            </div>
                            <div class="service-content">
                                <h3 class="title"><?php echo $expert["Title"]; ?></h3>
                            </div>
                        </div>
                    </a>
                </div>



            <?php } ?>

        </div>
        <!-- <div class="row justify-content-center mrt-80">
            <a href="#0" class="btn-white">Load More</a>
        </div> -->
    </div>
</section>
<!-- service-section end -->


<!-- contagion-section start -->
<section class="contagion-section ptb-120">
    <div class="container">
        <div class="row justify-content-center ml-b-30">
            <div class="col-lg-6 mrb-30">
                <div class="contagion-area">
                    <h3 class="title">What We Do</h3>
                    <p>We is offering you the privilege to uncover your future by our highly experienced and expert astrologers with a direct call and chat system
                    </p>
                    <div class="contagion-item-area ml-b-30">
                        <div class="contagion-item d-flex flex-wrap align-items-center mrb-30">
                            <div class="contagion-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="contagion-item-content">
                                <h3 class="item-title">Call The Astrologers</h3>
                                <p>we have introduced a highly exclusive feature of Live streaming and Private live streaming sessions with your astrologers</p>
                            </div>
                        </div>
                        <div class="contagion-item d-flex flex-wrap align-items-center mrb-30">
                            <div class="contagion-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="contagion-item-content">
                                <h3 class="item-title">Chat With Astrologer</h3>
                                <p>Each and every astrologer associated with the Zodaic Zone application is verified and astronomically intellectual with vast experience and a history of accuracy in their past predictions</p>
                            </div>
                        </div>
                        <div class="contagion-item d-flex flex-wrap align-items-center mrb-30">
                            <div class="contagion-icon">
                                <i class="fas fa-video"></i>
                            </div>
                            <div class="contagion-item-content">
                                <h3 class="item-title"> Join LIVE With Astrologer

                                </h3>
                                <p>Standing tall with the technological advances of the 21st Century, we bring you a mix of religious belief and astronomy to provide assistance to each and every individual in need of time</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mrb-30">
                <div class="counter-area">
                    <div class="row justify-content-center ml-b-30">
                        <div class="col-lg-6 mrb-30">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <div class="odo-area">
                                        <span class="odo-title">
                                            <h3 class="odo-title odometer" data-odometer-final="18700">0</h3>+
                                        </span>
                                    </div>
                                </div>
                                <p>Installs</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mrb-30">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <div class="odo-area">
                                        <span class="odo-title">
                                            <h3 class="odo-title odometer" data-odometer-final="5">0</h3>
                                            +
                                        </span>
                                    </div>
                                </div>
                                <p>Years of
                                    Experience</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mrb-30">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <div class="odo-area">
                                        <span class="odo-title">
                                            <h3 class="odo-title odometer" data-odometer-final="100">0</h3>+
                                        </span>
                                    </div>
                                </div>
                                <p>Types of
                                    Astrology Services</p>
                            </div>
                        </div>
                        <div class="col-lg-6 mrb-30">
                            <div class="counter-item">
                                <div class="counter-content">
                                    <div class="odo-area">
                                        <span class="odo-title">
                                            <h3 class="odo-title odometer" data-odometer-final="1000">0</h3>
                                            +
                                        </span>
                                    </div>
                                </div>
                                <p>Qualified
                                    Astrologers</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contagion-section end -->


<!-- call-to-action-section start  -->
<section class="call-to-action-section call-to-action-section-two call-to-action-section-three ptb-120" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <div class="call-to-action-content">
                    <h3 class="title">Contact With Us For any Query</h3>
                    <!-- <span class="sub-title"> Call Us : <a href="tel:123456789"><i class="fas fa-mobile-alt"></i>123456789</a></span> -->
                    <div class="call-btn">
                        <a href="contact.php" class="btn-white-two">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call-to-action-section end  -->


<!-- prevention-section start -->
<section class="prevention-section pd-t-120 ptb-120" id="prevention">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title">Daily Horoscope</h2>
                    <p>Suspendisse Lectus Vivamus Donec Turpis Egestas, Sed At Massa Orci, Et Nibh Massa Augue Fermentum Arcu, Potenti Tellus Praesent Integer Aliquam.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30" id="horoscopesing">

        </div>
    </div>
</section>
<!-- prevention-section end -->




<script src="assets/js/horoscope.js"></script>
<?php
require("include/footer.php");

?>