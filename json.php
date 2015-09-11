<?php
//$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
//echo json_encode($arr);

//$json= file_get_contents('https://openapi.youku.com/v2/videos/show_basic.json?client_id=69b6e122da21a2d5&video_url=http://v.youku.com/v_show/id_XNzE2ODIxNDg0.html');

$json= file_get_contents('https://openapi.youku.com/v2/videos/show_basic_batch.json?client_id=69b6e122da21a2d5&video_ids=XNzE2ODIxNDg0,XNjAwMjU5Nzc2');
$vo = json_decode($json, true);

var_dump($vo['videos'][0]['thumbnail']);
?>