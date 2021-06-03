<?php
require("include/head.php");
require("include/header.php");
include __DIR__ . '/client.php';

$client = new Prokerala\Api\Sample\ApiClient('82735456-d830-40af-8f6a-f0520f173104', 'IR0QQXI27JLViDZBUgk1O5ZbrCuwiUuVqholvQz2');
?>
<?php
if (isset($_POST["submit"])) {
    $ayanamsa = $_POST["ayanamsa"];
    $datew = date($_POST["datetime"]);
    $location = $_POST["location"];
    $date = date_create($datew);
    // echo date_format($date, DATE_ATOM);
    $panchangResult = $client->get('v2/astrology/panchang', [
        'ayanamsa' =>$ayanamsa,
        'coordinates' =>  $location,
        'datetime' => date_format($date, DATE_ATOM)
    ]);
 
} ?>

<div class="main-content">
    <div class="container prokerala-api-demo-container">
        <section class="faq-section ptb-120" style="padding-bottom: 20px;">
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
                <form class="p-5 text-default" action="panchang.php" method="POST">
                    <?php require("common/panchang-form.tpl.php"); ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Result Type: </label>
                        <div class="col-sm-9 col-md-6 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="result_type" id="result_type1" value="basic">
                                <label class="form-check-label" for="result_type1">Basic</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="result_type" id="result_type2" value="advanced">
                                <label class="form-check-label" for="result_type2">Advanced</label>
                            </div>
                        </div>
                    </div>
                    <div class="text-right">
                        <input type="hidden" name="location" id="location">
                        <button type="submit" class="btn btn-warning btn-submit">Get Result</button>
                        <input type="hidden" name="submit" value="1">
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