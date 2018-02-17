<?php
/**
 * php -f download.php
 */
require_once("../../src/inc.config.php");

use uploader\dropbox;

$db = new dropbox($config);

/**
 * Download a single, known file.
 * Overwrites the downloaded contents.
 */

$filename = "20171220-051125-26017-test-upload.log";
$response = $db->download($filename, "../to-download/".basename($filename));
$json = json_decode($response, true);
print_r($json);
