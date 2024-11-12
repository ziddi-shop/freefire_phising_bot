<?php
$file = 'venom/noob/here/yesme.json';
$jsonString = file_get_contents('venom/noob/here/yesme.json');
$data = json_decode($jsonString);
$content = json_decode($jsonString, true);

$email = $data->email;
$name = $data->name;
$senderMail = $data->sender;


$sender = "From: $name <$senderMail>";

$emailku = "$email";
?>