<?php

use App\Post;
use App\Category;
use App\Tag;


use Carbon\Carbon;
use Illuminate\Database\Seeder;


class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Category::truncate();
        Tag::truncate();


        $Tag = new Tag;
        $Tag->name = "tag 1";
        $Tag->save();

        $Tag = new Tag;
        $Tag->name = "tag 2";
        $Tag->save();

        $Tag = new Tag;
        $Tag->name = "tag 3";
        $Tag->save();


        $category = new Category;
        $category->name = "Noticia";
        $category->save();

        $category = new Category;
        $category->name = "Deporte";
        $category->save();

        $post = new Post;
        $post->title  ="Mi primer post";
        $post->excerpt ="EXtracto de mi primer post";
        $post->body = "Contenido de mi primer post";
        $post->published_at = Carbon::now()->subDays(4);
        $post->category_id = 1;
        $post->save();

        $post = new Post;
        $post->title  ="Mi segundo post";
        $post->excerpt ="EXtracto de mi segundo post";
        $post->body = "Contenido de mi segundo post";
        $post->published_at = Carbon::now()->subDays(3);
        $post->category_id = 2;
        $post->save();

        $post = new Post;
        $post->title  ="Mi tercer post";
        $post->excerpt ="EXtracto de mi tercer post";
        $post->body = "Contenido de mi tercer post";
        $post->published_at = Carbon::now()->subDays(2);
        $post->category_id = 1;
        $post->save();
    }
}
