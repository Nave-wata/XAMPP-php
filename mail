# XAMPP-php

## Postfixを用いてのメール送信

[ここ](https://blog.ymyzk.com/2017/06/postfix-smarthost-gmail/)を参考にして，`<username>`は普通にgmailアドレス・`<password>`はGoogleアカウントで作成？したアプリパスワード的なものを書く．(2段階承認必須)

送信
```cmd
$ echo "<本文>" | mail <メールアドレス>
```

## PHPでのメール送信

/opt/lampp/etc/php.iniを編集（phpinfoで場所探せる）

```ini
[mail function]
sendmail_path = /usr/sbin/sendmail -t -i <重要>
```

/etc/postfix/main.cfの編集（無ければエラーでるかな？）

```rf
inet_protcols=ipv4
```

の2カ所書き換え
