<?php
/**
 * php -f delete.php
 */
require_once("../../src/inc.config.php");

use uploader\dropbox;

$db = new dropbox($config);

/**
 * Deletes a single, known file
 */
$response = $db->delete("20171218-201354-3976-test-upload.log");
print_r(json_decode($response, true));
