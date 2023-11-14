<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'blog_posts';

    protected $primaryKey = 'id';

    public $timestamps = true; //  Wordt inprincipe ingevuld bij de create pagina

    protected $fillable = [
        'title', 'description', 'read_time', 'published', 'content', 'slug', 
    ];
}
