<?php
$header = apache_request_headers();
//verify the request
$secret = 'secret_key'; // you set this in the web hook settings
$signature = hash_hmac('sha1', $_POST, $$secret, true);
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