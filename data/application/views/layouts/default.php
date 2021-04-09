<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME']; ?>/favicon.ico" type="image/x-icon">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME']; ?>/public/styles/bootsrap/bootstrap.min.css">
    <title><?= $title; ?></title>
</head>
<body>
<p>

    <?= $content; ?>
</p>

<script src="<?=$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME']; ?>//public/scripts/bootsrap/bootstrap.bundle.min.js"
</body>
</html>