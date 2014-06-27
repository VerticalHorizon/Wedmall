@extends('user.profile')

@section('user_content')
    <h2>
        Личная информация
    </h2>

    <form action="" class="profile_organisation">
        <div>
            <div>
                <label>Имя пользователя:</label>
            </div>
            <div>
                <input type="text"/>
            </div>
        </div>
        <div class="text-top">
            <div>
                <label>Тип пользователя:</label>
            </div>
            <div>
                <input type="radio" name="tip" id="1"/><label for="1">Пользователь</label>
                <input type="radio" name="tip" id="2"/><label for="2">Профессионал</label>
                <input type="radio" name="tip" id="3"/><label for="3">Организация</label>
            </div>
        </div>
        <div>
            <div>
                <label>Дата рождения</label>
            </div>
            <div>
                <select name="day" id="">
                    <option value="">день</option>
                    <option value="">день</option>
                    <option value="">день</option>
                </select>
                <select name="mounth" id="">
                    <option value="">месяц</option>
                    <option value="">месяц</option>
                </select>
                <select name="year" id="">
                    <option value="">Год</option>
                    <option value="">Год</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label>Имя:</label>
            </div>
            <div>
                <input type="text" />
            </div>
        </div>
        <div>
            <div>
                <label>Фамилия:</label>
            </div>
            <div>
                <input type="text"/>
            </div>
        </div>
        <div>
            <div>
                <label>Страна</label>
            </div>
            <div>
                <select name="test">
                    <option value="">Россия</option>
                    <option value="">Беларусь</option>
                    <option value="">Студия передекора</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label>Регион</label>
            </div>
            <div>
                <select name="test">
                    <option value="">Москва</option>
                    <option value="">Минск</option>
                    <option value="">Студия передекора</option>
                </select>
            </div>
        </div>
        <div>
            <div>
                <label>Дата свадьбы</label>
            </div>
            <div>
                <select name="day" id="">
                    <option value="">день</option>
                    <option value="">день</option>
                    <option value="">день</option>
                </select>
                <select name="mounth" id="">
                    <option value="">месяц</option>
                    <option value="">месяц</option>
                </select>
                <select name="year" id="">
                    <option value="">Год</option>
                    <option value="">Год</option>
                </select>
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