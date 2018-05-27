<?php
$json = file_get_contents('http://data.tmd.go.th/api/WeatherToday/V1');
$obj = json_decode($json);

//print_r($obj);

echo $obj->LastBuiltDate;

?>
