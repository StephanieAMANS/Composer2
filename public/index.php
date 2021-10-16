<?php
require '../src/wcs/Hello.php';
require '../vendor/autoload.php';

$hello = new wcs\Hello();
echo $hello->say();
