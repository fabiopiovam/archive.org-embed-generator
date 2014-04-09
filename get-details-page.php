<?php
require_once 'archive-api-client.php';

$api = new ArchiveApiClient();
exit($api->get_details_page($_POST['url']));