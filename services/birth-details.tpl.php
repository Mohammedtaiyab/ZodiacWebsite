<?php
require("include/head.php");
require("include/header.php");
include __DIR__ . '/client.php';
$client = new Prokerala\Api\Sample\ApiClient('82735456-d830-40af-8f6a-f0520f173104', 'IR0QQXI27JLViDZBUgk1O5ZbrCuwiUuVqholvQz2');
?>
<?php
if ($_POST["submit"]) {
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
} ?>
<div class="main-content">
    <div class="container prokerala-api-demo-container">
        <div class="container prokerala-api-demo-container">
            <section class="faq-section ptb-120" style="padding-bottom: 20px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 text-center">
                            <div class="section-header">
                                <h2 class="section-title center">Birth Details</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-center ml-b-30">
                        <span class="text-black d-block b"></span>
                        <table class="table table-bordered table-hover">
                            <tr class="bg-secondary text-white text-center">
                                <td colspan=2 class=text-center>Nakshatra Details</td>
                            </tr>
                            <tr>
                                <td>Nakshatra</td>
                                <td>Ashwini</td>
                            </tr>
                            <tr>
                                <td>Nakshatra Pada</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Nakshatra Lord</td>
                                <td>Ketu</td>
                            </tr>
                            <tr>
                                <td>Chandra Rasi</td>
                                <td>Mesha</td>
                            </tr>
                            <tr>
                                <td>Chandra Rasi Lord</td>
                                <td>Mars(Kuja)</td>
                            </tr>
                            <tr>
                                <td>Soorya Rasi</td>
                                <td>Vrishabha</td>
                            </tr>
                            <tr>
                                <td>Soorya Rasi Lord</td>
                                <td>Venus(Shukra)</td>
                            </tr>
                            <tr>
                                <td>Zodiac</td>
                                <td>Gemini</td>
                            </tr>
                            <tr class="bg-secondary text-white text-center">
                                <td colspan=2 class=text-center>Additional Info</td>
                            </tr>
                            <tr>
                                <td>Deity</td>
                                <td>Ashwini Kumara</td>
                            </tr>
                            <tr>
                                <td>Ganam</td>
                                <td>Deva</td>
                            </tr>
                            <tr>
                                <td>Symbol</td>
                                <td>Horse’s Head</td>
                            </tr>
                            <tr>
                                <td>AnimalSign</td>
                                <td>Horse</td>
                            </tr>
                            <tr>
                                <td>Nadi</td>
                                <td>Vata</td>
                            </tr>
                            <tr>
                                <td>Color</td>
                                <td>Blood Red</td>
                            </tr>
                            <tr>
                                <td>BestDirection</td>
                                <td>South</td>
                            </tr>
                            <tr>
                                <td>Syllables</td>
                                <td>Chu, Che, Cho, La</td>
                            </tr>
                            <tr>
                                <td>BirthStone</td>
                                <td>Chrysoberyl</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>male</td>
                            </tr>
                            <tr>
                                <td>Planet</td>
                                <td>Ketu</td>
                            </tr>
                            <tr>
                                <td>EnemyYoni</td>
                                <td>Buffalo</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>


            <section>
                <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                    <form class="p-5 text-default" action="" method="POST">
                        <?php require("common/horoscope-form.tpl.php"); ?>
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