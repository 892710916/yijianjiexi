<?php 
// 配置信息
$Interface = 'http://api.yijianjiexi.com/v1/video/prase.php';
$clientId = '';
$clientSecretKey = '';
// 必要参数
$link = 'https://www.meipai.com/media/1095878890';
$timestamp = time();
$sign = md5($link . $timestamp . $clientSecretKey);
// 发送请求
$postData = array('link' => $link, 'timestamp' => $timestamp, 'clientId' => $clientId , 'sign' => $sign);
$header[] = "Content-Type:application/x-www-form-urlencoded";
$curl = curl_init($Interface);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postData));
$result = curl_exec($curl);
curl_close($curl);
print_r($result);
?>