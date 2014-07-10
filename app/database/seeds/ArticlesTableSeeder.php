<?php

class ArticlesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('articles')->delete();

        $articles = [
            [
            	'title' => 'Lorem ipsum',
            	'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum elit, pharetra et mauris fermentum, lobortis volutpat metus. Phasellus lobortis risus commodo facilisis gravida. Pellentesque id tincidunt velit. Curabitur scelerisque, elit ut molestie convallis, arcu mi interdum nisi, rutrum blandit enim urna ac purus. Aliquam non est ante. Sed posuere dui eros. Pellentesque quam magna, lobortis in tortor semper, accumsan placerat nisi. In eleifend leo justo, a pharetra dui euismod eu. Phasellus ante urna, accumsan sit amet nisl in, placerat dignissim risus. Sed nec adipiscing est, nec sollicitudin lectus. Vivamus eu nisi non erat dapibus condimentum ac sed nulla. Nullam ac rhoncus lectus. Maecenas elementum in nunc a vehicula.',
            	'photo' =>  '',
            	'category_id' => 1,
            	'pageviews' => 10,
            	'likes' => 8,
            ],
            [
            	'title' => 'Lorem ipsum2',
            	'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum elit, pharetra et mauris fermentum, lobortis volutpat metus. Phasellus lobortis risus commodo facilisis gravida. Pellentesque id tincidunt velit. Curabitur scelerisque, elit ut molestie convallis, arcu mi interdum nisi, rutrum blandit enim urna ac purus. Aliquam non est ante. Sed posuere dui eros. Pellentesque quam magna, lobortis in tortor semper, accumsan placerat nisi. In eleifend leo justo, a pharetra dui euismod eu. Phasellus ante urna, accumsan sit amet nisl in, placerat dignissim risus. Sed nec adipiscing est, nec sollicitudin lectus. Vivamus eu nisi non erat dapibus condimentum ac sed nulla. Nullam ac rhoncus lectus. Maecenas elementum in nunc a vehicula.',
            	'photo' =>  '',
            	'category_id' => 1,
            	'pageviews' => 895,
            	'likes' => 34,
            ],
            [
            	'title' => 'Lorem ipsum3',
            	'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum elit, pharetra et mauris fermentum, lobortis volutpat metus. Phasellus lobortis risus commodo facilisis gravida. Pellentesque id tincidunt velit. Curabitur scelerisque, elit ut molestie convallis, arcu mi interdum nisi, rutrum blandit enim urna ac purus. Aliquam non est ante. Sed posuere dui eros. Pellentesque quam magna, lobortis in tortor semper, accumsan placerat nisi. In eleifend leo justo, a pharetra dui euismod eu. Phasellus ante urna, accumsan sit amet nisl in, placerat dignissim risus. Sed nec adipiscing est, nec sollicitudin lectus. Vivamus eu nisi non erat dapibus condimentum ac sed nulla. Nullam ac rhoncus lectus. Maecenas elementum in nunc a vehicula.',
            	'photo' =>  '',
            	'category_id' => 1,
            	'pageviews' => 356,
            	'likes' => 65,
            ],
            [
            	'title' => 'Lorem ipsum4',
            	'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ipsum elit, pharetra et mauris fermentum, lobortis volutpat metus. Phasellus lobortis risus commodo facilisis gravida. Pellentesque id tincidunt velit. Curabitur scelerisque, elit ut molestie convallis, arcu mi interdum nisi, rutrum blandit enim urna ac purus. Aliquam non est ante. Sed posuere dui eros. Pellentesque quam magna, lobortis in tortor semper, accumsan placerat nisi. In eleifend leo justo, a pharetra dui euismod eu. Phasellus ante urna, accumsan sit amet nisl in, placerat dignissim risus. Sed nec adipiscing est, nec sollicitudin lectus. Vivamus eu nisi non erat dapibus condimentum ac sed nulla. Nullam ac rhoncus lectus. Maecenas elementum in nunc a vehicula.',
            	'photo' =>  '',
            	'category_id' => 1,
            	'pageviews' => 423,
            	'likes' => 423,
            ],
        ];

        DB::table('articles')->insert($articles);
	}

}
