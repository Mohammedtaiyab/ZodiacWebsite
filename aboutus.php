<?php
require("include/head.php");
require("include/header.php");
$aboutus = $home->webitepage("About US");
$aimmission = $home->webitepage("Aboutus");
$astrologer = $services->services1("astrologer");
?>

<section class="about-section pd-t-120" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title">About Us</h2>
                    <p class="lead"><?php echo $aboutus[0]['Description'] ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30">
            <div class="col-lg-5 mrb-30">
                <div class="about-thumb-area">
                    <div class="about-thumb">
                        <img src="assets/images/logofullsize.png" alt="about">
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mrb-30">
                <div class="about-content-area">

                    <h3 class="title"><?php echo $aboutus[0]['Topic'] ?></h3>
                    <div class="about-item-area ml-b-60">

                        <div class="about-item d-flex flex-wrap align-items-center mrb-60">
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

<section class="treatment-section pd-t-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title"><?php echo $aimmission[0]['Topic'] ?></h2>

                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30">
            <div class="col-lg-6 mrb-30">
                <div class="treatment-item-area ml-b-30">
                    <div class="aim-item mrb-30">
                        <h3 class="title"><?php echo $aimmission[0]['Description'] ?></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mrb-30">
                <div class="treatment-area">
                    <?php echo $aimmission[0]['Paragraph'] ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- treatment-section end -->


<!-- team-section start -->
<section class="team-section ptb-120" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title">Our Top Astrologers</h2>

                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30">

            <?php foreach ($astrologer as $astro) { ?>
                <a href="">
                    <div class="col-lg-4 col-md-6 col-sm-8 mrb-30">
                        <div class="team-item">
                            <div class="team-thumb">
                                <?php if ($astro["Image"] != "") { ?>
                                    <img src="assets/images/<?php echo $astro["Image"]; ?>" alt="zodaic">
                                <?php   } else { ?>
                                    <img src="assets/images/logofullsize.png" alt="zodaic">
                                <?php  } ?>
                            </div>
                            <div class="team-content">
                                <h3 class="title"><a href="#0"><?php echo $astro["Title"]; ?></a></h3>
                                <span>Astrologer</span>
                            </div>

                        </div>
                    </div>
                </a>
            <?php } ?>

        </div>
    </div>
</section>
<!-- team-section end -->










<?php
require("include/footer.php");

?>