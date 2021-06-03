<?php
require("include/head.php");
require("include/header.php");
?>

<div class="main-content ptb-120">
    <div class="container prokerala-api-demo-container">
        <section class="faq-section " style="padding-bottom: 20px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title center">panchang</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">
                    <span class="text-black d-block b"></span>
                    <div class="col-lg-4 mrb-30">
                        <div class="faq-list-area">
                            <h3 class="title">Times</h3>
                            <ul class="faq-list">
                                <li> <span class="text-black d-block"><b>Sunrise</b> : <span id="sunrise"></span> </span> </li>
                                <li><span class="text-black d-block"><b>Sunset</b> : 07:11 PM</span> </li>
                                <li> <span class="text-black d-block"><b>Moonrise</b> : 11:28 PM</span> </li>
                                <li> <span class="text-black d-block"><b>Moonset</b> : 10:31 AM</span> </li>
                                <li> <span class="text-black d-block"><b>Vaara</b> : Sunday</span> </li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 mrb-30">
                        <span id="data"></span>
                        <div class="faq-left-area">
                            <div class="faq-wrapper">
                                <div class="faq-item active open">
                                    <h3 class="faq-title"><span class="title"> Nakshatra </span><span class="right-icon"></span></h3>
                                    <div class="faq-content">
                                        <p>
                                            <span class="text-black d-block">Uttara Ashadha
                                                (Lord: Sun) :
                                                03:39 PM - 02:12 PM
                                            </span>
                                            <span class="text-black d-block">Shravana
                                                (Lord: Moon) :
                                                02:12 PM - 01:27 PM</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form action="functionapi.php" method="post" class="p-5 text-default">
                    <?php require("common/panchang-form.tpl.php"); ?>

                    <div class="text-right">
                        <input type="hidden" name="check" value="panchang">
                        <input type="hidden" name="location" id="location">
                        <button type="submit" class="btn btn-warning  btn-submit custome-button" name="pachang"  style="color:black">Get Result</button>

                    </div>
                </form>
            </div>
        </section>

    </div>
</div>



<?php
$states = array('az' => 'Arizona', 'al' => 'Alabama');

array_map(function ($short, $long) {
    return array(
        'short' => $short,
        'long'  => $long
    );
}, array_keys($states), $states);


require("include/footer.php");

?>