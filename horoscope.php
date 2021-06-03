<?php
require("include/head.php");
require("include/header.php");
$sign = $_GET["sign"];
function aztro($sign, $day)
{
    $aztro = curl_init('https://aztro.sameerkumar.website/?sign=' . $sign . '&day=' . $day);
    curl_setopt_array($aztro, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        )
    ));
    $response = curl_exec($aztro);
    if ($response === FALSE) {
        die(curl_error($aztro));
    }
    $responseData = json_decode($response, TRUE);
    return $responseData;
}

$todays = aztro($sign, 'today');

?>


<!-- about-section start -->

<!-- about-section end -->



<section class="about-section pd-t-120" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="section-header">
                    <span class="title-border">
                        <img src="assets/images/circle.png" alt="shape">
                    </span>
                    <h2 class="section-title">Horoscope</h2>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center ml-b-30" style="margin-top:20px;">
            <div class="col-lg-4 mrb-30">
                <div class="about-thumb-area">
                    <div class="about-thumb">
                        <img src="assets/images/icons/<?php echo $sign ?>.png" alt="zodaic">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mrb-30">
                <div class="about-content-area">
                    <div class="about-content-area">
                        <span class="sub-title"><?php echo $todays["date_range"]; ?></span>
                        <h3 class="title"><?php echo $sign ?></h3>
                        <div class="about-item-area ml-b-60">
                            <div class="about-item d-flex flex-wrap align-items-center ">

                                <div class="about-item-content">
                                    <h3 class="item-title">Today</h3>
                                    <p><?php echo $todays["current_date"]; ?></p>
                                </div>
                            </div>
                            <div class="about-item d-flex flex-wrap align-items-center">
                                <div class="about-item-content">
                                    <h3 class="item-title"><?php echo $todays["description"]; ?></h3>
                                    <h3 class="item-title">Compatibility with <a href="horoscope.php?sign=<?php echo $todays["compatibility"]; ?>"><?php echo $todays["compatibility"]; ?></a> </h3>
                                    <p>Mood: <span> <?php echo $todays["mood"]; ?></span><br>
                                        Color: <span> <?php echo $todays["color"]; ?></span><br>
                                        lucky Number: <span> <?php echo $todays["lucky_number"]; ?></span><br>
                                        lucky Time: <span> <?php echo $todays["lucky_time"]; ?></span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</section>

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