@extends('index')

{{-- Web site Title --}}
@section('title')
@parent
 - @lang('labels.articles')
@stop

{{-- Update the Meta Title --}}
@section('meta_title')
@parent

@stop

{{-- Update the Meta Description --}}
@section('meta_description')
@parent

@stop

{{-- Update the Meta Keywords --}}
@section('meta_keywords')
@parent

@stop


{{-- Content --}}
@section('content')
<div class="breadcrumbs">

    <a href="#">Главная</a>

    <a href="#">Платья на свадьбу</a>

    <a href="#">Все о свадебных платьях</a>

</div>

<h1>

    Статьи

</h1>



<div class="sidebar right">

    <div class="like_article">

        <span>

            Нажмите, если понравилась статья

        </span>

        <a href="#">

            Мне нравится

        </a>

    </div>

    <div class="banner_right">

        <img src="../images/banner_right.png" />

    </div>

    <div>

        <img src="../images/other/vk.png" />

    </div>

    <div>

        <img src="../images/other/facebook.png" />

    </div>

    <div class="preview_cost">

        <a href="#">

            <img src="../images/other/preview_cost.png" alt="">

            <p>

                Свадебное платье Доминго

            </p>

                    <span>

                        от Charuel

                    </span>

            <p class="cost">

                25 999 руб.

            </p>

        </a>

    </div>

</div>

<div class="content article">

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

    <h3>

        Заголовок второго уровня

    </h3>

    <p>

        Итак, вам впервые в жизни предстоит вместо привычной маечки и джинсиков надеть это огромное,

        роскошное свадебное платье! С чего же начать поиски? Прежде всего полистайте журналы свадебной

        моды и подумайте, что бы вы предпочли – богато украшенный вышивками и кружевами наряд или же скромное

        платье с чёткими, элегантными линиями. Ведь у каждой невесты свой характер и свои представления о том,

        какой она хотела бы видеть себя в день свадьбы.

    </p>

    <h4>

        Заголовок третьего уровня

    </h4>

    <p>

        Итак, вам впервые в жизни предстоит вместо привычной маечки и джинсиков надеть это огромное,

        роскошное свадебное платье! С чего же начать поиски? Прежде всего полистайте журналы свадебной

        моды и подумайте, что бы вы предпочли – богато украшенный вышивками и кружевами наряд или же скромное

        платье с чёткими, элегантными линиями. Ведь у каждой невесты свой характер и свои представления о том,

        какой она хотела бы видеть себя в день свадьбы.

    </p>

    <h4>

        Нумерованный список

    </h4>

    <ul>

        <li>

            Платья на свадьбу

        </li>

        <li>

            Флористика

        </li>

        <li>

            Торты и сладости

        </li>

        <li>

            Свадебные аксессуары

        </li>

    </ul>

    <h4>

        Ненумерованный список

    </h4>

    <ol>

        <li>

            Платья на свадьбу

        </li>

        <li>

            Флористика

        </li>

        <li>

            Торты и сладости

        </li>

        <li>

            Свадебные аксессуары

        </li>

    </ol>

    <h4>

        Таблица

    </h4>

    <table>

        <tr>

            <td>

                Товар

            </td>

            <td>

                Стоимость

            </td>

            <td>

                Магазин

            </td>

            <td>

                Наличие

            </td>

        </tr>

        <tr>

            <td>

                <a href="#">Автоматы с соком</a>

            </td>

            <td>

                13 400 руб.

            </td>

            <td>

                Wedshop

            </td>

            <td class="no">

                Нет в наличии

            </td>

        </tr>

        <tr>

            <td>

                <a href="#">Набор посуды</a>

            </td>

            <td>

                1200 руб.

            </td>

            <td>

                Твоя кухня

            </td>

            <td>

                Есть в наличии

            </td>

        </tr>

        <tr>

            <td>

                <a href="#">Набор посуды</a>

            </td>

            <td>

                1200 руб.

            </td>

            <td>

                Твоя кухня

            </td>

            <td>

                Есть в наличии

            </td>

        </tr>

        <tr>

            <td>

                <a href="#">Набор посуды</a>

            </td>

            <td>

                1200 руб.

            </td>

            <td>

                Твоя кухня

            </td>

            <td>

                Есть в наличии

            </td>

        </tr>

    </table>

    <div class="social_like_all">

        <img src="../images/other/all_like.png" />

    </div>

    <div class="name">

        <a href="#">Василий Митрофанов</a>

    </div>

    <div class="prev_article">

        <h5>

            Рекомендуемые статьи

        </h5>

        <div class="content_preview">

            <div class="prev">

                <img src="../images/other/domingo.png">

                <div class="hover">

                    <div class="preview">

                        <a href="#" class="love"></a>

                        <a href="#" class="add"></a>

                    </div>

                </div>

                <h5>

                    Свадебное платье Доминго

                </h5>

                <p>

                    Примечательно, что несмотря на сложный бракоразводный процесс и трения по поводу раздела имущества

                    от предыдущих семейных отношений Анжелика

                </p>

            <span class="views">

                34 534

            </span>

            <span class="heart">

                5600

            </span>

            </div>

            <div class="prev">

                <img src="../images/other/domingo.png">

                <div class="hover">

                    <div class="preview">

                        <a href="#" class="love"></a>

                        <a href="#" class="add"></a>

                    </div>

                </div>

                <h5>

                    Свадебное платье Доминго

                </h5>

                <p>

                    Примечательно, что несмотря на сложный бракоразводный процесс и трения по поводу раздела имущества

                    от предыдущих семейных отношений Анжелика

                </p>

            <span class="views">

                34 534

            </span>

            <span class="heart">

                5600

            </span>

            </div>

            <div class="prev">

                <img src="../images/other/domingo.png">

                <div class="hover">

                    <div class="preview">

                        <a href="#" class="love"></a>

                        <a href="#" class="add"></a>

                    </div>

                </div>

                <h5>

                    Свадебное платье Доминго

                </h5>

                <p>

                    Примечательно, что несмотря на сложный бракоразводный процесс и трения по поводу раздела имущества

                    от предыдущих семейных отношений Анжелика

                </p>

            <span class="views">

                34 534

            </span>

            <span class="heart">

                5600

            </span>

            </div>

        </div>

    </div>

</div>
@stop