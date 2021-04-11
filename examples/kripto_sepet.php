<?php

require "../src/PlusAPI.php";

use ofarukbicer\PlusAPI\PlusAPI;

$plusapi = new PlusAPI("token");

$test = $plusapi->kripto_sepet();

echo "<pre>";
print_r($test);
echo "</pre>";