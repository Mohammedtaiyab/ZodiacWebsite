<?php
include __DIR__ . '/client.php';
$client = new Prokerala\Api\Sample\ApiClient('82735456-d830-40af-8f6a-f0520f173104', 'IR0QQXI27JLViDZBUgk1O5ZbrCuwiUuVqholvQz2');
if (isset($_POST["check"])) {
    $ayanamsa = $_POST["ayanamsa"];
    $datew = date($_POST["datetime"]);
    $location = $_POST["location"];
    $date = date_create($datew);
    $check= $_POST["check"];
    // echo date_format($date, DATE_ATOM);
    $panchangResult = $client->get('v2/astrology/panchang', [
        'ayanamsa' => $ayanamsa,
        'coordinates' =>  $location,
        'datetime' => date_format($date, DATE_ATOM)
    ]);
      echo json_encode($panchangResult);
} 

?>