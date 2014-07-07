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
        @if(isset($current_category))       // expand only parent of child with .active
        $('a[data-name^="{{ $current_category->alias }}"]').parents(".sidebar_menu").accordion({ active: 0 });
        window.console.log($('ul').index($('a[data-name^="{{ $current_category->alias }}"]').parent() ))
        @endif
    })
@stop

{{-- Content --}}
@section('content')

    @include('products.search')

    <div class="sidebar left">
        @include('home.leftmenu')       {{-- rename to categoires --}}
        
        {{ Form::open(['url' => Request::path(), 'method' => 'get']) }}
            <div class="form_cost">
                <a href="#">Цена </a>
                <div>
                    <input type="hidden" name="price-from" value="72" />
                    <input type="hidden" name="price-to" value="6000" />
                    <div id="slider"></div>
                    <input type="text" id="minCost" value="72 руб"/>
                    <input type="text" id="maxCost" value="6000 руб"/>
                </div>
            </div>
            <div class="form_cost other color">
                <a href="#">Цвета</a>
                {{--*/
                    $fix_color_name = ['red', 'ping', 'yellow', 'green', 'turquoise', 'blue', 'plum', 'fiolet', 'dark_red', 'grap', 'white', 'gray', 'black']
                /*--}}
                <div>
                    @foreach($colors as $key => $value)
                    <input type="checkbox" name="color[]" value="{{ $value->alias }}" id="{{ $value->alias }}"@if( Input::has('color') && in_array($value->alias, Input::get('color')) ) checked="checked"@endif/>
                    <label for="{{ $colors[$key]->alias }}" class="color {{ $fix_color_name[$key] }}"></label>
                    @endforeach
                </div>
            </div>
            <div class="form_cost other">
                <a href="#">Бренд</a>
                <div>
                    @foreach($brands as $brand)
                    <input type="checkbox" name="brand[]" value="{{ $brand->alias }}" id="{{ $brand->alias }}"@if( Input::has('brand') && in_array($brand->alias, Input::get('brand')) ) checked="checked"@endif/> <label for="{{ $brand->alias }}">{{{ $brand->title }}}<span>(1)</span></label>
                    @endforeach
                </div>
            </div>
            @if (isset($attributes) && is_array($attributes))
                @foreach ($attributes as $attribute)
                    <div class="form_cost other">
                        <a href="#">{{{ $attribute['title'] }}}</a>
                        @if(count($attribute['default']))
                            <div>
                                @foreach($attribute['default'] as $value => $param)
                                    <input name="{{ $attribute['alias'] }}[{{ $value }}]" type="checkbox" id="{{ $attribute['alias'] }}_{{ $value }}" value="1" @if( Input::has($attribute['alias']) && isset(Input::get($attribute['alias'])[ $value ]) )checked="checked"@endif/>
                                     <label for="{{ $attribute['alias'] }}_{{ $value }}">{{{ $param }}} <span>(1)</span>
                                     </label>
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            @endif
        {{ Form::close() }}
    </div>

    <div class="content articles catalog"><!-- Fucking white space! -->{{-- Breadcrumbs::renderIfExists('category', $current_category) --}}
        <h1>
            {{{ $current_category->title or trans('labels.products') }}}
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