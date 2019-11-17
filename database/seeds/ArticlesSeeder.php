<?php

use Illuminate\Database\Seeder;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            ['judul' => 'Placeat saepe ea possimus provident quos est molestiae reiciendis'],
            ['judul' => 'Totam laudantium molestiae similique sit'],
            ['judul' => 'Aut consequatur ducimus ut non voluptatem voluptas'],
            ['judul' => 'Ad sit voluptatem qui ut dolorem.'],
            ['judul' => 'Qui consequatur eum fuga corrupti.'],
            ['judul' => 'Quos nesciunt blanditiis amet odio.'],
            ['judul' => 'Ex doloremque consequuntur velit alias repellendus ullam.'],
            ['judul' => 'Perspiciatis a quo beatae nobis et suscipit illo.'],
            ['judul' => 'Maiores voluptate animi est enim totam.'],
            ['judul' => 'Rerum expedita inventore nulla voluptates perferendis placeat.'],
        ]);
    }
}
