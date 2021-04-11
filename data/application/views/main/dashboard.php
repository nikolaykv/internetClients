<? if (!empty($_SESSION['user'])): ?>
    <? if ($_SESSION['user']['is_admin'] === 'yes'): ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">Управление admin</div>
                        <div class="card-body">
                            <p class="text-center">Возможности админа!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? else: ?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            Управление <?= $_SESSION['user']['name'] . ' ' . $_SESSION['user']['surname']; ?></div>
                        <div class="card-body">
                            <p class="text-center">Возможности пользователя!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? endif; ?>
<? else: ?>
    <?php header('Location: http://localhost'); ?>
<? endif; ?>

