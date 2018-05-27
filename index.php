<?php
echo "Web alrady now";

$json = file_get_contents('http://api.football-data.org/v1/fixtures');
$obj = json_decode($json);

print_r($obj);

//echo $obj->StationNameTh;
//echo $obj->Stations[0]->Temperature;
//echo "<br>";

?>
