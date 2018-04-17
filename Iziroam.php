<?php
/*
* Please contact karebetconnec@gmail.com if you confused using API Iziroam.
*/
if (version_compare(PHP_VERSION, '5.2.1', '<')) {
    throw new Exception('PHP version >= 5.2.1 required');
}
if (!function_exists('curl_init')) {
  throw new Exception('Iziroam needs the CURL PHP extension.');
}
if (!function_exists('json_decode')) {
  throw new Exception('Iziroam needs the JSON PHP extension.');
}
// Configurations
require_once('Iziroam/Config.php');
// Iziroam API Resources
require_once('Iziroam/Method.php');
// Post & Get Requestor
require_once('Iziroam/ApiRequestor.php');