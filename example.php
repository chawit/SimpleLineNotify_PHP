<?php
//By Chawit Wiriyakun
$url = "https://notify-api.line.me/api/notify";
$headers = [
    'Content-Type: application/x-www-form-urlencoded',
    'Authorization: Bearer <your token>', 
];
$ch = curl_init();
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'message=hello');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec ($ch);
curl_close($ch);
?>
