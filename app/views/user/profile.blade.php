@extends('index')

@section('content')
<div class="status_top">
    <div class="status">
        <div>

        </div>
        <p class="name">
            Варвара
        </p>
        <span>
            Статус
        </span>
    </div>
    <div class="head">
        <h1>
            Профиль
        </h1>
    </div>

</div>
<div class="sidebar left">
    <nav class="portfolio_link">
        <ul>
            <li>
                <a href="{{ URL::to('user/info') }}">Личная информация</a>
            </li>
            <li>
                <a href="{{ URL::to('user/settings') }}">Настройки</a>
            </li>
            <li>
                <a href="{{ URL::to('user/portfolio') }}">Портфолио</a>
            </li>
        </ul>
    </nav>
</div>
<div class="content edit_profile">
    @yield('user_content')
</div>
@stop