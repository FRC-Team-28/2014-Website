<?php

class SentryGroupSeeder extends Seeder {

    /**
     * Run the database seeding.
     *
     * @return void
     */
    public function run() {
        DB::table('groups')->delete();

        // Global Admins
        $permissions = array(
        	'admin.create' => 1,
        	'admin.view'   => 1,
        	'admin.update' => 1,
        	'admin.delete' => 1,

        	'editor.create' => 1,
        	'editor.view'   => 1,
        	'editor.update' => 1,
        	'editor.delete' => 1,

        	'article.create' => 1,
        	'article.view'   => 1,
        	'article.update' => 1,
        	'article.delete' => 1,

        	'page.create' => 1,
        	'page.view'   => 1,
        	'page.update' => 1,
        	'page.delete' => 1
        );
        $group = array('name' => 'Global Admins', 'permissions' => $permissions);
        Sentry::getGroupProvider()->create($group);

        // Admins
        $permissions = array(
        	'admin.create' => 0,
        	'admin.view'   => 1,
        	'admin.update' => 0,
        	'admin.delete' => 0,

        	'editor.create' => 1,
        	'editor.view'   => 1,
        	'editor.update' => 1,
        	'editor.delete' => 1,

        	'article.create' => 1,
        	'article.view'   => 1,
        	'article.update' => 1,
        	'article.delete' => 1,

        	'page.create' => 1,
        	'page.view'   => 1,
        	'page.update' => 1,
        	'page.delete' => 1
        );
        $group = array('name' => 'Admins', 'permissions' => $permissions);
        Sentry::getGroupProvider()->create($group);

        // Editors
        $permissions = array(
        	'admin.create' => 0,
        	'admin.view'   => 0,
        	'admin.update' => 0,
        	'admin.delete' => 0,

        	'editor.create' => 0,
        	'editor.view'   => 1,
        	'editor.update' => 0,
        	'editor.delete' => 0,

        	'article.create' => 1,
        	'article.view'   => 1,
        	'article.update' => 1,
        	'article.delete' => 1,

        	'page.create' => 1,
        	'page.view'   => 1,
        	'page.update' => 1,
        	'page.delete' => 1
        );
        $group = array('name' => 'Editors', 'permissions' => $permissions);
        Sentry::getGroupProvider()->create($group);
    }
}
