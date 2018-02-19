<?php
require_once("vendor/autoload.php");
require_once("inc.config.php");

use uploader\config;
use uploader\dropbox;

$config = new config();
$config->token = $dropbox["token"];
$config->path = $dropbox["path"];;

$db = new dropbox($config);

$file = new uploader("/tmp/my-backup.pdf");
$status = $db->upload($file);

// sleep 1
// test file downloaded by dropbox client
// file exists
