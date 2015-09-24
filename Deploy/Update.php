<?php
$header = apache_request_headers();
//verify the request
$signature = 'your signature here';
if (empty($_POST)
    || !isset($header['HTTP_X_HUB_SIGNATURE'])
    || $header['HTTP_X_HUB_SIGNATURE'] != $signature
) {
    die('invalid request');
}

// for stage only
if ($_POST['repository']['name'] == 'staging') {
    exec('git pull origin staging');
}

// for master only
if ($_POST['repository']['name'] == 'master') {
    exec('git pull origin master');
}

//file_put_contents(json_decode($_POST));