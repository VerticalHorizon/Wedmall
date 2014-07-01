@extends('index')

{{-- Web site Title --}}
@section('title')
@parent
@if(isset($current_category))
 - {{{ $current_category->title }}}
@elseif(isset($current_color))
 - {{{ $current_color->title }}}
@else
 - @lang('labels.products')
@endif
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

@section('scripts')
    $(document).ready(function() {
        @foreach (Input::except('price-from', 'price-to', 'q') as $k => $v)
            $('input[name^="{{ $k }}"]').parents(".form_cost").accordion({ active: 0 });
        @endforeach
        @if(isset($current_category))
        $('a[data-name^="{{ $current_category->alias }}"]').parents(".sidebar_menu").accordion({ active: 0 });
        window.console.log($('ul').index($('a[data-name^="{{ $current_category->alias }}"]').parent() ))
        @endif
    })
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

    <div class="content articles catalog"><!-- Fucking white space! -->{{-- Breadcrumbs::renderIfExists('category', $current_category) --}}
        <h1>
            {{{ $current_category->title or '' }}}
        </h1>
        @if(!empty(Input::all()))
            <div class="choice">
                <p>
                    Вы выбрали:
                </p>
                @foreach(Input::except('price-from', 'price-to', 'color', 'brand', 'q') as $key =>  $value)
                    @if(isset($attributes[$key]))            
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
                    @endif
                @endforeach
            </div>
        @endif

        @include('products.list')
    </div>
@stop