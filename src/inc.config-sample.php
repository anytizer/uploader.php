<?php
/**
 * Syncing files might take unexpected amount of time.
 */
ignore_user_abort(true);
set_time_limit(0);

/**
 * @todo SPL Auto include these files
 */
require_once("uploader/interface.uploader_interface.inc.php");
require_once("uploader/abstract.uploader_abstract.inc.php");
require_once("uploader/class.config.inc.php");
require_once("uploader/class.inc.uploader.php");
require_once("uploader/class.dropbox.inc.php");

use uploader\config;

$config = new config();
$config->token = ""; // generated manually
$config->path = "/uploads";
