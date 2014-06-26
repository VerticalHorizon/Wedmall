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