<?php
/**
 * php -f upload.php
 */
require_once("../../src/inc.config.php");

use uploader\uploader;
use uploader\dropbox;

/**
 * @todo Upload various mime types
 *
 * Upload plain text
 * Upload image file
 * Upload zip archive
 * Upload PDF and Docs files
 */

/**
 * Prepare the file to upload
 */
$file = new uploader("../to-upload/test-upload.log");

/**
 * Uploader handler
 */
$db = new dropbox($config);

/**
 * Upload a single file under new name
 * File name is auto determined by uploader's rules
 */
$response = $db->upload($file);
print_r(json_decode($response, true));

/**
 * Log the file event
 */
#file_put_contents("logs/{$file->name()}.txt", $response);
