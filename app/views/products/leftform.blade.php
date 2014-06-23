    <form action="{{ URL::to('category/'.Route::getCurrentRoute()->getParameter('alias')) }}" method="GET">
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
            <div>
                <input type="checkbox" name="color_red" id="100"/> <label for="100" class="color red"></label>
                <input type="checkbox" name="color_ping" id="200"/> <label for="200" class="color ping"></label>
                <input type="checkbox" name="color_yellow" id="300"/> <label for="300" class="color yellow"></label>
                <input type="checkbox" name="color_green" id="400"/> <label for="400" class="color green"></label>
                <input type="checkbox" name="color_turquoise" id="500"/> <label for="500" class="color turquoise"></label>
                <input type="checkbox" name="color_blue" id="600"/> <label for="600" class="color blue"></label>
                <input type="checkbox" name="color_plum" id="700"/> <label for="700" class="color plum"></label>
                <input type="checkbox" name="color_fiolet" id="800"/> <label for="800" class="color fiolet"></label>
                <input type="checkbox" name="color_darkred" id="9000000"/> <label for="9000000" class="color dark_red"></label>
                <input type="checkbox" name="color_grap" id="900"/> <label for="900" class="color grap"></label>
                <input type="checkbox" name="color_white" id="9000"/> <label for="9000" class="color white"></label>
                <input type="checkbox" name="color_gray" id="90000"/> <label for="90000" class="color gray"></label>
                <input type="checkbox" name="color_black" id="900000"/> <label for="900000" class="color black"></label>
            </div>
        </div>
        <div class="form_cost other">
            <a href="#">Бренд</a>
            <div>
                <input type="checkbox" id="1"/> <label for="1">69slam<span>(1)</span></label>
                <input type="checkbox" id="2"/> <label for="2">Aaiko<span>(4)</span></label>
                <input type="checkbox" id="3"/> <label for="3">69slam</label>
                <input type="checkbox" id="4"/> <label for="4">Aaiko</label>
                <input type="checkbox" id="5"/> <label for="5">69slam</label>
                <input type="checkbox" id="6"/> <label for="6">Aaiko</label>
                <input type="checkbox" id="7"/> <label for="7">69slam</label>
                <input type="checkbox" id="8"/> <label for="8">Aaiko</label>
                <input type="checkbox" id="9"/> <label for="9">69slam</label>
            </div>
        </div>
        @if (isset($attributes) && is_object($attributes))
            @foreach ($attributes as $attribute)
                <div class="form_cost other">
                    <a href="#">{{{ $attribute->title }}}</a>
                    @if(count($attribute->defaultValues()))
                        <div>
                            @foreach($attribute->defaultValues() as $value => $param)
                                <input name="{{ $attribute->alias }}[]" type="checkbox" id="{{ $attribute->alias }}_{{ $value }}"/>
                                 <label for="{{ $attribute->alias }}_{{ $value }}">{{ $param }} <span>(1)</span>
                                 </label>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @endif
    </form>