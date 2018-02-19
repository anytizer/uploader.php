<?php
/**
 * Warning
 * DO NOT RUN it for reasons other than testing purpose.
 *
 * php -f delete-all.php
 */
require_once("../../src/inc.config.php");

use uploader\dropbox;

$db = new dropbox($config);

/**
 * Fetches the list of all files and deletes them individually.
 */

/**
 * Get the list of files available in the same path
 */
$response = $db->files();
$json = json_decode($response, true);
print_r($json);

/**
 * Delete all files listed
 */
if(count($json["entries"]))
foreach($json["entries"] as $file)
{
	$response = $db->delete($file["name"]);
	print_r(json_decode($response, true));
}
