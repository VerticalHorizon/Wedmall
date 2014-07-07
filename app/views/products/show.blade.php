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

        Свадебное платье Доминго

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

                        25 500 руб.

                    </p>

                    <div class="table">

                        <p>

                           <span class="bold">

                               Бренд:

                           </span>

                            <span>Domingo</span>

                        </p>

                        <p>

                           <span class="bold">

                               Магазин:

                           </span>

                            <span>Charuel</span>

                        </p>

                        <div class="row">

                           <span class="bold">

                               Цвет:

                           </span>

                            <div>

                                <div class="color yellow">

                                </div>

                                <div class="color white">

                                </div>

                            </div>

                        </div>

                    </div>

                    <a href="#" class="more">Подробнее</a>

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

                <li><a href="#tabs-1">Описание товара</a></li>

                <li><a href="#tabs-2">Харрактеристики</a></li>

            </ul>

            <div id="tabs-1">

                <div>

                    <div>

                        <span class="bold">Материал</span>

                        <span>Нейлон</span>

                    </div>

                    <div>

                        <span class="bold">Длина</span>

                        <span>180 см.</span>

                    </div>

                    <div>

                        <span class="bold">Вырез</span>

                        <span>Стандартный</span>

                    </div>

                    <div>

                        <span class="bold">Силуэт</span>

                        <span>Свадебные платья - самый важный наряд в жизни невесты. Свадебная мода никогда

                            не диктует свои правила, она лишь подсказывает невестам, как лучше подчеркнуть

                            свою индивидуальность. Каждый сезон дизайнеры предлагают новые решения, но, пожалуй,

                            только в этом году на подиумах были представлены свадебные платья 2014 на любой вкус:

                            от классических кружевных подвенечных нарядов до модных платьев с геометрическим принтом.

                        </span>

                    </div>

                    <div>

                        <span class="bold">Рукав</span>

                        <span>Без рукавов</span>

                    </div>

                    <div>

                        <span class="bold">Талия</span>

                        <span>Зауженная</span>

                    </div>

                </div>

            </div>

            <div id="tabs-2">

                <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>

            </div>

        </div>

        <div class="content_preview product">

            <h5>

                Другие товары магазина "charuel"

            </h5>

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

        </div>

    </div>
@stop