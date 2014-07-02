@extends('user.profile')

@section('user_content')
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
                <input type="text" name="username" value="{{{ Confide::user()->username }}}"/>
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

@if(Entrust::hasRole('professional') || Entrust::hasRole('organization'))
        <div>
            <div>
                <label>Вид деятельности:</label>
            </div>
            <div>
                <select name="">
                    <option value="">Фотограф</option>
                    <option value="">Студия не декора</option>
                    <option value="">Студия передекора</option>
                </select>
            </div>
        </div>
@endif
@if(Entrust::hasRole('user') || Entrust::hasRole('professional'))
        <div>
            <div>
                <label>Дата рождения</label>
            </div>
            <div>
                {{ Form::selectRange('birth_day', 1, 31, Confide::user()->birth_day, ['id' => 'birth_day']) }}
                {{ Form::selectMonth('birth_month', Confide::user()->birth_month, ['id' => 'birth_month']) }}
                {{ Form::selectRange('birth_year', 1930, date("Y"), Confide::user()->birth_year, ['id' => 'birth_year']) }}
            </div>
        </div>
        <div>
            <div>
                <label>Имя:</label>
            </div>
            <div>
                <input type="text" name="first_name" value="{{{ Confide::user()->first_name }}}" />
            </div>
        </div>
        <div>
            <div>
                <label>Фамилия:</label>
            </div>
            <div>
                <input type="text" name="second_name" value="{{{ Confide::user()->second_name }}}" />
            </div>
        </div>
@elseif(Entrust::hasRole('organization'))
        <div>
            <div>
                <label>Название организации:</label>
            </div>
            <div>
                <input type="text" name="first_name" value="{{{ Confide::user()->first_name }}}" />
            </div>
        </div>
@endif
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
                <select name="city">
                    <option value="1">Москва</option>
                    <option value="2">Минск</option>
                </select>
            </div>
        </div>
@if(Entrust::hasRole('user'))
        <div>
            <div>
                <label>Дата свадьбы</label>
            </div>
            <div>
                {{ Form::selectRange('wedding_day', 1, 31, Confide::user()->wedding_day, ['id' => 'wedding_day']) }}
                {{ Form::selectMonth('wedding_month', Confide::user()->wedding_month, ['id' => 'wedding_month']) }}
                {{ Form::selectRange('wedding_year', date("Y"), date("Y") + 2, Confide::user()->wedding_year, ['id' => 'wedding_year']) }}
            </div>
        </div>
@elseif(Entrust::hasRole('professional') || Entrust::hasRole('organization'))
        <div class="text-top">
            <div>
                <label>Контакты:</label>
            </div>
            <div>
                <input type="text" class="contact" placeholder="В контакте"/>
                <input type="text" class="facebook" placeholder="facebook"/>
                <input type="text" placeholder="сайт"/>
                <input type="text" placeholder="Телефон"/>
            </div>
        </div>
@endif
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