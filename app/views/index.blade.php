<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>index</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet/less" type="text/css" href="{{ URL::asset('assets/css/style.less') }}"/>
    <script src="{{ URL::asset('assets/scripts/masonry.js') }}"></script>
    <script src="{{ URL::asset('assets/scripts/slider.js') }}"></script>
    <script src="{{ URL::asset('assets/scripts/less.js') }}"></script>
    <script src="{{ URL::asset('assets/scripts/style.js') }}"></script>
</head>
<body>
<header>
    <div>
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="logo"/>
            <a href="{{ URL::to('/') }}"></a>
        </div>
        <nav>
            <div class="city">
                <p>
                    Москва
                </p>
                <span></span>
                <ul>
                    <li>
                        <a href="#">Москва</a>
                    </li>
                    <li>
                        <a href="#">Санкт-Петербург</a>
                    </li>
                    <li>
                        <a href="#">Новосибирск</a>
                    </li>
                    <li>
                       <a href="#"> Екатеринбург</a>
                    </li>
                    <li>
                        <a href="#">Нижний Новгород</a>
                    </li>
                    <li>
                        <a href="#">Казань</a>
                    </li>
                </ul>
            </div>
            <div class="menu_open big catalog">
                <a href="{{ URL::to('/products') }}" class="stop_propagation">
                    Товары
                </a>
                <div>
                    <div class="item">
                        <h5>
                            платья на свадьбу
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Свадебные платья</a>
                            </li>
                            <li>
                                <a href="#">Свадебные платья</a>
                            </li>
                            <li>
                                <a href="#">Свадебные платья</a>
                            </li>
                            <li>
                                <a href="#">Свадебные платья</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            свадебные аксессуары
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Фата</a>
                            </li>
                            <li>
                                <a href="#">Уляпки и вуалетки</a>
                            </li>
                            <li>
                                <a href="#">Болеро, Накидки, Шубки</a>
                            </li>
                            <li>
                                <a href="#">Украшения на голову</a>
                            </li>
                            <li>
                                <a href="#">Кринолины и подъюбники</a>
                            </li>
                            <li>
                                <a href="#">Печатки и митенки</a>
                            </li>
                            <li>
                                <a href="#">Ремни, пояса</a>
                            </li>
                            <li>
                                <a href="#">Зонты и веера</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            свадебная обувь
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Туфли</a>
                            </li>
                            <li>
                                <a href="#">Босоножки</a>
                            </li>
                            <li>
                                <a href="#">Сапожки</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            нижнее белье
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Бюстгалтеры</a>
                            </li>
                            <li>
                                <a href="#">Трусики</a>
                            </li>
                            <li>
                                <a href="#">Подвязки</a>
                            </li>
                            <li>
                                <a href="#">Чулки, колготки</a>
                            </li>
                            <li>
                                <a href="#">Моделирующее белье</a>
                            </li>
                            <li>
                                <a href="#">Комплекты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            Свадебная бижутерия
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Браслеты</a>
                            </li>
                            <li>
                                <a href="#">Броши</a>
                            </li>
                            <li>
                                <a href="#">Комплекты</a>
                            </li>
                            <li>
                                <a href="#">Ожерелья, колье</a>
                            </li>
                            <li>
                                <a href="#">Серьги</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            Ювелирные изделия
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Обручальные кольца</a>
                            </li>
                            <li>
                                <a href="#">Помолвочные кольца</a>
                            </li>
                            <li>
                                <a href="#">Серьги</a>
                            </li>
                            <li>
                                <a href="#">Ожерелья, колье</a>
                            </li>
                            <li>
                                <a href="#">Браслеты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            Свадебный декора
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Украшения для машин</a>
                            </li>
                            <li>
                                <a href="#">Для фотосессии</a>
                            </li>
                            <li>
                                <a href="#">Замочки</a>
                            </li>
                            <li>
                                <a href="#">Свадебные бокалы</a>
                            </li>
                            <li>
                                <a href="#">Указатели</a>
                            </li>
                            <li>
                                <a href="#">Корзинки для лепестков</a>
                            </li>
                            <li>
                                <a href="#">Небесные фонарики</a>
                            </li>
                            <li>
                                <a href="#">Для конкурсов</a>
                            </li>
                            <li>
                                <a href="#">Фигурки</a>
                            </li>
                            <li>
                                <a href="#">Свечи</a>
                            </li>
                            <li>
                                <a href="#">Украшения для зала</a>
                            </li>
                            <li>
                                <a href="#">Подушечки для колец</a>
                            </li>
                            <li>
                                <a href="#">Значки</a>
                            </li>
                            <li>
                                <a href="#">Украшения на шампанское</a>
                            </li>
                            <li>
                                <a href="#">Приборы для торта</a>
                            </li>
                            <li>
                                <a href="#">Сундучки для денег</a>
                            </li>
                            <li>
                                <a href="#">Для выкупа</a>
                            </li>
                            <li>
                                <a href="#">Держатели для карточек</a>
                            </li>
                            <li>
                                <a href="#">Рушники</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            Полиграфия
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Свадебные приглашения</a>
                            </li>
                            <li>
                                <a href="#">Планы рассадки</a>
                            </li>
                            <li>
                                <a href="#">Рассадочные карточки</a>
                            </li>
                            <li>
                                <a href="#">Книги пожеланий</a>
                            </li>
                            <li>
                                <a href="#">Папки для свидетельства</a>
                            </li>
                            <li>
                                <a href="#">Бонбоньерки</a>
                            </li>
                            <li>
                                <a href="#">Фотоальбомы</a>
                            </li>
                            <li>
                                <a href="#">Плакаты</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            Для мужчин
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Костюмы</a>
                            </li>
                            <li>
                                <a href="#">Обувь</a>
                            </li>
                            <li>
                                <a href="#">Аксессуары</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            Флористика
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Букеты невесты</a>
                            </li>
                            <li>
                                <a href="#">Украшения</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <h5>
                            Торты и сладости
                        </h5>
                        <ul>
                            <li>
                                <a href="#">Свадебные торты</a>
                            </li>
                            <li>
                                <a href="#">Караваи</a>
                            </li>
                            <li>
                                <a href="#">Сладости</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a href="{{ URL::to('/ideas') }}">
                Идеи
            </a>
            <div class="menu_open big">
                <a href="{{ URL::to('/articles') }}" class="stop_propagation">
                    Статьи
                </a>
                <div>
                <div class="item">
                    <h5>
                        платья на свадьбу
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Свадебные платья</a>
                        </li>
                        <li>
                            <a href="#">Свадебные платья</a>
                        </li>
                        <li>
                            <a href="#">Свадебные платья</a>
                        </li>
                        <li>
                            <a href="#">Свадебные платья</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        свадебные аксессуары
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Фата</a>
                        </li>
                        <li>
                            <a href="#">Уляпки и вуалетки</a>
                        </li>
                        <li>
                            <a href="#">Болеро, Накидки, Шубки</a>
                        </li>
                        <li>
                            <a href="#">Украшения на голову</a>
                        </li>
                        <li>
                            <a href="#">Кринолины и подъюбники</a>
                        </li>
                        <li>
                            <a href="#">Печатки и митенки</a>
                        </li>
                        <li>
                            <a href="#">Ремни, пояса</a>
                        </li>
                        <li>
                            <a href="#">Зонты и веера</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        свадебная обувь
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Туфли</a>
                        </li>
                        <li>
                            <a href="#">Босоножки</a>
                        </li>
                        <li>
                            <a href="#">Сапожки</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        нижнее белье
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Бюстгалтеры</a>
                        </li>
                        <li>
                            <a href="#">Трусики</a>
                        </li>
                        <li>
                            <a href="#">Подвязки</a>
                        </li>
                        <li>
                            <a href="#">Чулки, колготки</a>
                        </li>
                        <li>
                            <a href="#">Моделирующее белье</a>
                        </li>
                        <li>
                            <a href="#">Комплекты</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        Свадебная бижутерия
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Браслеты</a>
                        </li>
                        <li>
                            <a href="#">Броши</a>
                        </li>
                        <li>
                            <a href="#">Комплекты</a>
                        </li>
                        <li>
                            <a href="#">Ожерелья, колье</a>
                        </li>
                        <li>
                            <a href="#">Серьги</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        Ювелирные изделия
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Обручальные кольца</a>
                        </li>
                        <li>
                            <a href="#">Помолвочные кольца</a>
                        </li>
                        <li>
                            <a href="#">Серьги</a>
                        </li>
                        <li>
                            <a href="#">Ожерелья, колье</a>
                        </li>
                        <li>
                            <a href="#">Браслеты</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        Свадебный декора
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Украшения для машин</a>
                        </li>
                        <li>
                            <a href="#">Для фотосессии</a>
                        </li>
                        <li>
                            <a href="#">Замочки</a>
                        </li>
                        <li>
                            <a href="#">Свадебные бокалы</a>
                        </li>
                        <li>
                            <a href="#">Указатели</a>
                        </li>
                        <li>
                            <a href="#">Корзинки для лепестков</a>
                        </li>
                        <li>
                            <a href="#">Небесные фонарики</a>
                        </li>
                        <li>
                            <a href="#">Для конкурсов</a>
                        </li>
                        <li>
                            <a href="#">Фигурки</a>
                        </li>
                        <li>
                            <a href="#">Свечи</a>
                        </li>
                        <li>
                            <a href="#">Украшения для зала</a>
                        </li>
                        <li>
                            <a href="#">Подушечки для колец</a>
                        </li>
                        <li>
                            <a href="#">Значки</a>
                        </li>
                        <li>
                            <a href="#">Украшения на шампанское</a>
                        </li>
                        <li>
                            <a href="#">Приборы для торта</a>
                        </li>
                        <li>
                            <a href="#">Сундучки для денег</a>
                        </li>
                        <li>
                            <a href="#">Для выкупа</a>
                        </li>
                        <li>
                            <a href="#">Держатели для карточек</a>
                        </li>
                        <li>
                            <a href="#">Рушники</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        Полиграфия
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Свадебные приглашения</a>
                        </li>
                        <li>
                            <a href="#">Планы рассадки</a>
                        </li>
                        <li>
                            <a href="#">Рассадочные карточки</a>
                        </li>
                        <li>
                            <a href="#">Книги пожеланий</a>
                        </li>
                        <li>
                            <a href="#">Папки для свидетельства</a>
                        </li>
                        <li>
                            <a href="#">Бонбоньерки</a>
                        </li>
                        <li>
                            <a href="#">Фотоальбомы</a>
                        </li>
                        <li>
                            <a href="#">Плакаты</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        Для мужчин
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Костюмы</a>
                        </li>
                        <li>
                            <a href="#">Обувь</a>
                        </li>
                        <li>
                            <a href="#">Аксессуары</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        Флористика
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Букеты невесты</a>
                        </li>
                        <li>
                            <a href="#">Украшения</a>
                        </li>
                    </ul>
                </div>
                <div class="item">
                    <h5>
                        Торты и сладости
                    </h5>
                    <ul>
                        <li>
                            <a href="#">Свадебные торты</a>
                        </li>
                        <li>
                            <a href="#">Караваи</a>
                        </li>
                        <li>
                            <a href="#">Сладости</a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="menu_open small">
                <a href="{{ URL::to('/services') }}" class="stop_propagation">
                    услуги
                </a>
                    <div>
                        <div>
                            <ul>
                                <li>
                                    <a href="#">Свадебные приглашения</a>
                                </li>
                                <li>
                                    <a href="#">Планы рассадки</a>
                                </li>
                                <li>
                                    <a href="#">Рассадочные карточки</a>
                                </li>
                                <li>
                                    <a href="#">Книги пожеланий</a>
                                </li>
                                <li>
                                    <a href="#">Папки для свидетельства</a>
                                </li>
                                <li>
                                    <a href="#">Бонбоньерки</a>
                                </li>
                                <li>
                                    <a href="#">Фотоальбомы</a>
                                </li>
                                <li>
                                    <a href="#">Плакаты</a>
                                </li>
                            </ul>
                        </div>
                    </div>
            </div>
        </nav>
        <a href="{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}" class="open">Войти</a>
    </div>
</header>
<section>
    <article>
        @yield('content')
    </article>
</section>
<footer>
    <div>
        <div class="wedmall">
            <img src="../images/logo2.png" alt="logo"/>
            <p>
                Wedmall.ru — это крупнейший свадебный
                гипермаркет с более чем 60 000 товарами
                от 80 магазинов
            </p>
            <a href="#">пользовательское соглашение</a>
            <p class="copiwrite">
                © 2014 Все права защищены
            </p>
        </div>
        <div class="about">
            <h2>
                о нас
            </h2>
            <ul>
                <li>
                    <a href="#">О проекте</a>
                </li>
                <li>
                    <a href="#">клиенты</a>
                </li>
                <li>
                    <a href="#">контакты</a>
                </li>
            </ul>
        </div>
        <div class="partners">
            <h2>
                о нас
            </h2>
            <ul>
                <li>
                    <a href="#">Преимущества</a>
                </li>
                <li>
                    <a href="#">Как стать партнером</a>
                </li>
                <li>
                    <a href="#">Вход для партнеров</a>
                </li>
            </ul>
        </div>
        <div class="social">
            <h2>
                мы в соцсетях
            </h2>
            <a href="#" class="contact"></a>
            <a href="#" class="facebook"></a>
            <a href="#" class="twitter"></a>
            <a href="#" class="pinterest"></a>
            <a href="#" class="back_link">Разработка сайта - <img src="../images/webcekret.png" /></a>
        </div>
    </div>
</footer>
</body>
</html>