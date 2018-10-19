<?php


/*
$password="123456";
$hash='';
$salt="JpwzO05wgRHG0dhuaPBaOU";
$hash_f=$hash.$salt;
$password=crypt($password,$hash_f);
echo $password;
*/

$v="4d5455794e513d3d";
$v=hex2bin($v);
$v=base64_decode($v);
$v=(($v/5)-300)/5;
echo $v;



?>
