<?php

$proxy = @$_GET['proxy'] ?: 'SOCKS5 127.0.0.1:8964; SOCKS 127.0.0.1:8964';

$file = file_get_contents('flora_pac.pac');

$file = preg_replace('/{{PROXY}}/', $proxy, $file);

header('Content-Type: application/x-ns-proxy-autoconfig; charset=UTF-8');
header('Content-Disposition: attachment; filename="flora_pac.pac"');

echo $file;
