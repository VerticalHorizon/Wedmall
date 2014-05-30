<?php namespace Wedmall\Registrators;

use Illuminate\Events\Dispatcher;
use Wedmall\Repositories\User\UserRepository;

class CredentialsRegistrator extends AbstractRegistrator implements Registrator {

  /**
   * The UserRepository
   *
   * @param Wedmall\Repositories\User\UserRepository
   */
  protected $userRepository;

  /**
   * The events dispatcher
   *
   * @var Illuminate\Events\Dispatcher
   */
  protected $events;

  /**
   * An array of Validable classes
   *
   * @param array
   */
  protected $validators;

  /**
   * Create a new instance of the CredentialsRegistrator
   *
   * @param Wedmall\Repositories\User\UserRepository $userRepository
   * @param Illuminate\Events\Dispatcher $events
   * @param array $validators
   * @return void
   */
  public function __construct(UserRepository $userRepository, Dispatcher $events, array $validators)
  {
    parent::__construct();

    $this->userRepository = $userRepository;
    $this->validators = $validators;
    $this->events = $events;
  }

  /**
   * Create a new user entity
   *
   * @param array $data
   * @return Illuminate\Database\Eloquent\Model
   */
  public function create(array $data)
  {
    if($this->runValidationChecks($data))
    {
      $user = $this->userRepository->create($data);

/*      $this->events->fire('user.register', [$user]);

      if(! is_null($data['referrer_id']))
      {
        $this->events->fire('user.invited', [$user, $data['invitation_code']]);
      }*/

      return $user;
    }
  }

}
