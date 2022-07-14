<?php
use lib_a\accoglienza\Greet as Saluta;
use lib_b\acconglienza\Greet;

include __DIR__ . '/vendor/lib_a/index.php';
include __DIR__ . '/vendor/lib_b/index.php';

new Saluta();
new lib_b\addii\Goodby();
new Greet();
