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

<div class="content articles">

    <h2>

        Все о свадебных платьях

    </h2>

    <div class="content_preview">
        @foreach($articles as $article)
        <div class="prev">

            <img src="../images/other/domingo.png" />

            <div class="hover">

                <div class="preview">

                    <a href="#" class="love"></a>

                    <a href="#" class="add"></a>

                </div>

            </div>

            <h5>
                {{{ $article->title }}}
            </h5>

            <p>
                {{{ Str::words($article->body, 20) }}}
            </p>

            <span class="views">
                {{ $article->pageviews }}
            </span>

            <span class="heart">
                {{ $article->likes }}
            </span>

        </div>
        @endforeach

    </div>

    <a href="#" class="show_more left">Показать еще</a>

</div>

</div>
@stop