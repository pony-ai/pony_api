<?php
$str = 'https://wx4459d36c099a5f7b.h5.test.xiaoe-tech.com/mp/eyJpZCI6MzA2NTM5fQ';
$str = substr($str,strrpos($str, '/')+1);
$str = base64_decode($str);
$arr = ['param' => $str];
$re = http_build_query($arr);
echo $re . "\n";
/*
 * 打印结果
pay_info=%7B%22type%22%3A3%2C%22resource_type%22%3A%22%22%2C%22resource_id%22%3A
%22%22%2C%22product_id%22%3A%22p_5d318f837266a_eCAYh85J%22%2C%22app_id%22%3A%22a
ppwXZviG734747%22%7D
*/