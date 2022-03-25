<?php
    $usePhone   = [
        '田中' => 'iPhone 6s',
        '山田' => 'iPhone 5',
        '村山' => 'iPhone 6',
        '中村' => 'iPhone 6s'
    ];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>tech.pjin.jp HTML5 Template</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1><i class="fa fa-check-square"></i> PHP問題８</h1>
            </div>
            <div class="jumbotron">
                <ul>
                <?php
                    foreach($usePhone as $user => $phone){
                ?>
                    <li><?= $user ?> は <?= $phone ?> を使っている。</li>
                <?php
                    }
                ?>
                </ul>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>