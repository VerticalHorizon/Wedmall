@extends('user.profile')

@section('user_content')
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Success</h4>
            @if(is_array($message))
                @foreach ($message as $m)
                    {{ $m }}
                @endforeach
            @else
                {{ $message }}
            @endif
        </div>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>Error</h4>
            @if(is_array($message))
            @foreach ($message as $m)
            {{ $m }}
            @endforeach
            @else
            {{ $message }}
            @endif
        </div>
        @endif
    <h2>
        Личная информация
    </h2>

    <form action="{{ URL::to('user/update') }}" method="post" class="profile_organisation">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            <div>
                <label>Имя пользователя:</label>
            </div>
            <div>
                <input type="text" name="username" value="{{{ Auth::user()->username }}}"/>
            </div>
        </div>
        <div class="text-top">
            <div>
                <label>Тип пользователя:</label>
            </div>
            <div>
                @foreach(Role::where('name', '!=', 'admin')->get() as $key => $role)
                <input type="radio" name="role" value="{{{ $role->name }}}" id="{{{ $role->name }}}"@if(Confide::user()->hasRole($role->name))checked="checked"@endif/><label for="{{{ $role->name }}}">{{{ Lang::get('roles.'.$role->name) }}}</label>
                @endforeach
            </div>
        </div>
        <div>
            <div>
                <label>Дата рождения</label>
            </div>
            <div>
                {{ Form::selectRange('birth_day', 1, 31, null, ['id' => 'birth_day']) }}
                {{ Form::selectMonth('birth_month', null, ['id' => 'birth_month']) }}
                {{ Form::selectRange('birth_year', 1930, date("Y"), null, ['id' => 'birth_year']) }}
            </div>
        </div>
        <div>
            <div>
                <label>Имя:</label>
            </div>
            <div>
                <input type="text" name="first_name" value="{{{ Auth::user()->first_name }}}" />
            </div>
        </div>
        <div>
            <div>
                <label>Фамилия:</label>
            </div>
            <div>
                <input type="text" name="second_name" value="{{{ Auth::user()->second_name }}}" />
            </div>
        </div>
        <div>
            <div>
                <label>Страна</label>
            </div>
            <div>
                <select name="country">
                    <option value="1">Россия</option>
                    <option value="2">Беларусь</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label>Регион</label>
            </div>
            <div>
                <select name="region">
                    <option value="1">Москва</option>
                    <option value="2">Минск</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label>Дата свадьбы</label>
            </div>
            <div>
                {{ Form::selectRange('wedding_day', 1, 31, null, ['id' => 'wedding_day']) }}
                {{ Form::selectMonth('wedding_month', null, ['id' => 'wedding_month']) }}
                {{ Form::selectRange('wedding_year', date("Y"), date("Y") + 2, null, ['id' => 'wedding_year']) }}
            </div>
        </div>
        <div class="text-top">
            <div>
                <label>Фото профиля:</label>
            </div>
            <div>
                <div class="foto"></div>
                <input type="button" value="Загрузить фото"/>
            </div>
        </div>
        <input type="submit" value="Сохранить"/>
    </form>
@stop