        <div class="search all">
            <div class="form">
                <form action="{{ URL::to('products') }}" method="get">
                    <input type="text" name="q" placeholder="Поиск 1 000 000 товаров от 80 магазинов"/>
                    <input type="submit" value="Найти"/>
                </form>
            </div>
            <div class="color_link">

                <span>Фильтр по цвету:</span>
                {{--*/
                    $fix_color_name = ['rad', 'ping', 'yellow', 'green', 'turquoise', 'blue', 'plum', 'fiolet', 'dark_red', 'grap', 'white', 'gray', 'black']
                /*--}}

                @foreach ($colors as $key => $value)
                <a href="{{ URL::to('color/'.$value->alias) }}" class="{{ $fix_color_name[$key] }}"></a>
                @endforeach
            </div>
        </div>