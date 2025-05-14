<?php
$blobUrl = "https://<your-sas-url>";

$ch = curl_init($blobUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
$contentType = curl_getinfo($ch, CURLINFO_CONTENT_TYPE);
curl_close($ch);

header("Content-Type: $contentType");
echo $response;
?>
