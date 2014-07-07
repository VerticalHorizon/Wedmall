                @if ( Session::get('error') )
                    <div class="alert alert-error">{{{ Session::get('error') }}}</div>
                @endif

                @if ( Session::get('notice') )
                    <div class="alert">{{{ Session::get('notice') }}}</div>
                @endif

                <i>Войти через социальные сети:</i>
                <div class="social">
                    <a href="#" class="vk"></a>
                    <a href="#" class="fb"></a>
                    <a href="#" class="twitter"></a>
                    <a href="#" class="ok"></a>
                </div>
                <i>Или заполните форму:</i>

                <form action="{{{ Confide::checkAction('UserController@do_login') ?: URL::to('/user/login') }}}" method="post" accept-charset="UTF-8">
                    <input type="hidden" name="_token" value="{{ Session::getToken() }}">
                    <input type="text" placeholder="{{{ Lang::get('confide::confide.username_e_mail') }}}" tabindex="1" name="email" id="email" value="{{{ Input::old('email') }}}">
                    <input type="password" placeholder="{{{ Lang::get('confide::confide.password') }}}" tabindex="2" name="password" id="password">
                    <input type="submit" value="{{{ Lang::get('confide::confide.login.submit') }}}"/>
                    <a href="{{{ (Confide::checkAction('UserController@forgot_password')) ?: 'forgot' }}}" class="r_pass">{{{ Lang::get('confide::confide.login.forgot_password') }}}</a>
                    <label for="remember" class="checkbox">{{{ Lang::get('confide::confide.login.remember') }}}
                        <input type="hidden" name="remember" value="0">
                        <input tabindex="4" type="checkbox" name="remember" id="remember" value="1">
                    </label>
                </form>