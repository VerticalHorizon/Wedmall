<?php
use Illuminate\Database\Migrations\Migration;

class ConfideSetupUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Creates the users table
        Schema::create('users', function($table)
        {
            $table->increments('id');
            $table->string('confirmation_code');
            $table->boolean('confirmed')->default(false);
            $table->string('remember_token');
            $table->string('password');
                                                                                                # uLogin equivalents:
            $table->string('email');
            $table->string('username');                                                         # nickname
            $table->string('avatar');                                                           # photo_big

            $table->string('first_name');                                                       # first_name
            $table->string('second_name');                                                      # last_name
            $table->date('birth_date');                                                         # bdate

            $table->enum('provider', ['vkontakte', 'facebook', 'twitter', 'odnoklassniki']);    # network
            $table->string('profile');                                                          # profile
            $table->date('wedding_date');

            
            $table->string('site');
            $table->timestamps();
        });

        // Creates password reminders table
        Schema::create('password_reminders', function($t)
        {
            $t->string('email');
            $t->string('token');
            $t->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('password_reminders');
        Schema::drop('users');
    }

}
