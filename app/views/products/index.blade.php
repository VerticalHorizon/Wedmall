@extends('index')

{{-- Web site Title --}}
@section('title')
@parent
 - {{{ $current_category->title }}}
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

    @include('products.search', array('key' => 'value'))

    <div class="sidebar left">
        @include('home.leftmenu', array('categories' => $categories))
        @if(isset($attributes))
            @include('products.leftform', array('attributes' => $attributes))
        @endif
    </div>


    <div class="content articles catalog"><!-- Fucking white space! -->{{Breadcrumbs::renderIfExists('category', $current_category)}}

        <h1>
            {{{ $current_category->title }}}
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