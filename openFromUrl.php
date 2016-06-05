<?php

function curl_get_contents($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

$url=$_GET['url'];
$path_info = pathinfo($url);
header('Content-type: image/' . $path_info['extension']);
$file_content = curl_get_contents($url);
echo $file_content;

?>