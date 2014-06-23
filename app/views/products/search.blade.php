<div class="form catalog">
    <form action="{{ URL::to('category/'.Route::getCurrentRoute()->getParameter('alias')) }}">
        <input type="text" name="q" placeholder="Поиск 1 000 000 товаров от 80 магазинов" value="{{{ $input['q'] or '' }}}"/>
        <input type="submit" value="Найти"/>
    </form>
</div>