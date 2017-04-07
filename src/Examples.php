<?php
require_once __DIR__ . '/../vendor/autoload.php';

use \finekost\GenerativeSVG\GenerativeSVG;

$generativeSVG = new GenerativeSVG();
echo $generativeSVG->test();
