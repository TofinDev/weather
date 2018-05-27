<?php
echo "Web alrady now";
echo "<br>";

$json = file_get_contents('http://www.set.or.th/th/products/isv');
$obj = json_decode($json);

print_r($obj);

//echo $obj->timeFrameStart;
//echo $obj->Stations[0]->Temperature;
//echo "<br>";

?>
