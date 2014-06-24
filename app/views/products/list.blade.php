    <div class="content_preview">
        <div class="preview cost">
            @foreach ($products as $i => $product)
                <div>
                    <a href="#">
                        <img src="../images/other/preview_cost.png" alt="">
                    </a>
                    <div class="hover">
                        <a href="#"></a>
                        <div class="preview">
                            <a href="#"></a>
                            <a href="#" class="center">Быстрый просмотр</a>
                            <a href="#" class="love"></a>
                            <a href="#" class="add"></a>
                        </div>
                    </div>
                    <p>
                        {{{ $product->title }}}
                    </p>
                    <span>
                        от Твоя кухня
                    </span>
                    <p class="cost">
                        {{{ $product->price }}} руб.
                    </p>
                </div>
                {{!$i % 3}}
                @if(!$i%3 && $i)
                    </div><div class="preview cost">
                @endif
            @endforeach
        </div>
    </div>