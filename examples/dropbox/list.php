<?php
/**
 * php -f list.php
 */
require_once("../../src/inc.config.php");

use uploader\dropbox;

$db = new dropbox($config);

/**
 * Get the list of all files and directories available
 */
$response = $db->files();
$json = json_decode($response, true);
print_r($json);

/**
 * Extract file names only from the list, including folder names
 */
$files = array();
if(count($json["entries"]))
foreach($json["entries"] as $file)
{
	$files[] = $file["name"];
}
print_r($files);
