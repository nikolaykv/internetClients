<? if (isset($_SESSION['user'])) : ?>
  <?php header('Location: http://localhost/dashboard'); ?>
<? endif; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Авторизация
                </div>
                <div class="card-body">
                    <div class="alert alert-danger mb-3 mt-1 d-none text-center" role="alert"></div>

                    <? if (isset($_SESSION['register_success'])): ?>
                        <div class="alert alert-success mb-3 mt-1 text-center" role="alert">
                            <?= $_SESSION['register_success']['message']; ?>
                        </div>
                    <? endif; ?>

                    <form>
                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">
                                Почтовый ящик пользователя
                            </label>

                            <div class="col-md-6">
                                <input id="email"
                                       type="email"
                                       class="form-control"
                                       name="email"
                                       required
                                       autofocus>
                                <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                   class="col-md-4 col-form-label text-md-right">
                                Пароль
                            </label>

                            <div class="col-md-6">
                                <input id="password"
                                       type="password"
                                       class="form-control"
                                       name="password"
                                       required>

                                <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary login-user-btn">
                                    Авторизация
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
