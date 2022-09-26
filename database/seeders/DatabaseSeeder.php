<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        // $user = User::factory()->create([
        //     'name'=>'abrar',
        // ]);
        // $category = Category::factory()->create();
        $post = Post::factory(10)->create();

        // $family = Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);
        // $personal = Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);
        // $work = Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);

        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My family post',
        //     'slug' =>'my-family-post',
        //     'excerpt'=>'<p>Lorem ipustumlksdf skdjf s</p>',
        //     'body'=>'<p>Lorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf s</p>'
        // ]);
        // Post::create([
        //     'user_id'=>$user->id,
        //     'category_id'=>$family->id,
        //     'title'=>'My work post',
        //     'slug' =>'my-work-post',
        //     'excerpt'=>'<p>Lorem ipustumlksdf skdjf s</p>',
        //     'body'=>'<p>Lorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf sLorem ipustumlksdf skdjf s</p>'
        // ]);

    }
}
