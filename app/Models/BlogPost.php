<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    protected $table = 'blog_posts'; // Specify the name of the database table

    protected $primaryKey = 'id'; // Specify the primary key field (usually 'id')

    public $timestamps = true; // Indicates whether the model should manage the 'created_at' and 'updated_at' columns

    // Define the model attributes (fields)
    protected $fillable = [
        'title', 'description', 'read_time', 'published', 'content', // Add other fields as needed
    ];
}
