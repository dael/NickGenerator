<?php
require '../vendor/autoload.php';
use Dael\NickGenerator\NickGenerator;

$ng = new NickGenerator();

echo $ng->makeNick().PHP_EOL;
