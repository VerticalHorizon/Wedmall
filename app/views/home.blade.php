@extends('index')

@section('content')
        <div class="search all">
            <div class="form">
                <form action="#">
                    <input type="text" placeholder="Поиск 1 000 000 товаров от 80 магазинов"/>
                    <input type="submit" value="Найти"/>
                </form>
            </div>
            <div class="color_link">
                <span>Фильтр по цвету:</span>
                <a href="#" class="rad"></a>
                <a href="#" class="ping"></a>
                <a href="#" class="yellow"></a>
                <a href="#" class="green"></a>
                <a href="#" class="turquoise"></a>
                <a href="#" class="blue"></a>
                <a href="#" class="plum"></a>
                <a href="#" class="fiolet"></a>
                <a href="#" class="dark_red"></a>
                <a href="#" class="grap"></a>
                <a href="#" class="white"></a>
                <a href="#" class="gray"></a>
                <a href="#" class="black"></a>
            </div>
        </div>
        <div class="sidebar left">
            <nav class="sidebar_menu">
                <a href="#">Платья на свадьбу</a>
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
                <a href="#">Свадебные аксессуары</a>
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
                <a href="#">Свадебная обувь</a>
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
                <a href="#">Нижнее белье</a>
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
                <a href="#">Свадебная бижутерия</a>
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
                <a href="#">Ювелирные изделия</a>
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
                <a href="#">Полиграфия</a>
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
                <a href="#">Свадебный декор</a>
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
                <a href="#">Для мужчин</a>
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
                <a href="#">Флористика</a>
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
                <a href="#">Торты и сладости</a>
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
            </nav>
        </div>
        <div class="content">
            <div class="slider">
                <ul class="slides">
                    <li class="slide">
                        <img src="{{ asset('images/other/slider.png') }}" alt="">
                        <div>
                            <p>
                                Новое портфолио наших фотографов
                            </p>
                            <a href="#">Подробнее</a>
                        </div>
                    </li>
                    <li class="slide">
                        <img src="{{ asset('images/other/slider.png') }}" alt="">
                        <div>
                            <p>
                                Новое портфолио наших фотографов
                            </p>
                            <a href="#">Подробнее</a>
                        </div>
                    </li>
                    <li class="slide">
                        <img src="{{ asset('images/other/slider.png') }}" alt="">
                        <div>
                            <p>
                                Новое портфолио наших фотографов
                            </p>
                            <a href="#">Подробнее</a>
                        </div>
                    </li>
                </ul>
            </div>
            <h2>
                Популярные разделы
            </h2>
            <div class="preview hover">
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="title">
                            <p>
                                платья на свадьбу
                            </p>
                        </div>
                        <div class="hover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="title">
                            <p>
                                флористика
                            </p>
                        </div>
                        <div class="hover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="title">
                            <p>
                                торты и сладости
                            </p>
                        </div>
                        <div class="hover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="title">
                            <p>
                                свадебные аксессуары
                            </p>
                        </div>
                        <div class="hover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="title">
                            <p>
                                свадебная обувь
                            </p>
                        </div>
                        <div class="hover">
                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="title">
                            <p>
                                полиграфия
                            </p>
                        </div>
                        <div class="hover">
                        </div>
                    </a>
                </div>
            </div>
            <h2>
                Популярные товары
            </h2>
            <div class="preview cost">
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                        <div class="hover">
                            <div class="preview">
                                <a href="#" class="center">Быстрый просмотр</a>
                                <a href="#" class="love"></a>
                                <a href="#" class="add"></a>
                            </div>
                        </div>
                    </a>
                    <p>
                        Набор посуды
                    </p>
                    <span>
                        от Твоя кухня
                    </span>
                    <p class="cost">
                        3200 руб.
                    </p>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                        <div class="hover">
                            <div class="preview">
                                <a href="#" class="center">Быстрый просмотр</a>
                                <a href="#" class="love"></a>
                                <a href="#" class="add"></a>
                            </div>
                        </div>
                    </a>
                    <p>
                        Набор посуды
                    </p>
                    <span>
                        от Твоя кухня
                    </span>
                    <p class="cost">
                        3200 руб.
                    </p>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                        <div class="hover">
                            <div class="preview">
                                <a href="#" class="center">Быстрый просмотр</a>
                                <a href="#" class="love"></a>
                                <a href="#" class="add"></a>
                            </div>
                        </div>
                    </a>
                    <p>
                        Набор посуды
                    </p>
                    <span>
                        от Твоя кухня
                    </span>
                    <p class="cost">
                        3200 руб.
                    </p>
                </div>
            </div>
            <h2>
                Популярные цвета
            </h2>
            <div class="preview color">
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="color yellow">
                            <p>
                                Желтый
                            </p>
                        </div>
                        <div class="hover yellow">

                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="color blue">
                            <p>
                                Синий
                            </p>
                        </div>
                        <div class="hover blue">

                        </div>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_hover.png" alt="">
                        <div class="color green">
                            <p>
                                Зеленый
                            </p>
                        </div>
                        <div class="hover green">

                        </div>
                    </a>
                </div>
            </div>
            <h2>
                Популярные цвета
            </h2>
            <div class="preview content">
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                        <div class="hover">
                            <div class="preview">
                                <a href="#" class="center">Быстрый просмотр</a>
                                <a href="#" class="love"></a>
                                <a href="#" class="add"></a>
                            </div>
                        </div>
                        <p>
                          Как правильно подготовить свадебный стол
                        </p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                        <div class="hover">
                            <div class="preview">
                                <a href="#" class="center">Быстрый просмотр</a>
                                <a href="#" class="love"></a>
                                <a href="#" class="add"></a>
                            </div>
                        </div>
                        <p>
                            Как правильно подготовить свадебный стол
                        </p>
                    </a>
                </div>
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                        <div class="hover">
                            <div class="preview">
                                <a href="#" class="center">Быстрый просмотр</a>
                                <a href="#" class="love"></a>
                                <a href="#" class="add"></a>
                            </div>
                        </div>
                        <p>
                            Как правильно подготовить свадебный стол
                        </p>
                    </a>
                </div>
            </div>
        </div>
@stop