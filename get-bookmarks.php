<?php
require_once 'archive-api-client.php';

$api = new ArchiveApiClient();
exit($api->get_my_bookmarks());
