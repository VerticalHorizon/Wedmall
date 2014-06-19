    <div class="content_preview">
        <?php $i=0; ?>
        <div class="preview cost">
            @for ($i = 0; $i < count($products); $i++)
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
                        {{{ $products[$i]['title'] }}}
                    </p>
                    <span>
                        от Твоя кухня
                    </span>
                    <p class="cost">
                        3200 руб.
                    </p>
                </div>
                {{!$i % 3}}
                @if(!$i%3 && $i)
                    </div><div class="preview cost">
                @endif
            @endfor
        </div>
    </div>