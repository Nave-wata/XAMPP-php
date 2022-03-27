<html>
<head><title>PHP TEST</title></head>
<body>

<h1>メール送信</h1>

<?php
$to = 'towa7261@gmail.com';
$subject = 'test mail';
$message = "This is Test mail¥nMulti Line";
$message = wordwrap($message, 70, "\n");
$headers = 'From: my@example.jp'."\r\n".
           'To: towa7261@gmail.com'."\r\n".
           'X-Mailer: PHP/Mail';

if (mail($to, $subject, $message, $headers)){
  print('成功');
}else{
  print('エラー');
}
?>

</body>
</html>