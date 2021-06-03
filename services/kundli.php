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
                            <h2 class="section-title center">Kundli</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">
                    <span class="text-black d-block b"></span>
                    <table class="table table-bordered mb-5 table-hover">
                        <tr class="bg-secondary text-white text-center">
                            <th colspan=2">Nakshatra Details</th>
                        </tr>
                        <tr>
                            <th>Nakshatra</th>
                            <td>Shravana</td>
                        </tr>
                        <tr>
                            <th>Nakshatra Lord</th>
                            <td>Chandra (Moon)</td>
                        </tr>
                        <tr>
                            <th>Chandra Rasi</th>
                            <td>Makara</td>
                        </tr>
                        <tr>
                            <th>Chandra Rasi Lord</th>
                            <td>Kuja (Mars)</td>
                        </tr>
                        <tr>
                            <th>Soorya Rasi</th>
                            <td>Vrishabha</td>
                        </tr>
                        <tr>
                            <th>Soorya Rasi Lord</th>
                            <td>Shukra (Venus)</td>
                        </tr>
                        <tr>
                            <th>Zodiac</th>
                            <td>Gemini</td>
                        </tr>
                        <tr class="bg-secondary text-white text-center">
                            <th colspan=2">Additional Info</th>
                        </tr>
                        <tr>
                            <th>Deity</th>
                            <td>Vishnu, Hari (North)</td>
                        </tr>
                        <tr>
                            <th>Ganam</th>
                            <td>Deva</td>
                        </tr>
                        <tr>
                            <th>Symbol</th>
                            <td>Earring</td>
                        </tr>
                        <tr>
                            <th>Animal Sign</th>
                            <td>Monkey</td>
                        </tr>
                        <tr>
                            <th>Nadi</th>
                            <td>Kapha</td>
                        </tr>
                        <tr>
                            <th>Color</th>
                            <td>Light Blue</td>
                        </tr>
                        <tr>
                            <th>Best Direction</th>
                            <td>North</td>
                        </tr>
                        <tr>
                            <th>Syllables</th>
                            <td>Ju/khi, Je/khu, Jo/khe, Gha/kho</td>
                        </tr>
                        <tr>
                            <th>Birth Stone</th>
                            <td>Pearl</td>
                        </tr>
                        <tr>
                            <th>Gender</th>
                            <td>male</td>
                        </tr>
                        <tr>
                            <th>Planet</th>
                            <td>Chandra</td>
                        </tr>
                        <tr>
                            <th>Enemy Yoni</th>
                            <td>Sheep</td>
                        </tr>
                    </table>
                    <h3 class=text-black>Yoga Details</h3>
                    <h3 class="font-weight-regular text-black">Major Yogas</h3>
                    <p class=text-black>Your kundli have 3 major yogas.</p>
                    <h3 class="font-weight-regular text-black">Chandra Yogas</h3>
                    <p class=text-black>Your kundli have 1 chandra yoga.</p>
                    <h3 class="font-weight-regular text-black">Soorya Yogas</h3>
                    <p class=text-black>Your kundli have 1 soorya yoga.</p>
                    <h3 class="font-weight-regular text-black">Inauspicious Yogas</h3>
                    <p class=text-black>Your kundli have 2 inauspicious yogas.</p>
                    <div class="alert p-4 text-center p-5 alert-danger">
                        The person is Manglik. Mars is positioned in the 12th house, it is mild Manglik Dosha </div>
                </div>
        </section>

        <section>
            <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form class="p-5 text-default" action="" method="POST">
                    <?php require('common/horoscope-form.tpl.php'); ?>
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