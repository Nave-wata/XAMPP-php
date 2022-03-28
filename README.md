# XAMPP-php

## Postfixを用いてのメール送信

[ここ](https://blog.ymyzk.com/2017/06/postfix-smarthost-gmail/)を参考にして，`<username>`は普通にgmailアドレス・`<password>`はGoogleアカウントで作成？したアプリパスワード的なものを書く．

送信
```
$ echo "<本文>" | mail <メールアドレス>
```

## PHPでのメール送信

php.iniを編集（phpinfoで場所探せる）

```php
[mail function]
⋮
smtp_port = 587 <関係ないとおもう>
⋮
sendmail_path = /usr/sbin/sendmail -t -i <重要>
```

の2カ所書き換え
