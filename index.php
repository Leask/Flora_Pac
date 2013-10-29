<?php

$proxy = @$_GET['proxy'];

$file = file_get_contents('flora_pac.pac');

if ($proxy) {
    $file = preg_replace('/{{PROXY}}/', $proxy, $file);
}

echo $file;
