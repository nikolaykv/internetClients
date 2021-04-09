<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Авторизация
                </div>

                <div class="card-body">
                    <form method="POST" action="login">

                        <div class="form-group row">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">
                                Почтовый ящик пользователя
                            </label>

                            <div class="col-md-6">
                                <input id="email" type="email"
                                       class="form-control"
                                       name="email"
                                       required
                                       autofocus>
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
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
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