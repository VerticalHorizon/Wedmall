<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Zizaco\Confide\ConfideUser;
use Zizaco\Entrust\HasRole;

class User extends ConfideUser {
    use HasRole;

    protected $guarded = array('id', 'password');

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];

    /**
     * The attributes included in the model's JSON form.
     *
     * @var array
     */
    protected $appends = ['birth_day', 'birth_month', 'birth_year', 'wedding_day', 'wedding_month', 'wedding_year'];

    /**
     * Validation rules
     */
    public static $rules = array(
        'username' => 'required|min:3|max:80|alpha_dash|unique:users,username',
        'email' => 'required|between:3,64|email|unique:users',
        'password' => 'required|alpha_num|between:4,16|confirmed',
    );

    public function city()
    {
        return $this->belongsTo('City');
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->password;
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        return $this->remember_token;
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    /**
     * Get the e-mail address where password reminders are sent.
     *
     * @return string
     */
    public function getReminderEmail()
    {
        return $this->email;
    }


    public function beforeSave( $forced = false ){

        parent::beforeSave( $forced );

        $this->attributes['birth_date'] = Carbon::create($this->birth_year, $this->birth_month, $this->birth_day)->toDateString();
        $this->attributes['wedding_date'] = Carbon::create($this->wedding_year, $this->wedding_month, $this->wedding_day)->toDateString();
        unset(
                $this->birth_day, $this->birth_month, $this->birth_year,
                $this->wedding_day, $this->wedding_month, $this->wedding_year
            );

        # temp:
        unset($this->country, $this->city);
    }

    public function getBirthDayAttribute()
    {
        return isset($this->attributes['birth_day']) ? $this->attributes['birth_day'] : Carbon::createFromFormat('Y-m-d', $this->attributes['birth_date'])->day;
    }

    public function getBirthMonthAttribute()
    {
        return isset($this->attributes['birth_month']) ? $this->attributes['birth_month'] : Carbon::createFromFormat('Y-m-d', $this->attributes['birth_date'])->month;
    }

    public function getBirthYearAttribute()
    {
        return isset($this->attributes['birth_year']) ? $this->attributes['birth_year'] : Carbon::createFromFormat('Y-m-d', $this->attributes['birth_date'])->year;
    }

    public function getWeddingDayAttribute()
    {
        return isset($this->attributes['wedding_day']) ? $this->attributes['wedding_day'] : Carbon::createFromFormat('Y-m-d', $this->attributes['wedding_date'])->day;
    }

    public function getWeddingMonthAttribute()
    {
        return isset($this->attributes['wedding_month']) ? $this->attributes['wedding_month'] : Carbon::createFromFormat('Y-m-d', $this->attributes['wedding_date'])->month;
    }

    public function getWeddingYearAttribute()
    {
        return isset($this->attributes['wedding_year']) ? $this->attributes['wedding_year'] : Carbon::createFromFormat('Y-m-d', $this->attributes['wedding_date'])->year;
    }

    public function getRolesNamesAttribute()        # TODO:refactor
    {
        $names = NULL;
        
        if($this->getAttribute('roles') !== NULL)
            $this->getAttribute('roles')->each(function($param) use (&$names) {
                $names .= $param->name.'; ';
            });
        
        return trim($names);
    }

    public function setRoleAttribute($value)
    {
        if( ! Entrust::hasRole('admin') )
        {           
            $role = Role::where('name', $value)->firstOrFail();

            DB::table('assigned_roles')->where('user_id', $this->id)->delete();

            $this->attachRole($role);
        }

        return $this;
    }

}
