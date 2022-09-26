<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class,'index']);

Route::get('posts/{post:slug}',[PostController::class,'show']);

Route::get('/authors/{author:username}', function ( User $author) {
    // dd(User::where('username',$author)->get());
    return view('posts.index',[
        'posts'=> $author->posts,

        'categories'=>Category::all()
    ]);
});


// Route::get('/categories/{category:slug}', function (Category $category) {
//     // $posts = YamlFrontMatter::parseFile(resource_path("posts/my-first-post.html"));
//     $posts = $category->posts;
//     return view('posts',[
//         'posts'=>$posts,



//     ]);
// });
