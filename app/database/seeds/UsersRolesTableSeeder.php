<?php

class UsersRolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        DB::table('roles')->delete();

        $users = [
            [
                'username'      => 'admin',
                'first_name' => 'Admin',
                'second_name' => 'Admin',
                'email'      => 'admin@example.org',
                'password'   => Hash::make('admin'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'username'      => 'user',
                'first_name' => 'User',
                'second_name' => 'User',
                'email'      => 'user@example.org',
                'password'   => Hash::make('user'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'username'      => 'professional',
                'first_name' => 'Professional',
                'second_name' => 'Professional',
                'email'      => 'professional@example.org',
                'password'   => Hash::make('professional'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
            [
                'username'      => 'organization',
                'first_name' => 'Organization',
                'second_name' => 'Organization',
                'email'      => 'organization@example.org',
                'password'   => Hash::make('organization'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ],
        ];

        DB::table('users')->insert( $users );

        /**
         * Attach roles
         */
        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $userRole = new Role;
        $userRole->name = 'user';
        $userRole->save();

        $professionalRole = new Role;
        $professionalRole->name = 'professional';
        $professionalRole->save();

        $organizationRole = new Role;
        $organizationRole->name = 'organization';
        $organizationRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $userRole );

        $user = User::where('username','=','professional')->first();
        $user->attachRole( $professionalRole );

        $user = User::where('username','=','organization')->first();
        $user->attachRole( $organizationRole );
    }

}