<?php
require("include/head.php");
require("include/header.php");
include __DIR__ . '/client.php';
$client = new Prokerala\Api\Sample\ApiClient('82735456-d830-40af-8f6a-f0520f173104', 'IR0QQXI27JLViDZBUgk1O5ZbrCuwiUuVqholvQz2');
// if ($_POST["submit"]) {
//     $ayanamsa = $_POST["ayanamsa"];
//     $datew = date($_POST["datetime"]);
//     $location = $_POST["location"];
//     $date = date_create($datew);
//     $panchangResult = $client->get('v2/astrology/panchang', [
//         'ayanamsa' =>
//         $ayanamsa,
//         'coordinates' =>  $location,
//         'datetime' => date_format($date, DATE_ATOM)
//     ]);
// } 
?>
<div class="main-content">
    <div class="container prokerala-api-demo-container">
        <section class="faq-section ptb-120" style="padding-bottom: 20px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title center">Inauspicious Period</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">
                    <span class="text-black d-block b"></span>
                    <table class="table table-bordered text-large text-center table-hover">
                        <tr class="bg-secondary text-white">
                            <th>Inauspicious Yogas</th>
                            <th>Time</th>
                        </tr>
                        <tr class=border-top>
                            <td>Rahu</td>
                            <td>
                                05:31 PM to 07:11 PM <br>
                            </td>
                        </tr>
                        <tr class=border-top>
                            <td>Yamaganda</td>
                            <td>
                                12:30 PM to 02:11 PM <br>
                            </td>
                        </tr>
                        <tr class=border-top>
                            <td>Gulika</td>
                            <td>
                                03:51 PM to 05:31 PM <br>
                            </td>
                        </tr>
                        <tr class=border-top>
                            <td>Dur Muhurat</td>
                            <td>
                                05:24 PM to 06:17 PM <br>
                            </td>
                        </tr>
                        <tr class=border-top>
                            <td>Varjyam</td>
                            <td>
                                08:24 PM to 09:57 PM <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <section>
            <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form class="p-5 text-default" action="" method="POST">
                    <?php require("common/panchang-form.tpl.php"); ?>

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