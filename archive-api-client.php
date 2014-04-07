<?php
$cURL = curl_init($_POST['url'] . '?output=json');
curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
$json = curl_exec($cURL);
curl_close($cURL);
echo $json;