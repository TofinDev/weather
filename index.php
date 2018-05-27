<?php
echo "Web alrady now";
echo "<br>";

$json = file_get_contents('https://api.coindesk.com/v1/bpi');
$obj = json_decode($json);

print_r($obj);

//echo $obj->timeFrameStart;
//echo $obj->Stations[0]->Temperature;
//echo "<br>";

?>
