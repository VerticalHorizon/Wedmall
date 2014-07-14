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


    <div class="breadcrumbs">

        <a href="#">Главная</a>

        <a href="#">Платья на свадьбу</a>

        <a href="#">Все о свадебных платьях</a>

    </div>

    <h1 class="product">

        {{{$product->title}}}

    </h1>

    <div class="product">

        <div class="product_top">

            <div>

                <div class="fotorama" data-nav="thumbs" data-width="408" data-height="469"  data-fit="cover">

                    <img src="../images/other/domingo_fotorama.png">

                    <img src="../images/other/photo.png">

                    <img src="../images/other/domingo.png">

                    <img src="../images/other/preview_hover.png">

                </div>

            </div>

            <div class="product_left">
                <div class="about_top">
                    <p class="cost">
                        {{ $product->price }} руб.
                    </p>
                    <div class="table">
                        @if($product->brand)
                        <p>
                           <span class="bold">
                               Бренд:
                           </span>
                            <span>{{{ $product->brand->title }}}</span>
                        </p>
                        @endif
                        <p>
                           <span class="bold">
                               Магазин:
                           </span>
                            <span>{{{ $product->user->username }}}</span>
                        </p>

                        <div class="row">
                           <span class="bold">
                               Цвет:
                           </span>
                {{--*/
                    $fix_color_name = ['rad', 'ping', 'yellow', 'green', 'turquoise', 'blue', 'plum', 'fiolet', 'dark_red', 'grap', 'white', 'gray', 'black']
                /*--}}
                            <div>
                            @foreach($product->color as $color)
                                <div class="color {{$fix_color_name[$color->id - 1]}}"></div>
                            @endforeach
                            </div>
                        </div>
                    </div>

                    @if($product->user->site)
                    <a href="{{ $product->user->site }}" class="more">Подробнее</a>
                    @endif
                 </div>

                <div class="about_center">

                    <p>

                        <b>

                            Доставка по Москве:

                        </b>

                    </p>

                    <p>

                        Курьерская доставка всегда бесплатна. Адрес доставки, цена и вес заказа значения не имеют!

                    </p>

                    <p>

                        <b>

                            Доставка по России:

                        </b>

                    </p>

                    <p>

                        Все подробности доставки Вы можете уточнить у наших операторов. Круглосуточный телефон для справок 8 017 359 1900

                    </p>

                    <div>

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

                </div>

            </div>

        </div>

        <div class="product_table">

            <ul>

                <li><a href="#tabs-1">@lang('labels.product_description')</a></li>

                <li><a href="#tabs-2">@lang('labels.characteristics')</a></li>

            </ul>

            <div id="tabs-1">
                {{{ $product->description }}}
            </div>

            <div id="tabs-2">
                <div>
                    @foreach($product->value as $value)
                    <div>
                        <span class="bold">{{{ $value->attribute->title }}}</span>
                        <span>{{{ $value->value->title }}}</span>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        @if($same_products)
        <div class="content_preview product">

            <h5>
                Другие товары магазина "{{{ $product->user->username }}}"
            </h5>

            @foreach($same_products as $one)
            <div class="preview cost">
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                        <p>
                            Набор посуды
                        </p>
                        <span>
                            от Твоя кухня
                        </span>
                        <p class="cost">
                            3200 руб.
                        </p>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
        @endif

    </div>
@stop