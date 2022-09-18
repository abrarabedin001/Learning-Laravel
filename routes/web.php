<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\Extension\FrontMatter\Data\LibYamlFrontMatterParser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $posts = YamlFrontMatter::parseFile(resource_path("posts/my-first-post.html"));
    $posts = Post::latest('created_at')->with('category','author')->get();
    return view('posts',[
        'posts'=>$posts,
        'categories'=>Category::all()
    ]);
});

Route::get('posts/{post:slug}',function(Post $post){
    // $post = Post::find($id);
    return view('post',[
        'post'=>$post
    ]);
}
);

Route::get('/authors/{author:username}', function ( $author) {
    // dd(User::where('username',$author)->get());
    return view('posts',[
        'posts'=> $author->posts,

        'categories'=>Category::all()
    ]);
});


Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = YamlFrontMatter::parseFile(resource_path("posts/my-first-post.html"));
    $posts = $category->posts;
    return view('posts',[
        'posts'=>$posts,
        'currentCategory' => $category,
        'categories'=>Category::all()

    ]);
});
