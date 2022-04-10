<?php
$now = array(
    "a" => array(
        "a" => "a", 
        "b" => "b"
    ), 
    "b" => array(
        "a" => "c", 
        "b" => "d"
    )
);

$json = json_encode($now);
echo $json;

//処理終了
exit;
?>