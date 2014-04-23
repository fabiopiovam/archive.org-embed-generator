<?php
$protocol = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
define('HOST', $protocol . $_SERVER['HTTP_HOST']);