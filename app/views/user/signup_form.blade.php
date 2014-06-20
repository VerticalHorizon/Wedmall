                @if ( Session::get('error') )
                    <div class="alert alert-error alert-danger">
                        @if ( is_array(Session::get('error')) )
                            {{ head(Session::get('error')) }}
                        @endif
                    </div>
                @endif

                @if ( Session::get('notice') )
                    <div class="alert">{{ Session::get('notice') }}</div>
                @endif
                <i>Войти через социальные сети:</i>
                <div class="social">
                    <a href="#" class="vk"></a>
                    <a href="#" class="fb"></a>
                    <a href="#" class="twitter"></a>
                    <a href="#" class=ok></a>
                </div>
                <i>Или заполните форму:</i>

                <form action="{{{ (Confide::checkAction('UserController@store')) ?: URL::to('user')  }}}" method="post" accept-charset="UTF-8">
                    <input type="hidden" name="_token" value="{{{ Session::getToken() }}}">
                    <!-- TODO: get roles from DB and paste them into form through the loop -->
                    <input type="radio" name="role" value="user" id="one"/><label for="one">Пользователь</label>
                    <input type="radio" name="role" value="professional" id="two"/><label for="two">Профессионал</label>
                    <input type="radio" name="role" value="organisation" id="three"/><label for="three">Организация</label>
                    <!-- // -->
                    <input type="text" name="username" placeholder="{{{ Lang::get('confide::confide.username') }}}"/>
                    <input type="email" name="email" placeholder="{{{ Lang::get('confide::confide.e_mail') }}}"/>
                    <input type="password" name="password" placeholder="{{{ Lang::get('confide::confide.password') }}}"/>
                    <input type="password" name="password_confirmation" placeholder="{{{ Lang::get('confide::confide.password_confirmation') }}}"/>
                    <input type="submit" value="{{{ Lang::get('confide::confide.signup.submit') }}}"/>
                </form>