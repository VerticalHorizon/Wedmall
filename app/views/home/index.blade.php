@extends('index')

@section('content')

    @include('home.search', array('key' => 'value'))

        <div class="sidebar left">
            @include('home.leftmenu', array('key' => 'value'))
        </div>
        <div class="content">

            @if (isset($slides) && is_object($slides))
                @include('home.slider', array('slides' => $slides))
            @endif

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