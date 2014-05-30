<?php namespace Wedmall\Registrators;
 
use Illuminate\Support\ServiceProvider;
use Wedmall\Registrators\Validators\EmailValidator;
use Wedmall\Registrators\Validators\UsernameValidator;
 
class RegistratorsServiceProvider extends ServiceProvider {
 
  /**
   * Register the binding
   *
   * @return void
   */
  public function register()
  {
    $this->registerCredentialsRegistrator();
  }
 
  /**
   * Register the CredentialsRegistrator service
   *
   * @return void
   */
  public function registerCredentialsRegistrator()
  {
    $this->app->bind('Wedmall\Registrators\CredentialsRegistrator', function($app)
    {
      return new CredentialsRegistrator(
        $this->app->make('Wedmall\Repositories\User\UserRepository'),
        [ new UsernameValidator($app['validator']), new EmailValidator($app['validator']) ]
      );
    });
  }
 
}