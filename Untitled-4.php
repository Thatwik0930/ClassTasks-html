<?php

$country = $_POST["country"];

$states = array();
switch ($country) {
case "usa":
    $states = array("California", "New York", "Texas");
    break;
case "canada":
    $states = array("Ontario", "Quebec", "British Columbia");
    break;
}

echo json_encode($states);

?>
