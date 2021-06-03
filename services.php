<?php
require("include/head.php");
require("include/header.php");
$expets = $services->services("experts");
$faqs = $services->services("faq");
?>
<!-- process-section start -->
<!-- <section class="process-section bg-white-smoke ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title">Astrology </h2>
                    <p>Suspendisse Lectus Vivamus Donec Turpis Egestas, Sed At Massa Orci, Et Nibh Massa Augue Fermentum Arcu, Potenti Tellus Praesent Integer Aliquam.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30">
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-2.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Auspicious Period</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-1.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Chart</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-3.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Choghadiya </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-4.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Inauspicious Period</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-5.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Kaalsarp Dosha</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-6.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Kundli</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-7.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Kundli Matching</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-8.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Mangal Dosha</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-2.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Birth Details</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-1.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Nakshatra Porutham

                        </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-3.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Panchang</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-4.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Papasamyam Check</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-5.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Papasamyam</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-6.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Planet Position</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-7.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Porutham</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-6.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Sade-Sati</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-6 mrb-30">
                <div class="process-item text-center">
                    <div class="process-thumb">
                        <img src="assets/images/process/process-7.jpg" alt="process">
                    </div>
                    <div class="process-content">
                        <h3 class="title">Thirumana Porutham</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- process-section end -->





<!-- about-section start -->
<section class="about-section pd-t-120" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title">Our Services</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <?php
        $i = 0;
        foreach ($expets as $expert) {
            $i++;
            if ($i % 2 == 0) { ?>



                <div class="row justify-content-center ml-b-30" style="margin-top:20px;">
                    <div class="col-lg-4 mrb-30">
                        <div class="about-thumb-area">
                            <div class="about-thumb">
                                <?php if ($expert["Image"] != "") { ?>
                                    <img src="assets/images/<?php echo $expert["Image"]; ?>" alt="zodaic">
                                <?php   } else { ?>
                                    <img src="assets/images/logofullsize.png" alt="zodaic">
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mrb-30">
                        <div class="about-content-area">
                            <h3 class="title"><?php echo $expert["Title"]; ?></h3>
                            <div class="about-item-area ml-b-60">
                                <div class="about-item d-flex flex-wrap align-items-center mrb-60">
                                    <div class="about-icon">
                                        <img src="assets/images/circle.png" alt="shape">
                                    </div>
                                    <div class="about-item-content">
                                        <h3 class="item-title"><?php echo $expert["Description"]; ?></h3>
                                        <?php echo $expert["Paragraph"]; ?>
                                    </div>
                                    <div class="about-item-content">

                                        <?php if ($expert['Button_Title'] != "") { ?>
                                            <div class="banner-btn">
                                                <a href="<?php echo $expert['buttonlink']; ?>" class="custome-button"></i><?php echo $expert['Button_Title']; ?></a>

                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            <?php } else { ?>

                <div class="row justify-content-center ml-b-30" style="margin-top:20px;">

                    <div class="col-lg-6 mrb-30">
                        <div class="about-content-area" style="text-align: end;">
                            <h3 class="title"><?php echo $expert["Title"]; ?></h3>
                            <div class="about-item-area ml-b-60">
                                <div class="about-item d-flex flex-wrap align-items-center mrb-60">

                                    <div class="about-item-content" style="text-align: end;">
                                        <h3 class="item-title"><?php echo $expert["Description"]; ?></h3>
                                        <?php echo $expert["Paragraph"]; ?>
                                    </div>
                                    <div class="about-item-content" style="text-align: end;">

                                        <?php if ($expert['Button_Title'] != "") { ?>
                                            <div class="banner-btn">
                                                <a href="<?php echo $expert['buttonlink']; ?>" class="custome-button"></i><?php echo $expert['Button_Title']; ?></a>

                                            </div>
                                        <?php } ?>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mrb-30">
                        <div class="about-thumb-area">
                            <div class="about-thumb">
                                <?php if ($expert["Image"] != "") { ?>
                                    <img src="assets/images/<?php echo $expert["Image"]; ?>" alt="zodaic">
                                <?php   } else { ?>
                                    <img src="assets/images/logofullsize.png" alt="zodaic">
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
    </div>
</section>
<!-- about-section end -->

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
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30" id="horoscopesing">

        </div>
    </div>
</section>
<!-- prevention-section end -->


<!-- faq-section start -->
<section class="faq-section ptb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title center">Frequently asked questions</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30">
            <div class="col-lg-4 mrb-30">
                <div class="faq-list-area">
                    <h3 class="title">Experts In</h3>
                    <ul class="faq-list">
                        <?php foreach ($expets as $expert) { ?>
                            <li><a href="#0"><?php echo $expert["Title"]; ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8 mrb-30">
                <div class="faq-left-area">
                    <div class="faq-wrapper">
                        <?php
                        $i = 0;
                        foreach ($faqs as $faq) {
                            $i++;
                            if ($i == 1) { ?>
                                <div class="faq-item active open">
                                    <h3 class="faq-title"><span class="title"> <?php echo $faq["Description"]; ?> </span><span class="right-icon"></span></h3>
                                    <div class="faq-content">
                                        <?php echo $faq["Paragraph"]; ?>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="faq-item">
                                    <h3 class="faq-title"><span class="title"> <?php echo $faq["Description"]; ?></span><span class="right-icon"></span></h3>
                                    <div class="faq-content">
                                        <?php echo $faq["Paragraph"]; ?>
                                    </div>
                                </div>

                        <?php }
                        } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- faq-section end -->

<!-- call-to-action-section start  -->
<section class="call-to-action-section call-to-action-section-two ptb-120">
    <div class="container">
        <div class="row justify-content-between align-items-center ml-b-30">
            <div class="col-lg-8 mrb-30">
                <div class="call-to-action-content">
                    <h2 class="title">Want to Become an Astrologer At Zodaic Zone</h2>
                    <!-- <p>Natus, quam consectetur. Odio id vitae ipsam accusamus quo aperiam molestias quasi.</p> -->
                </div>
            </div>
            <div class="col-lg-4 mrb-30">
                <div class="call-to-action-btn">
                    <a href="contact.php" class="btn-white-two">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call-to-action-section end  -->
<script src="assets/js/horoscope.js"></script>
<?php
require("include/footer.php");

?>