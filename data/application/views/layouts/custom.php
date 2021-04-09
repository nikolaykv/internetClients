<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="<?= $localhost; ?>/favicon.ico" type="image/x-icon">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $localhost; ?>/public/styles/bootsrap/bootstrap.min.css">
    <title>
        <?= $title; ?>
    </title>
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            Структура данных
        </a>
        <button class="navbar-toggler" type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Навигация">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">На главную</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="py-5">
    <?= $content; ?>
</main>
<script src="<?= $localhost; ?>/public/scripts/jquery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?= $localhost; ?>/public/scripts/bootsrap/bootstrap.bundle.min.js"></script>
<script src="<?= $localhost; ?>/public/scripts/app.js"></script>

</body>
</html>