<?php
require("include/head.php");
require("include/header.php");
include __DIR__ . '/client.php';
$client = new Prokerala\Api\Sample\ApiClient('82735456-d830-40af-8f6a-f0520f173104', 'IR0QQXI27JLViDZBUgk1O5ZbrCuwiUuVqholvQz2');
if (isset($_POST["submit"])) {
    $ayanamsa = $_POST["ayanamsa"];
    $datew = date($_POST["datetime"]);
    $location = $_POST["location"];
    $date = date_create($datew);
    $panchangResult = $client->get('v2/astrology/panchang', [
        'ayanamsa' =>
        $ayanamsa,
        'coordinates' =>  $location,
        'datetime' => date_format($date, DATE_ATOM)
    ]);
}
?>
<div class="main-content">


    <div class="container prokerala-api-demo-container">
        <section class="faq-section ptb-120" style="padding-bottom: 20px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title center">Mangal Dosha</h2>  
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">
                    <div class="col-md-6 justify-content-center text-center">
                        <span class="text-black d-block b">Mangal Dosha Result</span>

                        <div class="alert p-4 text-center alert-danger">
                            The person is Manglik. Mars is positioned in the 12th house, it is mild Manglik Dosha </div>

                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form class="p-5 text-default" action="mangal-dosha.php" method="POST">
                    <?php require("common/horoscope-form.tpl.php"); ?>
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
                        <button type="submit" class="btn btn-warning btn-submit">Get Result</button>
                        <input type="hidden" name="submit" value="1">
                    </div>
                </form>
            </div>
        </section>


    </div>
</div>

<?php
require("include/footer.php");

?>