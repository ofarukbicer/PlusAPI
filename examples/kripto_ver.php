<?php

require "../src/PlusAPI.php";

use ofarukbicer\PlusAPI\PlusAPI;

$plusapi = new PlusAPI("token");

$test = $plusapi->kripto_ver("BTC");

echo "<pre>";
print_r($test);
echo "</pre>";