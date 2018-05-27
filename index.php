<?php
echo "Web alrady now";
echo "<br>";

$json = file_get_contents('http://data.tmd.go.th/api/WeatherToday/V1/?type=json');
$obj = json_decode($json);

//print_r($obj);
echo $obj->Stations[0]->Temperature;
echo "ติดต่อไม่ได้";
echo "<br>";

?>
