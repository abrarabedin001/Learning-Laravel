<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post{
    public $title;

    public $excerpt;
    public $slug;

    public $date;

    public $body;

    public function __construct($title,$slug,  $date,$excerpt, $body)
   
    {
        $this->title = $title;
        $this->slug = $slug;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
 }

    

    

    

    public static function all()
    {   
        return cache()->remember('posts.all',10,function(){
            return collect(File::files(resource_path("posts")))->map(
                fn($file)=>YamlFrontMatter::parseFile($file)
            )->map(
                fn($file)=>new Post(
                    $file->title,
                    $file->slug,
                    $file->date,
                    $file->excerpt,
                    $file->body
                )
            )->sortByDesc('date');
        });
        
        

        
    }


    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");
        if (! file_exists($path)){
            throw new ModelNotFoundException();
        };

        $post = cache()->remember( "posts.($slug)",5,function () use ($path){
        return YamlFrontMatter::parseFile($path);
        });
    return $post;
    }
}