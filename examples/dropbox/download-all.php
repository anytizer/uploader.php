<?php
/**
 * php -f download-all.php
 */
require_once("../../src/inc.config.php");

use uploader\dropbox;

$db = new dropbox($config);

/**
 * Create a local download folder
 * For each files on server,
 * Download and save them.
 */

/**
 * Get the list of files available
 */
$response = $db->files();
$json = json_decode($response, true);
#print_r($json);

foreach($json["entries"] as $file)
{
	/**
	 * Download and save in local path under same name
	 */
	$response = $db->download($file["name"], "../to-download/".basename($file["name"]));
	echo "\r\n", ($response==true)?"Success":"Failure", " :: ",  $file["name"], " :: ", $file["size"];
}
