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
                            <h2 class="section-title center">Kundli Matching</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">
                    <span class="text-black d-block b"></span>
                    <table class="table table-bordered mb-5 table-hover">
                        <tr class="bg-secondary text-white">
                            <th>#</th>
                            <th>Details of Girl</th>
                            <th>Details of Boy</th>
                        </tr>
                        <tr>
                            <th>Date Of Birth</th>
                            <td>June 02, 2021</td>
                            <td>May 31, 2021</td>
                        </tr>
                        <tr>
                            <td><b>Nakshatra Name</b></td>
                            <td>Shatabhisha</td>
                            <td>Shravana</td>
                        </tr>
                        <tr>
                            <td><b>Nakshatra Pada</b></td>
                            <td>4</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td><b>Nakshatra Lord</b></td>
                            <td>Rahu (Rahu)</td>
                            <td>Chandra (Moon)</td>
                        </tr>
                        <tr>
                            <td><b>Rasi Name</b></td>
                            <td>Kumbha</td>
                            <td>Makara</td>
                        </tr>
                        <tr>
                            <td><b>Rasi Lord</b></td>
                            <td>Shukra (Venus)</td>
                            <td>Kuja (Mars)</td>
                        </tr>
                    </table>
                    <h3>Guna Milan Details</h3>
                    <table class="mb-5 table table-bordered table-responsive-sm table-hover">
                        <tr class="bg-secondary text-white">
                            <th>#</th>
                            <th>Guna</th>
                            <th>Girl</th>
                            <th>Boy</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><b>Varna Koot</b></td>
                            <td>Shudra</td>
                            <td>Vaishya</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><b>Vasya Koot</b></td>
                            <td>Manava</td>
                            <td>Jalachara</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><b>Tara Koot</b></td>
                            <td>Mitra</td>
                            <td>Vipatha</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><b>Yoni Koot</b></td>
                            <td>Ashwa</td>
                            <td>Vanara</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><b>Graha Maitri Koot</b></td>
                            <td>Saturn</td>
                            <td>Saturn</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><b>Gana Koot</b></td>
                            <td>Rakshasa</td>
                            <td>Devata</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><b>Bhakoot Koot</b></td>
                            <td>Kumbha</td>
                            <td>Makara</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><b>Nadi Koot</b></td>
                            <td>Adi</td>
                            <td>Antya</td>
                        </tr>
                        <tr class=text-large>
                            <th colspan=4 class=text-center>Total Guna Milan Points :
                                19 / 36</th>
                        </tr>
                    </table>
                    <div class="mb-5 alert text-center alert-danger">
                        Union is inauspicious. Horoscope matching shows a low score. There is a slight difference in the Mangal Dosha compatibility of both the horoscopes. Please consult an astrologer before proceeding to marriage. </div>

                </div>
            </div>
        </section>
        <section>
            <div class="card sample-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form class="p-5 text-default" action="kundli-matching.php" method="POST">

                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label ">Result Type: </label>
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
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label ">Ayanamsa</label>
                        <div class="col-sm-9 col-md-6">
                            <select name="ayanamsa" class="form-control form-control-lg rounded-1">
                                <option value="1">Lahiri</option>
                                <option value="3">Raman</option>
                                <option value="5">KP</option>
                            </select>
                        </div>
                    </div>

                    <?php require("common/porutham-form.tpl.php"); ?>

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