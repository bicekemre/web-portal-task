<?php
use Luracast\Restler\Format\HtmlFormat;
use Luracast\Restler\Restler;

require __DIR__ . '/../vendor/autoload.php';


$r = new Restler();
$r->addAPIClass(\App\Data::class, '/api');
$r->setSupportedFormats('JsonFormat', 'HtmlFormat');
$r->addAPIClass(\App\Home::class, '');

$r->handle();
