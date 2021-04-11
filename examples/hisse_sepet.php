<?php

require "../src/PlusAPI.php";

use ofarukbicer\PlusAPI\PlusAPI;

$plusapi = new PlusAPI("token");

$ex = $plusapi->hisse_sepet();

echo "<pre>";
print_r($ex);
echo "</pre>";