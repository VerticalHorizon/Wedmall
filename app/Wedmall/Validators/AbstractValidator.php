<?php namespace Wedmall\Validators;

abstract class AbstractValidator {

  /**
   * The validator instance
   *
   * @var object
   */
  protected $validator;

  /**
   * Data to be validated
   *
   * @var array
   */
  protected $data = array();

  /**
   * Validation Rules
   *
   * @var array
   */
  protected $rules = array();

  /**
   * Validation errors
   *
   * @var Illuminate\Support\MessageBag
   */
  protected $errors;
  
  /**
   * Create a new instance of Illuminate\Support\MessageBag
   * automatically when the child class is created
   *
   * @return void
   */
  public function __construct()
  {
    $this->errors = new MessageBag;
  }

  /**
   * Set data to validate
   *
   * @param array $data
   * @return self
   */
  public function with(array $data)
  {
    $this->data = $data;

    return $this;
  }

  /**
   * Pass the data and the rules to the validator
   *
   * @return boolean
   */
  abstract function passes();

  /**
   * Return errors
   *
   * @return Illuminate\Support\MessageBag
   */
  public function errors()
  {
    return $this->errors;
  }

}
