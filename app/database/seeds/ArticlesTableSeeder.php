<?php

class ArticlesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('articles')->delete();

		$articles = array(
			array(
				'author_id' => 1,
				'title' => 'Lorem ipsum Velit Excepteur sed quis.',
				'body' => 'Lorem ipsum Incididunt elit do anim fugiat nulla
					deserunt sunt qui tempor ad eu aliqua qui occaecat in dolor aute
					veniam aliquip eiusmod ullamco veniam veniam Duis labore Duis ut
					laboris minim esse elit enim ex incididunt dolor laboris amet
					voluptate nulla laborum ullamco enim irure pariatur ut Excepteur
					velit dolor cillum enim irure ut deserunt veniam quis velit aute
					proident nisi tempor proident enim laboris incididunt proident est.'
        ),
			array(
				'author_id' => 2,
				'title' => 'Lorem ipsum Ea nulla.',
				'body' => 'Lorem ipsum Nulla enim ex deserunt ullamco Excepteur et
					in nulla voluptate consequat Ut eu irure cupidatat nostrud consequat
					voluptate occaecat esse.'
        ),
			array(
				'author_id' => 1,
				'title' => 'Lorem ipsum Pariatur ut cupidatat mollit.',
				'body' => 'Lorem ipsum Reprehenderit Duis exercitation occaecat
					non amet non pariatur officia proident nisi fugiat velit commodo
					ut voluptate enim dolore id adipisicing consectetur proident
					adipisicing.'
        )
      );

		DB::table('articles')->insert($articles);
	}

}
