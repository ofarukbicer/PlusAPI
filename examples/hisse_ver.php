<?php

require "../src/PlusAPI.php";

use ofarukbicer\PlusAPI\PlusAPI;

$plusapi = new PlusAPI("token");

$test = $plusapi->hisse_ver("SASA");

echo "<pre>";
print_r($test);
echo "</pre>";