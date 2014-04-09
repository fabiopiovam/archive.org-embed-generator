<?php
require_once 'archive-api-client.php';

$api = new ArchiveApiClient();

/*
 * uncomment this line to use your bookmarks
 * */
//$api->set_my_bookmarks('http://archive.org/bookmarks/YourAccount');

exit($api->get_my_bookmarks());