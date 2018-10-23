<?php

use App\Blog;
use Illuminate\Database\Seeder;
 
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = [
            'Berita 1',
            'Berita 2',
            'Berita 3',
        ];

        $content = [
            'Cntent berita 1',
            'Cntent berita 2',
            'Cntent berita 3',
        ];

        for ($i=0; $i<count($content); $i++) {
            $blog = new Blog;
            $blog->title = $title[$i];
            $blog->content = $content[$i];
            $blog->save();
        }
    }
}
