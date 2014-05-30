<?php namespace Wedmall\Registrators\Validators;

use Wedmall\Validators\Validable;
use Wedmall\Validators\LaravelValidator;

class UsernameValidator extends LaravelValidator implements Validable {

  /**
   * Validation rules
   *
   * @var array
   */
  protected $rules = [
    'username' => 'required|alpha_dash|name|unique:users'
  ];

}
