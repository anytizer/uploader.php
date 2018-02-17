<?php
/**
 * php -f list-files.php
 */
require_once("../../src/inc.config.php");

use uploader\dropbox;

$db = new dropbox($config);

/**
 * Get the list of only-files
 * Skip the folder names
 */
$files = $db->files_only();
print_r($files);
