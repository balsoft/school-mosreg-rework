<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://uslugi.mosreg.ru/scripts/sunshine/utils/utils.school.js"></script>
    <script>
        var exports = {
            init: function ($holder) {
                fn.requireJs('scripts/sunshine/utils/utils.school.js').then(function () {
                    window.utils.SchoolApiClient.setScope(fn, $scope);
                    var client = new window.utils.SchoolApiClient('card-login',
                        'https://school.mosreg.ru/', '', '');
                    client.tryShowInfoOrLoginWithSavedCredentials();
                });
            }
        };
    </script>
    <title>Школьный портал для людей</title>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">Школьный портал</span>
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation">
                    <a class="mdl-navigation__link" href="index.html">Главная</a>
                    <a class="mdl-navigation__link" href="">Дневник</a>
                    <a class="mdl-navigation__link" href="">Оценки</a>
                    <a class="mdl-navigation__link" href="">Настройки</a>
                </nav>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Школьный портал</span>W
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="index.html">Главная</a>
                <a class="mdl-navigation__link" href="">Дневник</a>
                <a class="mdl-navigation__link" href="">Оценки</a>
                <a class="mdl-navigation__link" href="">Настройки</a>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="mdl-card mdl-shadow--2dp card-login">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Добро пожаловать</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    Войдите на портал
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <form class="school__login-form" autocomplete="off">
                        <div class="school__login-form_text">
                            Просматривайте дневник своего ребенка.
                        </div>

                        <div class="form-group inrow">
                            <input class="school__login-form_input form-control input-sm" type="text" name="login" placeholder="Логин" value="" autocomplete="on">
                        </div>

                        <!-- Workaround to autocomplete="off" for chrome  -->
                        <input style="display:none">

                        <div class="form-group inrow">
                            <input class="school__login-form_input form-control input-sm " name="password" type="password" placeholder="Пароль" value=""
                                autocomplete="on">
                        </div>


                        <a class="school__login-form_ext-action school__login-form_ext-action-first" href="https://login.school.mosreg.ru/recovery/">
                            Восстановить пароль
                        </a>
                        <a class="school__login-form_ext-action" href="https://helpschool.mosreg.ru/hc/ru/articles/206087888">
                            Как получить доступ?
                        </a>

                        <!--<div class="school__login-form_link-instructions">-->
                        <!--Для связывания учетных записей школьного портала и портала услуг-->
                        <!--необходимо авторизоваться на портале услуг.-->
                        <!--</div>-->

                        <button class="school__login-form_button btn btn-primary">
                            <span>Войти</span>
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>