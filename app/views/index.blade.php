<!DOCTYPE html>

<html>

<head lang="en">

    <meta charset="UTF-8">

    <meta name="MobileOptimized" content="360"/>

    <meta name="HandheldFriendly" content="true"/>

    <meta name="viewport" content="width=360">

    <title>
        @section('title')
            Wedmall
        @show
    </title>

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
    <script src="{{ URL::asset('assets/scripts/behavior.js') }}"></script>

</head>

<body>

<header>

    <div>

    <a href="#" class="open_menu"></a>

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

                <a href="{{ URL::to('products') }}" class="stop_propagation">
                    @lang('labels.products')
                </a>

                <div>
                @foreach ($categories as $category)
                    <div class="item">
                    <h5><a href="{{ URL::to('category/'.$category->alias) }}">{{{ $category->title }}}</a></h5>
                    @if (count($category->children))
                        <ul>
                            @foreach ($category->children as $subcategory)
                                <li>
                                    <a href="{{ URL::to('category/'.$subcategory->alias) }}">{{{ $subcategory->title }}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    </div>
                @endforeach
                </div>
            </div>

            <a href="#">
                @lang('labels.ideas')
            </a>

            <div class="menu_open big">

                <a href="{{ URL::to('articles') }}" class="stop_propagation">
                    @lang('labels.articles')
                </a>

                <div>
                @foreach ($topics as $topic)
                    <div class="item">
                    <h5><a href="{{ URL::to('articles/'.$topic->alias) }}">{{{ $topic->title }}}</a></h5>
                    @if (count($topic->children))
                        <ul>
                            @foreach ($topic->children as $subtopic)
                                <li>
                                    <a href="{{ URL::to('articles/'.$topic->alias.'/'.$subtopic->alias) }}">{{{ $subtopic->title }}}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    </div>
                @endforeach
                </div>
            </div>

            <div class="menu_open small">

                <a href="#" class="stop_propagation">
                    @lang('labels.services')
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
        @if (Auth::check())
            <div class="user">
               <div class="top">
                   <div class="photo">
                       <img src="" alt=""/>
                   </div>
                   <span>
                       {{{ Auth::user()->username }}}
                   </span>
               </div>
                <div class="over">
                    <ul>
                        <li>
                            <a href="#" class="like">@lang('labels.my_likes')</a>
                        </li>
                        <li>
                            <a href="#" class="my_collections">@lang('labels.my_collections')</a>
                        </li>
                        <li>
                            <a href="{{ URL::to('user') }}" class="profile">@lang('labels.profile')</a>
                        </li>
                        <li class="exit">
                            <a href="{{ URL::to('user/logout') }}" class="exit">@lang('labels.logout')</a>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <a href="#" class="open popup_open" data-type="popup_auth">@lang('labels.login')</a>
        @endif
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

<div id="popup">

    <div class="add_portfolio" style="display: none">

        <form>

            <h3>

            Добавить работу

            </h3>

            <div class="add_photo">

                <div class="foto"></div>

                <input type="button" value="Загрузить фото">

            </div>

            <label>Название:</label>

            <input type="text"/>

            <label>Ключевые слова:</label>

            <input type="text"/>

            <span class="for_input">

                Через запятую

            </span>

            <label>

                3 цвета:

            </label>

            <span>

                Выберите цвета, которые близки к цветовой гамме изображения

            </span>

            <div class="color">

                <input type="checkbox" id="100"> <label for="100" class="color red"></label>

                <input type="checkbox" id="200"> <label for="200" class="color ping"></label>

                <input type="checkbox" id="300"> <label for="300" class="color yellow"></label>

                <input type="checkbox" id="400"> <label for="400" class="color green"></label>

                <input type="checkbox" id="500"> <label for="500" class="color turquoise"></label>

                <input type="checkbox" id="600"> <label for="600" class="color blue"></label>

                <input type="checkbox" id="700"> <label for="700" class="color plum"></label>

                <input type="checkbox" id="800"> <label for="800" class="color fiolet"></label>

                <input type="checkbox" id="9000000"> <label for="9000000" class="color dark_red"></label>

                <input type="checkbox" id="900"> <label for="900" class="color grap"></label>

                <input type="checkbox" id="9000"> <label for="9000" class="color white"></label>

                <input type="checkbox" id="90000"> <label for="90000" class="color gray"></label>

                <input type="checkbox" id="900000"> <label for="900000" class="color black"></label>

            </div>

            <input type="submit" value="Добавить работу"/>

        </form>

        <a href="#" class="close"></a>

    </div>

    <div class="add_collection" style="display: none">

        <form>

            <h3>

                Добавить работу

            </h3>

            <div class="add_photo">

                <div class="foto">

                    <img src="../images/other/preview_cost.png" alt="">

                </div>

                <p>

                    Свадебное платье Темпо

                </p>

            </div>

            <div class="checkbox">

                <input type="checkbox" id="1"> <label for="1">69slam</label>

                <input type="checkbox" id="2"> <label for="2">Aaiko</label>

                <input type="checkbox" id="3"> <label for="3">69slam</label>

                <input type="checkbox" id="4"> <label for="4">Aaiko</label>

                <input type="checkbox" id="5"> <label for="5">69slam</label>

                <input type="checkbox" id="6"> <label for="6">Aaiko</label>

                <input type="checkbox" id="7"> <label for="7">69slam</label>

                <input type="checkbox" id="8"> <label for="8">Aaiko</label>

                <input type="checkbox" id="9"> <label for="9">69slam</label>

            </div>

            <div class="add collection">

                <i>Создать новую коллекцию:</i>

                <input type="text" placeholder="Название"/>

                <a href="#" class="push"></a>

            </div>

            <input type="submit" value="Добавить"/>

        </form>

        <a href="#" class="close"></a>

    </div>

    <div class="popup_article" style="display: none">

        <div class="breadcrumbs">

            <a href="#">Главная</a>

            <a href="#">Платья на свадьбу</a>

            <a href="#">Все о свадебных платьях</a>

        </div>

        <h2>

            Все о свадебных платьях

        </h2>

        <div class="prev_article">

            <span>

                12 сентября 2014, 10:21

            </span>

            <span class="views">

                    34 534

            </span>

            <span class="heart">

                    5600

            </span>

        </div>

        <div class="image">

            <img src="../images/other/big_article.png" alt="">

            <div class="hover">

                <div class="preview">

                    <a href="#" class="love"></a>

                    <a href="#" class="add"></a>

                </div>

            </div>

        </div>

        <p>

            Вот уже более семи лет я работаю продавцом-консультантом в свадебном салоне – помогаю девушкам выбрать

            свадебное платье, подобрать к нему фату, веночек и другие аксессуары. Как радостно видеть счастливые глаза

            девушки, когда находишь для нее именно то, что гармонично сочетается с ее внешностью и характером, подчёркивает

            ее собственную, неповторимую красоту! Все невесты милы и очаровательны – а правильно подобранный наряд делает

            их просто великолепными!

        </p>

        <a href="#" class="button">Читать всю статью</a>

        <div class="site_like">

            <a href="#" class="like">Нравится</a>

            <a href="#" class="collection">Нравится</a>

            <div class="share">

                <a href="#" class="share">Поделиться</a>

                <div>

                    <a href="#" class="contact"></a>

                    <a href="#" class="facebook"></a>

                    <a href="#" class="twitter"></a>

                    <a href="#" class="pinterest"></a>

                </div>

            </div>

        </div>

        <div class="social_like_all">

            <img src="../images/other/all_like.png">

        </div>

        <div class="name">

            <a href="#">Василий Митрофанов</a>

        </div>

        <a href="#" class="close"></a>

    </div>

    <div class="popup_auth" style="display: none">

        <h3>

            Авторизация

        </h3>

        <div class="msg">

            <p>

                Для добавления товара в коллекцию, пожалуйста, войдите или зарегистрируйтесь.

            </p>

        </div>

       <div class="tabs">

           <ul>

                <li>

                    <a href="#tabs-1" >Войти</a>

                </li>

                <li>

                    <a href="#tabs-2" >Зарегистрироваться</a>

                </li>

            </ul>

            <div id="tabs-1">

                <i>Войти через социальные сети:</i>

                <div class="social">

                    <a href="#" class="vk"></a>

                    <a href="#" class="fb"></a>

                    <a href="#" class="twitter"></a>

                    <a href="#" class=ok></a>

                </div>

                <i>Или заполните форму:</i>



                <form action="">

                    <input type="email" placeholder="Email"/>

                    <input type="password" placeholder="Пароль"/>

                    <input type="submit" value="Войти"/>

                    <a href="#" class="r_pass">Забыли пароль?</a>

                </form>

            </div>

            <div id="tabs-2">

                <i>Войти через социальные сети:</i>

                <div class="social">

                    <a href="#" class="vk"></a>

                    <a href="#" class="fb"></a>

                    <a href="#" class="twitter"></a>

                    <a href="#" class=ok></a>

                </div>

                <i>Или заполните форму:</i>



                <form action="">

                    <input type="radio" name="user" id="one"/><label for="one">Пользователь</label>

                    <input type="radio" name="user" id="two"/><label for="two">Профессионал</label>

                    <input type="radio" name="user" id="three"/><label for="three">Организация</label>

                    <input type="text" placeholder="Имя пользователя"/>

                    <input type="email" placeholder="Email"/>

                    <input type="password" placeholder="Пароль"/>

                    <input type="submit" value="Зарегистрироваться"/>

                </form>

            </div>

           <a href="#" class="close"></a>

       </div>

    </div>

    <div class="collection" style="display: none">

        <h2>

            Создать коллекцию

        </h2>

        <form action="">

            <input type="text" placeholder="Название коллекции"/>

            <i>

                Видимость коллекции

            </i>

            <input type="radio" name="userw" id="f"/><label for="f">Публичная</label>

            <div class="question">

                <span></span>

                <div>

                    <p>

                        Публичная - другие пользователи могут просматривать Вашу коллекцию в разделе ИДЕИ

                    </p>

                </div>

            </div>

            <input type="radio" name="userw" id="g"/><label for="g">Приватная</label>

            <div class="question">

                <span></span>

                <div>

                    <p>

                        Публичная - другие пользователи могут просматривать Вашу коллекцию в разделе ИДЕИ

                    </p>

                </div>

            </div>

            <input type="submit" value="Создать коллекцию"/>

            <a href="#" class="delete_collection">

                Удалить коллекцию

            </a>

        </form>

        <a href="#" class="close"></a>

    </div>

    <div class="password" style="display:none;">

        <h2>

            Новый пароль

        </h2>

        <p>

            Введите ваш email, на который будет отправлен новый пароль.

        </p>

        <input type="email" placeholder="Email"/>

        <p class="green">

            Новый пароль отправлен на ваш email

        </p>

        <a href="#" class="close"></a>

    </div>

    <div class="popup_portfolio" style="display: none">

        <h2>

            Свадебное платье Доминго

        </h2>

        <div class="img">

            <img src="../images/other/domingo_fotorama.png">

        </div>

        <div class="table">

            <div>

                <div>

                    <p class="bold">

                        Автор:

                    </p>

                </div>

                <div>

                    <p>

                        Варвара Куприянова

                        <span>

                            (Фотограф, Москва, Россия)

                        </span>

                    </p>

                </div>

            </div>

            <div>

                <div>

                    <p class="bold">

                        Цвета:

                    </p>

                </div>

                <div>

                    <div class="color yellow">

                    </div>

                    <div class="color white">

                    </div>

                </div>

            </div>

            <div>

                <div>

                    <p class="bold">

                        Ключевые слова:

                    </p>

                </div>

                <div>

                    <p>

                        Платье, белое платье, свадебное фото

                    </p>

                </div>

            </div>

        </div>

        <div class="site_like">

            <a href="#" class="in_portfolio">В портфолио</a>

            <a href="#" class="like">Нравится</a>

            <a href="#" class="collection">В коллекцию</a>

            <div class="share">

                <a href="#" class="share">Поделиться</a>

                <div>

                    <a href="#" class="contact"></a>

                    <a href="#" class="facebook"></a>

                    <a href="#" class="twitter"></a>

                    <a href="#" class="pinterest"></a>

                </div>

            </div>

        </div>

        <a href="#" class="close"></a>

    </div>

</div>
    <script type="text/javascript">
        @section('scripts')
        @show
    </script>
</body>

</html>