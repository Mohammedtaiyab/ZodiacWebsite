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
                            <h2 class="section-title center">Charts</h2>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center ml-b-30">
                    <div class="col-md-5 ">
                <span class="text-black d-block b">Chaturvimsamsa Chart</span>
                <div class="card">
                    <div class="card-body">
                       <?xml version="1.0"?><svg viewBox="0 0 500 500" height=500 width=500 xmlns="http://www.w3.org/2000/svg"><line x1=5 y1=485 x2=485 y2=485 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=5 y1=5 x2=485 y2=485 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=485 y1=5 x2=5 y2=485 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=5 y1=240 x2=240 y2=485 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=5 y1=240 x2=240 y2=5 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=240 y1=5 x2=485 y2=240 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=485 y1=240 x2=240 y2=485 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=5 y1=5 x2=485 y2=5 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=5 y1=5 x2=5 y2=485 style="stroke:rgb(0,0,0);stroke-width:2"/><line x1=485 y1=5 x2=485 y2=485 style="stroke:rgb(0,0,0);stroke-width:2"/><text x=235 y=70 fill=black>10</text><text x=235 y=100 fill=black>Mo</text><text x=235 y=120 fill=black>Asc</text><text x=40 y=25 fill=black>11</text><text x=10 y=50 fill=black>12</text><text x=120 y=170 fill=black>1</text><text x=120 y=190 fill=black>Ve</text><text x=20 y=300 fill=black>2</text><text x=30 y=480 fill=black>3</text><text x=235 y=300 fill=black>4</text><text x=235 y=350 fill=black>Su</text><text x=430 y=480 fill=black>5</text><text x=460 y=280 fill=black>6</text><text x=450 y=340 fill=black>Ra</text><text x=450 y=360 fill=black>Ke</text><text x=360 y=180 fill=black>7</text><text x=360 y=220 fill=black>Ma</text><text x=360 y=240 fill=black>Sa</text><text x=470 y=50 fill=black>8</text><text x=450 y=100 fill=black>Me</text><text x=450 y=25 fill=black>9</text><text x=370 y=25 fill=black>Ju</text></svg> </div>

                    </div>
                </div>

                    </div>
    
                </div>
            </div>
        </section>


        <section>
            <div class="card contact-form-wrapper box-shadow mx-auto rounded-2 mb-5">
                <form class="p-5 text-default" action="chart.php" method="POST">
                    <?php include 'common/horoscope-form.tpl.php'; ?>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Chart Type</label>
                        <div class="col-sm-9 col-md-6">
                            <select name="chart_type" class="form-control form-control-lg rounded-1">
                                <option value=rasi>Rasi</option>
                                <option value=navamsa>Navamsa</option>
                                <option value=lagna>Lagna</option>
                                <option value=trimsamsa>Trimsamsa</option>
                                <option value=drekkana>Drekkana</option>
                                <option value=chaturthamsa>Chaturthamsa</option>
                                <option value=dasamsa>Dasamsa</option>
                                <option value=ashtamsa>Ashtamsa</option>
                                <option value=dwadasamsa>Dwadasamsa</option>
                                <option value=shodasamsa>Shodasamsa</option>
                                <option value=hora>Hora</option>
                                <option value=akshavedamsa>Akshavedamsa</option>
                                <option value=shashtyamsa>Shashtyamsa</option>
                                <option value=panchamsa>Panchamsa</option>
                                <option value=khavedamsa>Khavedamsa</option>
                                <option value=saptavimsamsa>Saptavimsamsa</option>
                                <option value=shashtamsa>Shashtamsa</option>
                                <option value=chaturvimsamsa selected>Chaturvimsamsa</option>
                                <option value=saptamsa>Saptamsa</option>
                                <option value=vimsamsa>Vimsamsa</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-md-4 col-form-label  text-md-right text-xs-left">Chart Style</label>
                        <div class="col-sm-9 col-md-6">
                            <select name="chart_style" class="form-control form-control-lg rounded-1">
                                <option value="south-indian">South Indian</option>
                                <option value="north-indian">North Indian</option>
                                <option value="east-indian">East Indian</option>
                            </select>
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