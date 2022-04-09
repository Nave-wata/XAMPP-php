<?php
// 連想配列($array)
$array = array(
	"name" => "あらゆ" ,
	"gender" => "男" ,
	"blog" => array(
		"name" => "SYNCER" ,
		"published" => "2014-06-10" ,
		"url" => "https://syncer.jp/" ,
	),
);

$animals = array(
	"data" => "hoge", 
);

// 連想配列($array)をJSONに変換(エンコード)する
$json = json_encode( $animals ) ;
echo $json;
?>