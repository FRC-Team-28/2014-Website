<?php

class SentryUserSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->delete();

        $user = array(
            'first_name' => 'Site',
            'last_name'  => 'GlobalAdmin',
            'email'      => 'globaladmin@example.com',
            'password'   => Hash::make('GlobalAdminPass'),
            'activated'  => 1,
        );
        Sentry::getUserProvider()->create($user);

        $user = array(
            'first_name' => 'Site',
            'last_name'  => 'Admin',
            'email'      => 'admin@example.com',
            'password'   => Hash::make('AdminPass'),
            'activated'  => 1,
        );
        Sentry::getUserProvider()->create($user);

        $user = array(
            'first_name' => 'Site',
            'last_name'  => 'Editor',
            'email'      => 'editor@example.com',
            'password'   => Hash::make('EditorPass'),
            'activated'  => 1,
        );
        Sentry::getUserProvider()->create($user);
    }
}
