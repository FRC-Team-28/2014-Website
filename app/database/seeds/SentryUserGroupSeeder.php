<?php

class SentryUserGroupSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {
        DB::table('users_groups')->delete();

        $this->matchUser('globaladmin@example.com', 'Global Admins');
        $this->matchUser('admin@example.com', 'Admins');
        $this->matchUser('editor@example.com', 'Editors');

    }

    /**
     * Add the user by email to a group.
     *
     * @param  string  $email
     * @param  string  $group
     * @return void
     */
    protected function matchUser($email, $group) {
        return Sentry::getUserProvider()->findByLogin($email)->addGroup(Sentry::getGroupProvider()->findByName($group));
    }
}
