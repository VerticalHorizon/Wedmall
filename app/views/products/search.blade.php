<div class="form catalog">
    <form action="{{ URL::to(Request::path()) }}">
        <input type="text" name="q" placeholder="Поиск 1 000 000 товаров от 80 магазинов" value="{{{ Input::get('q', '') }}}"/>
        <input type="submit" value="Найти"/>
    </form>
</div>