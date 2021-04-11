<? if (isset($_SESSION['user'])) : ?>
    <?php header('Location: http://localhost/dashboard'); ?>
<? endif; ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Регистрация</div>
                <div class="card-body">
                    <div class="alert alert-danger mb-3 mt-1 d-none text-center" role="alert"></div>
                    <form>
                        <!-- Имя -->
                        <div class="form-group row">
                            <label for="name"
                                   class="col-md-4 col-form-label text-md-right">
                                Имя пользователя
                            </label>

                            <div class="col-md-6">
                                <input id="name"
                                       type="text"
                                       class="form-control"
                                       name="name"
                                       required
                                       autofocus>

                                <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>

                        <!-- Фамилия -->
                        <div class="form-group row">
                            <label for="surname"
                                   class="col-md-4 col-form-label text-md-right">
                                Фамилия
                            </label>

                            <div class="col-md-6">
                                <input id="surname"
                                       type="text"
                                       class="form-control"
                                       name="surname"
                                       required
                                       autofocus>
                                <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>

                        <!-- E-mail -->
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                Почтовый ящик
                            </label>

                            <div class="col-md-6">
                                <input id="email"
                                       type="email"
                                       class="form-control"
                                       name="email"
                                       required>
                                <span class="invalid-feedback" role="alert">
                                        <strong></strong>
                                    </span>
                            </div>
                        </div>

                        <!-- Password -->
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
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary register-user-btn">
                                    Зарегистрироваться
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>