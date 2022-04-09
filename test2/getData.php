<?php
$now = array(
    "time" => date("Y/m/d h:m:s")
);

$json = json_encode($now);
echo $json;

//処理終了
exit;
?>