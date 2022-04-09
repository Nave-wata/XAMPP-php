<?php
$animals = array(
	"data" => "hoge", 
);

// 連想配列($array)をJSONに変換(エンコード)する
$json = json_encode( $animals ) ;
echo $json;
?>