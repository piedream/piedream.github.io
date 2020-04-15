<?php
$handle = curl_init();
$url = $_GET["url"];

curl_setopt($handle, CURLOPT_HTTPHEADER, array( 'User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.163 Safari/537.36'));
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($handle, CURLOPT_HEADER,         1);

$output = curl_exec($handle);
curl_close($handle);
echo $output;
