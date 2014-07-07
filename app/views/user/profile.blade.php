@extends('index')

@section('content')
<div class="status_top">
    <div class="status">
        <div>

        </div>
        <p class="name">
            {{{ Confide::user()->username }}}
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
                <a href="{{ URL::to('user/') }}">Личная информация</a>
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
    <div class="notifications">
        @if ($message = Session::get('success'))
        <div class="ok">
            <p>
                @if(is_array($message))
                <ul>
                    @foreach ($message as $m)
                        <li>{{ $m }}</li>
                    @endforeach
                </ul>
                @else
                    {{ $message }}
                @endif
            </p>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="error">
            <p>
            @if(is_array($message))
            <ul>
                @foreach ($message as $m)
                    <li>{{ $m }}</li>
                @endforeach
            </ul>
            @else
                {{ $message }}
            @endif
            </p>
        </div>
        @endif
    </div>
</div>
@stop