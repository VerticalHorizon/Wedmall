<?php

class PagesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('pages')->delete();

		$pages = [
			[
				'title' => 'О проекте',
				'alias' => 'about',
				'content' =>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis cursus leo. Vestibulum vel rhoncus ante, sed molestie lectus. Aliquam porttitor augue id sagittis accumsan. Quisque consectetur pulvinar lobortis. Donec consequat tempor commodo. Donec cursus nulla ultricies odio elementum bibendum. Curabitur sollicitudin ligula suscipit nunc pulvinar, vitae laoreet nulla elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel urna quis fringilla. Fusce sit amet elit a neque semper aliquam at sed elit.</p>',
			],
			[
				'title' => 'Партнерам',
				'alias' => 'partnership',
				'content' =>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis cursus leo. Vestibulum vel rhoncus ante, sed molestie lectus. Aliquam porttitor augue id sagittis accumsan. Quisque consectetur pulvinar lobortis. Donec consequat tempor commodo. Donec cursus nulla ultricies odio elementum bibendum. Curabitur sollicitudin ligula suscipit nunc pulvinar, vitae laoreet nulla elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel urna quis fringilla. Fusce sit amet elit a neque semper aliquam at sed elit.</p>',
			],
			[
				'title' => 'Контакты',
				'alias' => 'contacts',
				'content' =>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus lobortis cursus leo. Vestibulum vel rhoncus ante, sed molestie lectus. Aliquam porttitor augue id sagittis accumsan. Quisque consectetur pulvinar lobortis. Donec consequat tempor commodo. Donec cursus nulla ultricies odio elementum bibendum. Curabitur sollicitudin ligula suscipit nunc pulvinar, vitae laoreet nulla elementum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis vel urna quis fringilla. Fusce sit amet elit a neque semper aliquam at sed elit.</p>',
			],
		];

		DB::table('pages')->insert($pages);
	}

}
