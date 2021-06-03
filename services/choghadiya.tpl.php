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
                            <h2 class="section-title center">Choghadiya</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">

                    <div class="col-12 col-md-6">
                        <table class="table table-bordered border-white table-hover table-responsive-sm" style="margin-right: 10px">
                            <tr class="bg-secondary text-white">
                                <th colspan=4 class=text-center>Day Choghadiya</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                            <tr class=table-danger>
                                <td>Udveg<br><i></i></td>
                                <td>Inauspicious</td>
                                <td>05:52:AM</td>
                                <td>07:31:AM</td>
                            </tr>
                            <tr class=table-warning>
                                <td>Char<br><i></i></td>
                                <td>Good</td>
                                <td>07:31:AM</td>
                                <td>09:11:AM</td>
                            </tr>
                            <tr class=table-success>
                                <td>Labh<br><i></i></td>
                                <td>Most Auspicious</td>
                                <td>09:11:AM</td>
                                <td>10:50:AM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Amrut<br><i>Vaar Vela</i></td>
                                <td>Inauspicious</td>
                                <td>10:50:AM</td>
                                <td>12:30:PM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Kaal<br><i>Kaal Vela</i></td>
                                <td>Inauspicious</td>
                                <td>12:30:PM</td>
                                <td>02:09:PM</td>
                            </tr>
                            <tr class=table-success>
                                <td>Shubh<br><i></i></td>
                                <td>Most Auspicious</td>
                                <td>02:09:PM</td>
                                <td>03:49:PM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Rog<br><i></i></td>
                                <td>Inauspicious</td>
                                <td>03:49:PM</td>
                                <td>05:28:PM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Udveg<br><i></i></td>
                                <td>Inauspicious</td>
                                <td>05:28:PM</td>
                                <td>07:08:PM</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <table class="table table-bordered border-white table-hover table-responsive-sm" style="margin-right: 10px">
                            <tr class="bg-secondary text-white">
                                <th colspan=4 class=text-center>Night Choghadiya</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Start</th>
                                <th>End</th>
                            </tr>
                            <tr class=table-success>
                                <td>Shubh<br><i></i></td>
                                <td>Most Auspicious</td>
                                <td>07:08:PM</td>
                                <td>08:28:PM</td>
                            </tr>
                            <tr class=table-success>
                                <td>Amrut<br><i></i></td>
                                <td>Most Auspicious</td>
                                <td>08:28:PM</td>
                                <td>09:49:PM</td>
                            </tr>
                            <tr class=table-warning>
                                <td>Char<br><i></i></td>
                                <td>Good</td>
                                <td>09:49:PM</td>
                                <td>11:09:PM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Rog<br><i></i></td>
                                <td>Inauspicious</td>
                                <td>11:09:PM</td>
                                <td>12:29:AM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Kaal<br><i></i></td>
                                <td>Inauspicious</td>
                                <td>12:29:AM</td>
                                <td>01:50:AM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Labh<br><i>Kaal Ratri</i></td>
                                <td>Inauspicious</td>
                                <td>01:50:AM</td>
                                <td>03:10:AM</td>
                            </tr>
                            <tr class=table-danger>
                                <td>Udveg<br><i></i></td>
                                <td>Inauspicious</td>
                                <td>03:10:AM</td>
                                <td>04:31:AM</td>
                            </tr>
                            <tr class=table-success>
                                <td>Shubh<br><i></i></td>
                                <td>Most Auspicious</td>
                                <td>04:31:AM</td>
                                <td>05:51:AM</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form class="p-5 text-default" action="choghadiya.php" method="POST">
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