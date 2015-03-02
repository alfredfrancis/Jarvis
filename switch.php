<?php
$file = "switch.json";
$jsonString = file_get_contents($file);
$data = json_decode($jsonString,true);
if (isset($_REQUEST['bname']))
{
    $data[$_REQUEST['bname']] = $_REQUEST['bstatus'];
}
$newJsonString = json_encode($data);
echo $newJsonString;
file_put_contents('switch.json', $newJsonString);
?>
