<?php
require_once(dirname(dirname(__DIR__)) . "/classes/autoload.php");
require_once(dirname(dirname(__DIR__)) . "/lib/xsrf.php");
require_once("/etc/apache2/data-design/encrypted-config.php");

// start the session and create a XSRF token
if(session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// prepare an empty reply
$reply = new stdClass();
$reply->status = 200;
$reply->data = null;