@extends('index')

@section('content')

    @include('products.search', array('key' => 'value'))

    <div class="sidebar left">
        @include('home.leftmenu', array('categories' => $categories))
        @if(isset($attributes))
            @include('products.leftform', array('attributes' => $attributes))
        @endif
    </div>


    <div class="content articles catalog">

        <div class="breadcrumbs">
            <a href="#">Главная</a>
            <a href="#">Платья на свадьбу</a>
            <a href="#">Все о свадебных платьях</a>
        </div>

        <h1>
            Свадебные платья
        </h1>
        <div class="choice">
            <p>
                Вы выбрали:
            </p>
            <span>
                Бренд: 69slam
                <a href="#" class="close"></a>
            </span>
             <span>
                Бренд: Adilisik
                 <a href="#" class="close"></a>
            </span>
             <span>
                Бренд: Acasta
                 <a href="#" class="close"></a>
            </span>
        </div>

        @include('products.list', array('products' => $products))
    </div>
@stop