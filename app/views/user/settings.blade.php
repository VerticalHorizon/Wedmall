@extends('user.profile')

@section('user_content')
    <h2>
        Личная информация
    </h2>

    <div class="profile_organisation">
        <div class="text-top">
            <div>
                <label class="null">Уведомления:</label>
            </div>
            <div>
                <form>
                    <input type="checkbox" name="tip" id="10"/><label for="10">Акции и специальные предложения</label>
                     <input type="checkbox" name="tip" id="22"/><label for="22">Еженедельные подборки</label>
                     <input type="checkbox" name="tip" id="33"/><label for="33">Новинки</label>
                    <input type="submit" value="Сохранить"/>
                </form>
            </div>
        </div>
        <div class="top_edit">
            <h5>
                изменение email
            </h5>
        </div>
        <div>
            <div>
               <form>
                   <label>Текущий email:</label>
               </form>
            </div>
            <div>
               <p>varvara@gmail.com</p>
            </div>
        </div>
        <div class="text-top">
            <div>
                <label>Новый email:</label>
            </div>
            <div>
               <form>
                   <input type="email"/>
                  <input type="submit" value="Изменить email"/>
               </form>
            </div>
        </div>
        <div class="top_edit">
            <h5>
                изменение пароля
            </h5>
        </div>
        <form>
            <div>
                <div>
                    <label>Текущий пароль:</label>
                </div>
                <div>
                    <input type="text" class="error"/>
                    <p>Необходимо ввести текущий пароль</p>
                </div>
            </div>
            <div>
                <div>
                    <label>Новый пароль:</label>
                </div>
                <div>
                    <input type="text" class="error"/>
                    <p>Необходимо ввести новыйч пароль</p>
                </div>
            </div>
            <div class="text-top">
                <div>
                    <label>Повторите пароль:</label>
                </div>
                <div>
                    <input type="text" class="error"/>
                    <p>Необходимо повторить новый пароль</p>
                    <input type="submit" value="Изменить email"/>
                </div>
            </div>
        </form>
        <div class="top_edit">
            <h5>
                удалить аккаунт
            </h5>
        </div>
        <form>
            <div class="text-top">
                <div>
                        <label>Текущий пароль:</label>
                </div>
                <div>
                    <input type="text" />
                    <input type="submit" value="Удалить аккаунт"/>
                </div>
            </div>
        </form>
</div>
    <div class="notifications">
        <div class="ok">
            <p>
                Настройки сохранены
            </p>
        </div>
        <div class="error">
            <p>
                Произошла ошибка.
                Попробуйте еще раз.
            </p>
        </div>
    </div>
@stop