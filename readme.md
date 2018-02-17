# Uploader

A slim script to upload/download files in a Dropbox account.
In less than __10 KB__ footprint, you can:

 * Upload a file
 * Delete a file
 * Delete all files
 * Download file
 * List out all files

Hope, that is a complete implementation of basic requirements.

It explicitly works on a configured/selected folder only, so that accidental happenings in other paths are rare.


## Using Dropbox API

Uses [Dropbox API v2](https://www.dropbox.com/developers/documentation/http/documentation)'s selected features to perform.
Since the API appeared new successor, it may be stable for next few years. Their [API Explorer](https://dropbox.github.io/dropbox-api-v2-explorer/) is here for your experimentation.


## Usage Example

See examples/dropbox/*.php for more details.

 * [delete.php](examples/dropbox/delete.php)
 * [delete-all.php](examples/dropbox/delete-all.php)
 * [download.php](examples/dropbox/download.php)
 * [download-all.php](examples/dropbox/download-all.php)
 * [list.php](examples/dropbox/list.php)
 * [list-files.php](examples/dropbox/list-files.php)
 * [upload.php](examples/dropbox/upload.php)


## Configuration

    use uploader\config;
    use uploader\dropbox;
    
    $config = new config();
    $config->token = ""; // API Access Token
    $config->path = "/uploads";

    $db = new dropbox($config);


### Uploading a file

    $file = new uploader("/tmp/my-backup.pdf");
    $status = $db->upload($file);


### Fetching list of files

    $files = $db->files(); // including folders
    $files = $db->files_only();


### Deleting a file

	$response = $db->delete("uploaded.jpg");


## Configuration

Obtain an API key from Dropbox.
It is a private key and do not share to others.
Modify your config file.

    inc.config.php


### How to obtain an API Key

[Create an App in Dropbox](https://www.dropbox.com/developers/apps/create).
Chose the following options.

 * App: Dropbox API
 * Permission: To App folder
 * Name: Give some name

Then, Generate OAuth 2 API Key with the options:

   * Allow implicit grant: Allow
   * Generate access token
   * Copy/Paste it to inc.config.php
   * (Rename inc.config-sample.php to inc.config.php)

Done. Now create a folder where to upload.

 * Create a folder in /uploads
 * 	- settings
 *	- Set folder permission - me only
 *

## Resources

Images and icons used to demonstrated this work were taken from:

 * [icons8 - Upload to Cloud](https://icons8.com/icon/48264/upload-to-cloud)
 * [icons8 - Article](https://intercom.help/icons8/is-it-free/can-i-use-icons8-for-free)
