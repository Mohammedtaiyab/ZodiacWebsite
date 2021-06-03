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
        <section class="faq-section ptb-120" style="padding-bottom: 20px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title center">Auspicious Timing</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">
                    <span class="text-black d-block b"></span>
                    <table class="table table-bordered text-large text-center table-hover">
                        <tr class="bg-secondary text-white">
                            <th>Auspicious Yogas</th>
                            <th>Time</th>
                        </tr>
                        <tr class=border-top>
                            <td>Abhijit Muhurat</td>
                            <td>
                                12:04:PM to 12:57:PM <br>
                            </td>
                        </tr>
                        <tr class=border-top>
                            <td>Amrit Kaal</td>
                            <td>
                                11:15:AM to 12:42:PM <br>
                            </td>
                        </tr>
                        <tr class=border-top>
                            <td>Brahma Muhurat</td>
                            <td>
                                04:14:AM to 05:02:AM <br>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <section>
            <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form class="p-5 text-default" action=panchang.php method=POST>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Ayanamsa</label>
                        <div class="col-sm-9 col-md-6">
                            <select name="ayanamsa" class="form-control form-control-lg rounded-1">
                                <option value="1" selected>Lahiri</option>
                                <option value="3">Raman</option>
                                <option value="5">KP</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Date: </label>
                        <div class="col-sm-9 col-md-6 ">
                            <input type="date" name="datetime" class="form-control form-control-lg rounded-1" required=required value=2021-05-30 />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left ">Location:</label>
                        <div class="col-sm-9 col-md-6 ">
                            <input type="text" name="location" id="location" class="form-control form-control-lg rounded-1 prokerala-location-input" placeholder="Enter Location" value="" required>
                        </div>
                    </div>
                    <div id=form-hidden-fields>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Result Type: </label>
                        <div class="col-sm-9 col-md-6 ">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type=radio name=result_type id=result_type1 value=basic checked>
                                <label class="form-check-label" for=result_type1>Basic</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-inpu" t type="radio" name="result_type" id="result_type2" value="advanced">
                                <label class="form-check-label" for="result_type2">Advanced</label>
                            </div>
                        </div>
                    </div>
                    <div class=text-right>
                        <button type=submit class="btn btn-warning btn-submit">Get Result</button>
                        <input type=hidden name=submit value=1>
                    </div>
                </form>
            </div>
        </section>


    </div>
</div>



<?php
require("include/footer.php");

?>