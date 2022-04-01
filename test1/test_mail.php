<html>

<head>
    <meta charset="utf-8" />
</head>

<body>
    <?php
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    //宛先
    $to = htmlspecialchars($_POST['to']);
    //送信者
    $from = "hoge21119@gmail.com";
    //件名
    $subject = "テスト送信です";
    //本文
    $text = "テスト送信です";

    //添付したいファイルのパス
    $file_path = "./test.txt";
    //ファイル名
    $file = "test.txt";

    //ヘッダー設定
    $header = "Content-Type: multipart/mixed;boundary=\"__BOUNDARY__\"\n";
    $header .= "Return-Path: " . $to . " \n";
    $header .= "From: " . $from ." \n";
    $header .= "Sender: " . $from ." \n";
    $header .= "Reply-To: " . $to . " \n";

    //本文設定
    $body = "--__BOUNDARY__\n";
    $body .= "Content-Type: text/plain; charset=\"ISO-2022-JP\"\n\n";
    $body .= $text . "\n";
    $body .= "--__BOUNDARY__\n";

    //添付ファイル設定
    $body .= "Content-Type: application/octet-stream; name=\"{$file}\"\n";
    $body .= "Content-Disposition: attachment; filename=\"{$file}\"\n";
    $body .= "Content-Transfer-Encoding: base64\n";
    $body .= "\n";
    $body .= chunk_split(base64_encode(file_get_contents($file_path)));
    $body .= "--__BOUNDARY__\n";

        if (mb_send_mail( $to, $subject, $body, $header)) {
            echo "メール送信成功です";
        } else {
            echo "メール送信失敗です";
        }
        ?>
</body>

</html>