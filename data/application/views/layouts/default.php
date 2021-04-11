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

<nav class="navbar navbar-expand-md navbar-light bg-white">
    <div class="container">
        <a class="navbar-brand" href="<?= $localhost; ?>">
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

                <? if (!isset($_SESSION['user'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=$localhost; ?>/login">Вход</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?=$localhost; ?>/register">Регистрация</a>
                </li>
                <? else: ?>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle"
                           href="#" role="button"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            <?=$_SESSION['user']['name'] ?>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right"
                             aria-labelledby="navbarDropdown">
                            <a class="dropdown-item logout-user-btn"
                               href="/logout">
                                Выйти
                            </a>
                        </div>
                    </li>
                <?endif; ?>
            </ul>
        </div>
    </div>
</nav>

<main class="py-5">
    <?= $content; ?>
</main>

<script src="<?= $localhost; ?>/public/scripts/jquery-3.6.0/jquery-3.6.0.min.js"></script>
<script src="<?= $localhost; ?>/public/scripts/bootsrap/bootstrap.bundle.min.js"></script>
<script src="<?= $localhost; ?>/public/scripts/bootsrap/popper.min.js"></script>

<script src="<?= $localhost; ?>/public/scripts/app.js"></script>
</body>
</html>