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

    @include('products.search')

    <div class="sidebar left">
        @include('home.leftmenu')
        @if(isset($attributes))
            @include('products.leftform')
        @endif
    </div>

    <div class="content articles catalog"><!-- Fucking white space! -->{{Breadcrumbs::renderIfExists('category', $current_category)}}
        <h1>
            {{{ $current_category->title }}}
        </h1>
        @if(!empty(Input::all()))
            <div class="choice">
                <p>
                    Вы выбрали:
                </p>
                @foreach(Input::except('price-from', 'price-to', 'q') as $key =>  $value)
                    @if(is_array($value))
                        @foreach($value as $k =>  $v)                         {{-- $v is only flag --}}
                            <span>
                            {{{ $attributes[$key]['title'] }}}: {{{ $attributes[$key]['default'][$k] }}}
                            <a href="#" class="close" data-name="{{{ $attributes[$key]['alias'] }}}_{{ $k }}"></a>
                            </span>
                        @endforeach
                    @else
                        <span>
                        {{{ $attributes[$key]['title'] }}}: {{{ $value }}}
                        <a href="#" class="close" data-name="{{{ $attributes[$key]['alias'] }}}_{{{ $value }}}"></a>
                        </span>
                    @endif
                @endforeach
            </div>
        @endif

        @include('products.list')
    </div>
@stop