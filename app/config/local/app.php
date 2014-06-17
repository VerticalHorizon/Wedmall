<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Application Debug Mode
	|--------------------------------------------------------------------------
	|
	| When your application is in debug mode, detailed error messages with
	| stack traces will be shown on every error that occurs within your
	| application. If disabled, a simple generic error page is shown.
	|
	*/

	'debug' => true,

    'providers' => array(

        'Cartalyst\Sentry\SentryServiceProvider',

        'Barryvdh\Debugbar\ServiceProvider',

        'Way\Generators\GeneratorsServiceProvider',

    ),

    'aliases' => array(
        'Sentry'          => 'Cartalyst\Sentry\Facades\Laravel\Sentry',
    ),
);
